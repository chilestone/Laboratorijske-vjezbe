<!DOCTYPE html>
<html lang="hr">
<head><meta charset="utf-8"><title>LAB8 - Zadatak 4</title></head>
<body>
<h1>Zadatak 4 </h1>

<form method="post">
    <label>Tekst (paste ili upiši):</label><br>
    <textarea name="tekst" rows="8" cols="80">Porast broja noćenja od 50% očekujemo u drugoj polovici 2017. godine. Iduća 2018. godina bit će povijesno najveća po porastu BDP-a. Od 2013. godine na drveću će rasti euri koje ćete samo trebati pobrati i odnijeti u banku. Kao Švicarska bit ćemo bogati u 2010. godini.</textarea>
    <br><br>
    <button type="submit">Zamijeni godine</button>
</form>

<?php
if (!empty($_POST['tekst'])) {
    $txt = $_POST['tekst'];
    $rez = preg_replace('/\b\d{4}\b/', '2020', $txt);

    echo "<h3>Original:</h3><pre>" . htmlspecialchars($txt) . "</pre>";

    echo "<h3>Nakon zamjene:</h3><pre>" . htmlspecialchars($rez) . "</pre>";
}
?>
</body>
</html>
