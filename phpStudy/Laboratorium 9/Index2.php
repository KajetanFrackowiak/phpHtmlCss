<?php
$mysqli = new mysqli("localhost", "root", "", "zadania");

if ($mysqli->connect_error) {
    die("Nieudane połączenie z bazą danych: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT Pesel FROM osoba WHERE Imie = 'Stefan'");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pesel = $row["Pesel"];
        $maskedPesel = substr($pesel, 0, 2) . str_repeat('x', strlen($pesel) - 4) . substr($pesel, -2);
        echo $maskedPesel . "<br>";
    }
} else {
    echo "Brak wyników dla imienia Stefan.";
}

$mysqli->close();
?>

<!--COALESCE(wartość1, wartość2, /* ..., */ wartośćN) - zwraca pierwszą wartość inną niż NULL.-->
<!--CONCAT(napis1, napis2, /* ..., */ napisN) - łączy napisy (konkatenacja).-->