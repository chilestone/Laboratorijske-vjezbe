<!DOCTYPE html>
<html lang="hr">
<head><meta charset="utf-8"><title>LAB8 - Zadatak 3</title></head>
<body>
<h1>Zadatak 3/h1>

<form method="post">
    Ime i prezime:<br>
    <input type="text" name="imeprezime" size="60" placeholder="npr. Ivan Horvat" required><br><br>

    Datum rođenja (d.m.yyyy ili dd.mm.yyyy):<br>
    <input type="text" name="datum" placeholder="npr. 1.1.1990 ili 01.01.1990" required><br><br>

    Broj telefona (format: 0X YYY ZZZ ili 0XX YYY ZZZZ):<br>
    <input type="text" name="telefon" placeholder="npr. 09 123 456 ili 012 123 4567" required><br><br>

    E-mail:<br>
    <input type="email" name="email" placeholder="npr. ime.prezime@example.com" required><br><br>

    <button type="submit">Provjeri</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imeprezime = trim($_POST['imeprezime']);
    $datum = trim($_POST['datum']);
    $telefon = trim($_POST['telefon']);
    $email = trim($_POST['email']);
    $reIme = '/^[A-Za-z]+(?:\s+[A-Za-z]+)+$/';

    $reDatum = '/^\d{1,2}\.\d{1,2}\.\d{4}$/';

    $reTelefon = '/^0\d{1,2}\s\d{3}\s\d{3,4}$/';

    $reEmail = '/^[\w\.-]+@[\w\.-]+\.[A-Za-z]{2,}$/';

    echo "<h3>Rezultati provjere:</h3><ul>";

    echo "<li>Ime i prezime ('$imeprezime'): " . (preg_match($reIme, $imeprezime) ? "<strong style='color:green'>OK</strong>" : "<strong style='color:red'>NE</strong>") . "</li>";

    echo "<li>Datum ('$datum'): " . (preg_match($reDatum, $datum) ? "<strong style='color:green'>OK</strong>" : "<strong style='color:red'>NE</strong>") . "</li>";

    echo "<li>Telefon ('$telefon'): " . (preg_match($reTelefon, $telefon) ? "<strong style='color:green'>OK</strong>" : "<strong style='color:red'>NE</strong>") . "</li>";

    echo "<li>Email ('$email'): " . (preg_match($reEmail, $email) ? "<strong style='color:green'>OK</strong>" : "<strong style='color:red'>NE</strong>") . "</li>";

    echo "</ul>";
}
?>
</body>
</html>
