
<?php
session_start();
$login = "admin";
$password = "1234";

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['login'];
    $pass = $_POST['password'];
    if ($user == $login && $pass == $password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Nieprawidłowy login lub hasło.";
    }
}
?>
<?php if (!empty($_SESSION['logged_in'])): ?>
    <p>Zalogowano jako <strong><?php echo $login; ?></strong></p>
    <a href="?logout=1">Wyloguj</a>
<?php else: ?>
    <form method="POST">
        <label>Login: <input type="text" name="login" required></label><br>
        <label>Hasło: <input type="password" name="password" required></label><br>
        <button type="submit">Zaloguj</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
<?php endif; ?>

