<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>edit</title>
</head>
<body>
<?php
if (isset($_GET['private_key'])) {
    $id = $_GET['private_key'];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=zadania", "root", "");
        $sql = "SELECT * FROM osoba WHERE osoba.Id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            ?>
            <button class="btn btn-primary" onclick="redirectedToFile('Zad1.php')">Powrót</button>
            <br>
            <form action="update.php" method="post">
                <input type="hidden" name="Id" value="<?php echo $result['Id']; ?>"><br>
                <label for="Imie">Imię</label><br>
                <input type="text" name="Imie" id="Imie" value="<?php echo $result['Imie']; ?>"><br>
                <label for="Surname">Nazwisko</label><br>
                <input type="text" name="Nazwisko" id="Surname" value="<?php echo $result['Nazwisko']; ?>"><br>
                <label for="Pesel">Pesel</label><br>
                <input type="text" name="Pesel" id="Pesel" value="<?php echo $result['Pesel']; ?>"><br>
                <label for="Birthdate">Data urodzenia</label><br>
                <input type="date" name="Data_urodzenia" id="Birthdate"
                       value="<?php echo $result['Data_urodzenia']; ?>"><br>
                <label for="Gender">Płeć</label><br>
                <label><input type="radio" name="Plec" value="m" <?php if ($result['Plec'] === 'm') {
                        echo 'checked';
                    } ?>>Mężczyzna</label>
                <label><input type="radio" name="Plec" value="k" <?php if ($result['Plec'] === 'k') {
                        echo 'checked';
                    } ?>>Kobieta</label><br>
                <label for="Adres">Adres</label><br>
                <select name="Id_adres" id="Adres">
                    <option value="">Wybierz adres</option>
                    <?php
                    $stmtAdres = $pdo->prepare('SELECT Id, Miejscowosc, Ulica, Nr_domu, Nr_mieszkania, Kod_pocztowy FROM adres WHERE Id NOT IN (SELECT Id_adres FROM osoba) OR Id = :adres');
                    $stmtAdres->execute(['adres' => $result['Id_adres']]);
                    while ($row = $stmtAdres->fetch(PDO::FETCH_ASSOC)) {
                        if ($result['Id_adres'] === $row['Id']) {
                            echo "<option value='" . $row['Id'] . "' selected='selected'>" . $row['Miejscowosc'] . " " . $row['Ulica'] . " " . $row['Nr_domu'] . " " . $row['Nr_mieszkania'] . " " . $row['Kod_pocztowy'] . "</option>";
                        } else {
                            echo "<option value='" . $row['Id'] . "'>" . $row['Miejscowosc'] . " " . $row['Ulica'] . " " . $row['Nr_domu'] . " " . $row['Nr_mieszkania'] . " " . $row['Kod_pocztowy'] . "</option>";
                        }
                    }
                    ?>
                </select><br><br>
                <label for="Stanowisko">Stanowisko</label><br>
                <select name="Id_stanowisko" id="Stanowisko">
                    <option value="">Wybierz stanowisko</option>
                    <?php
                    $stmtStanowisko = $pdo->prepare('SELECT Id, Nazwa FROM stanowisko');
                    $stmtStanowisko->execute();
                    echo "<option value='' " . ($result['Id_stanowisko'] === null ? "selected" : "") . ">Brak</option>";
                    while ($row = $stmtStanowisko->fetch(PDO::FETCH_ASSOC)) {
                        if ($result['Id_stanowisko'] === $row['Id']) {
                            echo "<option value='" . $row['Id'] . "' selected='selected'>" . ($row['Nazwa'] === null ? "Brak" : $row['Nazwa']) . "</option>";
                        } else {
                            echo "<option value='" . $row['Id'] . "'>" . ($row['Nazwa'] === null ? "Brak" : $row['Nazwa']) . "</option>";
                        }
                    }
                    ?>
                </select><br><br>

                <button type="submit" class="btn btn-primary">Prześlij</button>
            </form>
            <?php
        } else {
            echo "Brak danych dla podanego identyfikatora.";
        }
    } catch (PDOException $e) {
        echo "Błąd zapytania: " . $e->getMessage();
    }
}
?>
<script>
    function redirectedToFile(file) {
        window.location.href = file;
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
