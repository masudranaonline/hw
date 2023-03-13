<?php

    $array = [52,14,35,65,78,4,36,19,45,95,17,16];

    print_r($array);

    $size = sizeof($array);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    for($i = 0; $i < $size; $i++){
        for($j = $i + 1; $j < $size; $j++){
            if($array[$i] > $array[$j]){
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
print_r($array);
    