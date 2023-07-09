<?php

    /**
     * Result class
     */

     class Result
     {
        private $id;
        private $name;
        private $roll;
        private $subject;
        private $cgpa;

        public function add($Data)
        {
            $this->name = $Data['name'];
            $this->roll = $Data['roll'];
            $this->subject = $Data['subject'];
            $this->cgpa = $Data['cgpa'];

            $Query = "INSERT INTO result(name, roll, subject, cgpa)";
            $Query .= " VALUES('$this->name', '$this->roll', '$this->subject', '$this->cgpa')";

            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
        }

        public function delete($id)
        {
            $this->id = $id;
            $Query = "DELECT FROM result WHERE id = $this->id";
            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
            return $Result;
        }

        public function update($Data, $id)
        {
            $this->id = $Data['id'];
            $this->name = $Data['name'];
            $this->roll = $Data['roll'];
            $this->subject = $Data['subject'];
            $this->cgpa = $Data['cgpa'];

            $Query = "UPDATE result SET name = '$this->name', roll = '$this->roll', subject = '$this->subject', cgpa = '$this->cgpa' WHERE id = $this->id";
            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
            return $Result;
        }

        public function getAll()
        {
            $Query = "SELECT * FROM result";
            $Db = new Db();
            $Result = $Db->fetchData($Query);
            $Db->close();
            return $Result;
        }

        public function getByPk( $id)
        {
            $Query = "SELECT * FROM result WHERE id = $id";
            $Db = new Db();
            $Result = $Db->fetchData($Query);
            $Db->close();
            return $Result;
        }
    }



?>