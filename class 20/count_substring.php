<?php
 
 function countFreq($sub, $string)
   {

    $M = strlen($sub);
    $N = strlen($string);
    $res = 0;
    for($i = 0; $i <= $N - $M; $i++)
    {
        for($j = 0; $j < $M; $j++) 
            if($string[$i+$j] != $sub[$j])
                break;
            if($j == $M)
            {
                $res++;
                $j = 0;
            }
    }
    return $res;
}
$string = "bananana";
$sub = "ana";
echo countFreq($sub, $string);
