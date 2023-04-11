<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson14</title>
    <link rel="stylesheet" href="style14.php.css">
</head>
<body>
<h3>Functions</h3>
<?php
$first = $_POST['num1'];
$second = $_POST['num2'];
function hello()
{
    echo "Hello world<br>";
}
hello();
echo '<br>';

function add($a, $b)
{
    return $a + $b;
}

echo 'Addition result: ' . add($first, $second) . '<br>';

function mul($a, $b)
{
    $res = $a * $b;
    return $res;
}

echo 'Multiplication result: ' . mul($first, $second) . '<br>';

?>
</body>
</html>
