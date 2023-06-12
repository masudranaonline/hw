<?php
    
    /**
     * Subject class
     */

     class Subject {
        public $Connection;

        function __construct()
        {
            $Host = 'localhost';
            $Name = 'root';
            $Pass = '';
            $Db   = 'sms';

            $Connection = new mysqli($Host, $Name, $Pass, $Db);
        }

        // This function is used to add new subject
        function addSubject($Data)
        {
            $Name = $Data['sub_name'];
            $Code = $Data['sub_code'];
            $Depertment = $Data['depertment'];

            $Query = "INSERT INTO subject(sub_name, sub_code, depertment)";
            $Query = "VALUES($Name, $Code, $Depertment)";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        //This function is used delete to spesific subject
        function deleteSubject($SubjectId)
        {
            $Query = "DELETE FROM subject WHERE id = $SubjectId";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        // This function is used edit to spesific subject
        function editSubject($Data, $SubjectId)
        {
            $Name = $Data['sub_name'];
            $Code = $Data['sub_code'];
            $Depertment = $Data['depertment'];

            $Query = "UPDATE subject SET sub_name = $Name, sub_code = $Code, depertment = $Depertment";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        //this function is used to details of a spesific subject
        function getSubject($SubjectId)
        {
            $Query = "SELECT * FROM subject WHERE id = $SubjectId";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        // this function is used to get add subject
        function getSubjects()
        {
            $Query = "SELECT * FROM subject";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }
     }


?>