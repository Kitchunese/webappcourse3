<?php
   $a = "text.txt"; 

   $file = fopen($a, "r"); 
   echo 'построчное выведение через ф-ю fgets'. "<br>";
   if ($file) {
     while (($line = fgets($file)) !== false) {
       echo $line;
     }
     fclose($file); 
   } else {
     echo "Не удалось открыть файл!";
   }
   
   echo '<br>'.'<br>'.'чтение файла полностью'. "<br>";
   

   $b = htmlentities(file_get_contents($a));
   echo $b;