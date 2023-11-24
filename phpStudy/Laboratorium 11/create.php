<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=zadania', 'root', '');

        $stmt = $pdo->prepare('INSERT INTO osoba (Imie, Nazwisko, Pesel, Data_urodzenia, Plec)
            VALUES (:Name, :Surname, :Pesel, :Birthdate, :Gender);');

        $name = $_POST['Name'];
        $saveValueName = htmlspecialchars($name);
        $surname = $_POST['Surname'];
        $saveValueSurname = htmlspecialchars($surname);
        $pesel = $_POST['Pesel'];
        $saveValuePesel = htmlspecialchars($pesel);
        if (strlen($saveValuePesel) != 11) {
            throw new Exception('Invalid PESEL length');
        }
        $birthdate = $_POST['Birthdate'];
        $saveValueBirthdate = htmlspecialchars($birthdate);
        $dateString = $saveValueBirthdate;
        $separator = ' ';
        $timestamp = strtotime(str_replace($separator, '-', $dateString));
        $formattedSaveDate = date('d-m-Y', $timestamp);

        $gender = $_POST['Gender'];

        $stmt->bindParam(':Name', $saveValueName);
        $stmt->bindParam(':Surname', $saveValueSurname);
        $stmt->bindParam(':Pesel', $saveValuePesel);
        $stmt->bindParam(':Birthdate', $formattedSaveDate);
        $stmt->bindParam(':Gender', $gender);

        $stmt->execute();

        // Set the response status code to 201 (Created)
        http_response_code(201);

        // Return a success message or the newly created person's ID
        $response = [
            'status' => 'success',
            'message' => 'Person created successfully'
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    } catch (PDOException $e) {
        // Set the response status code to 500 (Internal Server Error)
        http_response_code(500);
        $response = [
            'status' => 'error',
            'message' => 'An error occurred while connecting to the database: ' . $e->getMessage()
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    } catch (Exception $e) {
        // Set the response status code to 400 (Bad Request)
        http_response_code(400);
        $response = [
            'status' => 'error',
            'message' => 'Error: ' . $e->getMessage()
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // Błąd - nieobsługiwana metoda żądania
    $response = [
        'status' => 'error',
        'message' => 'Invalid request method'
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
