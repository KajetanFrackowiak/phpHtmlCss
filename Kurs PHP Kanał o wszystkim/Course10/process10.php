<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <link rel="stylesheet" href="style10.css">
</head>
<body>
<div class="result">
    <?php
    $arr = array('Anna', 'James', 'Scott');
    echo $arr[0].'<br>';

    $arr2 = array('red' => 'czerwony', 'green' => 'zielony', 'blue' => 'niebieski');
    echo $arr2['red'] . '<br>';
    echo $arr2['green'] . '<br>';
    echo $arr2['blue'].'<br>';


    $arr4['language']['programming'] = 'php';
    echo $arr4['language']['programming'].'<br><br>';

    var_dump($arr2);
    echo "<br><br>";
    print_r($arr2);
    ?>
</div>
</body>
</html>

