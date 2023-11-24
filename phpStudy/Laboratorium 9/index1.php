<?php
$mysqli = new mysqli("localhost","root","","zadania");
$result = $mysqli->query("SELECT Imie, Nazwisko, Pesel FROM osoba ORDER BY Pesel ");
while ($row = $result->fetch_assoc())
    echo $row["Imie"] . " " . $row["Nazwisko"] . " " . $row["Pesel"] ."\n";
?>