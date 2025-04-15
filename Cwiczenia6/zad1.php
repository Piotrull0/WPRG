<?php
function print_primes($first, $second) {
    echo $first . ", " . $second . ": ";

    if (!is_numeric($first) || !is_numeric($second)) {
        echo "Start and stop must be numeric";
    }
    else {
        if ($first < 0 || $second < 0) {
            echo "Start and stop must be positive numbers";
        }
        else {
            $first = ceil($first);
            $second = ceil($second);

            if ($first > $second) {
                $x = $first;
                $first = $second;
                $second = $x;
            }

            for ($i = $first; $i <= $second; $i++) {
                if (isPrime($i)) {
                    echo $i . " ";
                }
            }
        }
    }
    echo "<br>";
}
function isPrime($num) {
    if($num == 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
print_primes(5, 10);
print_primes(10, 5);
print_primes(5.5, 10);
print_primes(-5, 10);
print_primes("prime", 10);

?>