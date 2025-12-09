<?php
// LAB9/zad2
?>
    <!DOCTYPE html>
    <html lang="hr">
    <head>
        <meta charset="utf-8">
        <title>LAB9 - Zadatak 2</title>
    </head>
    <body>
    <h1>Zadatak 2 </h1>

<?php
class Pijetao {
    public $ime;
    protected $boja = 'crveno-smeđa';
    private $glavni = 'ne';

    public function pjevaj() {
        echo "kukurikuuuu<br>";
    }

    public function getBoja() {
        return $this->boja;
    }

    public function isGlavni() {
        return $this->glavni;
    }
}

class Pilic extends Pijetao {
    public $ZnakHoroskopa = 'Bik';
    protected $boja = 'žuta';

    public function pjevaj() {
        echo "pijuuuuuu<br>";
    }
}

$p1 = new Pijetao();
$p1->ime = "Ivica";

$p2 = new Pilic();
$p2->ime = "Pero";

echo '<p>Pijetao ime: ' . $p1->ime . '</p>';
echo '<p>Pilić ime: ' . $p2->ime . '</p>';

echo '
