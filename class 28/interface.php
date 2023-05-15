<?php

use ChildClass as GlobalChildClass;

    interface ParentClass {

    }


    class ChildClass implements ParentClass {
        public $name;
    }

    $object = new |GlobalChildClass();