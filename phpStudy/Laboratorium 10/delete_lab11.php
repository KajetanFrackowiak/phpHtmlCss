<?php
if (isset($_GET['private_key'])) {
    $id = $_GET['private_key'];

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=zadania' , 'root', '');

        $stmt = $pdo->prepare("DELETE FROM osoba WHERE Id = :id");
        $stmt->execute(['id' => $id]);

        header('Location: Zad1.php');
        exit();
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
        exit();
    }
}
