<?php

//Napisz program który będzie zawierał funkcję która przyjmie jako argument napis który będzie zawierał słowa rodzielone spacją,
// Następnoie wstawi znak % na początku i na końcu każdego słowa które zawiera co najmniej 5 znaków oraz zaczyna się na h i kończy
// na o lub zaczyna się na g i trzecią literę ma a bez rozróżniania wielkości liter,
// rozwiąż zadanie korzystając jedynie z gotowych funkcji powiązanych z wyrażeniami regularnymi.
// np dla napisu ala hooooooo paaaa Gaaaamaaa" zwrócone zostanie: ala %hooooooo% paaaa %Gaaaamaaa%
function modifyString($string) {
    // Wstawienie znaku % na początku i końcu słów spełniających warunki
    $pattern = '/\b([hH]\w*a\w*o\w*\b|\bg\w*a\w*\b)\b/';
    $replacement = '%$1%';
    $modifiedString = preg_replace($pattern, $replacement, $string);

    return $modifiedString;
}

$originalString = "ala hooooooo paaaa Gaaaamaaa";
$modifiedString = modifyString($originalString);
echo $modifiedString;
