<!--
Zadanie 5. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument tablicę i element tablicy
oraz zwróci tablicę, która zawiera znak '#' przed podanym elementem, jeżeli taki element istnieje.
Wykorzystaj odpowiednie gotowe funkcje do sprawdzenia czy element istnieje i wstawienia elementu
(może być przydatna funkcja zwracająca informacje na temat pozycji).
Przykładowo dla elementu 3 tablicy:
    1, 2, 3, 4, 5
Powinna zostać zwrócona tablica z wartościami:
    1, 2, #, 3, 4, 5
-->
<?php
function find($arr, $findme) {

    $hashtag = '#';

    $pos = array_search($findme, $arr);
    for ($i = 0; $i < $pos; $i++) {
        echo $arr[$i] . ", ";
    }
    echo $hashtag . ", ";

    $last = count($arr);
    for ($i = $pos; $i <= $last - 2; $i++) {
        echo $arr[$i] . ", ";
    }
    echo $arr[$last-1];
}
find(array(1,2,3,4,7),3);
?>