<?php

function masud($n1=0, $n2=0)
    {
        
        echo sum($n1,$n2) ."<br>";
        echo sub($n1,$n2) ."<br>";
        echo mul($n1,$n2) ."<br>";
        echo div($n1,$n2) ."<br>";
        
        // echo $sum = $n1 + $n2 ."<br>";
        // echo $sub = $n1 - $n2 ."<br>";
        // echo $mul = $n1 * $n2 ."<br>";
        // if($n2 != 0)
        //     echo $div = $n1 / $n2;
        // else
        //     echo "Divition imaginary ";


    }

    function sum($n1,$n2)
    {
        $sum = $n1 + $n2;
        return $sum;
    }
    function sub($n1,$n2)
    {
        $sub = $n1 - $n2;
        return $sub;
    }
    function mul($n1,$n2) 
    {
        $mul = $n1 * $n2;
        return $mul;
    }
    function div($n1,$n2)
    {
        if($n2 != 0)
        {
            $div = $n1 / $n2;
            return $div;
        }
        else
             return false;
    }
    
    
masud(8,3);
