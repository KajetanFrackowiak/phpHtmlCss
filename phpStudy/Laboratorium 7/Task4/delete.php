<?php
if(isset($_GET['name'])) {
    // Usuwanie ciasteczka
    $name = $_GET['name'];
    setcookie($name, '', time() - 3600);

    // Przekierowanie na stronę główną
    header('Location: index.php');
}
?>
