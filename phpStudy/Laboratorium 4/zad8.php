<!--
Zadanie 8. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument napis reprezentujący email oraz wypisze nazwę użytkownika i domenę podanego emaila.
Wykorzystaj odpowiednie gotowe funkcje do znalezienia pozycji '@' i wycięcia odpowiednich napisów.
Przykład dla:
    lmielewczyk@pjwstk.edu.pl
Powinno zostać wypisane:
    Użytkownik: lmielewczyk
    Domena: pjwstk.edu.pl
-->
<?php
function findAt($email) {
    $pos = strpos($email, '@');

    if ($pos !== false) {
        $username = substr($email, 0, $pos);
        echo "Username: " . $username;

        echo "<br><br>";

        $domain = substr($email, $pos + 1, strlen($email));
        echo "Domain: " . $domain;
    }
}
$email = "s28404@pjwstk.edu.pl";
findAt($email);
?>