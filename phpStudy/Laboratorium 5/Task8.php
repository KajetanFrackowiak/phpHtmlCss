<!--Zadanie 8. Napisz skrypt, który będzie zawierał funkcję, która zwróci zmieniony napis dla napisu reprezentującego datę podanego jako argument,
w taki sposób, że zwróci zwróci jego napis ze słownie wypisanym miesiącem. Rozwiąż zadanie wykorzystują wyrażenia regularne.-->
<!--Przykład:-->
<!--Dla napisów: "8.3.2023", "8-3-2023", "8/3/2023" (data może być podana w różnych formatach i z wiodącymi zerami) powinno zostać zwrócone "8 marzec 2023".-->
<!--0? - matches an optional leading zero (i.e., zero or one occurrence of the character '0')-->
<!--(\d) - creates a capturing group that matches any single digit (0-9)-->
<!--\. - matches a period character (escaped with a backslash) that separates the day, month, and year components of the date-->
<!--0? - matches an optional leading zero before the month component-->
<?php


function formatDate($dateStr) {
    // Sprawdzenie czy data jest w formacie dd.mm.yyyy, dd-mm-yyyy, dd/mm/yyyy
    if (preg_match('/^(\d{1,2})[.\-\/](\d{1,2})[.\-\/](\d{4})$/', $dateStr, $matches)) {
        // Stworzenie tablicy z nazwami miesięcy
        $months = array(1=>'styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień');

        // Zmiana numeru miesiąca na nazwę miesiąca
        $monthName = $months[intval($matches[2])];

        // Zwrócenie sformatowanej daty
        return sprintf("%d %s %d", intval($matches[1]), $monthName, intval($matches[3]));
    }

    // Jeśli data nie jest w poprawnym formacie, zwracamy null
    return null;
}

echo formatDate('8-3-2023')

?>