<?php

    include('header.php');

    // if(isset($_REQUEST['page'])){
    //    echo  $page = $_REQUEST['page'];

    //    switch ($page) {
    //         case 'home':
    //             include('home.php');
    //             break;
    //         case 'about';
    //             include('about.php');
    //             break;
    //         case 'contact':
    //             include('contact.php');
    //             break;
    //         case 'registration':
    //             include('registration.php');
    //             break;
    //      case 'login':
    //             include('login.php');
    //             break;
    //         default:
    //             include('home.php');
    //             break;
    //    }
    // }

    if(isset($_REQUEST['page'])){
        $page = $_REQUEST['page'];

        $PageName = $page.".php";
        include($PageName);
    }else{
        include('home.php');
    }


    include('footer.php');



?>

