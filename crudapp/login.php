<?php
  session_start();
  include('connection.php');

  if(isset($_POST['submit'])){
    if($_POST['submit'] == 'Login'){

      $email = $_POST['email'];
      $password = $_POST['password'];

       $Query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $Result = mysqli_query( $Connection, $Query);
      $Rows = mysqli_num_rows($Result);

      if($Rows == 0 ){
        echo "Username or Password does't match our record";
      }else{
        $_SESSION['LoggedIn'] = TRUE;
        header('Location:edit.php');

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