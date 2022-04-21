<?php

class Car implements Vehicle {

    private $weight;
    private $color;
    private $pluque;

    public function __construct($color, $pluque, $weight)
    {
        $this->weight = $weight;
        $this->color = $color;
        $this->pluque = $pluque;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getPlaque(){
        return $this->pluque;
    }

    public function getColor(){
        return $this->color;
    }

    public function getType(){
        return __CLASS__;
    }
}