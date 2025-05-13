<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>
</head>
<body>
<form method="POST" action="zad2.php">
    <input type="text" name="val">
    <input type="submit" value="Wyślij">
</form>
<?php
if (isset($_POST['val'])) {
    $val = $_POST['val'];

    $omit = str_replace(array('\\', '/', ':', '*', '?', '"', '<', '>', '|', '+', '-'), '', $val);
    echo $omit;
}
?>
</body>
</html>