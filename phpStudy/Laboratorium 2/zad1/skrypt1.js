function ShowName() {
    var firstName = "Kajetan";
    var lastName = "Frąckowiak"
    var fullName = firstName + " " + lastName;
    document.getElementById("name").innerHTML = fullName
    
}

/* `innerHTML` to właściwość obiektów HTML, takich jak elementy strony internetowej. Właściwość innerHTML umożlwia pobranie lub ustawienie zawartości elementu jako kod HTML  
    Metoda getElementByld() zwraca pierwszego potomka będącego elementem z określonym unikatowym
    identyfikatorem, który znajduje się w danym węźle (zgodnie z porządkiem drzewa). Jeśli węzeł nie posiada potomka
    spęłniającego te wymagania to zwrócona zostanie wartość null
*/