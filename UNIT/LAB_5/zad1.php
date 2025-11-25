<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB5 - Zadatak 1</title>
</head>
<body>
<h1>Zadatak 1 - indeksirani niz</h1>

<?php
$niz = [];

for ($i = 0; $i < 20; $i++) {
    $niz[$i] = $i * 5;
}

echo "<h3>Početni niz:</h3>";
echo "<pre>";
print_r($niz);
echo "</pre>";
$suma = array_sum($niz);
$brojElemenata = count($niz);

echo "<p>Ukupna suma elemenata: <strong>$suma</strong></p>";
echo "<p>Broj elemenata niza: <strong>$brojElemenata</strong></p>";

unset($niz[9]);

$brojElemenataNakonBrisanja = count($niz);
echo "<p>Nakon unset(\$niz[9]) broj elemenata je: <strong>$brojElemenataNakonBrisanja</strong></p>";

$niz[] = 999;

echo "<h3>Niz nakon dodavanja novog elementa:</h3>";
echo "<pre>";
print_r($niz);
echo "</pre>";

echo "<h3>Foreach ispis (indeks => vrijednost):</h3>";
echo "<ul>";
foreach ($niz as $indeks => $vrijednost) {
    echo "<li>Indeks $indeks : $vrijednost</li>";
}
echo "</ul>";
?>

</body>
</html>
