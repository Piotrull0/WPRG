<?php
$hasVoted = isset($_COOKIE['voted']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$hasVoted) {
    $vote = $_POST['option'] ?? '';
    setcookie("voted", "1", time() + 3600 * 24 * 30);
    $hasVoted = true;
    $message = "Dziękuje za oddanie głosu!";
}
?>

<?php if ($hasVoted): ?>
    <p>Już oddałeś głos</p>
<?php else: ?>
    <form method="POST">
        <p>Jaka jest Twoja ulubiona pora roku?</p>
        <label><input type="radio" name="option" value="wiosna" required> Wiosna</label><br>
        <label><input type="radio" name="option" value="lato"> Lato</label><br>
        <label><input type="radio" name="option" value="jesień"> Jesień</label><br>
        <label><input type="radio" name="option" value="zima"> Zima</label><br>
        <button type="submit">Głosuj</button>
    </form>
<?php endif; ?>
<?php if (isset($message)) echo "<p>$message</p>"; ?>
