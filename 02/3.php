<?php

$b='hyGgsafdsabdfcijgsad asg2';
$b=explode(" ",$b);
$c = '';
$w = '';
$array = [];
if (stripos($b[0],$b[1])) {
    echo "Shoma Bimar Hastid";
}
elseif (stripos($b[0],strrev($b[1]))) {
    echo "Shoma Bimar Nemishavid.";
}
else {
    for ($i=0; $i < strlen($b[1]); $i++) {
        if (intval($b[1][$i]) == $b[1][$i]){ 
            for ($j=0; $j < intval($b[1][$i]-1); $j++) { 
                $c = $c.$b[1][$i-1];        
            }   $w = str_replace($b[1][$i],$c,$b[1]);
        }
    }
    array_push($array,$b[0],$w);
    if (stripos($array[0],$array[1]))
        echo "Shoma Bimar Hastid";
    elseif(stripos($array[0],strrev($array[1])))
        echo "Shoma Bimar Nemishavid. ";

}


?>



