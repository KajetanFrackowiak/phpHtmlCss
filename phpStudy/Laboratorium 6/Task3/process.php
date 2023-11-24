<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Przesylanie obrazka</title>
</head>
<body>
<h1>Przesylanie obrazka</h1>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept=".jpt,.png">
    <input type="submit" name="submit" value="Prześlij">
</form>

<?php
if (!file_exists('uploads')) {
    mkdir('uploads');
}
// Sprawdzenie, czy formularz zostal wyslany
if (isset($_POST['submit'])) {
    // ustawienie sciezki do folderu, w ktorym beda przechowywane obrazy
    $target_dir = "uploads/";
    // ustawienie nazwy pliku
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    // pobranie rozszerzenia pliku
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // sprawdzenie, czy plik jest obrazkiem
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "Plik jest obrazkiem - " . $check["mime"] . ".";
        $uploadOK = 1;
    } else {
        echo "Plik nie jest obrazkiem.";
        $uploadOK = 0;
    }

    // sprawdzenie czy plik juz istnieje
    if (file_exists($target_file)) {
        echo "Plik już istenieje.";
        $uploadOK = 0;
    }

    // sprawdzenie rozmiaru pliku
    if ($_FILES["image"]["size"] > 500000) {
        echo "Plik jest zbyt duzy.";
        $uploadOK = 0;
    }

    // Sprawdzenie, czy plik ma odpowiednie rozszrzenie
    if ($imageFileType != "jpg" && $imageFileType != "png") {
        echo "Dozwolone są tylko pliku JPG i PNG.";
        $uploadOK = 0;
    }

    // Sprawdzenie, czy $uploadOk jest ustawione na 0 z powodu błędów
    if ($uploadOK == 0) {
        echo "Plik nie został przesłany.";
        // Jeśli wszystko jest w porządku, to przesunąć plik do folderu uploads
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "Plik ". basename($_FILES["image"]["tmp_name"]. " został przesłany.");
            // wyswietlenie obrazka
            echo "<br><img src='" . $target_file . "' width='300'>";
        } else {
            echo "Wystąpił błąd podczas przesyłania pliku.";
        }
    }
}
?>
</body>
</html>