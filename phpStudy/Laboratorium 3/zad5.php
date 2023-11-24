<!--

Zadanie 5. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument
liczbę n oraz wyświetli informację, czy suma cyfr podniesionych do potęgi odpowiadającej ilości cyfr
jest równa równa podanej liczbie.
Przykład:
Liczba: 9, jest równa: 9^1 = 9.
Liczba: 10, jest nie równa: 1^2 + 0^2 = 1.
-->
<?php
function checkNumber($n) {
    $digits = str_split((string)$n); //zamieniamy na tablicę cyfr liczbę n
    $sum = 0;
    $last_digit_index = count($digits) - 1; // indeks ostatniej cyfry w tablicy
    foreach ($digits as $index => $digit) { // iterujemy po wszystkich cyfrach w tablicy
        $power = count($digits); // ilość elementów
        $sum += pow($digit, $power); //dodajemy do sumy kazda liczbe po kolei do potęgi ilości elementów do sumy. $power to liczba elementów $digits
    }
    if ($sum == $n) {
        echo "Liczba: $n, jest równa: $n^1 = $n\n";

    } else {
        echo "Liczba: $n, nie jest równa: ";
        foreach ($digits as $index => $digit) {
            $power = count($digits);
            echo " $digit^$power";
            if ($index != $last_digit_index) { // jeżeli iterujemy po cyfrze, która nie jest ostatnią, to dodajemy "+"
                echo " +";
            }
        }
        echo " = $sum.";
    }
    echo "\n"; //dodajemy nową linię na końcu w celu czytelniejszego wyświetlania
}

checkNumber(5);
checkNumber(122223);
checkNumber(10);

?>
