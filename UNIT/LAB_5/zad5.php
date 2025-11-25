<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>LAB5 - Zadatak 5</title>
</head>
<body>
<h1>Zadatak 5 - unija, razlika i presjek nizova</h1>

<?php
$prvi  = ["jabuka", "kruška", "ananas", "kivi", "jagoda"];
$drugi = ["jagoda", "šljiva", "malina"];
$treci = ["jagoda", "jabuka", "kupina", "mango"];

echo "<h3>Početni nizovi:</h3>";
echo "<p><strong>\$prvi:</strong></p><pre>";  print_r($prvi);  echo "</pre>";
echo "<p><strong>\$drugi:</strong></p><pre>"; print_r($drugi); echo "</pre>";
echo "<p><strong>\$treci:</strong></p><pre>"; print_r($treci); echo "</pre>";

$unija = array_unique(array_merge($prvi, $drugi));
$razl = array_diff($prvi, $drugi, $treci);
$pres = array_intersect($prvi, $drugi);

echo "<h3>Unija \$prvi i \$drugi:</h3>";
echo "<pre>";
print_r($unija);
echo "</pre>";

echo "<h3>Razlika \$prvi u odnosu na \$drugi i \$treci:</h3>";
echo "<pre>";
print_r($razl);
echo "</pre>";

echo "<h3>Presjek \$prvi i \$drugi:</h3>";
echo "<pre>";
print_r($pres);
echo "</pre>";
?>

</body>
</html>
