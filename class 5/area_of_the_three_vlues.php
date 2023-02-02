<?php
    $a = 5;
    $b = 8;
    $c = 6;

    if($a + $b > $c && $b + $c > $a && $a + $c > $b){
        $s = ($a + $b + $c)/2;
        $area = sqrt($s * ($s - $a ) * ($s - $b) * ($s -$c));
        echo "Area : ".$area;
    }else {
        "Triangle is not possiable";
    }

