<!--Zadanie 12. Napisz skrypt, który znajdzie z pliku wiersz.txt, słowa takie, że -->
<!--przed znakiem d znajduje się od 2-óch do 4-ech innych dowolnych znaków oraz wpisze je do pliku slowa.txt.-->
<!--Rozwiąż zadanie wykorzystują wyrażenia regularne.-->
<?php
$from = fopen("wiersz.txt", "r");
$to = fopen("slowa.txt", "w");

while(($line = fgets($from)) !== false) {
    preg_match_all("/\b.{2,4}d\b/", $line, $matches); //fgets() zwraca odczytaną linię jako łańcuch znaków

    foreach ($matches[0] as $word) {
        fwrite($to, $word . "\n");
    }
}
fclose($from);
fclose($to);
?>