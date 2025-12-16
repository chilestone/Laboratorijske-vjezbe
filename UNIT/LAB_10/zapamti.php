<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ime'])) {
    $_SESSION['ime'] = $_POST['ime'];
    header("Location: zapamti.php");
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'zaboravi') {
    session_unset();
    session_destroy();
    header("Location: zapamti.php");
    exit;
}

$ime = isset($_SESSION['ime']) ? $_SESSION['ime'] : "";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Pamćenje pomoću sesije</title>
</head>
<body>

<?php if ($ime) { ?>
    <p>Bok, <?php echo $ime; ?>!</p>
    <p><a href="zapamti.php?action=zaboravi">Zaboravi ime</a></p>
<?php } else { ?>
    <form method="post">
        Unesi ime:<br>
        <input type="text" name="ime"><br><br>
        <button type="submit">Pošalji</button>
    </form>
<?php } ?>

</body>
</html>
