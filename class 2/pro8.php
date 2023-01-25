<?php

echo "Write a program that convert temperature to from Fahrenheit to Celsius and vice versa.";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$fahrenheit = 78;;

$celsious = (($fahrenheit - 32) * 5) / 9;

echo "celsious : " . $celsious;

echo "<br>";
echo "<br>";
echo "<br>";

// $celsious = (($fahrenheit - 32)*5)/9;
// $celsious * 9 =($fahrenheit -32)*5;
// ($celsious *9)/5 = $fahrenheit -32;
// (($celsious * 9 )/5)+32 = $fahrenheit;


$cels = 40;

$fahren = (($cels * 9) / 5) + 32;

echo "fahrenheit : " . $fahren;
