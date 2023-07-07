<?php
    include('../model/Db.php');
    include('../model/Teacher.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Submit_Data'){
            $Data = [
                'name'      => $_POST['name'],
                'number'    => $_POST['number'],
                'education' => $_POST['education'],
                'subject'   => $_POST['subject'],
                'address'   => $_POST['address'],
            ];
            $Teacher = new Teacher();
            $Result = $Teacher->add($Data);
            // if($Result){
                header('Location:../index.php?page=teacher_add&status=1');
            // }
        }

        if($_POST['submit'] == 'Update_Data'){
            $Data = [
                'name' => $_POST['name'],
                'number' => $_POST['number'],
                'education' => $_POST['education'],
                'subject' => $_POST['subject'],
                'address' => $_POST['address'],
            ];
            $id = $_POST['id'];
            $Teacher = new Teacher();
            $Result = $Teacher->update($Data, $id);

            if($Result){
                header('Location: ../index.php?page=teacher_list&update_status=1');
            }else{
                header('Location: ../index.php?page=teacher_list&update_status=0');
            }
        }

        if($_POST['submit'] == 'Delete'){
            $id = $_POST['id'];

            $obj = new Teacher();
            $Result = $obj->delete($id);

            if($Result){
                header('Location: ../index.php?page=teacher_list&delete_status=1');
            }else{
                header('Location: ../index.php?page=teacher_list&delete_status=0');
            }
        }
    }

 











?>