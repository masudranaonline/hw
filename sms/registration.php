<?php

  include('connection.php');

  if(isset($_POST['submit'])){
    if($_POST['submit'] == 'Register'){
      $Name = $_POST['name'];
      $Email = $_POST['email'];
      $Number = $_POST['number'];
      $Password = $_POST['password'];
      $Conform_Password = $_POST['conform_password'];

      if($Password == $Conform_Password){
        $Query = "INSERT INTO admin(name, email, number, password) VALUES('$Name', '$Email', '$Number', '$Password')";
        $Result = mysqli_query($Connection, $Query);

        if($Result){
          echo "Admin created successfully ";
        }else{
          echo "Try again ! something went rong";
        }
      }else{
        echo "Password does't match!";
      }

    }
  }



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .top {
            border: 2px solid #fff;
            background-color: #F7F7F7;
        }
        body{
            background-color: #D8D8D8;
        }
    </style>
  </head>
  <body>
    
    <div class="container mx-auto m-5 top p-5" style="width: 500px;">
            <h3>Registration Now</h3>
            <form action="registration.php" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required><br>

                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required><br>

                    <label for="number">Number</label>
                    <input type="number" name="number" class="form-control" required><br>

                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required><br>

                    <label for="conform_password">Conform Password</label>
                    <input type="password" name="conform_password" class="form-control" required><br>

                    <input type="submit" name="submit" value="Register" class="btn btn-success btn-lg mb-1">
                </div>
            </form>
    </div>
    
  </body>
</html>