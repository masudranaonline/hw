<?php
    $name = "City Polytechnic Institute Khulna";
    $array = str_split($name);
    $array_size = sizeof($array);

    $vowel  = [];
    $consonant = [];

    $vw = ['a','e','i','o','u','A','E','I','O','U'];
    $vw_size = sizeof($vw);

    for($i = 0; $i < $array_size; $i++){
        for($j =0; $j < $vw_size; $j++){
            if($array[$i] == $vw[$j]){
                $vowel_status = 1;
                break;
            }else{
                $vowel_status = 0;
            }
        }
        if($vowel_status){
            array_push($vowel, $array[$i]);
        }else{
            array_push($consonant, $array[$i]);
        }
    }

    for($i = 0; $i <sizeof($vowel); $i++){
        echo $vowel[$i];
    }
    echo "<br>";
    for($i = 0; $i <sizeof($consonant); $i++){
        echo $consonant[$i];
    }
    
    