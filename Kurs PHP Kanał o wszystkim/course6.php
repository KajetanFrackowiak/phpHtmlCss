<?php
if(isset($_GET['num'])) {
    $a = $_GET['num'];
    $result = "Liczba = $a";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 6 - Result</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
<h3>Instrukcje warunkowe - Wynik</h3>

<div class="result">
    <?php
    if(isset($result)) {
        echo $result;
    }
    ?>
</div>

</body>
</html>
