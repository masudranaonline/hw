<?php
    $string = "I did not understand";
    $character = 'd';

    $array = str_split($string);
    $size = sizeof($array);
    $counter = 0;

    for($i = 0; $i < $size; $i++){
        if($array[$i] == $character){
            $counter++;
        }
    }
    echo $counter;