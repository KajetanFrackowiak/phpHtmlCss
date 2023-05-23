function odliczanie() {
    var dzisiaj = new Date();


    var godzina = dzisiaj.getHours();
    if (godzina < 10) godzina = "0" + godzina;

    var minuta = dzisiaj.getMinutes();
    if (minuta < 10) minuta = "0" + minuta;

    var second = dzisiaj.getSeconds();
    if (second < 10) second = "0" + minuta


    document.getElementById("zegar").innerHTML =
       godzina + ":" + minuta + ":" + second;

    setTimeout("odliczanie()", 1000);
}
