<?php

    /*
    * Students class
    */
    class Students{

        function __construct()
        {
            $Host = 'localhost';
            $Name = 'root';
            $Pass = '';
            $Db   = 'sms';
        
            $Connection = new mysqli($Host, $Name, $Pass, $Db);
        }
    
        function addStudent($Data)
        {
            $Name    = $Data['name'];
            $Roll    = $Data['roll'];
            $Number  = $Data['number'];
            $Subject = $Data['subject'];
            $Address = $Data['address'];

            $Query  = "INSERT INTO students(name, roll, number, subject, address)";
            $Query .= "VALUES($Name, $Roll, $Number, $Subject, $Address)";

            $Result = $Connection->execute_query($Query);
            return $Result;

        }
        function deleteStudent($StudentId)
        {
            $Query = "DELETE FROM students WHERE id = $StudentId";
            $Result = $Connection->execute_query($Query);
            return $Result;
        }
        function editStudents($Data, $StudentId)
        {
            
        }
        function getStudent($StudentId){
            $Query = "SELECT * FROM students WHERE id = $StudentId";
            $Result =$Connection->execute_query($Query);
            return $Result;
        }
        function getStudents($StudentId)
        {
            $Query = "SELECT * FROM students";
            $Result = $Connection->execute_query($Query);
            return $Result;
        }
    }


?>