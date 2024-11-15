<?php
$string = "Hello, welcome to the world of PHP!";
$searchString = "world";
if (preg_match("/$searchString/", $string)) {
    echo "The string contains the word '$searchString'.";
} else {
    echo "The string does not contain the word '$searchString'.";
}
