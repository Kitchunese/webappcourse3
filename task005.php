<?php
    function printArrayRecursive($arr, $i = 0) {
        if ($i < count($arr)) {
          echo $arr[$i] . " ";
          printArrayRecursive($arr, $i+1);
        }
      }
      
      $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
      printArrayRecursive($arr); 
      