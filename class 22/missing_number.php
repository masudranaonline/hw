<?php
    $n = 8;
    $number = [1,2,3,4,5,6,8];
    $size = sizeof($number);

    $missing = null;

    for($i = 1; $i <= $n; $i++){
        // if(!in_array($i, $number)){
        //     $missing = $i;
        // }

        $status = 0;
        for($j = 0; $j < $size; $j++){
            if($number[$j] == $i){
                $status = 1;
                break;
            }else
                $status = 0;
        }
        if($status == 0){
            $missing = $i;
        }
    }
    echo $missing;
    