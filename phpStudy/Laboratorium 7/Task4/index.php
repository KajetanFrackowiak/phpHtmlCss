<!DOCTYPE html>
<html>
<head>
    <title>Operacje CRUDS na ciasteczkach</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Operacje CRUDS na ciasteczkach</h1>

<!-- Formularz dodawania ciasteczka -->
<h2>Dodaj ciasteczko</h2>
<form method="post" action="create.php">
    <label>Nazwa:</label>
    <input type="text" name="name" required>
    <br>
    <label>Wartość:</label>
    <input type="text" name="value" required>
    <br>
    <label>Data wygaśnięcia:</label>
    <input type="date" name="expiration">
    <br>
    <input type="submit" value="Dodaj">
</form>

<!-- Tabela wyświetlająca wszystkie ciasteczka -->
<h2>Wszystkie ciasteczka</h2>
<table>
    <tr>
        <th>Nazwa</th>
        <th>Wartość</th>
        <th>Data wygaśnięcia</th>
        <th>Akcje</th>
    </tr>
    <?php include 'read.php'; ?>
</table>

<!-- Formularz wyszukiwania ciasteczek -->
<h2>Wyszukaj ciasteczka</h2>
<form method="get" action="search.php">
    <label>Nazwa:</label>
    <input type="text" name="name">
    <br>
    <label>Wartość:</label>
    <input type="text" name="value">
    <br>
    <input type="submit" value="Szukaj">
</form>

</body>
</html>
