<?php
function mix_strings($string1, $string2) {
$result = '';
$length1 = strlen($string1);
$length2 = strlen($string2);
$length = min($length1, $length2);

for ($i = 0; $i < $length; $i++) {
$result .= $string1[$i] . $string2[$i];
}

if ($length1 > $length2) {
$result .= substr($string1, $length2);
} else if ($length2 > $length1) {
$result .= substr($string2, $length1);
}

echo $result;
}

mix_strings('kotek', 'stonoga'); // ksottoenkoga
?>