<?php

function wstawDolar(array $tablica, $n) {

    if ($n < 0 || $n > count($tablica)) {
        echo "BŁĄD\n";
        return $tablica;
    }

    array_splice($tablica, $n, 0, '$');

    return $tablica;
}

$arr = [1,2,3,4,5,6,7,8,9];
$nowa = wstawDolar($arr, 3);
print_r($nowa);