<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
</head>
<body>
<form method="POST" action="zad1.php">
    <input type="text" name="val">
    <input type="submit" value="Wyślij">
</form>
    <?php
    if (isset($_POST['val'])) {
        $val = $_POST['val'];

        echo strtoupper($val) . "<br/>" . strtolower($val) . "<br/>" . ucfirst($val) . "<br/>" . ucwords($val);
    }
    ?>
</body>
</html>


