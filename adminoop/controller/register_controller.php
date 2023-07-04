<?php

    session_start();

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

        if($_POST['submit'] == 'Login_Data'){
            $Data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
            ];

            $Registration = new Registration();
            $Result = $Registration->getData($Data);
            $Rows = mysqli_num_rows($Result);

            if($Rows == 0){
                echo "username or password does't match !";
            }else{
                $_SESSION['LoggedIn'] = true;
                header('Location: ../index.php');
            }
        }


    }




?>