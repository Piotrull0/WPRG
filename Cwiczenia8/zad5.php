<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5</title>
</head>
<body>
<form method="POST" action="zad5.php">
    <input type="text" name="val">
    <input type="submit" value="Wyślij">
</form>
<?php
if (isset($_POST['val'])) {
    $val = $_POST['val'];

    echo (strlen($val) - strpos($val, ',')) - 1;

}
?>
</body>
</html>