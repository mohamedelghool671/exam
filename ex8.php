<?php

$current_month=date("m");
$last_month;
if ($current_month==1) {
$last_month=12; //dec 
}else {
    $last_month=$current_month-1;
}
echo $last_month;
