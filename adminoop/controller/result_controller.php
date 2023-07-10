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

        if($_POST['submit'] == 'Update_Result'){
            $Data = [
                'name' => $_POST['name'],
                'roll' => $_POST['roll'],
                'subject' => $_POST['subject'],
                'cgpa' => $_POST['cgpa'],
            ];
            $id = $_POST['id'];
            $obj = new Result();
            $Result = $obj->update($Data, $id);

            if($Result){
                header('Location: ../index.php?page=result_list&update_status=1');
            }else{
                header('Location: ../index.php?page=result_list&update_status=0');
            }
        }

        if($_POST['submit'] == 'Delete'){
            $id = $_POST['id'];

            $obj = new Result();
            $Result = $obj->delete($id);

            if($Result){
                header('Location: ../index.php?page=result_list&result_status=1');
            }else{
                header('Location: ../index.php?page=result_list&result_status=0');
            }

        }
    }




?>