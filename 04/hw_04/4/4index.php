<?php 
$get_json = file_get_contents("4.json");
$decode_json = json_decode($get_json,true);
//-------------------sort_array---------------------------------------
function sort_array($a,$s){
    foreach ($a as  &$i) {    // using & makes a chenge in array 
        foreach ($a as &$j) {
            if ($i[$s] < $j[$s]){
                $c = $i;   // $a = $b  ,  $b = $a
                $i = $j;
                $j = $c;
            } 
        }
    }return $a;
}
//---------------------sort_array_revers-------------------------------------
function sort_array_revers($a,$s){
    foreach ($a as  &$i) {    // using & makes a chenge in array 
        foreach ($a as &$j) {
            if ($i[$s] > $j[$s]){
                $c = $i;   // $a = $b  ,  $b = $a
                $i = $j;
                $j = $c;
            } 
        }
    }return $a;
}
//-------------------------Send array to 4form.php---------------------------------
$value_select = $_POST['selectmodel'];
if ($value_select == "age"){
    $result = sort_array($decode_json,"age");
}elseif ($value_select == "agerevers") {
    $result = sort_array_revers($decode_json,"age");
}elseif ($value_select == "school") {
    $result = sort_array($decode_json,"school");
}
$a = serialize($result);  // serialized for send array
$submit = $_POST['sort'];
header("Location:4form.php?submit=$submit&result=".urlencode($a));


