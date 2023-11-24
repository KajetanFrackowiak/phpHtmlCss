<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Przesyłanie rozwiązania zadania</title>
</head>
<body>
<h1>Przesyłanie rozwiązania zadania</h1>
<form method="post" enctype="multipart/form-data" action="process.php">
    <table>
        <tr>
            <td>
                <label for="name">Imię: </label>
                <input type="text" id="name" name="name" required>
                <br><br>
                <label for="surname">Nazwisko: </label>
                <input type="text" id="surname" name="surname" required>
                <br><br>
                <label for="album_number">Numer albumu: </label>
                <input type="text" id="album_number" name="album_number" required>
                <br><br>
                <label for="file_upload">Przesłanie pliku: </label>
                <input type="file" name="file_upload" required>
                <input type="submit" name="submit" value="Przeslij">
            </td>
        </tr>
    </table>
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $album_number = $_POST['album_number'];
    $file_name = $_FILES['file_upload']['name']; //W przypadku pobierania plików przez formularz w PHP, $_FILES['file_upload'] jest tablicą asocjacyjną zawierającą informacje o przesłanym pliku. W przypadku ['name'], jest to klucz tablicy, który przechowuje oryginalną nazwę pliku, który został przesłany przez użytkownika.
    $file_tmp_name = $_FILES['file_upload']['tmp_name']; // tmp name = nazwa tymaczosowa tmp_name jest jednym z pól w tablicy $_FILES, a zawiera nazwę tymczasowego pliku, w którym przesłany plik jest przechowywany.

    $directory_name = $surname . $name[0] . $album_number;
    mkdir($directory_name); //tworzy folder o podanej nazwie

    $file_destination = $directory_name . "/" . $file_name; // tworzy pełną ścieżkę pliku docelowego, do którego zostanie zapisany przesłany plik
    move_uploaded_file($file_tmp_name, $file_destination);
    echo "Plik przesłany i zapisany w folderze " . $directory_name;
}
?>
</body>
</html>