<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$operacja = $_POST['operacja'];
switch ($operacja) {
    case "+":
        $wynik = $liczba1 + $liczba2;
        echo "Liczba 1: $liczba1<br><br>Liczba 2: $liczba2<br><br><br>$liczba1 + $liczba2 = $wynik";
        break;
    case "-":
        $wynik = $liczba1 - $liczba2;
        echo "Liczba 1: $liczba1<br><br>Liczba 2: $liczba2<br><br><br>$liczba1 + $liczba2 = $wynik";
        break;
    case "*":
        $wynik = $liczba1 * $liczba2;
        echo "Liczba 1: $liczba1<br><br>Liczba 2: $liczba2<br><br><br>$liczba1 + $liczba2 = $wynik";
        break;
    case "/":
        if ($liczba2 == 0) {
            echo "Nie można dzielić przez zero!";
        } else {
            $wynik = $liczba1 / $liczba2;
            echo "Liczba 1: $liczba1<br><br>Liczba 2: $liczba2<br><br><br>$liczba1 + $liczba2 = $wynik";
        }
        break;
    default:
        echo "Nieznana operacja!";
    }
?>
</body>
</html>


<!--switch($operacja) {-->
<!--case "+":-->
<!--$wynik = $liczba1 + $liczba2;-->
<!--echo "Liczba 1: $liczba1 <br> Liczba 2: $liczba2 <br> $liczba1 + $liczba2 = $wynik";-->
<!--break;-->
<!--case "-":-->
<!--$wynik = $liczba1 - $liczba2;-->
<!--echo "Liczba 1: $liczba1 <br> Liczba 2: $liczba2 <br> $liczba1 - $liczba2 = $wynik";-->
<!--break;-->
<!--case "*":-->
<!--$wynik = $liczba1 * $liczba2;-->
<!--echo "Liczba 1: $liczba1 <br> Liczba 2: $liczba2 <br> $liczba1 * $liczba2 = $wynik";-->
<!--break;-->
<!--case "/":-->
<!--if($liczba2 == 0) {-->
<!--echo "Nie można dzielić przez zero!";-->
<!--} else {-->
<!--$wynik = $liczba1 / $liczba2;-->
<!--echo "Liczba 1: $liczba1 <br> Liczba 2: $liczba2 <br> $liczba1 / $liczba2 = $wynik";-->
<!--}-->
<!--break;-->
<!--default:-->
<!--echo "Nieznana operacja!";-->
<!--}-->
<!--?>-->
