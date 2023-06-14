<?php
    $NameFile = 'count.txt';
    if(file_exists($NameFile)) $num = file_get_contents($NameFile);
    isset($num) ? $num++ : $num = 0;
    echo "Вы обновили страницу ".$num." раз(а).";
    file_put_contents($NameFile, $num);
