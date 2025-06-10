<?php
$file = "linki.txt";
if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    echo "<ul>";
    foreach ($lines as $line) {
        [$url, $desc] = explode(';', $line);
        $finUrl = 'http://' .$url.'/';
        echo "<li><a href='$finUrl' target='_blank'>$desc</a></li>";
    }
    echo "</ul>";
} else {
    echo "Plik z linkami nie istnieje.";
}
?>
