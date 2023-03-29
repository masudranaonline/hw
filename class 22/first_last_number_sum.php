<?php

    $number = 2345686413659;

    $array = str_split($number);
    $size = sizeof($array);

    // $sum = $array[0]+$array[$size-1];
    // echo $sum;

    for($i = 0; $i < $size; $i++){
        $sum = $array[0] + $array[$size-1];
        echo $sum;
        break;
    }