<?php

class calculation{
    public $n1 = 10;
    public $n2 = 12;


    public function sum()
    {
        return $result = $this->n1 + $this->n2;
    }
    public function sub()
    {
        return $result = $this->n1 - $this->n2;
    }
    public function mul()
    {
        return $relult  = $this->n1 * $this->n2;
    }
    public function div()
    {
        return $result = $this->n1 / $this->n2;
    }
    
}


$obj = new calculation();

// echo $obj->div();


