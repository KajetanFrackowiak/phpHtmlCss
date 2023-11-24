<!--
Zadanie 12. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument napis oraz zwróci informację, czy zawiera on wszystkie litery alfabetu łacińskiego.
Wykorzystaj gotowe funkcje, bez korzystania z pętli.
Przykładowo dla:
    "The quick brown fox jumps over the lazy dog"
Powinno zostać zwrócone:
    true

-->
<?php
    function areThereAllOfLetterFromAlphabet($string) {
        $pattern = 'a-zA-Z';
        // str_replace(' ', '', $string) zamienia ciąg składający się z pojedynczej spacji (' ') na pusty ciąg ('').
        $string = str_replace(' ','', $string);

        if (preg_match('/[' . $pattern . ']{26}/', $string) == 1) {
            echo "true";
            echo "<br>";
        } else {
            echo "false";
            echo "<br>";
        }

    }
    areThereAllOfLetterFromAlphabet("The quick brown fox jumps over the lazy dog");
    areThereAllOfLetterFromAlphabet("Ala has a dog");
    areThereAllOfLetterFromAlphabet("");



?>