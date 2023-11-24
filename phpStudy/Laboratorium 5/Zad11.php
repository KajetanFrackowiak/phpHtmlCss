<!--Zadanie 11. Napisz skrypt, który znajdzie z pliku wiersz.txt, -->
<!--słowa zawierają dokładnie 3 znaki a oraz wpisze je do pliku slowa.txt.-->
<!--Rozwiąż zadanie wykorzystują wyrażenia regularne.-->
<!--\b word boundary-->
<?php
$from = fopen("wiersz.txt", "r");
$to = fopen("slowa.txt", "w");

while (($line = fgets($from)) !== false) {
    preg_match_all("/\b[aA]{3}\b/", $line, $matches);

    foreach ($matches[0] as $word) {
        fwrite($to, $word . "\n");
    }
}

fclose($from);
fclose($to);

?>


