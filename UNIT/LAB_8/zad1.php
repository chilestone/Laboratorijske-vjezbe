<!DOCTYPE html>
<html lang="hr">
<head><meta charset="utf-8"><title>LAB8 - Zadatak 1</title></head>
<body>
<h1>Zadatak 1 </h1>

<form method="post">
    Ime: <input type="text" name="ime" required><br><br>
    Prezime: <input type="text" name="prezime" required><br><br>
    Godine: <input type="number" name="godine" min="0" required><br><br>
    <button type="submit">Posalji</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = trim($_POST['ime']);
    $prezime = trim($_POST['prezime']);
    $godine = trim($_POST['godine']);

    // array i CSV string
    $arr = [$ime, $prezime, $godine];
    $csv = implode(',', $arr);

    echo "<h3>Var dump niza:</h3><pre>";
    var_dump($arr);
    echo "</pre>";

    echo "<h3>CSV format (implode):</h3>";
    echo "<pre>" . htmlspecialchars($csv) . "</pre>";
}
?>
</body>
</html>
