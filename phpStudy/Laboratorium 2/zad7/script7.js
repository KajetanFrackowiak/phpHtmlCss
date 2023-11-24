/*Metoda querySelectorAll oraz metoda getElementById są używane w języku JavaScript do odnajdywania elementów HTML na stronie internetowej.

Metoda getElementById zwraca element o określonym identyfikatorze z dokumentu HTML. Jeśli nie ma elementu o podanym identyfikatorze, metoda zwróci null.

Metoda querySelectorAll zwraca kolekcję elementów HTML, które pasują do określonego selektora CSS. Zwraca ona NodeList, co oznacza, że można na nim używać metod,
takich jak forEach(), ale nie można używać na nim metod, takich jak push() lub pop(). */
const buttons = document.querySelectorAll("button");
const result = document.getElementById("result");
let playerScore = 0;
let computerScore = 0;
/*
let to słowo kluczowe w języku JavaScript służące do deklarowania zmienny. Podobnie jak var, let pozwala na tworzenie zmiennycj, ale wprowadza pewne różnice w zakresie widoczności (scope) i hoisitngu.
Główna różnica między var a let polega na tym, że zmienne zadeklarowane z var są widoczne w całej funkcji, podczas gdy zmienne zadeklarowane z let są widoczne tylko w bloku, w którym
został zostały zadeklarowane (bloku zasięgu). Ponadto zmienne zadeklarowane z let nie są hoistowane, co oznacza, że nie są dostępne przed zadeklarowaniem. NP:
function exampleFunction() {
  let x = 1; // zmienna x jest widoczna tylko w tej funkcji
  if (true) {
    let y = 2; // zmienna y jest widoczna tylko w tym bloku
    console.log(x, y); // wyświetli: 1 2
  }
  console.log(x, y); // błąd: y nie jest widoczna w tym miejscu
}

exampleFunction();
 */
buttons.forEach((button) => {
    button.addEventListener("click", () => {
        const playerSelection = button.id;
        const computerSelection = computerPlay();
        const roundResult = playRound(playerSelection, computerSelection);
        result.textContent = roundResult;
        updateScore(roundResult);
        checkForWinner();
    });
});

function computerPlay() {
    const choices = ["rock", "paper", "scissors"];
    const randomIndex = Math.floor(Math.random() * choices.length);
    return choices[randomIndex];
}

function playRound(playerSelection, computerSelection) {
    if (playerSelection === computerSelection) {
        return "Remis!";
    } else if (
    (playerSelection === "rock" && computerSelection === "scissors") || (playerSelection === "paper" && computerSelection === "rock") || (playerSelection === "scissors" && computerSelection === "paper")
    ) {
        return `Wygrałeś rundę! ${playerSelection} pokonuje ${computerSelection}".`;
    } else {
        return `Przegrałeś rundę! ${computerSelection} pokonujer ${playerSelection}.`
    }
}

function updateScore(roundResult) {
    if (roundResult.startsWith("Wygrałeś")) {
        playerScore++;
    } else if (roundResult.startsWith("Przegrałeś")) {
        computerScore++;
    }
}

function checkForWinner() {
    if(playerScore === 10) {
        result.textContent = "Gratulacje, wygrałeś grę!";
        disableButtons();
    } else if (computerScore === 10) {
        result.textContent = "Niestety, przegrałeś grę!";
        disableButtons();
    }
}

function disableButtons() {
    buttons.forEach((button) => {
        button.disable = true;
    });
}
/* słownik:
1.forEach to metoda tablicy JS, która wykonuje określoną funkcję dla każdego elementu w tablicy
2.addEventListener to metoda JS, która służy do dodawania funkcji obsługi zdarzeń do elementów HTML, takich jak przyciski lub pola tekstowe. Funkcja obsługi zdarzeń
jesty wywoływana, gdy użytkownik wykonuje określone działanie, takie jak kliknięcie przycisku.
3. ` () => ` jest to tzw funkcja strzałkowa, która służy do definiowania funkcji w JS. Jest krótrza i bardziej zwięzła składnia niż tradycyjna funkcja JS
4.computerPLay to funkcja, która symuluje ruch komputera w grze. W zależności od wybranej gry, funkcja ta może lsoować liczbę, wybierać losowy ruch, lub podejmować decyzję na podstawie algorytmu.
5. checkForWinner to funkcja sprawdzam czy w grze został osiągnirty stan wygrywający. W zalezności od wybranej gry, funkcja ta może sprawdzać, czy została ułożona odpowiednia
kombinacja symboli, czy suma wyników graczy osiągneła określoną wartość itp.
6. upadateScore to funkcjam która aktualizuje wynik gry. W zależności od wybranej gry, funkcja ta może zwiększać licznik punktów gracza, aktualizowac wynik komputera
lub zmieniac wartości innych zmiennych związanych z grą.
7.Metoda startsWith() jest jedną z wbudowanych metod w języku JavaScript dla typu danych łańcuchowych (string). Pozwala ona na sprawdzenie, czy dany łańcuch tekstowy rozpoczyna się od określonego fragmentu, który podajemy jako argument do tej metody.

Metoda startsWith() zwraca wartość typu boolean, czyli true lub false. Jeśli dany łańcuch tekstowy rozpoczyna się od określonego fragmentu, to metoda zwróci wartość true, w przeciwnym przypadku zwróci wartość false.

Przykład użycia:

const text = "Witaj świecie!";
console.log(text.startsWith("Witaj")); // true
console.log(text.startsWith("świecie")); // false
W powyższym przykładzie metoda startsWith() jest wywoływana na zmiennej text, która zawiera łańcuch tekstowy "Witaj świecie!". Pierwsze wywołanie metody sprawdza, czy łańcuch tekstowy rozpoczyna się od fragmentu "Witaj". Ponieważ jest to prawda,
to metoda zwraca wartość true. Drugie wywołanie metody sprawdza, czy łańcuch tekstowy rozpoczyna się od fragmentu "świecie". Ponieważ nie jest to prawda, to metoda zwraca wartość false.
 */