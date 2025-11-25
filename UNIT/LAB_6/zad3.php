<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB6 - Zadatak 3</title>
</head>
<body>
<h1>Zadatak 3 - sortiranje asocijativnog niza</h1>

<form method="post">
    <label>Odaberite način sortiranja:</label><br><br>
    <select name="sort">
        <option value="key_asc">Ključ A–Ž</option>
        <option value="key_desc">Ključ Ž–A</option>
        <option value="value_asc">Vrijednost A–Ž</option>
        <option value="value_desc">Vrijednost Ž–A</option>
    </select>
    <br><br>
    <button type="submit">Sortiraj</button>
</form>

<?php
$auta = [
    "BMW" => "Limuzina",
    "Audi" => "Karavan",
    "Mercedes" => "SUV",
    "Volkswagen" => "Hatchback",
    "Škoda" => "Kombi",
    "Toyota" => "Hybrid"
];

if (!empty($_POST['sort'])) {
    $s = $_POST['sort'];

    switch ($s) {
        case "key_asc": ksort($auta); break;
        case "key_desc": krsort($auta); break;
        case "value_asc": asort($auta); break;
        case "value_desc": arsort($auta); break;
    }

    echo "<h3>Sortirani niz:</h3><pre>";
    print_r($auta);
    echo "</pre>";
}
?>

</body>
</html>
