<?php
function panagram($a){
    $alphabet = range('a', 'z');
    $a = str_replace(' ','', $a);
    $a = strtolower($a);
    foreach ($alphabet as $l) {
        if (strpos($a, $l) === false) {
            return false;
        }
    }
    return true;
}
if (panagram("The quick brown fox jumps over the lazy dog")) {
    echo "True";
}
else {
    echo "False";
}
?>
