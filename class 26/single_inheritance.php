<?php


    class ParentClass {
        public $FirstNumber = 55;
        public $SecoundNumber = 44;


        public function sum($n1,$n2)
        {
            $this->FirstNumber = $n1;
            $this->SecoundNumber = $n2;
            $result = $this->FirstNumber + $this->SecoundNumber;
            echo $result;
        }
        public function sub($n1,$n2)
        {
            $this->FirstNumber = $n1;
            $this->SecoundNumber = $n2;
            $result = $this->FirstNumber - $this->SecoundNumber;
            echo $result;
        }
        public function mul($n1,$n2)
        {
            $this->FirstNumber = $n1;
            $this->SecoundNumber = $n2;
            $result = $this->FirstNumber * $this->SecoundNumber;
            echo $result;
        }
        public function div($n1,$n2)
        {
            $this->FirstNumber = $n1;
            $this->SecoundNumber = $n2;
            $result = $this->FirstNumber / $this->SecoundNumber;
            echo $result;
        }
    }

    class ChildClass extends ParentClass{

    }

    $ChildObject = new ChildClass();
    $ChildObject->mul(10,12);

    // $ParentObject = new ParentClass();
    // $ParentObject->sub(15,5);