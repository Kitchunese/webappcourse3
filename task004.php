<?php
    function Сut($str, $length = 10) {
        return substr($str,0, $length);
      }

      echo Сut("Lorem Ipsum - это текст") . "<br>"; 
      echo Сut("Lorem Ipsum - это текст", 5); 
      