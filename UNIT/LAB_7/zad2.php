<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB7 - Zadatak 2</title>
</head>
<body>
<h1>Zadatak 2:  obrada imena i prezimena</h1>

<form method="post">
    Ime: <input type="text" name="ime"><br><br>
    Prezime: <input type="text" name="prezime"><br><br>
    <button type="submit">Pošalji</button>
</form>

<?php
if (isset($_POST['ime']) && isset($_POST['prezime'])) {
    $ime = trim($_POST['ime']);
    $prezime = trim($_POST['prezime']);

    if ($ime === '' || $prezime === '') {
        echo "<p>Unesite i ime i prezime.</p>";
    } else {
        $punoIme = $ime . ' ' . $prezime;
        $mala = mb_strtolower($punoIme, 'UTF-8');
        $velika = mb_strtoupper($punoIme, 'UTF-8');
        $prvoVeliko = mb_convert_case($punoIme, MB_CASE_TITLE, 'UTF-8');
        $inicijali = '';
        $dijelovi = explode(' ', $punoIme);
        foreach ($dijelovi as $dio) {
            $dio = trim($dio);
            if ($dio === '') continue;
            $inicijali .= mb_strtoupper(mb_substr($dio, 0, 1, 'UTF-8'), 'UTF-8') . '.';
        }

        echo "<h3>Rezultati:</h3>";
        echo "<p>Malim slovima: $mala</p>";
        echo "<p>Velikim slovima: $velika</p>";
        echo "<p>Prva slova velika: $prvoVeliko</p>";
        echo "<p>Inicijali: $inicijali</p>";
    }
}
?>

</body>
</html>
