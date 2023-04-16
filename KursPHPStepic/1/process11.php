<?php
$word = strtolower(trim(fgets(STDIN)));
$occurrence = array_fill(0, 26, 0);

for ($i = 0; $i < strlen($word); $i++) {
    $char = $word[$i];

    // check if the character is a letter
    if (ctype_alpha($char)) {
        // increment the occurrence count for the letter
        $occurrence[ord($char) - ord('a')]++;
    }
}

// check if all the letters occur at least once
$is_pangram = true;
for ($i = 0; $i < 26; $i++) {
    if ($occurrence[$i] == 0) {
        $is_pangram = false;
        break;
    }
}
if ($is_pangram) {
    echo 'true';
} else {
    echo 'false';
}
?>
<!--
ctype_alpha - check for alphabetic characters
ord - convert the first byte of a string to a value between 0 - 255
-->
