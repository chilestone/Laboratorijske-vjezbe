<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Prodaja";

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$upit = $db->query("
    SELECT proizvodID, nazivPro, kolicina, cijena,
           (kolicina * cijena) AS vrijednost
    FROM Proizvod
");
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>

<div style="text-align: center;">
    <h3>Baza proizvoda</h3>

    <table border="1" cellpadding="2" cellspacing="2"
           style="width:60%; margin-left:auto; margin-right:auto;">
        <tr>
            <th>Naziv proizvoda</th>
            <th>Količina</th>
            <th>Cijena</th>
            <th>Vrijednost robe</th>
            <th>Obriši</th>
        </tr>

        <?php
        $brojpro = 0;
        foreach ($upit as $red) {
            echo "<tr>";
            echo "<td>{$red['nazivPro']}</td>";
            echo "<td>{$red['kolicina']}</td>";
            echo "<td>{$red['cijena']}</td>";
            echo "<td>{$red['vrijednost']}</td>";
            echo "<td><a href='potvrdi.php?id={$red['proizvodID']}'>[OBRIŠI]</a></td>";
            echo "</tr>";
            $brojpro++;
        }
        ?>

    </table>
</div>

</body>
</html>
