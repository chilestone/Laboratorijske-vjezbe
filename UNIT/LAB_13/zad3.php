<?php
echo "<h3>Prijestupne godine (1979 – 2037)</h3>";

for ($g = 1979; $g <= 2037; $g++) {
    if (($g % 4 == 0 && $g % 100 != 0) || ($g % 400 == 0)) {
        echo $g . "<br>";
    }
}
