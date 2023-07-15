<?php

    class TestClass
    {
        public $name;
        private $prop2;
        protected $prop3;

        public function CallName($input){
            $this->name = $input;
        }

    }

    $obj = new TestClass;
    $obj->CallName("Masud Rana");
    echo $obj->name;



?>