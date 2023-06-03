<?php 
    $Host = 'localhost';
    $Name = 'root';
    $Pass = '';
    $DB   = 'sms';

    $Connection = mysqli_connect($Host, $Name, $Pass, $DB);

    if(!$Connection){
        echo "DataBase connection ERROR !";
    }




?>