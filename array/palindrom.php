<?php

    function check_palindrom($string){
        if($string = strrev($string)){
            // return 1;
            echo $string." is palindrom";
        }else{
            // return 0;
            echo $string." is not palindrom";
        }
    }

   check_palindrom("Rana");