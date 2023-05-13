<?php
    require 'Calculation.php';

    class AnotherCalclation extends Calculation{

    }

    class AnotherCalclation2 extends Calculation {

    }

    $AnotherObj = new AnotherCalclation();
    // $AnotherObject2 = new AnotherCalclation2(26,13);
    $AnotherObj->calculateSum(5,4);