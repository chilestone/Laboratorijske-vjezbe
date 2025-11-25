<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Zadatak 4 - najveći zajednički djelitelj</title>
</head>
<body>
<h1>Zadatak 4 - NZD</h1>

<form method="post" action="">
    Prvi cijeli broj: <input type="number" name="a" required><br><br>
    Drugi cijeli broj: <input type="number" name="b" required><br><br>
    <input type="submit" value="Izračunaj NZD">
</form>

<?php
function nzd($a, $b) {
    $a = abs((int)$a);
    $b = abs((int)$b);

    $manji = ($a < $b) ? $a : $b;

    for ($i = $manji; $i >= 1; $i--) {
        if ($a % $i == 0 && $b % $i == 0) {
            return $i;
        }
    }
    return 1;
}

if (isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    $rez = nzd($a, $b);

    echo "<h3>Najveći zajednički djelitelj brojeva $a i $b je: $rez</h3>";
}
?>

</body>
</html>
