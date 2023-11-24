<?php
$cookie_name = "test_cookie";
$cookie_value = "example_value";
$expiration = time() + (7 * 24 * 60 * 60); // czas wygaśnięcia po tygodniu
setcookie($cookie_name, $cookie_value, $expiration);
?>

<?php
if (isset($_COOKIE['test_cookie'])) {
    echo "A cookie named 'test_cookie' exists";
} else {
    echo "A cookie named 'test_cookie' doesn't exists";
}
?>
<!--$_COOKIE - tablica zmiennych przechowujących ciasteczka.-->
<!--setcookie - zwraca informacje, czy zmienna jest zadeklarowana.-->
