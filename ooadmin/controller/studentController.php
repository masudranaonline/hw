<?php
  include('../model/Db.php');
  include('../model/Student.php');

  $obj = new Student();
  if(isset($_POST['submit'])){
    if($_POST['submit'] == 'Data'){
        $Data = [
            'Name'    => $_POST['name'],
            'Roll'    => $_POST['roll'],
            'Number'  => $_POST['number'],
            'Subject' => $_POST['subject'],
            'Address' => $_POST['address'],
        ];
        $obj->addStudent($Data);
        header('Location: ../index.php?page=add_student');
    }
  }



?>