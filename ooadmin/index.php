<?php

    session_start();

    if(!$_SESSION['LoggedIn'] == TRUE){
    session_destroy();
    header('Location:login.php');
    }

    include('header.php');
    include('sidebar.php');

    if(isset($_REQUEST['page'])){
        $PageName = $_REQUEST['page'].".php";

        include('template/'.$PageName);
    }else{
        include('template/home.php');
    }

    include('footer.php');



?>