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
    }
    

?>