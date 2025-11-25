<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB5 - Zadatak 3</title>
</head>
<body>
<h1>Zadatak 3 - asocijativni niz </h1>

<?php
$drzave = [
    "Hrvatska"   => "Zagreb",
    "Slovenija"  => "Ljubljana",
    "Srbija"     => "Beograd",
    "Italija"    => "Rim",
    "Njemačka"   => "Berlin"
];

$drzave["Francuska"] = "Pariz";

echo "<h3>Države i njihovi glavni gradovi:</h3>";
echo "<ul>";
foreach ($drzave as $drzava => $grad) {
    echo "<li>$drzava - $grad</li>";
}
echo "</ul>";
?>

</body>
</html>
