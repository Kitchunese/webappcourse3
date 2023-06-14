<?php
    function iSEven($number){
        if($number % 2 == 0){
            echo "{$number} четное число";
        }else{
            echo "{$number} не четное число";
        }
    }
    iSEven(6);