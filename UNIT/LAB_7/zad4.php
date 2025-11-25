<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB7 - Zadatak 4</title>
</head>
<body>
<h1>Zadatak 4 </h1>

<form method="post">
    <label>Originalni niz znakova:</label><br>
    <input type="text" name="original" size="60"
           placeholder="npr. Ovo je neki tekst"><br><br>

    <label>Novi niz (s kojim mijenjamo):</label><br>
    <input type="text" name="novi" size="60"
           placeholder="npr. super"><br><br>

    <label>Pozicija početka zamjene (0 = prvi znak):</label><br>
    <input type="number" name="pozicija" value="0"><br><br>

    <label>Koliko znakova zamijeniti:</label><br>
    <input type="number" name="duljina" value="0"><br><br>

    <button type="submit">Zamijeni</button>
</form>

<?php
if (isset($_POST['original'], $_POST['novi'], $_POST['pozicija'], $_POST['duljina'])) {
    $original = $_POST['original'];
    $novi = $_POST['novi'];
    $pozicija = (int)$_POST['pozicija'];
    $duljina = (int)$_POST['duljina'];
    if ($pozicija < 0) $pozicija = 0;
    if ($duljina < 0) $duljina = 0;

    $rezultat = substr_replace($original, $novi, $pozicija, $duljina);

    echo "<h3>Originalni niz:</h3>";
    echo "<p>" . htmlspecialchars($original) . "</p>";

    echo "<h3>Novi niz:</h3>";
    echo "<p>" . htmlspecialchars($rezultat) . "</p>";
}
?>

</body>
</html>
