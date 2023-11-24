<!--
Zadanie 3. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument tablicę,
która wypisze jej klucze i wartości, w kolejności posortowanej wg kluczy, w postaci: Klucz klucz,
przyjmuje wartość wartość.
Wykorzystaj odpowiednią funkcje do pobrania kluczy i wartości tablicy.
Przykładowo dla tablicy:
    array("firstName"=>"Łukasz",
    "lastName"=>"Mielewczyk",
    "age"=> "30");
Powinno zostać wypisane:
    Klucz age, przyjmuje wartość 30
    Klucz firstName, przyjmuje wartość Łukasz
    Klucz lastName, przyjmuje wartość Mielewczyk
-->
<?php
$arr = array(
   "firstName" => "Kajetan",
    "lastName" => "Frackowiak",
    "age" => "20"
);
ksort($arr);
foreach ($arr as $key => $value) {

    echo "Klucz $key, przyjmuje wartość $value";
    echo '<br><br>';
}

?>
