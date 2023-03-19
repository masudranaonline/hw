<?php

    $name = "wow";

    $array = str_split($name);

    $size = sizeof($array);
    $rev_array = [];
    $status = 0;

    for($i = $size -1; $i >= 0; $i--){
        array_push($rev_array, $array[$i]);
    }
    for($i = 0; $i < $size; $i++){
        if($array[$i] != $rev_array[$i]){
            $status = 0;
            break;
        }else
            $status = 1;
    }     

    if($status){
        echo "Plindrome";
    }else
        echo "Not Plindrome";