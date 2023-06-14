<?php
   function NewMas($mas) {
    $new_mas = [];
    foreach ($mas as $num) {
      if ($num % 2 == 0) {
        $new_mas[] = $num;
      }
    }
    return $new_mas;
  }
  
  $mas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $new_mas = NewMas($mas);
  
  echo implode(', ', $new_mas);
  