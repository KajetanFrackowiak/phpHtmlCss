<?php
//
//Napisz program który będzie zawierał funkcję która przyjmie jako argument tablicę (array),
// która jako klucz zawiera napis oraz jako wartość napis. Funkcja powinna zwrócic elementy
// tablicy których: klucze zawierają literę 'a' oraz 'o' oraz wartości są palindromami napisami
// które po odwróceniu są takie same np oko


function znajdzPalindromy($array) {
    $result = [];

    foreach ($array as $key => $value) {
        if (strpos($key, 'a') !== false && strpos($key, 'o') !== false && $value === strrev($value)) {
            $result[$key] = $value;
        }
    }

    return $result;
}

// Przykładowa tablica
$array = [
    'ana' => 'oko',
    'kajak' => 'oko',
    'samolot' => 'oko',
    'test' => 'oko',
    'auto' => 'okon',
    'laptop' => 'oko',
];

// Wywołanie funkcji i wyświetlenie wyników
$palindromeElements = znajdzPalindromy($array);
print_r($palindromeElements);
?>
