<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Zadatak 2 - podrazumijevana vrijednost parametra</title>
</head>
<body>
<h1>Zadatak 2 - put zvuka</h1>

<form method="post" action="">
    Brzina (m/s) - opcionalno: <input type="number" name="brzina" step="any"><br><br>
    Vrijeme (s): <input type="number" name="vrijeme" step="any" required><br><br>
    <input type="submit" value="Izračunaj">
</form>

<?php
function putZvuka($vrijeme, $brzina = 344) {
    return $brzina * $vrijeme;
}

if (isset($_POST['vrijeme'])) {
    $vrijeme = (float)$_POST['vrijeme'];
    $brzinaUnos = $_POST['brzina'];

    if ($brzinaUnos === "" || $brzinaUnos === null) {
        $put = putZvuka($vrijeme);
        echo "<p>Nije unesena brzina, koristim podrazumijevanu vrijednost 344 m/s.</p>";
    } else {
        $brzina = (float)$brzinaUnos;
        $put = putZvuka($vrijeme, $brzina);
        echo "<p>Korisnik je unio brzinu: {$brzina} m/s.</p>";
    }

    echo "<h3>Prijeđeni put zvuka: $put metara</h3>";
}
?>

</body>
</html>
