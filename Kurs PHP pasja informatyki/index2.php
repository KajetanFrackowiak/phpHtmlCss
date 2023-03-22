<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Piekarnia</title>
</head>

<body>
<form action="order.php" method="post"> <!-- by potraktować wszystkie inputy jako jedność to musimy z tego zrobić formularz. Co do znaczników otwierających formularz to używamy
 action i wpisujemy nasz php do którego mają trafić czyli wsm tutaj właśnie nasz plik(trafią tam wszystkie dane wpisane w ten formularz)
 Ale ja wolę nowy zrobić php do tego
 Formularz musi mieć dwa atrybuty a drugim jest metoda czyli method (do przesyłania danych do pliku wskazanego w action)
 można tam umieście `get` co zrobi, że do ścieżki wpisane by były jeszcze inne rzeczy by wyglądało
 localhost/PHP1/order.php?paczkow=7&grzebieni=10
 my użyjemy `post` by dane zostały posłane w postaci niejawnej  -->

    <h1>Zamówienie online</h1>
    Ile pączków (0.99 PLN/szt):
    <input type="text" name="paczkow"/>
    <br/><br/>

    Ile grzebieni (1.29 PLN/szt):
    <input type="text" name="grzebieni"/>
    <br/><br/>
    <input type="submit" value="Wyślij zamówienie"/> <!-- submit dostarczyć, value czyli wartość na nim przycisku/nazwa -->

</form>
</body>
</html>