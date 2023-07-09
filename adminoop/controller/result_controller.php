<?php

    include('../model/Db.php');
    include('../model/Result.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Submit_Result'){
            $Data = [
                'name' => $_POST['name'],
                'roll' => $_POST['roll'],
                'subject' => $_POST['subject'],
                'cgpa' => $_POST['cgpa'],
            ];
            $obj = new Result();
            $Result = $obj->add($Data);

            if($Result){
                header('Location: ../index.php?page=result_add&result_status=1');
            }else{
                header('Location: ../index.php?page=result_add&result_status=0');
            }
        }
    }




?>