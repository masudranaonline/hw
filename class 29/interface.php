<?php
    interface Calculation{
        public function sum($n1,$n2);
        public function sub($n1,$n2);
    }

    class ChildClass implements Calculation{
        public function sum($n1,$n2){
            return $n1+ $n2;
        }
        public function sub($n1,$n2){
            return $n1 - $n2;
        }
        public function mul($n1,$n2){
            return $n1 * $n2;
        }
    }

    $object = new ChildClass();
   echo $object->mul(10,5);

    // $object = new Calculation();

