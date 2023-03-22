<?php

//     $delimeters = ['  ',',','.','-','/'];
//     $str = "Bangladesh is a beautiful, country. I loved-this country";
    
//     // $str = trim($str);
//     $str = trim($str);

//     $str =str_replace($delimeters, ' ', $str );


//     $str = explode(' ', $str);

//    echo sizeof($str);


$delimeters = [',','.','-','/'];
$str = "Khulna is the best, city of-bangladesh";

$str = trim($str);

$str =str_replace($delimeters, ' ', $str);

$str = explode(' ', $str);
echo sizeof($str);