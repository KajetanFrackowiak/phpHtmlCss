<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=zadania", "root", "");
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $pesel = $_POST['pesel'];
        $birthdate = $_POST['birthdate'];
        $birthdate = trim($birthdate);
        if (preg_match('/^\d{2}\s\d{2}\s\d{4}$/', $birthdate)) {
            // Przekształcenie daty na format "rok-miesiac-dzien"
            $birthdate = implode('-', array_reverse(explode(' ', $birthdate)));
        }
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $street = $_POST['street'];
        $houseNumber = $_POST['houseNumber'];
        $apartmentNumber = $_POST['apartamentNumber'];
        $zipCode = $_POST['zipCode'];
        $zipCode = trim($zipCode);
        if (preg_match('/^(\d{2})(\d{3})$/', $zipCode, $matches)) {
            $zipCode = $matches[1] . '-' . $matches[2];
        }

        $query1 = "INSERT INTO osoba (Imie, Nazwisko, Plec, Pesel, Data_urodzenia) VALUES (?, ?, ?, ?, ?)";
        $stmt1 = $pdo->prepare($query1);

        $query2 = "INSERT INTO adres (Miejscowosc, Ulica, Nr_domu, Nr_mieszkania, Kod_pocztowy) VALUES (?, ?, ?, ?, ?)";
        $stmt2 = $pdo->prepare($query2);

        try {
            $stmt1->execute([$name, $surname, $gender, $pesel, $birthdate]);


            $stmt2->execute([$city, $street, $houseNumber, $apartmentNumber, $zipCode]);


            echo "Dane zostały dodane do bazy danych.";
            ?>
            <button class="btn btn-primary" onclick="redirectedToFile('Zad1.php')">Wróć na stronę główną</button>
        <?php
        } catch (PDOException $e) {
            echo "Wystąpił błąd podczas dodawania: " . $e->getMessage();
        }
    } catch (PDOException $e) {
        echo "Błąd z połączeniem z bazą danych: " . $e->getMessage();
    }
}
?>
<script>
    function redirectedToFile(file) {
        window.location.href = file;
    }
</script>