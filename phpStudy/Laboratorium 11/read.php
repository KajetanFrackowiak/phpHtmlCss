<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=zadania', 'root', '');

        $personId = $_GET['personId'];

        $stmt = $pdo->prepare('SELECT * FROM osoba WHERE id = :personId');
        $stmt->bindParam(':personId', $personId);
        $stmt->execute();

        $person = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($person) {
            // Set the response status code 200 (OK)
            http_response_code(200);

            // Return the person data as JSON
            header('Conent-Type: application/json');
            echo json_encode($person);
        } else {
            // Set the response status code to 404 (Not found)
            http_response_code(404);
        }
    } catch (PDOException $e) {
        // Set the response status code to 500 (Internal Server Error)
        http_response_code(500);
        echo 'An error occurred while connecting to the database: ' . $e->getMessage();
    }
} else {
    // Error - unsupported request method
    $response = [
        'status' => 'error',
        'message' => 'Invalid request method'
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}