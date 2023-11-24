function zad3a() {
	document.getElementById('zad3alab2').innerHTML = "5";
	document.getElementById('zad3blab2').innerHTML = "1";
	document.getElementById('zad3clab2').innerHTML = "2";
	document.getElementById('zad3dlab2').innerHTML = "3";
	document.getElementById('zad3elab2').innerHTML = "4";
}

function zad3b() {
	document.getElementById('zad3alab2').innerHTML = "4";
	document.getElementById('zad3blab2').innerHTML = "5";
	document.getElementById('zad3clab2').innerHTML = "1";
	document.getElementById('zad3dlab2').innerHTML = "2";
	document.getElementById('zad3elab2').innerHTML = "3";
}

function zad3b() {
	document.getElementById('zad3alab2').innerHTML = "4";
	document.getElementById('zad3blab2').innerHTML = "5";
	document.getElementById('zad3clab2').innerHTML = "1";
	document.getElementById('zad3dlab2').innerHTML = "2";
	document.getElementById('zad3elab2').innerHTML = "3";
}

function zad3c() {
	document.getElementById('zad3alab2').innerHTML = "3";
	document.getElementById('zad3blab2').innerHTML = "4";
	document.getElementById('zad3clab2').innerHTML = "5";
	document.getElementById('zad3dlab2').innerHTML = "1";
	document.getElementById('zad3elab2').innerHTML = "2";
}

function zad3d() {
	document.getElementById('zad3alab2').innerHTML = "2";
	document.getElementById('zad3blab2').innerHTML = "3";
	document.getElementById('zad3clab2').innerHTML = "4";
	document.getElementById('zad3dlab2').innerHTML = "5";
	document.getElementById('zad3elab2').innerHTML = "1";
}

function zad3e() { 
	document.getElementById('zad3lab2').innerHTML = "1";
    doc
}

function zad3() {
	document.getElementById('zad3lab2').innerHTML = "Dziękuję za ocenę!";
}

/* 
innerHTML to atrybut w obiektach DOM, który określa zawartość wewnętrzną elementu. Atrybut ten umożwia dostęp do zwartości HTML elementu, która znajduje się
między tagami otwierającym i zamykającym. Można go odczytać lun zmieniać za pomocą JavaScript.

Przykładowo, jeśli mamy element HTML:
<div id="myElement">To jest moja zawartość</div>

to możemy odczytać zawartość tego elementu używając JavaScript:
let element = document.getElementById('myElement');
console.log(element.innerHTML); // wyświetli "To jest moja wiadomość"

Możemy również zmienić zawartość elementu:
let element = document.getElementById('myElement');
element.innerHTML = 'Nowa zawartość';
console.log(element.innerHTML); // wyświetli "Nowa zawartość"

Jednak należy pamiętać, że używanie innerHTML może prowadzić do problemów z bezpieczeństwem, poniważ pozwala na wstrzyknięcie kodu HTML z zewnętrznych źródeł,
co może doprowadzić do ataków typu XSS (Cross-Site Scripting). Dlatego zawsze należy uważać i przefiltrowywać dane wprowadzane przez użytkowników, aby uniknąć takich problemów.

Metoda getElementById() jest jednym z najczęściej używanych sposobów na odnalezienie elementów
na stronie za pomocą języka JavaScript. Pozwala ona na znalezieni elementu na stronie po jego atrybucie id
i zwraca ten element jako obiekt, który mozna dalej manipulować.

Na przykład, jęśli mamy na stronie element HTML o atrybucie id równym myElement, to
można go uznać za pomocą:

var myElement = document.getElementById("myElement");

Następnie można manipulować atrybutami, zawartością i stylem tego elementu, używając właściwości i metod tego obieku*/