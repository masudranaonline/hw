<?php
    /**
     * Teacher class
     */

    class Teacher
    {
        private $id;
        private $name;
        private $number;
        private $education;
        private $subject;
        private $address;

         function add($Data)
        {
            $this->name = $Data['name'];
            $this->number = $Data['number'];
            $this->education = $Data['education'];
            $this->subject = $Data['subject'];
            $this->address = $Data['address'];

            $Query = "INSERT INTO teachers(name, number, education, subject, address)";
            echo $Query .= " VALUES('$this->name', '$this->number', '$this->education', '$this->subject', '$this->address')";

            $Db = new Db();
            $Db->execute($Query);
            $Db->close();
        }

        function update($Data, $id)
        {
            $this->name = $Data['name'];
            $this->number = $Data['number'];
            $this->education = $Data['education'];
            $this->subject = $Data['subject'];
            $this->address = $Data['address'];

            $this->id = $id;

            $Query = "UPDATE teachers SET name = '$this->name', number = '$this->number', education = '$this->education', subject = '$this->subject', address = '$this->address' WHERE id = $this->id";
            var_dump($Query);
            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
            return $Result;
        }

        function delete($id)
        {
            $this->id = $id;
            $Query = "DELETE FROM teachers WHERE id = $this->id";

            $Db = new Db();
            $Data = $Db->execute($Query);
            $Db->close();
            return $Data;
        }

        function getAll()
        {
            $Query = "SELECT * FROM teachers";
            $Db = new Db();
            $Data = $Db->fetchData($Query);
            $Db->close();
            return $Data;
        }

        function getByPk($id)
        {
            $Query = "SELECT * FROM teachers WHERE id = $id";
            $Db = new Db();
            $Result = $Db->fetchData($Query);
            $Db->close();
            return $Result;
        }
    }
    

?>