<?php


spl_autoload_register(function($className){
    include (dirname(__FILE__).'\\'.str_replace('\\', '/', $className)).'.class.php';
});

use classes\SortingStrategy;
use classes\Collection;
use classes\PlainSort;
use classes\ReverseSort;

// create a normal list
$shopping_list = new Collection(new PlainSort());
$shopping_list->addItem('Ali');
$shopping_list->addItem('Reza');
$shopping_list->addItem('Mohammad');
print_r($shopping_list->getAll());

// what about sorting it backwards?

$shopping_list = new Collection(new ReverseSort());
$shopping_list->addItem('Ali');
$shopping_list->addItem('Reza');
$shopping_list->addItem('Mohammad');
print_r($shopping_list->getAll());