<?php
$file = "licznik.txt";
if (!file_exists($file)) {
    file_put_contents($file, "1");
    $count = 1;
} else {
    $count = (int)file_get_contents($file);
    $count++;
    file_put_contents($file, $count);
}
echo "Liczba odwiedzin: $count";
?>
<?php
