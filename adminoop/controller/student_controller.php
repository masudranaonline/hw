<?php
  include('../model/Db.php');
  include('../model/Student.php');

  if(isset($_POST['submit'])){
    if($_POST['submit'] == 'Submit_Data'){
      $Data = [
        'name' => $_POST['name'],
        'roll' => $_POST['roll'],
        'number' => $_POST['number'],
        'subject' => $_POST['subject'],
        'address' => $_POST['address'],
      ];
      $Student = new Student();
       $Result =$Student->add($Data);
      //  if($Result)
           header('Location:../index.php?page=student_add&status=1');
      //  else
          //  header('Location:../index.php?page=student_add&status=0');

     
    }
  }





?>