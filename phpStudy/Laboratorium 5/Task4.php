<!--
Zadanie 4. Napisz skrypt, który będzie zawierał funkcję, która zwróci informację
(true lub false) czy napis podany jako argument funkcji jest poprawnym adresem email.
Rozwiąż zadanie wykorzystują wyrażenia regularne.
Przykład prawidłwego adresu email: "lmielewczyk@pjwstk.edu.pl"
-->
<?php
function is_valid_email ($email) {

    // NA KONCU [a-zA-Z]{2,} oznacza, że po kropce w adresie email musi wystąpić ciąg co najmniej dwóch liter z zakresu od A do Z
    $pattern = '/^[a-zA-Z0-9.+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    if (preg_match($pattern, $email)) {
        return true;
    } else {
        return false;
    }
}

var_dump(is_valid_email("lmielewczyk@pjwstk.edu.pl"));
var_dump(is_valid_email("test@test.com"));
var_dump(is_valid_email("not_an_email_address"));
?>