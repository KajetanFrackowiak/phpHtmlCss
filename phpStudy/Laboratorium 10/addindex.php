<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<button class="btn btn-primary" onclick="redirectedToFile('Zad1.php')">Powrót</button><br>
<form action="add.php" method="POST" autocomplete="off">
    <label for="name">Imie: </label><br>
    <input type="text" name="name" id="name" required><br>
    <label for="surname">Nazwisko: </label><br>
    <input type="text" name="surname" id="surname" required><br>
    <label for="pesel">Pesel: </label><br>
    <input type="text" name="pesel" id="pesel" required><br>
    <label for="birthdate">Data urodzenia: </label><br>
    <input type="date" name="birthdate" id="birthdate" required><br>
    <label for="gender">Płeć: </label><br>
    <label><input type="radio" name="gender" id="male">Mężczyzna</label>
    <label><input type="radio" name="gender" id="famale">Kobieta</label><br>
    <label>Adres:</label><br><br>
    <label for="city">Miejscowość: </label><br>
    <input type="text" name="city" id="city" required><br>
    <label for="street">Ulica: </label><br>
    <input type="text" name="street" id="street" required><br>
    <label for="houseNumber">Number domu: </label><br>
    <input type="text" name="houseNumber" id="houseNumber"><br>
    <label for="apartamentNumber">Numer mieszkania</label><br>
    <input type="text" name="apartamentNumber" id="apartamentNumber"><br>
    <label for="zipCode">Kod pocztowy: </label><br>
    <input type="text" name="zipCode" id="zipCode" required><br>
    <button type="submit" class="btn btn-primary">Prześlij</button>
</form>
<script>
    function redirectedToFile(file) {
        window.location.href = file;
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
