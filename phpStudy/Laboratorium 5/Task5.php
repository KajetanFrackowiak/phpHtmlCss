<!--
Zadanie 5. Napisz skrypt, który będzie zawierał funkcję, która zwróci false
jeżeli podany jako argument napis zawiera słowo, które nie zawiera samogłoski,
w przeciwnym razie powinien zwrócić true. Możesz przyjąć, że słowo podane zdanie
nie zawiera polskich znaków, tj. ą, ę, ó. Rozwiąż zadanie wykorzystują wyrażenia regularne.
Przykład:
Napis: "Python and PHP are scripting languages" zawiera słowo tj. "PHP", które nie samogłoski.
-->
<?php
//false = slowo ktore nie zawiera samogloski
//true = sloowo ktore zawiera samogloski
function is_word_consonant ($str) {
    $pattern = '/[aeiouy]/i';

    if (preg_match($pattern, $str)) {
        return true;
    } else {
        return false;
    }
}

var_dump(is_word_consonant($str = "kk"));
var_dump(is_word_consonant($str = "oo"));
var_dump(is_word_consonant($str = "kkkk asoa"));
?>