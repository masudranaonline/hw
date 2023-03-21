<?php
    $str = 'Bangladesh';
    $sub_str = 'adesh';

    $arr_str = str_split($str);
    $arr_sub_str = str_split($sub_str);

    $str_size = sizeof($arr_str);
    $sub_size = sizeof($arr_sub_str);

    $position = [];
    $status = 0;

    if(str_contains($str,$sub_str)){
        for($i = 0; $i < $sub_size; $i++){
            for($j = 0; $j < $str_size; $j++){
                if($arr_sub_str[$i] == $arr_str[$j]){
                    $status = 1;
                    break;
                }
            }
            if($status){
                array_push($position, $j);
            }
        }
        echo $position[0];
    }else{
        echo "Not a valid substring";
    }
