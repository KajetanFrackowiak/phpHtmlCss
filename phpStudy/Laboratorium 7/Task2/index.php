<?php
if(isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
    setcookie('visits', $visits, time() + (86400 * 7), "/");
} else {
    $visits = 1;
    setcookie('visits', $visits, time() + (86400 * 7), "/");
}

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    setcookie('name', $name, time() + (86400 * 7), "/");
} elseif(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<?php
if($name != '') {
    echo "Witaj ".$name.", odwiedziłeś naszą stronę ".$visits." razy.";
} else {
    echo "Witaj, podaj swoje imię i nazwisko:";
}
?>
<form method="POST">
    <input type="text" name="name" value="<?= $name ?>">
    <input type="submit" value="Zapisz">
</form>
<form method="POST">
    <input type="hidden" name="reset" value="true">
    <input type="submit" value="Resetuj dane">
</form>
</body>
</html>

<?php
if(isset($_POST['reset']) && $_POST['reset'] == 'true') {
    setcookie('visits', '', time() - 3600, "/");
    setcookie('name', '', time() - 3600, "/");
    header("Refresh:0");
}
?>
