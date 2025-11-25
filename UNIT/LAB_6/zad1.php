<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB6 - Zadatak 1</title>
</head>
<body>
<h1>Zadatak 1 - range(), array_splice()</h1>

<?php
$niz = range(200, 340, 10);

echo "<h3>Početni niz:</h3><pre>";
print_r($niz);
echo "</pre>";
$noviNiz = array_splice($niz, 5, 5);

echo "<h3>Niz nakon brisanja (indeksi pomaknuti):</h3><pre>";
print_r($niz);
echo "</pre>";

echo "<h3>Novi niz (izrezani elementi):</h3><pre>";
print_r($noviNiz);
echo "</pre>";
array_splice($noviNiz, 1, 1, [-5, -15, -25]);

echo "<h3>Novi niz nakon umetanja 3 elementa umjesto drugog:</h3><pre>";
print_r($noviNiz);
echo "</pre>";
?>

</body>
</html>
