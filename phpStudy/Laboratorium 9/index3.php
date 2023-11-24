<?php
$mysqli = new mysqli("localhost", "root", "", "zadania");

if ($mysqli->connect_error) {
    die("Połączenie z bazą danych nie powiodło się: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT Imie, Nazwisko, YEAR(NOW()) - YEAR(Data_urodzenia) AS Wiek FROM osoba WHERE YEAR(Data_urodzenia) BETWEEN 1970 AND 1990 ORDER BY Wiek DESC LIMIT 5");
while ($row = $result->fetch_assoc())
    echo $row["Imie"] . " " . $row["Nazwisko"] . " " . $row["Wiek"] . "\n";

$mysqli->close();
?>