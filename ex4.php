<?php

$array = [2,4,3,1,6,7,5,8,0,9];
$total=0;
for ($i=0; $i<count($array); $i++){
$total+=$array[$i];
}
$avg=$total/count($array);
echo "Average  : " . $avg ;