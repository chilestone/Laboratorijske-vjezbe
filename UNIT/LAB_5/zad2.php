<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB5 - Zadatak 2</title>
</head>
<body>
<h1>Zadatak 2 - prosjek, min i max</h1>

<?php
$brojevi = [12, 5, 33, 7, 18, 42, 3, 27];

echo "<h3>Niz brojeva:</h3>";
echo "<pre>";
print_r($brojevi);
echo "</pre>";

$n = count($brojevi);
$suma = array_sum($brojevi);
$prosjek = $suma / $n;
$min = min($brojevi);
$max = max($brojevi);

echo "<p>Broj elemenata: <strong>$n</strong></p>";
echo "<p>Suma elemenata: <strong>$suma</strong></p>";
echo "<p>Prosječna vrijednost: <strong>$prosjek</strong></p>";
echo "<p>Minimalna vrijednost: <strong>$min</strong></p>";
echo "<p>Maksimalna vrijednost: <strong>$max</strong></p>";
?>

</body>
</html>
