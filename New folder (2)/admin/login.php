<?php
  session_start();
  include('connection.php');

  if(isset($_POST['submit'])){
    if($_POST['submit'] == 'Login'){
      $Email = $_POST['email'];
      $Password = $_POST['password'];

      $Query  = "SELECT * FROM admin WHERE email = '$Email' AND password = '$Password'";
      $Result = mysqli_query($Connection, $Query);
      $Rows   = mysqli_num_rows($Result);
      
      if($Rows == 0){
        echo "User name and password does't match!";
      }else{
        $_SESSION['LoggedIn'] = TRUE;
        header('Location:deshboard');
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
            <h3>Login Now</h3>
            <form action="login.php" enctype="multipart/form-data" method="post">
                <div class="form-group">

                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required><br>


                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required><br>


                    <input type="submit" name="submit" value="Login" class="btn btn-success btn-lg mb-1">
                </div>
            </form>
    </div>
    
  </body>
</html>