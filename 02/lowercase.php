<?php
function lowercase($a){
    $b = strtolower($a);
    if ($a == $b){
        echo "\"$a\" is lowercase";
    }else
        echo "\"$a\" is not lowercase";
}

lowercase('mohammad reza');