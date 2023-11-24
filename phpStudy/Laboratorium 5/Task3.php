<!--
Zadanie 3. Napisz skrypt, który będzie zawierał funkcję, która zwróci informację
(true lub false) czy napis, który został podany jako argument jako argument
zawiera jako pierwszą i ostatnią literę taką samą samogłoskę. Możesz przyjąć,
że słowo podane zdanie nie zawiera polskich znaków, tj. ą, ę, ó.
Rozwiąż zadanie wykorzystują wyrażenia regularne.
-->
<?php
function is_first_and_last_vowel ($word) {

    return preg_match('/^[aeiouy].[aeiouy]$' . '/i', $word);
}

var_dump(is_first_and_last_vowel($word = "alo"));
var_dump(is_first_and_last_vowel($word = "alw"));
?>