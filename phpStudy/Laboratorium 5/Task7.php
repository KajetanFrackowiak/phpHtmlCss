<!--
Zadanie 7. Napisz skrypt, który będzie zawierał funkcję, która zwróci zmieniony napis
dla napisu podanego jako argument, który będzie zawierał znak # pomiędzy każdą
samogłoską i spółgłoską. Rozwiąż zadanie wykorzystują wyrażenia regularne.
Przykład:
Dla napisu: "Ala ma kota" powinno zostać zwrócone "A#la ma ko#ta".
-->
<?php
function addHashBetweenChars($str) {
    return preg_replace('/[aeiouy]/i', '#$1', $str); //to replace the matched vowels with the same vowel preceded by a hash symbol, we use $1
}

echo addHashBetweenChars("Ala has a cat\n");
echo addHashBetweenChars("I love PHP language");
?>