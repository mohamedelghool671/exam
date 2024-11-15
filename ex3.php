<?php 

$array = [2,4,3,1,6,7,5,8,0,9];
for ($i=0;$i<count($array);$i++) {
for ($j=0;$j<count($array)-$i-1;$j++) {
if ($array[$j]>$array[$j+1]) {
$max=$array[$j];
$array[$j]=$array[$j+1];
$array[$j+1]=$max;
}
}
}
echo "<pre>";
echo "Ascending Order: ";
print_r($array);

for ($i=0;$i<count($array);$i++) {
    for ($j=0;$j<count($array)-$i-1;$j++) {
if ($array[$j]<$array[$j+1]) {
$min=$array[$j];
$array[$j] = $array[$j+1];
$array[$j+1]=$min;
}

    }
}
echo "<pre>";
echo "Ascending Order: ";
print_r($array);