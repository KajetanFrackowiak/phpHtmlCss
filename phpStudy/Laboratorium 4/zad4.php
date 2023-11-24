<!--
Zadanie 4. Napisz skrypt, który będzie zawierał funkcję przyjmującą jako argument tablicę oraz
element tablicy oraz zwróci tablicę zawierającą k najmniejszych i największych wartości,
z pominięciem powtarzalnych wartości.
Wykorzystaj odpowiednie gotowe funkcje do sortowania, "scalania" tablic, czy usunięcia powtórzeń.
Przykładowo dla k=5 tablicy:
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
    73, 75, 79, 73
Powinna zostać zwrócona tablica z wartościami:
    60, 62, 63, 64, 65, 75, 76, 78, 79, 85
-->
<?php
$arr = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
    73, 75, 79, 73
);

//asort - sortownie tablicy rosnąco wg wartości.
//arsort - sortownie tablicy malejąco wg wartości.
//array_values - zwraca tablicę zawierającą wartości tablic.
$arr = array_unique($arr);

asort($arr);
$arr = array_values($arr);
$k = 5;
for ($i = 0; $i < $k; $i++) {
    echo $arr[$i] . ",";
}

arsort($arr);
$arr = array_values($arr);
for ($i = 0; $i < $k - 1; $i++) {
    echo $arr[$i] . ",";
}
echo $arr[$k-1];
?>
