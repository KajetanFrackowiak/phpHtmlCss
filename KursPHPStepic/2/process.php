<?php
$input_array = readline();
$input_array = explode(",", $input_array);
$input_array = array_map('intval', $input_array);
$sum = 0;
foreach ($input_array as $value) {
    $sum += $value;
}
$arithmetic_average = round($sum / count($input_array), 2);
$arithmetic_average = number_format($arithmetic_average, 2, '.', '');
asort($input_array);
$uniqueArrASC = array_slice(array_unique($input_array),0, 5);
$fiveSmallest = implode(" ", $uniqueArrASC);


arsort($input_array);
$uniqueArrDESC = array_slice(array_unique($input_array), 0, 5);
asort($uniqueArrDESC);
$fiveBiggest = implode(" ", $uniqueArrDESC);

echo $arithmetic_average . "\n";
echo $fiveSmallest . "\n";
echo $fiveBiggest . "\n";
?>