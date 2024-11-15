<?php
// we will increment one month
$date="2012-12-21";
$date=explode("-",$date);
$year=intval($date[0]);
$month=intval($date[1]);
$day=intval($date[2]);
$month++;
if ($month > 12) {
    $month = 1;
    $year++;
}
if ($month == 2 && $year%2==0) {
    $day = 28; 
}
if ($month == 2 && $year%2!=0) {
    $day = 29; 
}
if (in_array($month, [4, 6, 9, 11]) && $day > 30) {
    $day = 30; 
}
if ($day > 31) {
    $day = 31; 
}
$newDate="$year-$month-$day";
print_r($newDate);
// junior=>31 , feb=>28 and 29 on not simple year, mars=>31,mails=>31 ,july=>31,august=>31
// oct=>31 des=>31
