<?php
function factoriel($a){
    $c = 1; // container
    if ($a > 0 && (gettype($a) == 'integer')){ // check positive or integer
        for ($i = $a;$i > 0;$i--){  // a * a-1 * a-2 * .... * a-(a-1)
            $c *= $i;
        }
    echo $c;
    }elseif (gettype($a) != 'integer'){
        echo 'please enter an integer';
    }
    else
        echo 'please enter an positive number';
}

factoriel(4);