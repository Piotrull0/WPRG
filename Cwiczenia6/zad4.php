<?php
function multiply($a, $b) {
    $rowA = count($a);
    $colA = count($a[0]);
    $rowB = count($b);
    $colB = count($b[0]);

    if ($colA !== $rowB) {
        echo ("Błąd, niepoprawny rozmiar macierzy.");
    }
    $res = array_fill(0, $rowA, array_fill(0, $colB, 0));
    for ($i = 0; $i < $rowA; $i++) {
        for ($j = 0; $j < $colB; $j++) {
            for ($k = 0; $k < $colA; $k++) {
                $res[$i][$j] += $a[$i][$k] * $b[$k][$j];
            }
        }
    }

    return $res;
}
$A = [
    [6, 3, 0],
    [9, 7, 3],
    [1, 3, 2]
];
$B = [
    [9, 5, 4],
    [5, 8, 3],
    [7, 2, 2]
];
$C = multiply($A, $B);
print_r($C);
?>
