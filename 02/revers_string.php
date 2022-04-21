<?php 
function reverse_string($a){
    $s = '';
    for ($j=strlen($a)-1; $j >= 0; $j--) { 
        $s = $s.$a[$j];
    }
    echo $s;
}
reverse_string('hello');
