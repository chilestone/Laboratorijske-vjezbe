<?php
$datoteka = "brojac.dat";
if (isset($_POST['obrisi'])) {
    if (file_exists($datoteka)) {
        unlink($datoteka);
    }
    header("Location: brojac.php");
    exit;
}

if (!file_exists($datoteka)) {
    $fh = fopen($datoteka, "w");
    if (!$fh) {
        exit("Ne mogu stvoriti datoteku brojača.");
    }
    fwrite($fh, "0");
    fclose($fh);
}

$fh = fopen($datoteka, "r");
if (!$fh) {
    exit("Ne mogu otvoriti datoteku brojača.");
}
$broj = (int)fread($fh, filesize($datoteka));
fclose($fh);

$broj++;

$fh = fopen($datoteka, "w");
if (!$fh) {
    exit("Ne mogu zapisati u datoteku.");
}
fwrite($fh, $broj);
fclose($fh);
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Brojač posjeta</title>
</head>
<body>

<h3>Vi ste <?php echo $broj; ?>. posjetitelj ove stranice</h3>

<form method="post">
    <button type="submit" name="obrisi">Obriši brojač</button>
</form>

</body>
</html>
