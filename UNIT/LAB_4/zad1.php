<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Zadatak 1 - zamjena vrijednosti</title>
</head>
<body>
<h1>Zadatak 1 - zamjena vrijednosti</h1>

<form method="post" action="">
    Prvi broj: <input type="number" name="a" step="any" required><br><br>
    Drugi broj: <input type="number" name="b" step="any" required><br><br>
    <input type="submit" name="submit_ref" value="Zamijeni (sa & - referenca)">
    <input type="submit" name="submit_val" value="Zamijeni (bez & - vrijednost)">
</form>

<?php

function zamijeni_ref(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function zamijeni_val($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "<p>Unutar funkcije zamijeni_val(): a = $a, b = $b</p>";
}

if (isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "<h3>Prije poziva funkcije: a = $a, b = $b</h3>";

    if (isset($_POST['submit_ref'])) {
        zamijeni_ref($a, $b);
        echo "<h3>Nakon poziva funkcije zamijeni_ref(&a, &b): a = $a, b = $b</h3>";
        echo "<p>Objašnjenje: koristimo & → mijenjamo originalne varijable.</p>";
    }

    if (isset($_POST['submit_val'])) {
        zamijeni_val($a, $b);
        echo "<h3>Nakon poziva funkcije zamijeni_val(a, b): a = $a, b = $b</h3>";
        echo "<p>Objašnjenje: bez & → mijenjaju se samo kopije u funkciji.</p>";
    }
}
?>

</body>
</html>
