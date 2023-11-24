<!--
Zadanie 6. Napisz skrypt, który będzie zawierał funkcję, która zwróci
zmieniony napis dla napisu reprezentującego adres IP podanego jako argument,
w taki sposób, że usunie wiodące zera sprzed liczby.
Rozwiąż zadanie wykorzystują wyrażenia regularne.
Przykład:
Dla napisu: "216.008.094.196" powinno zostać zwrócone "216.8.94.196".
-->
<?php
function delete_zeros ($IP) {
    return preg_replace('/\b0+(\d+)/', '$1', $IP);
}

echo delete_zeros('216.008.094.196');?>

<!--
\b - dopasowanie granicy słowa, co oznacza, że wiodące zera muszą wystąpić na początku słowa czyli np (IP)
0+ - dopasowanie jednego lub więzej zer
\d+ - dopasowanie jednej lub więcej cyfr po zerach (zapisywanie w grupie)


drugim argumentem 'preg_replace' jest '$1', co oznacza, że funkcja zastąpi dopasowane wyróżnione grupy argumentem
(tutaj tylko jedną grupę) - w tym porzypadku grupą cyfr po zerach. W ten sposób wiodące zera zostą usuniętem a
funkcja zwróci zmodyfikowany adres IP bez wiodących zer
-->
