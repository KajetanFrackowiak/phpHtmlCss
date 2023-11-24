<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>details</title>
</head>
<body>
<?php
if (isset($_GET['private_key'])) {
    $id = $_GET['private_key'];

    try {
        $sql =  "
        SELECT osoba.Imie, osoba.Nazwisko, osoba.Pesel, osoba.Data_urodzenia, osoba.Plec, adres.Miejscowosc, adres.Ulica, adres.Nr_domu, adres.Kod_pocztowy, stanowisko.Nazwa
        FROM osoba
        LEFT JOIN Stanowisko ON osoba.Id_stanowisko = stanowisko.Id
        JOIN Adres ON osoba.Id_adres = adres.Id
        WHERE osoba.Id = :id";

// LEFT JOIN fixed it that now it ensures that all rows from Osoba table will be included in the result, regardless of whether there is a matching row in the Stanowisko
// This means that even if the person's position (stanowisko) is NULL or there is no matching position, the person's details will still be displayed
        $pdo = new PDO("mysql:host=localhost;dbname=zadania", "root", "");
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo "<h1>Person Details</h1>";
            echo "<p><strong>First Name: </strong>" . $result["Imie"] . "</p>";
            echo "<p><strong>Last Name: </strong>" . $result["Nazwisko"] . "</p>";
            echo "<p><strong>Pesel: </strong>" . $result["Pesel"] . "</p>";
            echo "<p><strong>Date of Birth: </strong>" . $result["Data_urodzenia"] . "</p>";
            echo "<p><strong>Gender: </strong>";
            if ($result["Plec"] == 'm') {
                echo "Male</p>";
            } else {
                echo "Famale</p>";
            }
            echo "<p><strong>Adres: </strong>" . $result["Miejscowosc"] . ", " . $result["Ulica"] . " " . $result["Nr_domu"] . ", " . $result["Kod_pocztowy"] . "</p>";
            echo "<p><strong>Stanowisko: </strong>";
            if ($result["Nazwa"] != NULL) {
                echo $result["Nazwa"];
            } else {
                echo "None";
            }
            echo "</p>";
            echo "<p><a href='Zad1.php' class='btn btn-primary'>Back to home</a></p>";
        } else {
            echo "Person not found";
        }
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }
} else {
    echo "Invalid request";
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>

