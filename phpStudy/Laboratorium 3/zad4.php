<!--
Zadanie 4. Napisz skrypt, który będzie zawierał funkcję przyjmującą tablicę dwuwymiarową zawierającą liczby
rzeczywiste wyświetli jej transponowaną wartość (czyli tablicę w której wiersze zostały zamienione na kolumny a kolumny na wiersze).
Przykładowo tablica:
1.0 2.0 3.0
4.0 5.0 6.0
Powinna zostać wyświetlona jako:
1.0 4.0
2.0 5.0
3.0 6.0
-->
<?php
function transposeArray($matrix) {
    $transposedArray = array();
    foreach ($matrix as $rowKey => $row) {
        foreach ($row as $columnKey => $value) {
            $transposedArray[$columnKey][$rowKey] = $value;
        }
    }
    foreach ($transposedArray as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
}

// przykładowa tablica dwuwymiarowa
$myMatrix = array(
    array(1.0, 2.0, 3.0),
    array(4.0, 5.0, 6.0),
);

// wywołanie funkcji dla tablicy $myMatrix
transposeArray($myMatrix);
?>
