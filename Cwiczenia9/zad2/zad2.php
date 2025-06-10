<?php
function handleDirectory($path, $dirname, $operation = 'read') {
    if (substr($path, -1) !== '/') $path .= '/';
    $fullPath = $path . $dirname;

    switch ($operation) {
        case 'read':
            echo $fullPath;
            if (!is_dir($fullPath)) return "Katalog nie istnieje.";
            $items = scandir($fullPath);
            return "Zawartość katalogu: <br>" . implode("<br>", array_diff($items, ['.', '..']));
        case 'create':
            if (is_dir($fullPath)) return "Katalog już istnieje.";
            return mkdir($fullPath) ? "Katalog utworzony." : "Błąd tworzenia katalogu.";
        case 'delete':
            if (!is_dir($fullPath)) return "Katalog nie istnieje.";
            if (count(scandir($fullPath)) > 2) return "Katalog nie jest pusty.";
            return rmdir($fullPath) ? "Katalog usunięty." : "Nie udało się usunąć.";
        default:
            return "Nieznana operacja.";
    }
}

if (isset($_GET['path']) && isset($_GET['dirname'])) {
    echo handleDirectory($_GET['path'], $_GET['dirname'], $_GET['operation'] ?? 'read');
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
    <label>Ścieżka: <input type="text" name="path" value="./php/images/"></label><br>
    <label>Nazwa katalogu: <input type="text" name="dirname"></label><br>
    <label>Operacja:
        <select name="operation">
            <option value="read">Odczyt</option>
            <option value="create">Utwórz</option>
            <option value="delete">Usuń</option>
        </select>
    </label><br>
    <input type="submit" value="Wykonaj">
</form>
</body>