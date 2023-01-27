<?php

    $a = 5;
    $b = 6;
    $c = 7;

    $s =($a + $b + $c)/2;

    if(($a + $b) > $c && ($b + $c) > $a && ($a + $c) > $b ){
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        echo $area;
    }else
        echo "triangle are not possiable";