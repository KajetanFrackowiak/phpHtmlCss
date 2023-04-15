<?php
    session_start();

    if (isset($_POST['login']) and isset($_POST['pass'])) {
        $_SESSION['user'] = $_POST['login'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSIONS</title>
    <link rel="stylesheet" href="style16.php.css">
</head>
<body>
<?php
    if (isset($_SESSION['user'])) {
        echo '<b>Logged in</b><br><br>';
        echo 'LOGIN: ';
        echo $_SESSION['user'];
    } else {
        echo 'Not logged in';
    }
?>
</body>
</html>