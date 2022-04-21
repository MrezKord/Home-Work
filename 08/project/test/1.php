<?php

// abstract class test {
//     protected $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     abstract public function makeNoise();
//     abstract public function eat();
// }



// class Dog extends test {
//     public function makeNoise() {
//       echo " bark bark";
//     }

//     public function eat(){
//         return $this->name = ' is eating';
//     }
// }

// class Cat extends test {
//     public function makeNoise() {
//       echo " Meow ";
//     }

//     public function eat(){
//         return $this->name = ' is eating';
//     }
// }

// $a = new Cat('www');

// echo $a->eat();

// $a->makeNoise();

//############################################

class Test {
    public static $data = null ;
    private function __construct() {
    // $this->data = $data;
    }
    public static function getData() {
    if (self::$data == null) {
    self::$data = new Test;
    }
    return self::$data;
    }
    }
    var_dump(test::getData());
    var_dump(test::getData());


//################### late static binding

// class Test
// {
//     public static function call()
//     {
//         echo __CLASS__;
//     }
//     public static function test()
//     {
//         static::call();
//     }
// }
// class Test2 extends Test
// {
//     public static function call()
//     {
//         echo __CLASS__;
//     }
// }

// Test2::test();
