<!--
Zadanie 9. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument napis reprezentujący
liczbę rzeczywistą, oraz zwróci napis, który nie zawiera wiodących zer.
Wykorzystaj odpowiednie gotowe funkcje do usunięcia wiodących zer.
Przykład 1 dla:
    0000001234.50000
Powinno zostać zwrócone:
    1234.5
Przykład 2 dla:
    00000012000
Powinno zostać zwrócone:
    12000
-->
<?php
// ltrim - usuwa określone znaki tylko początku.
// trim - removes specified characters from beginning to end
// rtrim - usuwa określone znaki tylko końca.
// substr - zwraca napis zawierający znaki na podanych przedziałach.
function remove_leading_zeros($number_str) {

    if (strpos($number_str, '.') != 0) {
            echo trim($number_str, '0');
    } else {
        echo ltrim($number_str, '0');
    }
    echo "<br>";
}

echo remove_leading_zeros("0000001234.50000") . "<br>"; // output: 1234.5
echo remove_leading_zeros("00000012000") . "<br>"; // output: 12000
?>