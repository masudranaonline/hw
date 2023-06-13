

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
                <form action="controller/studentController.php" enctype="multipart/form-data" method="POST">
                    
                    <label>Name</label><br>
                    <input type="text" name="name" class="form-control" ><br>
                    
                    <label>Roll</label><br>
                    <input type="number" name="roll" class="form-control" ><br>

                    <label>Number</label><br>
                    <input type="number" name="number" class="form-control"><br>

                    <label>Subject</label><br>
                    <input type="text" name="subject" class="form-control"><br>

                    <label>Address</label><br>
                    <textarea name="address" id="" cols="40" rows="5" class="form-control"></textarea><br>

                    <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg mb-1">
                </form>
            </div>


    
</body>
</html>