<?php
function isValidPassword($pass) {
    return preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).{6,}$/', $pass);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $file = "users.txt";
    $users = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];

    foreach ($users as $user) {
        list($e,,,) = explode(";", $user);
        if ($e === $email) {
            $error = "Email jest już zarejestrowany.";
        }
    }

    if (!isset($error) && isValidPassword($haslo)) {
        $entry = "$email;$haslo;$imie;$nazwisko\n";
        file_put_contents($file, $entry, FILE_APPEND);
        $success = "Rejestracja zakończona sukcesem.";
    } elseif (!isset($error)) {
        $error = "Hasło musi mieć min. 6 znaków, 1 wielką literę, 1 cyfrę i 1 znak specjalny.";
    }
}
?>

<h2>Rejestracja</h2>
<form method="POST">
    <input type="text" name="imie" placeholder="Imię" required><br>
    <input type="text" name="nazwisko" placeholder="Nazwisko" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="haslo" placeholder="Hasło" required><br>
    <button type="submit">Zarejestruj</button>
</form>

<?php
if (isset($success)) echo "<p>$success</p>";
if (isset($error)) echo "<p>$error</p>";
?>
