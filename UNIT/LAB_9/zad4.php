<?php
// LAB9/zad4
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>LAB9 - Zadatak 4</title>
</head>
<body>
<h1>Zadatak 4</h1>

<?php
class ArtiklPopust {
    public $naziv;
    public $kolicina;
    public $cijena;
    private $popust = 0; // postotak

    public function RacunajVrijednost() {
        return $this->kolicina * $this->cijena;
    }

    public function __set($name, $value) {
        if ($name === 'popust') {
            $v = (int)$value;
            if ($v > 50) {
                echo '<p style="color:red;">Popust je prevelik! Postavljam na 0.</p>';
                $this->popust = 0;
            } else {
                $this->popust = $v;
            }
        } else {
            $this->$name = $value;
        }
    }

    public function __get($name) {
        if ($name === 'popust') {
            return $this->popust;
        } elseif (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function VrijednostSNaplacenomPopustom() {
        $ukupno = $this->RacunajVrijednost();
        $diskont = ($this->popust / 100) * $ukupno;
        return $ukupno - $diskont;
    }
}
$ap = new ArtiklPopust();
$ap->naziv = "Sok";
$ap->kolicina = 20;
$ap->cijena = 1.5;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['popust'])) {
    $p = (int)$_POST['popust'];
    $ap->popust = $p; // okida __set
}
?>

<p>Artikl: <?php echo $ap->naziv; ?></p>
<p>Količina: <?php echo $ap->kolicina; ?></p>
<p>Cijena po komadu: <?php echo $ap->cijena; ?> €</p>
<p>Vrijednost bez popusta: <?php echo $ap->RacunajVrijednost(); ?> €</p>

<hr>
<form method="post">
    Unesite popust :<br>
    <input type="number" name="popust" min="0" max="100" value="<?php echo $ap->popust; ?>"><br><br>
    <button type="submit">Postavi popust</button>
</form>

<?php
echo '<p>Popust (trenutno): ' . $ap->popust . ' %</p>';
echo '<p>Vrijednost s popustom: ' . $ap->VrijednostSNaplacenomPopustom() . ' €</p>';
?>

</body>
</html>
