<?php

    include('../model/Db.php');
    include('../model/Registration.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Register_Data'){
            $Data = [
                'name'     => $_POST['name'],  
                'email'    => $_POST['email'],  
                'username' => $_POST['username'],  
                'password' => $_POST['password'],  
            ];

            $Registration = new Registration();
            $Result = $Registration->register($Data);

            if($Result){
                header('Location: ../login.php');
            }else{
                header('Location: ../register.php');
            }
        }
    }




?>