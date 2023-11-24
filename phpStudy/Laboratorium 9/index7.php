<?php
$mysqli = new mysqli("localhost", "root", "", "zadania");

if ($mysqli->connect_error) {
    die("Failed database connection") . $mysqli->connect_error;
}

$stanowisko = $_POST['stanowisko'];
$kwota = $_POST['kwota'];


$query = "UPDATE Stanowisko SET Pensja = Pensja + ? WHERE Nazwa = ?";

$stmt = $mysqli->prepare($query); // Przygotowanie zapytania
$stmt->bind_param("si", $kwota, $stanowisko); // Przypisywanie parametrow
$stmt->execute(); // Wykonywnie zapytania

if ($stmt->affected_rows > 0) {
    echo "Pensje zostaly zaktualizowane.\n";
} else {
    echo "Nie zanleziono stanowiska o podanej nazwie";
}

$stmt->close();
$mysqli->close();
?>

<form action="index7.php" method="POST">
    <label for="stanowisko">Nazwa stanowiska: </label>
    <input type="text" name="stanowisko" id="stanowisko">
    <br>
    <label for="kwota">Kwota:</label>
    <input type="text" name="kwota" id="kwota">
    <br>
    <input type="submit" value="Zmien pensje">
</form>
