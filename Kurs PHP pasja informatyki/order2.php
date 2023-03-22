<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Podstumowanie zamówienia</title>
</head>

<body>

<?php
    $paczkow = $_POST['paczkow']; //To specjalna tablice gdzie zostaną przesłane wszystkie dane z przesłanego formularza  a do tablicy trzeba podać nazwę tego co ma być tam przesłane czyli jak było w html napisane name="paczkow" na input paczki to tutaj wlasnie to trzeba wpsiac
    $grzebieni = $_POST['grzebieni'];
    $suma = 0.99*$paczkow + 1.29*$grzebieni;
//zamiast w kółko pisać echo, możemy napisać echo<<<END i będzie to w każdym wierszu na początku automatycznie pisało echo aż nie napotka END;
//żeby to działało ten napis nie może być poprzedzony żadnym znakiem czy tabem czy nawet spacją i tak samo END;
echo<<<END
    <h2>Podsumowanie zamówienia</h2>
    <table border="1" cellpadding="10" cellspacing="0"> <!--table border="1" to tabela grubości 1, cell(komórka)padding(wypełnienie), cellpadding="10" zrobi, że będzie w każdej komórce wokół tekstu 10px wolnego miejsc, cellspasing (odsęp pomiędzy komórkami)-->
    <!-- <td></td> = konórka tabeli, <tr></tr> = cały wiersz. tr zamyk nam wiersz i powoduje przejście do nowej linii -->
    <tr> <!--pierwszy wiersz-->
        <td>Pączek (0.99PLN/szt)</td><td>$paczkow</td> <!-- dwie komórki -->
    </tr><!--pierwszy wiersz-->
    <tr>
        <td>Grzebień (1.29PLN/szt)</td><td>$grzebieni</td>
    </tr>
    <tr>
        <td>SUMA</td><td>$suma PLN</td>
    </tr>
    </table>
    </br><a href="index2.php">Powrót do strony głównej</a> <!-- hiperłącze powrotu -->
END;

?>

</body>
</html>