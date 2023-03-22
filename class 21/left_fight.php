<?php
    $str = '2543L468784R52764';         
                                // 25433468784552764  25433468784552764
    $str = str_split($str);

    $size = sizeof($str);

    for($i = 0; $i < $size; $i++){
        if($str[$i]== 'L')
            $str[$i] = $str[$i-1];
        if($str[$i]== 'R')
            $str[$i] = $str[$i+1];
        echo $str[$i];
    }
    
