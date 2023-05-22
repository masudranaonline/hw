<?php
    $host = 'localhost';
    $name = 'root';
    $pass = '';
    $db = 'wd2';

    $connection = mysqli_connect($host,$name,$pass,$db);
    if(!$connection){
        echo "Connection Failed !";
    }

    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $query = "INSERT INTO user (name, email, password, status) VALUES('$Name', '$email','$password', 1) ";



        $result = mysqli_query($connection,$query);

        if($result){
            echo "Registration Successfully";
        }else{
            echo "Registration Failed !";
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registration </title>
</head>
<body>




    <div class="mx-auto m-5 p-5 bg-info" style="width: 400px;">
        <form action="reg.php" enctype="multipart/form-data" method="post">

            <label for="Name">Name : </label><br>
            <input type="text" class="form-control" name="name"><br><br>

            <label for="Email">Email : </label><br>
            <input type="email" class="form-control" name="email"><br><br>

            <label for="Password">Password</label><br>
            <input type="password" class="form-control" name="password"><br><br>

            <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg mb-1">
    </form>
    </div>
    
</body>
</html>