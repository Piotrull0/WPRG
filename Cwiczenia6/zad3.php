<?php
function sequences($a, $b, $c) {
    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        echo "$a, $b, $c: Parameters must be numeric!\n\n";
        return;
    }
    $a = (float)$a;
    $b = (float)$b;
    $c = (int)$c;

    if ($c <= 0) {
        echo "$a, $b, $c: N must be positive number!\n\n";
        return;
    }

    $arithmetic = [];
    $geometric = [];
    for ($i = 0; $i < $c; $i++) {
        $arithmetic[] = $a + $i * $b;
    }
    for ($i = 0; $i < $c; $i++) {
        $geometric[] = $a * pow($b, $i);
    }
    echo "$a, $b, $c:\n";
    echo "Arithmetic: " . implode(", ", $arithmetic) . "\n";
    echo "Geometric: " . implode(", ", $geometric) . "\n\n";
}
sequences(5,2,10);
sequences(5,-2,10);
sequences(-5,2,10);
sequences(5,2.5,5);
sequences(5,2,-10);
sequences("start",2,10);
?>
