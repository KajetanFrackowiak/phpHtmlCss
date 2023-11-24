<!--Zadanie 10. Napisz skrypt, który znajdzie z pliku wiersz.txt, słowa zaczynające się na p i -->
<!--kończące na a lub zaczynające się na g i kończące na e oraz wpisze je do pliku slowa.txt. -->
<!--Rozwiąż zadanie wykorzystują wyrażenia regularne.-->
<?php
// otwieramy plik do odczytu
$handle = fopen("wiersz.txt", "r");

// otwieramy plik do zapisu
$output = fopen("slowa.txt", "w");

// iterujemy po każdej linii w pliku wiersz.txt
while (($line = fgets($handle)) !== false) {

    // wyszukujemy słowa zaczynającego się na p i kończącego na a lub
    // zaczynające się na g i kończące na e

    preg_match_all("/\b(p\w*a|g\w*e)\b/", $line, $matches);

    // zapisujemy znalezione słowa do pliku slowa.txt
    foreach ($matches[0] as $word) {
        fwrite($output, $word, "\n"); // fwrite - wypisywanie do zawartosci pliku
    }
}

// zamykamy pliki
fclose($handle);
fclose($output);
?>
<!--\b - granica słowa (spacja, znak nowej linii, kropka, przecinek itp.) (odpowiednik [[:<:]]|[[:>:]]).-->
<!--* - zero lub więcej poprzedzających znaków.-->
<!--| - dowolny z rozdzielonych znakiem wzorzec.-->
<!--fopen - otwieranie pliku.-->
<!--fgets() to funkcja w PHP służąca do odczytu pojedynczej linii z pliku tekstowego. Funkcja ta pobiera dane z pliku w kolejności, w jakiej zostały zapisane, aż do napotkania znaku nowej linii (\n) lub osiągnięcia maksymalnej liczby bajtów do odczytu.-->
<!---->
<!--Funkcja fgets() zwraca odczytaną linię jako łańcuch znaków (string) lub false w przypadku, gdy nastąpił koniec pliku lub wystąpił błąd.-->
