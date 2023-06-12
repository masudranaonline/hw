<?php
    /*
    * Teacher class
    */

    class Teacher{
        public $Connection;

        function __construct(){
            $Host = 'localhost';
            $Name = 'root';
            $Pass = '';
            $Db   = 'sms';

            $Connection = new mysqli($Host, $Name, $Pass, $Db);
        }
        // This function is used to add new Teacher
        function addTeacher($Data)
        {
            $Name = $Data['name'];
            $Number = $Data['number'];
            $Education = $Data['education'];
            $Subject = $Data['subject'];
            $Address = $Data['address'];

            $Query = "INSERT INTO teachers(name, number, education, subject, address)";
            $Query = "VALUES($Name, $Number, $Education, $Subject, $Address)";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        //This function is used delete to spesific teacher
        function deleteTeacher($TeacherId)
        {
            $Query = "DELETE FROM teachers WHERE id = $TeacherId";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        // This function is used edit to spesific teacher
        function editTeacher($Data, $TeacherId)
        {
            $Name = $Data['name'];
            $Number = $Data['number'];
            $Education = $Data['education'];
            $Subject = $Data['subject'];
            $Address = $Data['address'];

            $Query = "UPDATE teachers SET name = $Name, number = $Number, education = $Education, subject = $Subject, address = $Address WHERE id = $TeacherId";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        //this function is used to details of a spesific teacher
        function getTeacher($TeacherId)
        {
            $Query = "SELECT * FROM teachers WHERE id = $TeacherId";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        // this function is used to get add teacher
        function getTeachers()
        {
            $Query = "SELECT * FROM tecahers";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }
    }



?>