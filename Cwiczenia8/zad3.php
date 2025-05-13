<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
    <style>
        .main {
            margin: auto;
            width: 35%;
            background-color: black;
            border: 5px solid darkblue;
            color: gray;
            font-family: Arial, serif;
            text-align: center;
            padding: 1%;
        }
        .inp {
            margin-top: 5%;
            width: 35%;
        }
        .sel {
            margin-top: 2%;
            width: 35%;
        }
        .sub {
            margin-top: 5%;
            width: 30%;
            padding: 2%;
        }
        .resp {
            margin: auto;
            width: 35%;
            height: 70px;
            background-color: black;
            border: 5px solid darkblue;
            color: gray;
            font-family: Arial, serif;
            text-align: center;
            padding: 1%;
        }
    </style>
</head>
<body>
<div class="main">
<h1>Formularz</h1><hr>
<form method="POST" action="zad3.php">
    <input type="text" name="inp" class="inp"><br/>
    <select name="akcj" class="sel">
        <option value="odw">Odwrócenie ciągu znaków</option>
        <option value="wlk">Zamiana liter na wielkie</option>
        <option value="mal">Zamania liter na małe</option>
        <option value="licz">Liczenie liczby znaków</option>
        <option value="usun">Usuwanie białych znaków</option>
    </select><br/>
    <input type="submit" value="Potwierdź" class="sub">
</form>
</div>
<div class="resp">
    <?php
        if (empty($_POST['inp'])) {
            echo "Błąd: Pole jest puste";
        }
        else {
            $inp = $_POST['inp'];
            $akcj = $_POST['akcj'];

            if ($akcj == "odw") {
                echo "Wynik: " . strrev($inp);
            } else if ($akcj == "wlk") {
                echo "Wynik: " . strtoupper($inp);
            } else if ($akcj == "mal") {
                echo "Wynik: " . strtolower($inp);
            } else if ($akcj == "licz") {
                echo "Wynik: " . strlen($inp);
            } else if ($akcj == "usun") {
                echo "Wynik: " . trim($inp);
            }
        }
    ?>
</div>
</body>
</html>
