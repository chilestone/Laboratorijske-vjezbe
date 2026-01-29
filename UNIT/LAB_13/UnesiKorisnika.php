<?php
$greske = "";

if ($_POST['ime'] == "") $greske .= "Ime nije uneseno<br>";
if ($_POST['prezime'] == "") $greske .= "Prezime nije uneseno<br>";
if (strlen($_POST['username']) < 5) $greske .= "Username prekratak<br>";
if (strlen($_POST['password']) < 6) $greske .= "Lozinka prekratka<br>";
if ($_POST['dob'] < 18 || $_POST['dob'] > 110) $greske .= "Dob nije u dozvoljenom rasponu<br>";

if ($greske == "") {
    echo "<h3>Podaci su uspješno uneseni.</h3>";
    exit;
}

echo "<h3>Greške:</h3>$greske";
echo "<br><a href='FormaZaUnos.php'>Povratak</a>";
