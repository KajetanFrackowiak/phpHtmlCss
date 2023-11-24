<?php
$mysqli = new mysqli("localhost", "root", "", "zadania");

if ($mysqli->connect_error) {
    die("Failed database connection" . $mysqli->connect_error);
}

$result = $mysqli->query("
SELECT o.Imie, o.Nazwisko, s.Pensja
FROM osoba o
JOIN stanowisko s ON o.id = s.id
");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc())
        echo "Name: ", $row["Imie"], "\tSurname: ", $row["Nazwisko"], "\tNet: ", $row["Pensja"] - (0.23 * $row["Pensja"]), "\tGross: ", $row["Pensja"] . "\n";
} else {
    echo "No results";
}

$mysqli->close();
?>