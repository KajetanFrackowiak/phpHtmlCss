<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=zadania", "root", "");
        $sql = "
        UPDATE osoba SET Imie = :name, Nazwisko = :surname, Pesel = :pesel, Data_urodzenia = :birthdate, Plec = :gender, Id_adres = :address, Id_stanowisko = :position 
        WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $_POST['Id'], PDO::PARAM_INT);
        $stmt->bindParam(':name', $_POST['Imie'], PDO::PARAM_STR);
        $stmt->bindParam(':surname', $_POST['Nazwisko'], PDO::PARAM_STR);
        $stmt->bindParam(':pesel', $_POST['Pesel'], PDO::PARAM_STR);
        $stmt->bindParam(':birthdate', $_POST['Data_urodzenia'], PDO::PARAM_STR);
        $stmt->bindParam(':gender', $_POST['Plec'], PDO::PARAM_STR);
        $stmt->bindParam(':address', $_POST['Id_adres'], PDO::PARAM_INT);
        if (empty($_POST['Id_stanowisko'])) {
            $stmt->bindValue(':position', null, PDO::PARAM_NULL);
        } else {
            $stmt->bindParam(':position', $_POST['Id_stanowisko'], PDO::PARAM_INT);
        }

        $stmt->execute();
        echo "<h1>Dane zostały zaktualizowane</h1>";
        echo "<a href='Zad1.php'>Powrót do strony</a>";
    } catch (PDOException $e) {
        echo "Błąd zapytania: " . $e->getMessage();
    }
}
?>
