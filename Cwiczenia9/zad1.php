<?php
if (isset($_GET['dob'])) {
    $dob = $_GET['dob'];
    $timestamp = strtotime($dob);

    function getWeekday($timestamp) {
        return date('l', $timestamp);
    }

    function getAge($timestamp) {
        $birthDate = new DateTime(date('Y-m-d', $timestamp));
        $today = new DateTime();
        return $today->diff($birthDate)->y;
    }

    function daysToNextBirthday($timestamp) {
        $today = new DateTime();
        $birthDate = new DateTime(date('Y-m-d', $timestamp));
        $birthDate->setDate((int)$today->format("Y"), (int)$birthDate->format("m"), (int)$birthDate->format("d"));
        if ($birthDate < $today) {
            $birthDate->modify('+1 year');
        }
        return $today->diff($birthDate)->days;
    }

    echo "<p>Dzień tygodnia: " . getWeekday($timestamp) . "</p>";
    echo "<p>Ukończone lata: " . getAge($timestamp) . "</p>";
    echo "<p>Dni do najbliższych urodzin: " . daysToNextBirthday($timestamp) . "</p>";
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
</head>
<body>
<form method="GET">
    <label for="dob">Data urodzenia:</label>
    <input type="date" name="dob" required>
    <input type="submit" value="Sprawdź">
</form>
</body>
</html>

