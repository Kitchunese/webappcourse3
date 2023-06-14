<?php
    $number = 11;
    function isNumberInRange($number) {
        if ($number >= 0 && $number <= 10) {
           echo "true";
        } else {
           echo "false";
        }
    }
    echo "Число: " . $number . "<br>";
    isNumberInRange($number);