<?php 
    
    /**
     * Students Class
     */

     class Students
    {
        public $Id;
        public $Name;
        public $Roll;
        public $Number;
        public $Subject;
        public $Address;

        function add($Data)
        {
            $Db = new Db();

            $this->Name = $Data['Name'];
            $this->Roll = $Data['Roll'];
            $this->Number = $Data['Number'];
            $this->Subject = $Data['Subject'];
            $this->Address = $Data['Address'];

            $Query = "INSERT INTO students(name, roll, number, subject, address)";
            $Query .= " VALUES('$this->Name', '$this->Roll', '$this->Number', '$this->Subject',' $this->Address')";
            $Db->execute($Query);
            $Db->close();
        }

        function edit($Data, $Id)
        {
            $Db = new Db();

            $this->Name = $Data['Name'];
            $this->Roll = $Data['Roll'];
            $this->Number = $Data['Number'];
            $this->Subject = $Data['Subject'];
            $this->Address = $Data['Address'];

            $Query = "UPDATE students SET name = $this->Name, roll = $this->Roll, number = $this->Number, subject = $this->Subject, address = $this->Address WHERE id = $this->Id";

            $Db->execute($Query);
            $Db->close();
        }

        function delete($Id)
        {
            $Db = new Db();
            $this->Id = $Id;

            $Query = "DELETE FROM students WHERE id = $this->Id";
            $Db->execute($Query);
            $Db->close();
        }
    }
?>