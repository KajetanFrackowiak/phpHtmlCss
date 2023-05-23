<?php
session_start();

// Sprawdzenie, czy dane formularza zostały przesłane
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobranie wartości z formularza
    $direction = $_POST['direction'];
    $pixels = $_POST['pixels'];

    // Aktualizacja pozycji figury na podstawie wybranego kierunku i liczby pikseli
    if (isset($_SESSION['figure_position'])) {
        $figurePosition = $_SESSION['figure_position'];
        switch ($direction) {
            case 'up':
                $figurePosition['y'] -= $pixels;
                break;
            case 'down':
                $figurePosition['y'] += $pixels;
                break;
            case 'left':
                $figurePosition['x'] -= $pixels;
                break;
            case 'right':
                $figurePosition['x'] += $pixels;
                break;
        }
    } else {
        // Jeśli pozycja figury nie istnieje w sesji, ustawiamy domyślną pozycję (0, 0)
        $figurePosition = ['x' => 0, 'y' => 0];
    }

    // Zapisanie nowej pozycji figury w sesji
    $_SESSION['figure_position'] = $figurePosition;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Poruszanie się figury</title>
    <style>
        .figure {
            position: relative;
            width: 100px;
            height: 100px;
            background-color: red;
        }
    </style>
</head>
<body>
<h1>Poruszanie się figury</h1>

<form method="POST">
    <label for="direction">Wybierz kierunek:</label>
    <select name="direction" id="direction">
        <option value="up">Góra</option>
        <option value="down">Dół</option>
        <option value="left">Lewo</option>
        <option value="right">Prawo</option>
    </select>

    <br>

    <label for="pixels">Podaj ilość pikseli:</label>
    <input type="number" name="pixels" id="pixels" min="1" required>

    <br>

    <input type="submit" value="Przesuń">
</form>

<br>

<?php
if (isset($_SESSION['figure_position'])) {
    $figurePosition = $_SESSION['figure_position'];
    echo '<div class="figure" style="top: ' . $figurePosition['y'] . 'px; left: ' . $figurePosition['x'] . 'px;"></div>';
}
?>

</body>
</html>