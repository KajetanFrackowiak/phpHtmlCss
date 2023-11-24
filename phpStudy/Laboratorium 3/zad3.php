<!--
Zadanie 3. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument liczbę n oraz zdefiniuje tablice i
zapisze w niej n liczb "wylosowanych" przy pomocy funkcji rand.
Następnie przejdzie po elementach tablicy przy użyciu pętli foreach w celu znalezienia najmniejszego i największego elementu. -->

<?php
function randing($n) {
    $arr = array();

    for ($i = 0; $i < $n; $i++) {
        $randomNumber = rand(1, 100);
        array_push($arr, $randomNumber);
    }

    $theSmallest = PHP_INT_MAX;
    $theBiggest = PHP_INT_MIN;

    /*
     Pętla foreach (należy ją stosować do przejść po elementach tablicy.) (więcej)
    foreach (tablica as element) {
    instrukcje do wykonania w pętli

     */
    foreach ($arr as $number) {
        if ($number < $theSmallest) {
            $theSmallest = $number;
        }
        if ($number > $theBiggest ) {
            $theBiggest = $number;
        }
    }
    printf ("The smallest number in this array: %d and the biggest: %d", $theSmallest, $theBiggest);

}
randing(5);
?>