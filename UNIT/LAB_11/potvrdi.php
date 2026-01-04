<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Prodaja";

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $db->exec("DELETE FROM Proizvod WHERE proizvodID=$id");
    header("Location: admin.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naziv = $_POST['naziv'];
    $cijena = $_POST['cijena'];
    $kolicina = $_POST['kolicina'];

    $db->exec("
        INSERT INTO Proizvod (nazivPro, cijena, kolicina)
        VALUES ('$naziv', $cijena, $kolicina)
    ");

    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Novi proizvod</title>
</head>
<body>

<h3>Unos novog proizvoda</h3>

<form method="post">
    Naziv:<br>
    <input type="text" name="naziv"><br><br>

    Cijena:<br>
    <input type="number" step="0.01" name="cijena"><br><br>

    Količina:<br>
    <input type="number" name="kolicina"><br><br>

    <button type="submit">Spremi</button>
</form>

</body>
</html>
