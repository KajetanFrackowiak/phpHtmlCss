<!--
Zadanie 1. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument tablicę
zawierającą liczby rzeczywiste oraz wyliczy jaka jest średnia elementów tablicy.
Wykorzystaj odpowiednie gotowe funkcje wyliczenia sumy i liczby elementów tablicy.
-->
<?php
$arr = array(
    $a = 1,
    $b = 2,
    $c = 3,
);
$average = array_sum($arr)/count($arr);
echo "Our sum = ".$average;
?>
