<?php
session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    if (isset($_SESSION['visits'])) {
        $_SESSION['visits']++;
    } else {
        $_SESSION['visits'] = 1;
    }
}

if (!isset($_SESSION['name'])) {
    echo "Witaj, podaj swoje imię i nazwisko:";
} else {
    echo "Witaj ".$_SESSION['name'].", odwiedziłeś naszą stronę ".$_SESSION['visits']." razy.";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Witaj</title>
</head>
<body>
<form method="post">
    <input type="text" name="name" placeholder="Podaj imię i nazwisko">
    <input type="submit" value="Zapisz">
</form>
<form method="post">
    <input type="hidden" name="reset" value="true">
    <input type="submit" value="Resetuj dane">
</form>
<?php
if (isset($_POST['reset'])) {
    session_unset();
    session_destroy();
    header('Location: '.$_SERVER['PHP_SELF']);
}
?>
</body>
</html>
