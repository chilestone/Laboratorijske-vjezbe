<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB7 - Zadatak 1</title>
</head>
<body>
<h1>Zadatak 1 - parni i neparnji brojevi</h1>

<form method="post">
    <label>Unesite cijele brojeve odvojene zarezom:</label><br><br>
    <input type="text" name="brojevi" size="60"
           placeholder="npr. 2,5,6,13,20">
    <br><br>
    <button type="submit">Pošalji</button>
</form>

<?php
if (!empty($_POST['brojevi'])) {
    $input = $_POST['brojevi'];

    $dijelovi = explode(',', $input);

    $parni = [];
    $neparni = [];

    foreach ($dijelovi as $d) {
        $d = trim($d);
        if ($d === '') continue;

        if (!is_numeric($d)) continue;

        $broj = (int)$d;

        if ($broj % 2 === 0) {
            $parni[] = $broj;
        } else {
            $neparni[] = $broj;
        }
    }

    echo "<h3>Parni brojevi:</h3>";
    if (count($parni) > 0) {
        echo implode(', ', $parni);
    } else {
        echo "Nema parnih brojeva.";
    }

    echo "<h3>Neparni brojevi:</h3>";
    if (count($neparni) > 0) {
        echo implode(', ', $neparni);
    } else {
        echo "Nema neparnih brojeva.";
    }
}
?>

</body>
</html>
