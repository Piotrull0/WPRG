<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5</title>
    <style>
        .main {
            margin: auto;
            width: 25%;
            height: 50%;
            padding: 1%;
            border: 5px solid darkblue;
            background-color: #232222;
            font-family: Arial, serif;
            color: gray
        }
        .sub {
            width: 35%;
            padding: 1%;
            margin-top: 10%;
        }
        .drp1 {
            margin-top: 3%;
            width: 25%;
        }
        .drp2 {
            margin-top: 3%;
            width: 25%;
        }
        .anwser {
            margin: auto;
            width: 25%;
            font-family: Arial, serif;
            color: black;
            font-size: 20px;
            text-align: center;
            margin-top: 3%;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Kalkulator</h1><hr>
        <h3>Prosty</h3>
        <form method="POST" action="zad5.php">
            <input type="number" name="val1" value=""><br/>
            <input type="number" name="val2" value=""><br/>
            <select name="oper" id="oper" class="drp1">
                <option value="dod">Dodawanie</option>
                <option value="odej">Odejmowanie</option>
                <option value="mnoz">Mnożenie</option>
                <option value="dziel">Dzielenie</option>
            </select><br/>
            <input type="submit" value="Oblicz" class="sub">
        </form>
        <hr>
        <h3>Zaawansowany</h3>
        <form method="POST" action="zad5.php">
            <input type="text" name="val3" value=""><br/>
            <select name="akcj" id="akcj" class="drp2">
                <option value="cos">cos</option>
                <option value="sin">sin</option>
                <option value="tg">tan</option>
                <option value="bn-dz">Binarne na dziesiętne</option>
                <option value="dz-bn">Dziesiętne na binarne</option>
                <option value="dz-sz">Dziesiętne na szesnastkowe</option>
                <option value="sz-dz">Szesnastkowe na dziesiętne</option>
            </select><br/>
            <input type="submit" value="Oblicz" class="sub">
        </form>
    </div>
    <div class="anwser">
    <?php
    if (isset($_POST['val1']) && isset($_POST['val2']) && is_numeric($_POST['val1']) && is_numeric($_POST['val2']) && isset($_POST['oper'])) {
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $oper = $_POST['oper'];


        if ($oper == 'dod') {
            echo "Wynik: " . ($val1 + $val2);
        }
        else if ($oper == 'odej') {
            echo "Wynik: " . ($val1 - $val2);
        }
        else if ($oper == 'mnoz') {
            echo "Wynik: " . ($val1 * $val2);
        }
        else if ($oper == 'dziel') {
            if ($val1 != 0 && $val2 != 0) {
                echo "Wynik: " . fdiv($val1, $val2);
            }
            else {
                echo "Błąd: Nie można dzielić przez 0";
            }
        }
    }
    ?>
    <?php
    if (isset($_POST['val3'])  && isset($_POST['akcj'])) {
        $val3 = $_POST['val3'];
        $akcj = $_POST['akcj'];

        if ( is_numeric($_POST['val3'])) {
            if ($akcj == 'cos') {
                echo "Wynik: " . cos($val3);
            } else if ($akcj == 'sin') {
                echo "Wynik: " . sin($val3);
            } else if ($akcj == 'tg') {
                echo "Wynik: " . tan($val3);
            } else if ($akcj == 'bn-dz') {
                echo "Wynik: " . bindec($val3);
            } else if ($akcj == 'dz-bn') {
                echo "Wynik: " . decbin($val3);
            } else if ($akcj == 'dz-sz') {
                echo "Wynik: " . dechex($val3);
            }
        }
            if ($akcj == 'sz-dz') {
                echo "Wynik: " . hexdec($val3);
        }
    }

    ?>
    </div>
</body>
</html>

