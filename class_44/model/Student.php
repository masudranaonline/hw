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

    function addStudent($Data)
    {
        $this->name = $Data['name'];
        $this->roll = $Data['roll'];
        $this->number = $Data['number'];
        $this->subject = $Data['subject'];
        $this->address = $Data['address'];

        $Query = "INSERT INTO students(name, roll, number, subject, address)";
        $Query .= " VALUES('$this->name', '$this->roll', '$this->number', '$this->subject', '$this->address')";
        $Db = new Db();
        $Db->execute($Query);
        $Db->close();
    }

    function getAll()
    {
        $Query = "SELECT * FROM students";

        $Db = new Db();
        $Data = $Db->execute($Query);
        while($Rows = mysqli_fetch_assoc($Data)){
            $Student[] = $Rows;
        }
        $Db->close();
        return $Student;
    }


}
