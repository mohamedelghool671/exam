<?php 
function prime($number) {
    if ($number <= 1) {
        return "$number is not prime"; 
}
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return "$number is not prime"; 
        }
    }
    return "$number is prime"; 
}
$number = 10;
echo prime($number);