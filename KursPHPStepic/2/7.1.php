<?php
$date = trim(fgets(STDIN));
$date = substr($date, 0, -3);
list($year, $month) = explode('-', $date);
if ($month == 02) {
     $last_date = date('L', strtotime("$year-01-01")) ? 29 : 28; //L - Informacja o tym, czy rok jest przestępnym
    // if yes $last_time == 29, otherwise 28
} elseif (in_array($month, array('04', '06', '09', '11'))) {
    $last_date = 30;
} else {
    $last_date = 31;
}
echo "Pierwszy dzień : $date-01 - Ostatni dzień : $date-$last_date\n";
?>