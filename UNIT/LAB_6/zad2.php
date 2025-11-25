<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB6 - Zadatak 2</title>
</head>
<body>
<h1>Zadatak 2 - sortiranje povezanih nizova</h1>

<?php
$artikli = ["Majica", "Slusalice", "Kava", "Kruh", "Magicna šalica"];
$proizvodaci = ["Nike", "Sony", "Franck", "Mlinar", "HP"];
$cijene = [25, 120, 4, 1, 15];

array_multisort($cijene, SORT_DESC, $artikli, $proizvodaci);

echo "<table border='1' cellpadding='5'>
<tr><th>Artikl</th><th>Proizvođač</th><th>Cijena</th></tr>";

for ($i = 0; $i < count($artikli); $i++) {
    echo "<tr>
            <td>{$artikli[$i]}</td>
            <td>{$proizvodaci[$i]}</td>
            <td>{$cijene[$i]} €</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>
