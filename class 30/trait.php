<?php

    trait MassageOne {
        public function msg1(){
            echo "Bangladesh is a beautifull country";
        }
    }

    trait MassageTwo{
        public function msg2() {
            echo "Khulna is a beauitfull Devition";
        }
    }

    trait MassageThree {
        public function msg3(){
            echo "OOP is fun !";
        }
    }

    class ChildOne {
        use MassageThree;
    }

    class ChildTwo {
        use MassageOne,MassageTwo;
    }

    class ChildThree {
        use MassageOne;
        use MassageTwo;
        use MassageThree;
    }



    $objOne = new ChildOne();
    $objOne->msg3();

    echo "<br>";
    echo "<br>";

    $objTwo = new ChildTwo();
    $objTwo->msg1();
    echo "<br>";
    $objTwo->msg2();

    echo "<br>";
    echo "<br>";

    $objThree = new ChildThree();
    $objThree->msg1();
    echo "<br>";
    $objThree->msg2();
    echo "<br>";
    $objThree->msg3();