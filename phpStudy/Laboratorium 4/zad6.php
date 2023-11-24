<!--
Zadanie 6. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako
argument dwie tablice oraz zwróci true, jeśli pierwsza tablica jest
podzbiorem drugiej tablicy, w przeciwnym razie zwróci false.
Wykorzystaj odpowiednią gotową funkcje i warunek do sprawdzenia
czy jest podzbiorem
Przykład 1:
    1, 3
jest podzbiorem
    1, 2, 3, 4, 5
Przykład 2:
    1, 6
nie jest podzbiorem
    1, 2, 3, 4, 5
-->

<?php
//array_diff - zwraca różnicę tablic (wartości, których nie ma w pierwszej, ale są w drugiej).
function isSubset($arr1, $arr2) {
    return array_diff($arr1,$arr2) == array();
}
// Example
function write($arr1, $arr2) {
    if (isSubset($arr1, $arr2)) {
        echo "First array :\n".implode(', ', $arr1)."\nis subset of twice array :\n".implode(', ', $arr2);
    } else {
        echo "First array :\n".implode(', ', $arr1)."\nisn't subset of twice array :\n".implode(', ', $arr2);
    }
    echo "<br><br>";
}

write(array(1,3), array(1,2,3,4,5));
write(array(1,6), array(1,2,3,4,5));

?>