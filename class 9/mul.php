<?php 


$num1 = 1;
$num2 = 100;
$step = 1;
$mul = 1;

for($counter = $num1; $counter <= $num2; $counter += $step){
    $mul = $mul * $counter;
}


echo "The multipilation is : ".$mul;