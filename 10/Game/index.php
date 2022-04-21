<?php

include_once "./vendor/autoload.php";
use \Perid\Perid;
use Game\Game;
use Pars\Pars;

$a = new Pars(250, 50, [3, 2]);
$b = new Game($a);

$b->Up();

$b->Up();


$b->right();

$b->right();

$b->Left();




