<?php
    abstract class ParentClass {
        public function Printline(){
            echo "Masud Rana!";
        }
        public function Echoline(){
            echo "City Polytechnic Institute";
        }
    }

    class ChildClass extends ParentClass {
        public function Rana(){
            echo "Bangladesh";
        }
    }

    $object = new ChildClass();
    $object->Printline();

    // $masud = new ParentClass();
    // $masud->Printline();