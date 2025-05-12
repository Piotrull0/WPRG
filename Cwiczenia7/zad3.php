<?php
function stworzTablice($a,$b,$c,$d) {

    $index = range($a, $b);
    $value = range($c, $d);

    if (count($index) != count($value)) {
        echo "BŁĄD\n";
        return;
    }

    $tablica = array_combine($index, $value);

    print_r($tablica);
}

stworzTablice(1, 4, 7, 10);
