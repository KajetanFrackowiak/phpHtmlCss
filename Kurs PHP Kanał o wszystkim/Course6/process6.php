<!DOCTYPE html>
<html lang="pl">
 <head>
  <meta charset="utf-8">
  <title>Lesson 6</title>
    <link rel="stylesheet" href="style6php.css">
 </head>
 <body>
<div class="result">
    <?php
    if(isset($_GET['num']) and is_numeric($_GET['num'])) {
        $a = $_GET['num'];
        echo "<br><br>Liczba = $a";

        if($a % 2 == 0) {
         echo '<br><br>The number is even.';
        } else {
         echo '<br><br>The number is odd.';
        }

        if ($a > 0) {
         echo '<br>The number is bigger than zero.';
        } else if ($a == 0) {
         echo '<br>The number is equal to zero.';
        } else if ($a < 0) {
         echo '<br>The number is less than zero.';
        }

        echo $a % 3 == 0 ? '<br>This number is divisible by three.' : '<br>This number is not divisible by three.';
    } else {
        echo '<br>Not number given';
    }
    ?>
</div>
 </body>
</html>
