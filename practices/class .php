<?php

use calculation as GlobalCalculation;

    class calculation
    {
        public $n1 = 10;
        public $n2 = 15;


        public function sum($n1,$n2)
        {
            $this->n1 = $n1;
            $this->n2 = $n2;
            return $result = $this->n1 + $this->n2;
        }

        public function sub($n1,$n2)
        {
             $sum = $this->sum(9,3);
            $this->n1 = $n1;
            $this->n2 = $n2;
           
            return $result =  $sum - $this->n2;
        }

        public function mul()
        {
            return $this->n1 * $this->n2;
        }

        public function div()
        {
            return $this->n1 / $this->n2;
        }
    }


    $object = new GlobalCalculation();

    echo $object->sub(8,5);