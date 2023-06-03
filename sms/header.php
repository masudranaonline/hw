<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
        .topbar{
            background-color: blueviolet;
            height: 70px;
            width: 100%;
            line-height: 70px;
        }
        .logo{
            float: left;
        }
        .menu{
            float: right;
        }
        ul li {
            float: left;
            list-style: none;
            margin-right: 5px;
        }
        ul li a {
            text-decoration: none;
            border: 1px solid #000;
            padding: 9px 25px;
            color: #fff;

        }
        ul li a:hover{
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>

   <div class="topbar">
   <div class="container">
        <div class="logo">CMS</div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
   </div>