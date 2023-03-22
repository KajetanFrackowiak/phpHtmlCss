<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
</head>
<body>


<?php /* wszystko od tąd do ?> zostanie zabrane i przesłanie do interpretera PHP zainstalowanego na serverze i z tamtąt tylko odpowiedź z interpretera do użytkownika */
    //zmienna imie (do zmiennych w php trzeba przed $)
    $imie = "Kajetan";
    $nazwisko = "Frąckowiak";

    echo "Witaj Heisenger";
    //echo '<img src="https://fizyka.uniedu.pl/wp-content/uploads/2017/10/Werner-Heisenberg-mechanika-kwantowa-teoria-nieoznaczono%C5%9Bci-240x300.jpg"';
    echo " $imie $nazwisko ";
    echo '$imie $nazwisko';
    echo $imie.`,witaj na stronie!`; //jest to konkatenacja czyli sklejenie 2 napisów w ciąg. Do klejenia łacuchów w PHP służy atrybut kropki
    ?>

</body>
</html>
