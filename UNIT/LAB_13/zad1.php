<?php
if (isset($_POST['godina'])) {
    $godina = $_POST['godina'];
    echo "<h3>Petak 13. u godini $godina:</h3>";

    for ($mjesec = 1; $mjesec <= 12; $mjesec++) {
        $datum = strtotime("13-$mjesec-$godina");
        if (date("N", $datum) == 5) {
            echo date("F", $datum) . "<br>";
        }
    }
}
?>

<form method="post">
    Unesi godinu:
    <input type="number" name="godina">
    <button type="submit">Provjeri</button>
</form>
