<?php
function sort_array($a){
    foreach ($a as  &$i) {    // using & makes a chenge in array 
        foreach ($a as &$j) {
            if ($i < $j){
                $c = $i;   // $a = $b  ,  $b = $a
                $i = $j;
                $j = $c;
            } 
        }
    }print_r($a);
}

$t = [33,65,21,32,11,23,44,11,11,11];
$w = ['d','b','c','a'];
sort_array($t);
?>