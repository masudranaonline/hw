<?php
    include('../model/Db.php');
    include('../model/Student.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Insert_Data'){
            $Data = [
                'name'    => $_POST['name'],
                'roll'    => $_POST['roll'],
                'number'  => $_POST['number'],
                'subject' => $_POST['subject'],
                'address' => $_POST['address'],
            ];
            $student = new Student();
            $student->addStudent($Data);

            header('Location: ../index.php?page=student_add&status=1');
        }
    }












?>