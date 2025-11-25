<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Zadatak 3 - varijabilan broj parametara</title>
</head>
<body>
<h1>Zadatak 3 - aritmetička sredina</h1>

<form method="post" action="">
    Unesite jedan broj: <input type="number" name="broj" step="any" required><br><br>
    <input type="submit" value="Izračunaj">
</form>

<?php
function aritmetickaSredina() {
    $n = func_num_args();

    if ($n == 0) {
        return null;
    }

    $zbroj = 0;
    for ($i = 0; $i < $n; $i++) {
        $zbroj += func_get_arg($i);
    }
    return $zbroj / $n;
}

if (isset($_POST['broj'])) {
    $unos = (float)$_POST['broj'];

    $sredina1 = aritmetickaSredina(5, 14, 25, 67, 10, $unos);

    $sredina2 = aritmetickaSredina(50, 70, 90, $unos);

    echo "<h3>Prvi poziv: 5, 14, 25, 67, 10, $unos</h3>";
    echo "<p>Aritmetička sredina = $sredina1</p>";

    echo "<h3>Drugi poziv: 50, 70, 90, $unos</h3>";
    echo "<p>Aritmetička sredina = $sredina2</p>";
}
?>

</body>
</html>
