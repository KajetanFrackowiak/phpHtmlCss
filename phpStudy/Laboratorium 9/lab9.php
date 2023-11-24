<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zadania";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Połączenie z bazą danych nie powiodło się: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM Stanowisko";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "Aktualne stanowiska:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Id: " . $row["Id"] . " Nazwa: " . $row["Nazwa"] . " Pensja: " . $row["Pensja"] . "<br>";
    }
} else {
    echo "Brak stanowisk w bazie danych";
}

if (isset($_POST['nazwa'])) {
    $nazwa = $_POST['nazwa'];

    $sql_check = "SELECT * FROM Stanowisko WHERE Nazwa = '$nazwa'";
    $result_check = $mysqli->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "Stanowisko o nazwie '$nazwa' już istnieje w bazie danych";
    } else {
        if (isset($_POST['pensja'])) {
            $pensja = $_POST['pensja'];
            $sql_insert = "INSERT INTO Stanowisko (Nazwa, Pensja) VALUES ('$nazwa', $pensja)";
            if ($mysqli->query($sql_insert) === TRUE) {
                echo "Nowe stanowisko zostało dodane do bazy danych";
            } else {
                echo "Błąd: " . $sql_insert . "<br>" . $mysqli->error;
            }
        } else {
            echo "Nie podano pensji dla nowego stanowiska";
        }
    }
}

echo "<br>Dodaj nowe stanowisko:<br>";
echo "<form method='post'>";
echo "Nazwa: <input type='text' name='nazwa'><br>";
echo "Pensja: <input type='text' name='pensja'><br>";
echo "<input type='submit' value='Dodaj'>";
echo "</form>";

$mysqli->close();
?>