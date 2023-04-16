<?php
do {
    fscanf(STDIN, "%d\n", $n);
} while ($n < 1);

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("*", $i) . "\n";
}
for ($i = $n; $i > 0; $i--) {
    echo str_repeat("*", $i) . "\n";
}
for ($i = $n; $i > 0; $i--) {
    echo str_repeat(" ", $n - $i);
    echo str_repeat("*", $i) . "\n";
}
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat(" ", $n - $i);
    echo str_repeat("*", $i) . "\n";
}
?>
