<?php

$array=[60,10,30,20,100];
for ($i=0;$i<count($array);$i++) {
    for ($j=0;$j<count($array)-$i-1;$j++) {
if ($array[$j]<$array[$j+1]) {
$max=$array[$j+1];
$array[$j]=$array[$j+1];
$array[$j+1]=$max;
}
}
}
$max=$array[0];
echo "max is : ".$max;
// we Arrange array desc so first value is the max value