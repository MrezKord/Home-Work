<?php 
function reverse_string($a){
    $s = '';
    for ($j=strlen($a)-1; $j >= 0; $j--) { 
        $s = $s.$a[$j];
    }
    return $s;
}// using reverse_string function

function palindrome($c){
    if (reverse_string($c) == $c){
        echo "\"$c\" is palindrome";
    }else
        echo "\"$c\" is not palindrome";
}
palindrome('lol');