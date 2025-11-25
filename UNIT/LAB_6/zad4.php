<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB6 - Zadatak 4</title>
</head>
<body>
<h1>Zadatak 4 - shuffle + razna sortiranja</h1>

<form method="post">
    <label>Odaberite način sortiranja:</label><br><br>
    <select name="sort">
        <option value="sort_asc">Rastuće (sort - gubi ključeve)</option>
        <option value="sort_desc">Padajuće (rsort - gubi ključeve)</option>
        <option value="asort_asc">Rastuće (asort - čuva ključeve)</option>
        <option value="asort_desc">Padajuće (arsort - čuva ključeve)</option>
    </select>
    <br><br>
    <button type="submit">Sortiraj</button>
</form>

<?php
$niz = [5, 12, 3, 99, 44, 7, 18, 27, 54, 10];
shuffle($niz);

echo "<h3>Niz nakon shuffle():</h3><pre>";
print_r($niz);
echo "</pre>";

if (!empty($_POST['sort'])) {
    switch ($_POST['sort']) {
        case "sort_asc": sort($niz); break;
        case "sort_desc": rsort($niz); break;
        case "asort_asc": asort($niz); break;
        case "asort_desc": arsort($niz); break;
    }

    echo "<h3>Nakon sortiranja:</h3><pre>";
    print_r($niz);
    echo "</pre>";
}
?>

</body>
</html>
