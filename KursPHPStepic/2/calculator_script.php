<?php
if (!empty($_POST['number1']) && !empty($_POST['number2'])) {
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        echo "In form entered numbers: {$_POST['number1']} and {$_POST['number2']}.<br>";
        echo "Result of action:<br>";
        echo "{$_POST['number1']} + {$_POST['number2']} = ";
        echo $_POST['number1'] + $_POST['number2'];
        echo "<br>";
    } else {
        echo "Incorrect data! One or both numbers are incorrect";
    }
} else {
    echo "No data! One or both numbers not given";
}

?>