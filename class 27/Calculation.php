<?php

    class Calculation{
        public $NumberOne;
        public $NumberTwo;


        public function calculateSum(){
            return $this->NumberOne + $this->NumberTwo;
        }
    }

    $CalculateObj = new Calculation();
    $CalculateObj->calculateSum();