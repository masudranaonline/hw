<?php

    include('../model/Db.php');
    include('../model/Students.php');

    $obj = new Students();

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Submit'){
            $Data = [
                'Name'    => $_POST['name'],
                'Roll'    => $_POST['roll'],
                'Number'  => $_POST['number'],
                'Subject' => $_POST['subject'],
                'Address' => $_POST['address'],
            ];
            $obj->add($Data);
            header('Location: ../index.php');
        }
    }


?>
