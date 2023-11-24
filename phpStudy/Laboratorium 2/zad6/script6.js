var liczby = [];

function dodajLiczbe() {
    var poleLiczby = document.getElementById("liczba");
    var liczba = Number(poleLiczby.value);
    if (!isNaN(liczba)) {
        liczby.push(liczba);
        poleLiczby.value = "";
        aktualizujListeLicz();
        obliczStatystyki();
    }
}

function aktualizujListeLicz() {
    var listaLiczb = document.getElementById("listaLiczb");
    listaLiczb.innerHTML = "";
    liczby.sort(function (a,b){return a-b});
    for (var i = 0; i < liczby.length; i++) {
        var elementListy = document.createElement("li")
        elementListy.appendChild(document.createTextNode(liczby[i]));
        listaLiczb.appendChild(elementListy);
    }
}

function obliczStatystyki() {
    var suma = 0;
    for (var i = 0; i < liczby.length; i++) {
        suma += liczby[i];
    }
    var srednia = suma / liczby.length;
    document.getElementById("suma").innerHTML = "Suma: " + suma;
    document.getElementById("srednia").innerHTML = "Średnia: " + srednia;
}


/*
W tym kodzie zdefiniowaliśmy funkcję dodajLiczbe(), która pobiera wartość z pola tekstowego, konwertuje ją na liczbę i dodaje do tablicy liczby, jeśli jest to liczba. Następnie wywołujemy funkcje aktualizujListeLiczb()
i obliczStatystyki() w celu odświeżenia wyświetlanych danych.

Funkcja aktualizujListeLiczb() sortuje tablicę liczby, a następnie tworzy elementy listy HTML i dodaje je do listy w dokumencie.
*/



/*
Słownik:
"var" to słowo kluczowe w JS które służy do deklarowania zmiennych np var x = 5

funkcja "isNaN()" w JS służy do sprawdzania, czy dany argument jest liczbą. Zwraca wartość true, jeśli nie jest liczbą, oraz false, jeśli jest.
np:
isNaN("abc"); // true
isNaN("123"); // false
W przypadku przekazania argumentu, który nie jest typu number, funkcja isNaN() próbuje przekonwertować ten argument na liczbę, a następnie
sprawdza, czy wartość jest liczbą. Jeśli konwersja się nie powiedzie funkcja zwróci wartość true, np. dla argumentu "abc

 innerHTML pobiera kod HTML znajdujący się w pliku HTML
 Linia kodu listaLiczb.innerHTML = ""; usuwa całą zawartość elementu o identyfikatorze "listaLiczb". Element ten został zdefiniowany w pliku HTML jako lista nieuporządkowana (unordered list) za pomocą znacznika <ul>.
 W JavaScript, korzystając z właściwości innerHTML, możemy zastąpić lub zaktualizować zawartość elementu HTML. Przypisanie pustego łańcucha znaków ("") do właściwości innerHTML usuwa wszystkie dzieci elementu,
 w tym wszystkie elementy listy nieuporządkowanej w naszym przypadku.
 */