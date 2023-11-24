<?php
$mysqli = new mysqli("localhost", "root", "", "zadania");

if ($mysqli->connect_error) {
    die("Failed database connection" . $mysqli->connect_error);
}
if (isset($_POST['stanowisko'])) {
    $stanowisko = $_POST['stanowisko'];

    $updateQuery = "
    UPDATE Osoba
    Set Id_stanowisko = NULL
    WHERE  Id_stanowisko IN (
      SELECT Id
      FROM Stanowisko
      WHERE Nazwa = ?
    )
    ";

    $stmtUpdate = $mysqli->prepare($updateQuery);
    $stmtUpdate->bind_param('s', $stanowisko); // przypisywanie parametrow
    $stmtUpdate->execute();// wykonanywanie zadania
    $stmtUpdate->close();

    // usuniecie stanowiska
    $deleteQuery = "
    DELETE FROM Stanowisko
    WHERE Nazwa = ?
    ";

    $stmtDelete = $mysqli->prepare($deleteQuery);
    $stmtDelete->bind_param('s', $stanowisko); //przypisawanie parametrow
    $stmtDelete->execute(); // wykonywanie zadania
    $stmtDelete->close();
}

$mysqli->close();
?>

<form action="index8.php" method="POST">
    <label for="stanowisko">Stanowisko: </label>
    <input type="text" name="stanowisko" id="stanowisko">
    <button type="submit">Wyślij</button>
</form>
