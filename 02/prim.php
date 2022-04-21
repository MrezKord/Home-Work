<?php
function prim_check($a){
    if ($a > 1 && (gettype($a) == 'integer')){ // checkig $a greater than one and integer  
        for ($i=2; $i < 10; $i++) { // if $a % [2,3,....,9] = 0 , $a is not prim number
            $d = $a % $i;
            if ($d == 0){
                echo "This number a not prim number";
                break;
            }
        }
        if ($d != 0){
            echo "This number a prim number";
        }
    }elseif (gettype($a) != 'integer'){
        echo "please enter an integer";
    }elseif ($a < 0)
        echo "please enter an positive number";
    else 
        echo "zero or one are not prim";
}

prim_check(31);