<?php

function countFreq($pat, $txt)
{
    $M = strlen($pat);
    $N = strlen($txt);
    $res = 0;
 

    for($i = 0; $i <= $N - $M; $i++)
    {
        for($j = 0; $j < $M; $j++)
            if($txt[$i+$j] != $pat[$j])
                break;
        if($j == $M)
        {
            $res++;
            $j = 0;
        }
    }
    return $res;
}
$txt = "dhimanman";
$pat = "man";
echo countFreq($pat, $txt);

