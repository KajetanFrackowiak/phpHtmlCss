<!--
Zadanie 10. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument dwa napisy oraz zwróci wartość pierwszego
napisu bez słów podanych w drugim napisie.
Wykorzystaj odpowiednie gotowe funkcje do usunięcia/zmiany napisu.
Przykład dla:
    "Ala ma kota"
i
    "ma"
Powinno zostać zwrócone:
    "Ala kota"
-->
<?php
function removeWordsFromString($mainlyString,$deletingString) {
    // it searches in the first string until search the gap and next deleted the word what is given in the second place
    echo str_replace($deletingString, '', $mainlyString);
    echo "<br><br>";
}

removeWordsFromString("Ala ma kota", "ma");
removeWordsFromString("Polsko Japońska Akademia Technik Komputerowych", "Polsko");
?>