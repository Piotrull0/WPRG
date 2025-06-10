<?php
$maxVisits = 5;

if (isset($_POST['reset'])) {
    setcookie("visit_count", "", time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_COOKIE['visit_count'])) {
    $visits = $_COOKIE['visit_count'] + 1;
} else {
    $visits = 1;
}

setcookie("visit_count", $visits, time() + 3600 * 24 * 30);
?>
<!doctype html>
<html>
<head>
<title>Zadanie 1</title>
</head>
<body>

<h2>Odwiedziłeś tę stronę <?php echo $visits; ?> raz(y).</h2>

<?php
if ($visits >= $maxVisits) {
    echo "<p>Osiągnąłeś limit $maxVisits odwiedzin!</p>";
}
?>

<form method="post">
    <button type="submit" name="reset">Zresetuj licznik</button>
</form>

</body>
</html>
