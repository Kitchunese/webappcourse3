<?php
    $fileName = "t.txt";

    if(file_exists($fileName)) {
        $num = file_get_contents($fileName);
        $num++;
    
        $file = fopen($fileName, "w");
        fwrite($file, $num);
        fclose($file);
    } else {
        $num = 0;
        file_put_contents($fileName, $num);
    }
    echo "Вы обновили страницу {$num} раз(а).";
    session_start();
    $_SESSION[$fileName] = $num;