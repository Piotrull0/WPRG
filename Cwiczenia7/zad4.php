<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 4</title>
    <style>
        *{margin:0;padding:0; font-family: Calibri,Arial,sans-serif}
        .maintab{border:solid black 1px;margin-left:25%; width:50%; text-align:center;}
        th,td{border:solid black 1px; background-color:#cccccc;}
    </style>
</head>
<body>
    <form method="POST" action="zad4.php">
        IMIE:<input type="text" name="imi" id="inp" value=""><br>
        NAZWISKO:<input type="text" name="naz" id="inp" value=""><br>
        EMAIL:<input type="email" name="ema" id="inp" value=""><br>
        HASLO:<input type="password" name="has" id="inp" value=""><br>
        POW. HASLO:<input type="password" name="pow" id="inp" value=""><br>
        WIEK:<input type="number" name="wie" id="inp" value=""><br>
        <input type="submit" name="wys" id="sub" value="Zarejestruj się">
    </form>

    <?php
    if(!empty($_POST['imi']) && !empty($_POST['naz']) && !empty($_POST['ema']) && !empty($_POST['has']) && !empty($_POST['pow']) && !empty($_POST['wie'])) {
        $imi = $_POST['imi'];
        $naz = $_POST['naz'];
        $ema = $_POST['ema'];
        $has = $_POST['has'];
        $pow = $_POST['pow'];
        $wie = $_POST['wie'];


        echo "<table class='maintab'>
          <tr><th>IMIE</th><th>NAZWISKO</th><th>EMAIL</th><th>HASLO</th><th>POWTORZ <br> HASLO</th><th>WIEK</th></tr>
          <tr><td>$imi</td><td>$naz</td><td>$ema</td><td>$has</td><td>$pow</td><td>$wie</td></tr>
          </table>";
    }
    ?>
</body>
</html>

