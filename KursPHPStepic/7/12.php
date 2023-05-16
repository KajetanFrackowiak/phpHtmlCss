<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Task 12</title>
</head>
<body>
<form action="12.php" method="POST" id="myForm">
    <label for="birthday">Podaj rok urodzenia: </label>
    <input type="date" name="birthday" id="birthday"><br>
    <label for="time_zone">Podaj strefę czasową: </label>
    <input type="text" name="time_zone" id="time_zone"><br>
    <button name="send">Send</button><br>
</form>
<?php
if (isset($_POST['birthday'])) {
    $birthday = new DateTime($_POST['birthday']);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthday)->y;

    echo "Wiek użytkownika urodzonego w {$birthday->format('Y-m-d')}: $age<br>";
}
if (isset($_POST['time_zone'])) {
    $time_zone = $_POST['time_zone'];
    date_default_timezone_set($time_zone);
    $local_time = date('Y-m-d H:i:s');
    echo "Czas lokalny: $local_time<br>";
}
?>
<form action="12.php" method="POST" id="mySecondForm">
    <label for="firstDate">Podaj pierwszą datę</label>
    <input type="date" name="firstDate" id="firstDate"><br>
    <label for="secondDate">Podaj drugą datę</label>
    <input type="date" name="secondDate" id="secondDate"><br>
    <button name="send">Send</button>
</form>
<?php
if (isset($_POST['firstDate']) and isset($_POST['secondDate'])) {
    $firstDate = new DateTime($_POST['firstDate']);
    $secondDate = new DateTime($_POST['secondDate']);

    $workingDays = 0;

    while ($firstDate <= $secondDate) {
        $dayOfWeek = $firstDate->format('N');

        // check if the dat is a working day
        if ($dayOfWeek >= 1 && $dayOfWeek <= 5) {
            $workingDays++;
        }

        $firstDate->modify('+1 day');
    }
    echo "Liczba dni roboczych między tymi datami {$firstDate->format('Y-m-d')} oraz {$secondDate->format('Y-m-d')} wynosi: $workingDays";
}
?>
</body>
</html>