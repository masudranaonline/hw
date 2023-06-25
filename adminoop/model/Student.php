<?php
    /**
     * Student class
     */

    class Student
    {
        private $id;
        private $name;
        private $roll;
        private $number;
        private $subject;
        private $address;

        function add($Data)
        {
            $this->name = $Data['name'];
            $this->roll = $Data['roll'];
            $this->number = $Data['number'];
            $this->subject = $Data['subject'];
            $this->address = $Data['address'];

            $Query = "INSERT INTO students(name, roll, number, subject, address)";
           echo $Query .= " VALUES('$this->name', '$this->roll', '$this->number', '$this->subject', '$this->address')";

            $Db = new Db();
            $Db->execute($Query);
            $Db->close();
        }

        public function update($Data, $id)
        {
            $this->name = $Data['name'];
            $this->roll = $Data['roll'];
            $this->number = $Data['number'];
            $this->subject = $Data['subject'];
            $this->address = $Data['address'];

            $this->id = $id;

            $Query = "UPDATE students SET name = '$this->name', roll = '$this->roll', number = '$this->number', subject ='$this->subject', address = '$this->address'";
            echo $Query .= " WHERE id = $this->id";

            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
            return $Result;
        }

        public function delete($id)
        {
            $this->id = $id;

            $Query = "DELETE FROM students WHERE id = $this->id";
            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
            return $Result;
        }

        function getAll()
        {
             $Query = "SELECT * FROM students";
            $Db = new Db();
             $Data = $Db->fetchData($Query);
            $Db->close();
            return $Data;
        }

        public function getByPk($id)
        {
            $Query = "SELECT * FROM students WHERE id = $id";
            $Db = new Db();
            $Data = $Db->fetchData($Query);
            $Db->close();
            return $Data;
        }
    }








?>