<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>COOKIES</h3>
<table>
    <tr>
        <td>
            <p>Wprowadź wartość</p>
            <form action="process.php" method="post">
                <p>Imię: <input type="text" name="name" id=""></p>
                <input type="submit" value="Zapamiętaj">
            </form>
        </td>
    </tr>
</table>

<br><br>

<?php
if (isset($_POST['name'])) {
//    echo time() . '<br>';
//    $_COOKIE['name'] = $_POST['name'];
    setcookie('name', $_POST['name'], time() +  3600 * 24 * 10);


}
?>

<table>
    <tr>
        <td>
            <?php
            if(isset($_COOKIE['name'])) {
                echo '<b>Imię:</b>';
                echo $_COOKIE['name'];

                echo '<br><br><a href="delete.php">Usuń</a>';
            } else {
                echo 'Brak ciasteczek';
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>
