<?php
$indexes = readline();
$indexes = explode(" ", $indexes);

$values = readline();
$values = explode(" ", $values);

$arr = array();
$current_value = $values[0];
for($i = $indexes[0]; $i <= $indexes[1]; $i++) {

        $arr[$i] = $current_value;
        $current_value++;
}

print_r($arr)
?>