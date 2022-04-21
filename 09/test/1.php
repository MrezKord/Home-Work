<?php

// abstract class name {
//     private $name;

//     abstract public function setname($name);
//     abstract public function getnsme();
// }



// class test extends name{
//     public function setname($name){}
//     public function getnsme(){}

// }

// require "2/ok.php";

// // use \Person\Person;

// Person::name();


############################# week day ############################

// $date = strtotime('+2 day +1 hour now');
// echo date("l", $date).PHP_EOL; // LOWER CASE L 

// $a = date('Y-m-d H:i', $date).PHP_EOL;
// echo $a;


// // $start = strtotime('12:01:00');
// // $end = strtotime('13:16:00');
// // $minutes = ($end - $start) / 60;
// // echo "The difference in minutes is $minutes minutes.";
#######################################################
// $n = strtotime('2022-06-1 11:10') - strtotime($a);
// echo date('m:d h:i', $n);

// $a = date_create(date('Y-m-d H:i:s', time()));
// $b = date_create(date('Y-m-d H:i:s', time()+(60*60*24*2*365)));
// // $c = strtotime($b) - strtotime($a);

// // echo date('Y-m-d H:i:s', $c);

// $d = date_diff($b, $a);
// echo $d->days;

###################################################

// echo date('l', strtotime('2022-04-13 15:24'));
// $container = [];
// $c = 1;
// for ($i=1; $i <= 560; $i++) {
//     $container[$i] = ['floor' => $c, 'main' => $i];
//     if ($i%70 === 0) {
//         $c++;
//     }
// }
// file_put_contents('1.json', json_encode($container, JSON_PRETTY_PRINT));

// $d = file_get_contents('1.json', true);
// print_r($d);

$a = date('H:i', strtotime('2022-04-13 15:24'));
$b = date('H:i', time());
// echo $a;

echo $a < $b;