<?php


echo "Find out the maximum of three numbers using only if structure.";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

   function maximum($n1,$n2,$n3){
        if($n1 > $n2 && $n1 > $n3){
            echo "Maximum number is : ".$n1;
        }elseif($n2 > $n1 && $n2 > $n3){
            echo "Maximum number is : ".$n2;
        }else
        echo "Maximum number is : ".$n3;

   }

   maximum(27,37,17);



