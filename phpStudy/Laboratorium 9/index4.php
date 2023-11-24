<?php
$mysqli = new mysqli("localhost", "root", "", "zadania");

if ($mysqli->connect_error) {
    die("Nieudane połączenie z bazą danych: " . $mysqli->connect_error);
}

$result = $mysqli->query("
SELECT o.Imie, o.Nazwisko, a.Miejscowosc, a.Ulica, a.Nr_domu, a.Nr_mieszkania, a.Kod_pocztowy
FROM osoba o
JOIN adres a ON o.id = a.id
WHERE o.Plec = 'm' AND Nazwisko NOT LIKE '%a'");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["Imie"], " ", $row["Nazwisko"] . " " . $row["Miejscowosc"] . " " . $row["Ulica"] . " " . $row["Nr_domu"] . " " . $row["Nr_mieszkania"] . " ";
        echo $row["Kod_pocztowy"] . "<br>";
    }
} else {
    echo "Brak wyników";
}

$mysqli->close();
?>