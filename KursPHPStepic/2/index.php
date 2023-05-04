<?php
echo 'date(\"m-d-Y\") = ' . date("m-d-Y") . "\n";
echo 'date(\"U\") = ' . date("U") . "\n";
echo 'date(\"h:\" = ' . date("h:") . "\n";

$data = getdate();
$day = $data["mday"];
$month = $data["mon"];
$year = $data["year"];
$day_of_year = $data["yday"];
echo "Today is $month/$day/$year $day_of_year" . "th" . " year\n";

setlocale(LC_ALL, 'pl_PL.UTF-8');
echo strftime("Current time zone: %Z\n");
echo strftime("Data: %m-%d-%Y\n");


$d1 = 04;
$m1 = 05;
$y1 = 2023;
$d2 = 13;
$m2 = 04;
$time1 = mktime(0, 0, 0, $m1, $d1, $y1);
$time2 = mktime(0, 0, 0, $m2, $d1, $y1);
$time = abs(ceil($time1 - $time2) / 86400);
echo "Between $d1-$m1-$y1, and $d2-$m2-$y1 is: $time days.\n";

echo "\nTime signatures:\n";
echo strtotime("now") . "\n";
echo strtotime("01 day 01 month 2024 year") . "\n\n";

$time3 = microtime(true);
for ($i = 0; $i < 10000; $i++)
    for ($j = 0; $j < 1000; $j++) ;
$time4 = microtime(true);
$time5 = round($time4 - $time3, 4);
echo "The page was generated in $time5 seconds\n\n";

var_dump(checkdate(5, 25, 2014)) . "\n";
var_dump(checkdate(5, 32, 3000)) . "\n";

echo "\nDate function:\n";
echo date("r")."\n";
echo date("T")."\n";
echo "\nGMD function\n";
echo gmdate("r")."\n";
echo gmdate("T")."\n\n";

$localtime = localtime(time(), true);
print_r($localtime) . "\n";
$localtimeMonth = $localtime["tm_mon"];
$localtimeYearDay = $localtime["tm_yday"];
$localtimeWeekDay = $localtime["tm_wday"];
$localtimeHour = $localtime["tm_hour"];
$localtimeMinute = $localtime["tm_min"];
$localtimeSec = $localtime["tm_sec"];
echo "Today is $localtimeWeekDay"."th"." week's day. It is $localtimeYearDay"."th"." year's day. Current is $localtimeMonth\n";
echo "Whereas the hour is $localtimeHour-$localtimeMinute-$localtimeSec"."s"."\n";
//getdate and localtime are almost the same
?>