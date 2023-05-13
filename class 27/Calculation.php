<?php

    class Calculation{
        public $NumberOne;
        public $NumberTwo;

        public function __construct($n1,$n2)
        {
            $this->NumberOne = $n1;
            $this->NumberTwo = $n2;
            echo $n1 + $n2;
        }

        public function calculateSum($n1,$n2){
            $this->NumberOne = $n1;
            $this->NumberTwo = $n2;
            return $this->NumberOne + $this->NumberTwo;
        }
        public function calculateSub($n1,$n2){
            $this->NumberOne = $n1;
            $this->NumberTwo = $n2;
            return $this->NumberOne - $this->NumberTwo;
        }
    }

    $CalculateObj = new Calculation(55,44);
    // $CalculateObj->calculateSub(45,25);