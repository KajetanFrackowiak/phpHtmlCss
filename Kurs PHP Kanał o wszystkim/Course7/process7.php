<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 7</title>
    <link rel="stylesheet" href="style7php.css">
</head>
<body>
<div class="result">
    <?php
        if(isset($_GET['num']) and is_numeric($_GET['num'])) {
            $day = $_GET['num'];
            echo "<br>Day = $day, ";

            switch ($day) {
                case 1:
                    echo '<br>Today is Monday.';
                    break;
                case 2:
                    echo '<br>Today is Tuesday.';
                    break;
                case 3:
                    echo '<br>Today is Wednesday.';
                    break;
                case 4:
                    echo '<br>Today is Thursday.';
                    break;
                case 5:
                    echo '<br>Today is Friday.';
                    break;
                case 6: case 7:
                    echo '<br>Today is Weekend.';
                    break;
                default:
                    echo '<br>It is not a day of the week!.';
                    break;
            }
        } else {
            echo 'You did not give a number';
        }
    ?>
</div>
</body>
</html>
