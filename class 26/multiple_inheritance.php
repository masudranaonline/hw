<?php

use ParentClass as GlobalParentClass;

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

    class ChildClass1 extends ParentClass{

    }

    class ChildClass2 extends GlobalParentClass {

    }

    $ChildObject1 = new ChildClass1();
    $ChildObject2 = new ChildClass2();

    $ChildObject1->sum(10,15);
    echo "<br>";
    $ChildObject2->mul(10,15);

    // $ParentObject = new ParentClass();
    // $ParentObject->sub(15,5);