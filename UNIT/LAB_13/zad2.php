<?php
if (isset($_POST['dan'])) {
    $rodjenje = strtotime($_POST['godina']."-".$_POST['mjesec']."-".$_POST['dan']);
    $danas = time();
    $razlika = floor(($danas - $rodjenje) / (60*60*24));

    echo "Starost u danima: $razlika";
}
?>

<form method="post">
    Dan: <input type="number" name="dan"><br>
    Mjesec: <input type="number" name="mjesec"><br>
    Godina: <input type="number" name="godina"><br>
    <button type="submit">Izračunaj</button>
</form>
