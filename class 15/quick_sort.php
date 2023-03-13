<?php

function quicksort($array){
    $length = sizeof($array);

    if($length <= 1){
        return $array;
    }else {
        $pivot = $array[0];
        $left = [];
        $right = [];

        for($i = 1; $i < $length; $i++){
            if($array[$i] < $pivot){
                $left[] = $array[$i]; 
            }else{
                $right[] = $array[$i];
            }
        }
        return array_merge(quicksort($left),array($pivot),quicksort($right));
    }
}

$array = [55,22,14,36,98,75,49,81,37,17,66];

$sortedArray = quicksort($array);

foreach($sortedArray as $key => $item){
    echo $item.",";
}