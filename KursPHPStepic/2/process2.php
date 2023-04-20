<?php
$input1 = readline();
$input1 = explode(" ", $input1);
$input2 = readline();

if (in_array($input2, $input1)) {
    echo "TAK";
} else {
    echo "NIE";
}
?>