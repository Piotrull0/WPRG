<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 4</title>
</head>
<body>
<form method="POST" action="zad4.php">
    <input type="text" name="val">
    <input type="submit" value="Wyślij">
</form>
<?php
if (isset($_POST['val'])) {
    $val = $_POST['val'];
    $count = 0;

    for ($i = 0; $i < strlen($val); $i++) {
        if ($val[$i] == 'a' || $val[$i] == 'e' || $val[$i] == 'i' || $val[$i] == 'o' || $val[$i] == 'u') {
            $count++;
        }
    }
    echo $count;
}
?>
</body>
</html>