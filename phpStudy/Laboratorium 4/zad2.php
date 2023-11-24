<!--
Zadanie 2. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument
liczbę całkowitą n oraz zwróci tablicę, zawierającą liczby,
z przedziału: [0-n], które są podzielne przez 4.
Wykorzystaj odpowiednią gotową funkcje do stworzenia tablicy.
-->
<?php
$num = 100;
$zero = 0;
foreach (range(0, $num) as $number) {
    if ($number % 4 == 0) {
        echo $number." ";
    }
}
?>
