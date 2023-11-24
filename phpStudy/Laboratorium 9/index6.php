<?php
$mysqli = new mysqli("localhost", "root", "", "zadania");

if ($mysqli->connect_error) {
    die("Failed database connection" . $mysqli->connect_error);
}

$miejscowosc = $_POST['miejscowosc']; // Miejscowość przekazana przez użytkownika

// Zapytanie SQL do zliczenia liczby mężczyzn i kobiet oraz obliczenia największych, najmniejszych i średnich zarobków
$query = "
SELECT
    SUM(CASE WHEN o.Plec = 'M' THEN 1 ELSE 0 END) AS Liczba_Mezczyzn,
    SUM(CASE WHEN o.Plec = 'K' THEN 1 ELSE 0 END) AS Liczba_Kobiet,
    MAX(s.Pensja) AS Najwieksze_Zarobki,
    MIN(s.Pensja) AS Najmniejsze_Zarobki,
    AVG(s.Pensja) AS Srednie_Zarobki
FROM Osoba o
LEFT JOIN Stanowisko s ON o.Id_stanowisko = s.Id
LEFT JOIN Adres a ON o.Id_adres = a.Id
WHERE a.Miejscowosc = ?
";

// Przygotowanie i wykonanie zapytania
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $miejscowosc);
$stmt->execute();

// Przypisanie wyników zapytania do zmiennych
$stmt->bind_result($liczba_mezczyzn, $liczba_kobiet, $najwieksze_zarobki, $najmniejsze_zarobki, $srednie_zarobki);
$stmt->fetch();

// Wyświetlenie wyników
echo "Liczba mężczyzn: " . $liczba_mezczyzn . "<br>";
echo "Liczba kobiet: " . $liczba_kobiet . "<br>";
echo "Największe zarobki: " . $najwieksze_zarobki . "<br>";
echo "Najmniejsze zarobki: " . $najmniejsze_zarobki . "<br>";
echo "Średnie zarobki: " . $srednie_zarobki . "<br>";

$stmt->close();
$mysqli->close();
?>

<form action="index6.php" method="POST">
    <label for="miejscowosc">Miejscowość:</label>
    <input type="text" name="miejscowosc" id="miejscowosc">
    <button type="submit">Wyślij</button>
</form>
