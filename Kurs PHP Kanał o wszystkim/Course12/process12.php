<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Average grades</title>
    <link rel="stylesheet" href="style12.php.css"
</head>
<body>
<?php
if (isset($_GET['num']) and !empty($_GET['num'])) {
    $a = $_GET['num'];
    $arr = explode(",", $a);
//    var_dump($arr);
//    echo "<br><br>";
//    var_dump(is_array($arr));
//    echo "<br><br>";
//    print_r($arr);
//    echo "<br><br>";

    $sum = 0;
    $i = 0;
    if (is_array($arr)) {
        foreach ($arr as $item) {
            if (is_numeric($item) and $item >= 1 and $item <= 6) {
                $sum += $item;
                $i++;
            }
        }
    }
    if ($i > 0) {
        echo "Average rating is: " . round($sum / $i,2);
    } else {
        echo "No rating given<br>";
    }
} else {
    echo '<br>Not rating given';
}
?>
</body>
</html>
