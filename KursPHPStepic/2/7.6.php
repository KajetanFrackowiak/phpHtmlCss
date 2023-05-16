<?php
//$data = readline();
//$amount = intval(readline());
//list($year, $month, $day) = explode('-', $data);
//
//$mainTime = mktime(0, 0, 0, $month, $day, $year);
//$changingTime = $amount * 86400;
//
//$date_before_n_days = date('Y-m-d', $mainTime - $changingTime);
//$date_after_n_days = date('Y-m-d', $mainTime + $changingTime);
//
//echo "Oryginalna data: $year-$month-$day\n";
//echo "Przed $amount dniami: $date_before_n_days\n";
//echo "Po $amount dniach: $date_after_n_days";
//?>
<!--setISODate is to act on the weeks of years -->
<?php
//$weekOfYear = fgets(STDIN);
//$year = fgets(STDIN);
//
//$date = new DateTime();
//$date->setISODate($year, $weekOfYear);
//$dateStart = $date->format('Y-n-j');
//$date->modify('+6 days');
//$dateEnd = $date->format('Y-n-j');
//
//echo "Początek tygodnia: $dateStart\n";
//echo "Koniec tygodnia: $dateEnd";
//?>

<?php
$secondAmount = fgets(STDIN);
$days = (int)($secondAmount / (24*60*60));
$hours = (int)(($secondAmount % (24*60*60)) / (60*60));
$minutes = (int)(($secondAmount % (60*60)) / 60);
$seconds = $secondAmount % 60;
print "$days dni, $hours godzin, $minutes minut i $seconds sekundy";
?>