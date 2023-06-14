<?php
    $filelist = array();
    if ($handle = opendir('txt/../txt')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $filelist[] = $entry;
                echo "$entry\n";
            }
        }
        closedir($handle);
    }
    foreach ($filelist as $file) {
        $a = fopen('txt/'.$file, 'r');
       $str = fread($a, filesize('txt/'.$file));
       echo '<br>'.$str.'<br>';
       
       $text = "!";
       file_put_contents('txt/'.$file, $text, FILE_APPEND);   
       fclose($a);
    }
    