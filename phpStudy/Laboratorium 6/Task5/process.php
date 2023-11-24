<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypisanie danych osób</title>
</head>
<body>
<h2>Dodaj nową osobę:</h2>
<form action="process.php" method="post">
    <table>
        <tr>
            <td>
                <label for="IP">IP: </label>
                <input type="number" name="IP" id="IP" required>
                <br><br>
                <label for="name">Imię: </label>
                <input type="text" name="name" id="name" required>
                <br><br>
                <label for="surname">Nazwisko: </label>
                <input type="text" name="surname" id="surname" required>
                <input type="submit" name="submit" value="Przeslij">
                <br><br><br>
            </td>
        </tr>
    </table>
</form>

<h2>Wyszukaj osobę:</h2>
<form action="process.php" method="get">
    <label for="IP">IP: </label>
    <input type="number" name="search" id="">
    <input type="submit" name="submit" value="Szukaj">
</form>

<?php
if (!file_exists('baza.csv')) {
    $handle = fopen('baza.csv', 'w'); //w = write only
    fclose($handle);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $IP = $_POST['IP'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    // Sprawdzaenie, czy osoba o podanym IP juz istnieje w pliku
    $handle = fopen('baza.csv', 'r'); // r = read only, fopen = otwieranie pliku
    while ($line = fgets($handle)) { //gets line from file pointer
        $person = explode(';', $line); // split a string by string ';'
        if ($person[0] === $IP) {
            echo 'Osoba o podanym IP już istnieje!';
            fclose($handle);
            exit;
        }
    }
    fclose($handle);

    // Dopisywanie nowej osoby do pliku
    $data = $IP . ';' . $surname . ';' . $name . "\n";
    $handle = fopen('baza.csv', 'a'); // writing only
    fwrite($handle, $data);
    fclose($handle);
    echo '<p>Osoba dodana do bazy danych!</p>';
}

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['search'])) {
            $IP = $_GET['search'];
            $handle = fopen('baza.csv', 'r'); // fragment kodu otwierjący plik w trybie odczytu i zwaraca uchwyt do pliku ktory jest uzywany pozniej do odczytu danych z pliku
            while ($line = fgets($handle)) { // iteruje po wszysktich liniach pliku baza.csv. Kazda linia jest przechowywana w zmiennej $line,  a nastepnie za pomoca finkcji explode() jest podzielona na czesci oddzielone separatorem ';' ktore zapisywane sa w tablicy $person
                $person = explode(';', $line); // $person[0] = id, $person[1] = nazwisko, $person[2] = imie
                if ($person[0] == $IP) {
                    echo '<p>Imię: ' . $person[2] . ', Nazwisko: ' . $person[1] . '.</p>';
                    fclose($handle);
                    exit;
                }
            }
            fclose($handle);
            echo '<p>Nie znaleziono osoby o podanym IP.</p>';
        }
    }
?>

</body>
</html>