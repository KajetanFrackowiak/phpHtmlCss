<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>My fourth task</title>
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"
    <meta name="author" content="Kajetan Frackowiak">
</head>
<body>
<form>
    <label for="name">Imię: </label>
    <input type="text" name="name" id="name" required><br>
    <label for="surname">Nazwisko: </label>
    <input type="text" name="surname" id="surname" required><br>
    <label for="email">Adres e-mail: </label>
    <input type="email" name="email" id="email" required><br>
    <fieldset id="products">
        <legend>Wybierz produkty:</legend>
        <input type="checkbox" name="product1" id="product1" value="product1">
        <label for="product1">Produkt 1</label><br>
        <input type="checkbox" name="product2" id="product2" value="product2">
        <label for="product2">Produkt 2</label><br>
        <input type="checkbox" name="product3" id="product3" value="product3">
        <label for="product3">Produkt 3</label>
    </fieldset><br>
    <button type="submit">Złóż zamówienie</button>
</form>
</body>
</html>