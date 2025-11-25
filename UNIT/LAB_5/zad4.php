<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB5 - Zadatak 4</title>
</head>
<body>
<h1>Zadatak 4 - array_keys i array_values</h1>

<?php
$drzave = [
    "Hrvatska"   => "Zagreb",
    "Slovenija"  => "Ljubljana",
    "Srbija"     => "Beograd",
    "Italija"    => "Rim",
    "Njemačka"   => "Berlin"
];

$drzave["Francuska"] = "Pariz";
$kljucevi = array_keys($drzave);
$vrijednosti = array_values($drzave);

echo "<h3>Niz ključeva (države):</h3>";
echo "<pre>";
print_r($kljucevi);
echo "</pre>";

echo "<h3>Niz vrijednosti (glavni gradovi):</h3>";
echo "<pre>";
print_r($vrijednosti);
echo "</pre>";
?>

</body>
</html>
