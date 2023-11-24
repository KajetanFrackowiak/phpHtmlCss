<!--
Zadanie 1. Napisz skrypt, który będzie zawierał funkcję, która zwróci informację
(true lub false) czy napis, który został podany jako argument
zawiera jedynie znaki, które mogą być zapisane w systemie szesnastkowym.
Rozwiąż zadanie wykorzystują wyrażenia regularne.
-->
<?php

function is_hex_string($str)
{
    return preg_match('/^[0-9a-fA-F]*f/', $str);
}

function check($str)
{
    if (is_hex_string($str)) {
        echo "$str: true\n";
    } else {
        echo "$str: false\n";
    }
}

check("alt");
check("123");
check("1aF");

?>