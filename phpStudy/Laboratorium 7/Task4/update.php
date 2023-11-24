<?php
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $value = isset($_COOKIE[$name]) ? $_COOKIE[$name] : '';
    $expiration = isset($_COOKIE[$name]) ? $_COOKIE[$name] : '';

    if(isset($_POST['value'])) {
        // Edycja ciasteczka
        $value = $_POST['value'];
        $expiration = isset($_POST['expiration']) ? $_POST['expiration'] : '';

        setcookie($name, $value, strtotime($expiration));

        // Przekierowanie na stronę główną
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edytuj ciasteczko</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Edytuj ciasteczko</h1>

<form method="post">
    <label>Nazwa:</label>
    <input type="text" name="name" value="<?php echo $name; ?>" readonly>
    <br>
    <label>Wartość:</label>
    <input type="text" name="value" value="<?php echo $value; ?>" required>
    <br>
    <label>Data wygaśnięcia:</label>
    <input type="date" name="expiration" value="<?php echo $expiration; ?>">
    <br>
    <input type="submit" value="Zapisz">
</form>
</body>
</html>
