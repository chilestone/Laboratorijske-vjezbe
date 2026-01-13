<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
</head>
<body>
<h3>Admin</h3>
Ovo je admin stranica – dostupna samo prijavljenim korisnicima.<br><br>
<a href="logout.php">Logout</a>
</body>
</html>
