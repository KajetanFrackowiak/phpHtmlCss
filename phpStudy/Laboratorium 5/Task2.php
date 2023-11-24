<!--

Zadanie 2. Napisz skrypt, który będzie zawierał funkcję, która zwróci informację
(true lub false) czy napis podany jako argument funkcji zawiera dwie samogłoski
obok siebie. Możesz przyjąć, że słowo podane zdanie nie zawiera polskich znaków,
tj. ą, ę, ó. Rozwiąż zadanie wykorzystują wyrażenia regularne.
-->
<?php
function find_adjacent_vowels($str)
{
    $matches = array();
    //Litera "i" na końcu wyrażenia regularnego (/[aeiouy]{2}/i) oznacza, że dopasowanie powinno być nieczułe na wielkość liter.
    preg_match_all('/[aeiouy]{2}/i', $str, $matches);
    return $matches[0];
}

$str = "quick brown fox jumps over the lazy dog";
var_dump(find_adjacent_vowels($str));
?>


