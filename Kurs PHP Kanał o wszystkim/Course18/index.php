<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Game, guess the number</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Game = Guess the number</h1>

<table>
    <tr>
        <td>
            <p>Guess the number from 1 - 10</p>
            <form method="post" action="index.php">
                <label>Liczba: </label>
                <input type="number" name="number" id="">
                <br><br>
                <input type="submit" value="Check">
            </form>
        </td>
    </tr>
</table>

<br><br>

<table>
    <tr>
        <td>
            <?php
            if (isset($_POST['number']) and is_numeric($_POST['number'])) {
                $num = $_POST['number'];

                if (isset($_SESSION['i'])) {
                    $_SESSION['i']++;
                } else {
                    $_SESSION['i'] = 1;
                }

                if (!isset($_SESSION['los'])) {
                   $_SESSION['los'] = random_int(1,10);
                }

                if ($num > $_SESSION['los']) {
                    echo 'Unfortunately, the drawn number is less then yours<br>';
                    echo 'You have ' . 10 - $_SESSION['i'] . ' more attempts<br>';
                }
                elseif ($num < $_SESSION['los']) {
                    echo 'Unfortunately, the drawn number is greater then yours<br>';
                    echo 'You have ' . 10 - $_SESSION['i'] . ' more attempts<br>';
                }
                else {
                    echo 'Great, you guessed the number the ' .$_SESSION['i'] . ' times!!!';
                    session_destroy();
                }
            } else {
                if (isset($_SESSION['i'])) {
                    echo 'Give next number...';
                } else {
                    echo 'Give first number';
                }
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>