<?php
$putanja = "C:/xampp";

$dir = opendir($putanja);
if (!$dir) {
    exit("Ne mogu otvoriti direktorij.");
}

echo "<h3>Datoteke u direktoriju c:\\xampp</h3>";
echo "<ul>";

while (($dat = readdir($dir)) !== false) {
    if (is_file($putanja . "/" . $dat)) {
        echo "<li>$dat</li>";
    }
}

echo "</ul>";
closedir($dir);
