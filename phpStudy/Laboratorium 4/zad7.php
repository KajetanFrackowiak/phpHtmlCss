<!--
Zadanie 7. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument napis, oraz wypisze ten napis w czterech formach:

    dużymi literami;
    małymi literami;
    pierwsza litera z dużej, pozostałe z małej;
    pierwsza litera każdego słowa z dużej, pozostałe z małej.

Wykorzystaj odpowiednie gotowe funkcje do wypisania każdego słowa.
Przykład:
    ALA MA KOTA
    ala ma kota
    Ala ma kota
    Ala Ma Kota
-->
<?php
function four_forms_of_text($string) {
    $string = strtolower($string);
    echo strtoupper($string);
    echo "<br><br>";
    echo $string;
    echo "<br><br>";
    echo ucfirst($string);
    echo "<br><br>";
    echo ucwords($string);
}
$string = "aLa mA kOTa";
four_forms_of_text($string);
?>