<!DOCTYPE html>
<html lang="hr">
<head><meta charset="utf-8"><title>LAB8 - Zadatak 2</title></head>
<body>
<h1>Zadatak 2 </h1>

<form method="post">
    URL / domena: <input type="text" name="url" size="60" placeholder="npr. vsite.hr ili https://www.example.com" required>
    <button type="submit">Dohvati linkove</button>
</form>

<?php
if (!empty($_POST['url'])) {
    $input = trim($_POST['url']);

    if (!preg_match('#^https?://#i', $input)) {
        $input = 'http://' . $input;
    }

    echo "<p>Korišteni URL: " . htmlspecialchars($input) . "</p>";

    $html = @file_get_contents($input);

    if ($html === false) {
        echo "<p style='color:red;'>Ne mogu dohvatiti sadržaj s te adrese. Provjeri internet ili http/https.</p>";
    } else {
        // regex za <a ... href="..." ...> i <A HREF='...'> (case-insensitive)
        // tražimo href u anchorima; koristimo nepohlepni kvantifikator ?
        $pattern = '/<\s*a\s+[^>]*href\s*=\s*(["\'])(.*?)\1/si';

        preg_match_all($pattern, $html, $matches);

        $links = $matches[2] ?? [];

        if (count($links) === 0) {
            echo "<p>Nema pronadjenih linkova.</p>";
        } else {
            echo "<h3>Pronađeni linkovi:</h3><ul>";
            $links = array_unique($links);
            foreach ($links as $lnk) {
                echo "<li>" . htmlspecialchars($lnk) . "</li>";
            }
            echo "</ul>";
        }
    }
}
?>
</body>
</html>
