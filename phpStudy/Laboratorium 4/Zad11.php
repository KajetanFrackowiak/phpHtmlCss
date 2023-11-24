<!--
Zadanie 11. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument napis reprezentujące wartości liczbowe godziny oraz zwróci podzielonego napisu na ':' obramowanego w ramkę składającą się z '*'.
Wykorzystaj odpowiednie gotowe funkcje wygenerowania odpowiedniej liczby znaków '*' oraz podziału napisu na ':'.
Przykład dla:
    082307
Powinno zostać zwrócone:
    **********
    *08:23:07*
    **********
-->
<?php
function whatTimeIsIt($time) {
    $arrOfStars = array();

    for ($i = 0; $i < strlen($time) + 4; $i++) {
        $arrOfStars[$i] = '*';
    }
    foreach ($arrOfStars as $star) {
        echo $star;
    }
    echo "<br>";

    echo '*'.substr(chunk_split($time,2, ':'), 0, -1).'*'; // 0 here is prefix and -1 is suffix.

    echo "<br>";
    foreach ($arrOfStars as $star) {
        echo $star;
    }


}
whatTimeIsIt("082307");
?>

<!--
Prefiks to ciąg znaków dodawany na początku każdej części wynikowej, a sufiks to ciąg znaków dodawany na końcu każdej części wynikowej, w przypadku funkcji chunk_split() w PHP. Oba te argumenty są opcjonalne.

W przypadku funkcji chunk_split($time, 2, ':', 0, -1) prefiks to 0, który zostanie dodany na początku każdej części wynikowej, a sufiks to -1, który zostanie dodany na końcu końcowego ciągu wynikowego.
Można to interpretować jako dodanie znaku 0 przed pierwszą częścią wynikowego ciągu i znaku -1 na końcu ostatniej części.
-->
