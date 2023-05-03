<?php

class calculation{
    public $n1 = 10;
    public $n2 = 12;


    public function sum($n1,$n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        return $result = $this->n1 + $this->n2;
    }
    public function sub($n1,$n2)
    {
        $sum = $this->sum(9,2);
        $this->n1 = $n1;
        $this->n2 = $n2;
        return $result = $sum - $this->n2;
    }
    public function mul()
    {
        $sum = $this->sum(4,6);
        $sub = $this->sub(8,5);
        return $relult  = $sum * $sub;
    }
    public function div()
    {
        return $result = $this->n1 / $this->n2;
    }
    
}


$obj = new calculation();

echo $obj->mul(8,5);


