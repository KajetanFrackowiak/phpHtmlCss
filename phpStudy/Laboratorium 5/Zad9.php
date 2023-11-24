
<!--Zadanie 9. Napisz skrypt, który będzie zawierał funkcję, która zwróci sumę liczb znajdujących
się w podanym jako argument napisie. Rozwiąż zadanie wykorzystują wyrażenia regularne.-->
<!--Przykład:-->
<!--Dla napisu: "Ala 10 ma 23 koty" powinno zostać zwrócone 33.-->


<!--\d - znaki liczbowe. (odpowiednik [0-9]).-->
<!--  + - jeden lub więcej poprzedzających znaków.-->
<?php
function sum_numbers($text) {
    preg_match_all('/\d+/', $text, $matches); // znajdujemy wszystkie liczby w tekscie
    $sum = array_sum($matches[0]);
    return $sum."\n";
}

echo sum_numbers("Ala has 10 cats and 23 dogs");
echo sum_numbers("My zip-code = 81-360");
?>

<!--Funkcja preg_match() i preg_match_all() są funkcjami wyrażeń regularnych dostępne w PHP i różnią się sposobem dopasowania wzorca do tekstu.-->
<!---->
<!--preg_match() dopasowuje wzorzec tylko do pierwszego wystąpienia w tekście i zwraca 1, jeśli dopasowanie się powiodło lub 0, jeśli dopasowanie się nie powiodło. Jeśli dopasowanie się powiodło, to dopasowany tekst jest zwracany jako drugi parametr funkcji.-->
<!---->
<!--preg_match_all() dopasowuje wzorzec do wszystkich wystąpień w tekście i zwraca liczbę dopasowań oraz tablicę z dopasowanymi tekstami. W tym przypadku, zwracana tablica może mieć wiele elementów - każdy element odpowiada jednemu dopasowaniu.-->
