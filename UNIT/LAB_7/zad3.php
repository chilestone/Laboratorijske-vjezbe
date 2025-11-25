<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB7 - Zadatak 3</title>
</head>
<body>
<h1>Zadatak 3 - palindrom i ponavljanje stringa</h1>

<form method="post">
    <label>Unesite niz znakova:</label><br>
    <input type="text" name="tekst" size="40"><br><br>

    <label>Koliko puta ispisati string:</label><br>
    <input type="number" name="broj" min="1" value="1"><br><br>

    <button type="submit">Pošalji</button>
</form>

<?php
if (isset($_POST['tekst']) && isset($_POST['broj'])) {
    $tekst = $_POST['tekst'];
    $broj = (int)$_POST['broj'];
    $cist = mb_strtolower(preg_replace('/\s+/', '', $tekst), 'UTF-8');
    $okrenut = implode('', array_reverse(preg_split('//u', $cist, -1, PREG_SPLIT_NO_EMPTY)));

    if ($cist === $okrenut && $cist !== '') {
        echo "<p><strong>Uneseni niz JE palindrom.</strong></p>";
    } else {
        echo "<p><strong>Uneseni niz NIJE palindrom.</strong></p>";
    }

    echo "<h3>Ponavljanje stringa:</h3>";
    if ($broj > 0) {
        for ($i = 0; $i < $broj; $i++) {
            echo htmlspecialchars($tekst) . "<br>";
        }
    } else {
        echo "Broj ponavljanja mora biti veći od 0.";
    }
}
?>

</body>
</html>
