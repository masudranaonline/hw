<?php

$array = [55,25,12,38,85,14,47];
$size =  count($array);

for($i = 0; $i < $size; $i++){
    for($j = 0; $j < $size - $i -1; $j++){
        if($array[$i] > $array[$j+1]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

    print_r($array);
    echo "<br>";



