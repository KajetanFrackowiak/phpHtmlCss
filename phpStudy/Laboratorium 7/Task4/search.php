<?php
if(isset($_GET['name']) || isset($_GET['value'])) {
    // Wyszukiwanie ciasteczek
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $value = isset($_GET['value']) ? $_GET['value'] : '';

    echo '<table>';
    echo '<tr><th>Nazwa</th><th>Wartość</th><th>Data wygaśnięcia</th><th>Akcje</th></tr>';
    foreach($_COOKIE as $cookieName => $cookieValue) {
        if((empty($name) || strpos($cookieName, $name) !== false) && (empty($value) || strpos($cookieValue, $value) !== false)) {
            // Wyświetlanie ciasteczka
            echo '<tr>';
            echo '<td>'.$cookieName.'</td>';
            echo '<td>'.$cookieValue.'</td>';
            echo '<td>'.date('Y-m-d H:i:s', $_COOKIE[$cookieName]).'</td>';
            echo '<td><a href="delete.php?name='.$cookieName.'">Usuń</a></td>';
            echo '</tr>';
        }
    }
    echo '</table>';
} else {
    // Wyświetlanie wszystkich ciasteczek
    echo '<table>';
    echo '<tr><th>Nazwa</th><th>Wartość</th><th>Data wygaśnięcia</th><th>Akcje</th></tr>';
    foreach($_COOKIE as $cookieName => $cookieValue) {
        echo '<tr>';
        echo '<td>'.$cookieName.'</td>';
        echo '<td>'.$cookieValue.'</td>';
        echo '<td>'.date('Y-m-d H:i:s', $_COOKIE[$cookieName]).'</td>';
        echo '<td><a href="delete.php?name='.$cookieName.'">Usuń</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
gi