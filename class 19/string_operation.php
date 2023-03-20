<?php
    $string = "Polytechnic";
    $sub_string = "tech";

    $array_string = str_split($string);
    $array_sub_string = str_split($sub_string);


    // for($i = 0; $i < sizeof($array_string); $i++){
    //     for($j = 0; $j < sizeof($array_sub_string); $j++){

    //     }
    // }

    echo strpos($string,$sub_string);