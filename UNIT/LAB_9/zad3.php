<?php
// LAB9/zad3
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>LAB9 - Zadatak 3</title>
</head>
<body>
<h1>Zadatak 3 </h1>

<?php
class Artikl {
    public $naziv;
    public $kolicina;
    public $cijena;

    public function RacunajVrijednost() {
        return $this->kolicina * $this->cijena;
    }

    public function AzurirajKolicinu($kol) {
        $this->kolicina += (int)$kol;
        return $this->kolicina;
    }
}

$art = new Artikl();
$art->naziv = "Čokolada";
$art->kolicina = 10;
$art->cijena = 2.5;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kol'])) {
    $kol = (int)$_POST['kol'];
    $art->AzurirajKolicinu($kol);
    echo '<p>Unijeli ste: ' . $kol . ' (pozitivno = dodano, negativno = oduzeto)</p>';
}

echo '<p>Artikl: ' . $art->naziv . '</p>';
echo '<p>Trenutna količina: ' . $art->kolicina . '</p>';
echo '<p>Cijena po komadu: ' . $art->cijena . ' €</p>';
echo '<p>Ukupna vrijednost: ' . $art->RacunajVrijednost() . ' €</p>';
?>

<hr>
<form method="post">
    Unesite količinu za dodati/uzeti :<br>
    <input type="number" name="kol" value="0"><br><br>
    <button type="submit">Ažuriraj kolicinu</button>
</form>

</body>
</html>
