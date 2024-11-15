<?php 

$array = [2,4,3,1,6,7,5,8,0,9];
$even=[];
$ood=[];
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i]%2 == 0) { 
$even[]=$array[$i];
}else{
    $ood[]=$array[$i];  
}
}
echo "The array with only  even numbers: <br>";
print_r($even);
echo "<br>The array with only  odd numbers: <br>";
print_r($ood);