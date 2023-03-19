<?php
    $array1 = [5,8,11,15,25,34,45];
    $array2 = [4,7,14,30,39];

    $new_array = array_merge($array1,$array2);

    $size = sizeof($new_array);

    for($i =0; $i < $size; $i++){
        for($j = $i+1; $j < $size; $j++ ){
            if($new_array[$i] > $new_array[$j]){
                $temp = $new_array[$j];
                $new_array[$j] = $new_array[$i];
                $new_array[$i] = $temp;
            }
        }
    }

    print_r($new_array);