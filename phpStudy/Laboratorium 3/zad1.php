<?php

function print_triangles($n) {
    // Wypisywanie trójkąta skierowanego w górę
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    // Wypisywanie trójkąta skierowanego w dół
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    // Wypisywanie trójkąta skierowanego w lewo
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j > $i; $j--) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    // Wypisywanie trójkąta skierowanego w prawo
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo " ";
        }
        for ($j = $n; $j >= $i; $j--) {
            echo "*";
        }
        echo "<br>";
    }
}

print_triangles(5);

?>
