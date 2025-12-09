<?php
// LAB9 zad1
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>LAB9 - Zadatak 1</title>
</head>
<body>
<h1>Zadatak 1 – klasa Artikl (konstruktor i destruktor)</h1>

<?php
class Artikl {
    public $naziv;
    public $proizvodac;

    public function __construct($proizvodac) {
        $this->proizvodac = $proizvodac;
        echo '<p>Kreiram artikl proizvođača: ' . $this->proizvodac . '</p>';
    }

    public function __destruct() {
        echo "Uništavam objekt <br>";
    }
}

$a1 = new Artikl("Proizvođač A");
$a1->naziv = "Kruh";

$a2 = new Artikl("Proizvođač B");
$a2->naziv = "Mlijeko";

echo '<p>A1: naziv = ' . $a1->naziv . ', proizvodac = ' . $a1->proizvodac . '</p>';
echo '<p>A2: naziv = ' . $a2->naziv . ', proizvodac = ' . $a2->proizvodac . '</p>';
?>

</body>
</html>
