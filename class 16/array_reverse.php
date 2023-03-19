<?php
    $name = 'aiM unoM';
    echo $name;
    echo "<br>";

    $array = str_split($name);
    $size = sizeof($array);

    $rev_array = [];


    for($i = $size - 1; $i >= 0; $i--){
        array_push($rev_array, $array[$i]);
    }

    for($i = 0; $i < $size; $i++){
        echo $rev_array[$i];
    }

    echo "<br>";
    print_r($array);
    echo "<br>";
    print_r($rev_array); 
    echo "<br>";


