<?php
if(count($_COOKIE) > 0) {
foreach($_COOKIE as $name => $value) {
echo '<tr>';
    echo '<td>'.$name.'</td>';
    echo '<td>'.$value.'</td>';
    echo '<td>'.(isset($_COOKIE[$name]) ? $_COOKIE[$name] : '').'</td>';
    echo '<td>';
        echo '<a href="update.php?name='.$name.'">Edytuj</a> ';
        echo '<a href="delete.php?name='.$name.'">Usuń</a>';
        echo '</td>';
    echo '</tr>';
}
} else {
echo '<tr><td colspan="4">Brak ciasteczek</td></tr>';
}
?>