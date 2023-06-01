<?php

    $Host  = 'localhost';
    $Name  = 'root';
    $Pass  = '';
    $DB    = 'demo';

    $Connection = mysqli_connect($Host, $Name, $Pass, $DB);

    if(!$Connection){
        echo "DataBase connection failed !";
    }



?>