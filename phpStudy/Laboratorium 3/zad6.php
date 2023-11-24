<!--
Zadanie 6. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument liczbę n oraz wyświetli informację,
czy każda naturalna liczba parzysta większa od 2 i mniejsza równa od n - liczby z przedziału (2, n] jest sumą dwóch liczb pierwszych.
Dodatkowo w konsoli, powinny zostać wypisane wszystkie te podziały.
Przykład:
Liczba: 8
Liczba jest sumą: 3+5=8.
-->
<?php

function czy_pierwsza($liczba) {
    if ($liczba <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i === 0) {
            return false;
        }
    }

    return true;
}

function znajdz_sumy_dwoch_pierwszych($n) {
    for ($i = 2; $i <= $n / 2; $i++) {
        if (czy_pierwsza($i) && czy_pierwsza($n - $i)) {
            echo "Liczba: $n\n";
            echo "<br>";
            echo "Liczba jest sumą: $i+";
            echo ($n - $i) . "=$n\n";
            return;
        }
    }

    echo "Liczba: $n\n";
    echo "Nie znaleziono takiej sumy\n";
}

// przykładowe użycie funkcji
znajdz_sumy_dwoch_pierwszych(9);

?>
