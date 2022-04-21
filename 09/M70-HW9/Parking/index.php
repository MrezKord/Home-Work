<?php
spl_autoload_register(function($className){
    include (dirname(__FILE__).'\\classes\\'.str_replace('\\', '/', $className).'\\'.str_replace('\\', '/', $className).'.php');
});



$car = new Car('blue', 10001, 3000);
$motor = new Motorcycle('red', 10002, 500);
$rent = new rent($car);
$rent2 = new rent($motor);

$parking = new Parking(6 ,1, '08:00', '23:59');
// $parking->addVehicle($rent);
$parking->addVehicle($rent2);
// $parking->Exit($rent);
// $parking->Exit($rent2);
// print_r($parking);

// echo $parking->getTotalIncome();