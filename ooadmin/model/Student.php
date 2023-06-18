<?php
    /**
     * Student
     */

     class Student {
        public $Id;
        public $Name;
        public $Roll;
        public $Number;
        public $Subject;
        public $Address;

        function addStudent($Data){
            $Db = new Db();
            
            $this->Name = $Data['Name'];
            $this->Roll = $Data['Roll'];
            $this->Number = $Data['Number'];
            $this->Subject = $Data['Subject'];
            $this->Address = $Data['Address'];

            $Query = "INSERT INTO students(name, roll, number, subject, address) VALUES('$this->Name', '$this->Roll', '$this->Number', '$this->Subject', '$this->Address')";

            $Db->execute($Query);
            $Db->close();

        }

        function editStudent($Data, $Id)
        {
            $Db = new Db();

            $this->Name = $Data['Name'];
            $this->Roll = $Data['Roll'];
            $this->Number = $Data['Number'];
            $this->Subject = $Data['Subject'];
            $this->Address = $Data['Address'];

            $Query = "UPDATE students SET name = '$this->Name', roll = '$this->Roll', number = '$this->Number', subject = '$this->Subject', address = '$this->Address'";

            $Db->execute($Query);
            $Db->close();
        }

        function deleteStudents($Id){
            $Db = new Db();

            $Query = "DELETE FROM students WHERE id = $this->Id";
            
            $Db->execute($Query);
            $Db->close();
        }



     }



?>