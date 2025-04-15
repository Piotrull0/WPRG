<?php
function numbers($input) {
    if (!is_numeric($input)) {
        echo "$input: Parameter must be numeric!\n";
        return;
    }
    $input = abs($input);
    $digits = str_replace('.', '', (string)$input);
    do {
        $sum = 0;
        for ($i = 0; $i < strlen($digits); $i++) {
            $sum += (int)$digits[$i];
        }
        $digits = (string)$sum;
    } while ($sum >= 10);

    echo "$input: $sum\n";
}
numbers(5210);
numbers(-5210);
numbers(5210.5);
numbers("numbers");
?>
