<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $kierunek = $_POST['kierunek'];
    $preferowany_kontakt = implode(' ,', $_POST['preferowany_kontakt']);
    $niepelnosparawnosc = $_POST['niepelnosprawnosc'];
    $dodatkowe_informacje = $_POST['dodatkowe_informacje'];

    $message = "Imię: $imie\n"
        . "Nazwisko: $nazwisko\n"
        . "Telefon: $telefon\n"
        . "E-mail: $email\n"
        . "Kierunek: $kierunek\n"
        . "Preferowany kontakt: $preferowany_kontakt\n"
        . "Niepełnosprawność: $niepelnosparawnosc\n"
        . "Dodatkowe informacje: $dodatkowe_informacje";

    // wypisanie przesłanych danych na nowej stronie
    echo "<!DOCTYPE html>\n";
    echo "<html lang=\"en\">\n";
    echo "<head>\n";
    echo "    <meta charset=\"UTF-8\">\n";
    echo "    <title>Przesłane dane</title>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "<h1>Przesłane dane</h1>\n";
    echo "<pre>$message</pre>\n";
    echo "</body>\n";
    echo "</html>";
}
?>