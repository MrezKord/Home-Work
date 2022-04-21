<?php

class math_operation
{
    public $result;
    private $container;
    public function __construct(int ...$numbers)
    {
        $this->container = $numbers;
    }

    public function __set($name, $value) {
        throw new \Exception("can not add attributes to" . __CLASS__);
    }

    public function sum(){
        $this->result = 0;
        foreach ($this->container as $key => $value) {
            $this->result += $value;
        }
        return $this->result.'<br>';
    }

    public function product(){
        $this->result = 1;
        foreach ($this->container as $key => $value) {
            $this->result *= $value;
        }
        return $this->result.'<br>';
    }

    
}

$x = new math_operation(1, 3, 4);

print_r($x->sum());

echo $x->product();

print_r($x->sum());

echo $x->a = 2;

// print_r($x);
// echo '<hr>';

// $x->a = 2;

// print_r($x);