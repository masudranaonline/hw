<?php
    $connect = mysqli_connect('localhost','root','','wdb2');
    if(!$connect){
        echo "Connection Failed !";
    }

    if(isset($_POST['Submit']))
    {
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];


        $query = "INSERT INTO registration(Name, E-mail, Password) VALUES ('$name','$mail','$pass')";
        mysqli_query($connect,$query);
    }
//    INSERT INTO registration(Name, E-mail, Password) VALUES ('$name','$mail','$pass')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
    

            <div class="mx-auto bg-info p-5 m-5 form" style="width: 400px;">
                <h3>Registration Now</h3>
                <form action="" method="post">
                    <label>Name</label><br>
                    <input type="text" name="name" class="form-control" ><br>

                    <label>E-mail</label><br>
                    <input type="text" name="email" class="form-control"><br>

                    <label>Password</label><br>
                    <input type="password" name="password" class="form-control"><br>

                    <input type="submit" name="Submit" value="Submit" class="btn btn-success btn-lg mb-1">
                </form>
            </div>


    
</body>
</html>