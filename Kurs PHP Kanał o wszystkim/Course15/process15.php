<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST</title>
    <link rel="stylesheet" href="style15.php.css"
</head>
<body>
<table>
    <td>
        <?php
        if (isset($_GET['login']) and isset($_GET['pass'])) {
            echo '<b>GET</b><br><br>';
            echo 'LOGIN: ';
            echo $_GET['login'];
            echo '<br>PASSWORD: ';
            echo $_GET['pass'];
        } else if (isset($_POST['login']) and isset($_POST['pass'])) {
            echo '<b>POST</b><br><br>';
            echo 'LOGIN: ';
            echo $_POST['login'];
            echo '<br>PASSWORD: ';
            echo $_POST['pass'];
        } else {
            echo "Don't given answer";
        }
        ?>
    </td>
</table>
</body>
</html>