<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Database SQL</title>
</head>
<body>
<form method="POST">
    <label for="firstname">Imię: </label>
    <input type="text" name="firstname" id="firstname"><br>
    <label for="surname">Nazwisko: </label>
    <input type="text" name="surname" id="surname"><br>
    <input type="submit" name="add" value="Dodaj">
    <input type="submit" name="show" value="Pokaz">
    <input type="submit" name="edit" value="Edytuj">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ((isset($_POST['show']))) {
        $dbuser = 'postgres';
        $dbpass = 'postgres';
        $db = new PDO("pgsql:host=localhost;port=5432;dbname=stepik", $dbuser, $dbpass);
        $query = "SELECT * FROM osoba";
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (count($rows) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th></tr>";
            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['imie'] . "</td>";
                echo "<td>" . $row['nazwisko'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data available";
        }
    } elseif (isset($_POST['add'])) {
        if ((isset($_POST['firstname'])) && (isset($_POST['surname']))) {
            $dbuser = 'postgres';
            $dbpass = 'postgres';
            $db = new PDO("pgsql:host=localhost;port=5432;dbname=stepik", $dbuser, $dbpass);
            $query = "INSERT INTO osoba (imie, nazwisko) VALUES (?, ?)";
            $statement = $db->prepare($query);
            $statement->execute(array(
                $_POST['firstname'],
                $_POST['surname']
            ));
            echo "Data inserted successfully!";
        } else {
            die("Error!!!");
        }
    }
}
?>
</body>
</html>

