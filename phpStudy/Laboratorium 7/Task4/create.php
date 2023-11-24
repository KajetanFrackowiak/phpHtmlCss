<?php
if(isset($_POST['name']) && isset($_POST['value'])) {
    // Dodawanie ciasteczka
    $name = $_POST['name'];
    $value = $_POST['value'];
    $expiration = isset($_POST['expiration']) ? $_POST['expiration'] : '';

    setcookie($name, $value, strtotime($expiration));

    // Przekierowanie na stronę główną
    header('Location: index.php');
}
?>
