<?php
$host = "localhost";
$user = "root";
$pass = "";

try {
    $db = new PDO("mysql:host=$host", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("CREATE DATABASE IF NOT EXISTS Prodaja CHARACTER SET utf8 COLLATE utf8_general_ci");
    echo "Baza Prodaja kreirana.<br>";

    $db->exec("USE Prodaja");

    $db->exec("
        CREATE TABLE IF NOT EXISTS Dobavljac (
            dobavljacID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
            nazivDob VARCHAR(60) NOT NULL,
            adresa VARCHAR(70) NOT NULL,
            telefon VARCHAR(20) NOT NULL,
            PRIMARY KEY (dobavljacID)
        ) ENGINE=MyISAM
    ");

    $db->exec("
        CREATE TABLE IF NOT EXISTS Kategorija (
            kategorijaID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
            nazivKat VARCHAR(30) NOT NULL,
            PRIMARY KEY (kategorijaID)
        ) ENGINE=MyISAM
    ");

    $db->exec("
        CREATE TABLE IF NOT EXISTS Proizvod (
            proizvodID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
            nazivPro VARCHAR(40) NOT NULL,
            cijena DECIMAL(7,2) NOT NULL,
            kolicina SMALLINT NOT NULL DEFAULT 0,
            dobavljacID INTEGER UNSIGNED,
            kategorijaID INTEGER UNSIGNED,
            PRIMARY KEY (proizvodID)
        ) ENGINE=MyISAM
    ");

    echo "Sve tablice su uspješno kreirane.";

} catch (PDOException $e) {
    echo "Greška: " . $e->getMessage();
}
