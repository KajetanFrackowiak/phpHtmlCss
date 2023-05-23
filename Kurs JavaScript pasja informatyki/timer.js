function odliczanie() {
    var dzisiaj = new Date();

    var dzien = dzisiaj.getDate();
    var miesiac = dzisiaj.getMonth() + 1;
    var rok = dzisiaj.getFullYear();

    var godzina = dzisiaj.getHours();
    if (godzina < 10) godzina = "0" + godzina;

    var minuta = dzisiaj.getMinutes();
    if (minuta < 10) minuta = "0" + minuta;

    var second = dzisiaj.getSeconds();
    if (second < 10) second = "0" + minuta


    document.getElementById("zegar").innerHTML =
        miesiac + '/' + dzien + '/' + rok + " | " + godzina + ":" + minuta + ":" + second;

    setTimeout("odliczanie()", 1000);
}
