<?php

    $array = [52,12,41,33,45,15,27];

    print_r($array);
    echo "<br>";
    echo "<br>";

    $size = sizeof($array);

    for($i = 0; $i < ($size - 1); $i++){
        
        if($array[$i] > $array[$i + 1]){
            $temp = $array[$i+1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $temp;
        }
    }
   
    
    print_r($array);

   



