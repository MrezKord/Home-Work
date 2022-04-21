<?php

require "ClassItem.php";
require "Person.php";
require "Student.php";

$class = new ClassItem(1,'Mathematics','best');
// set duration and days
$class->set_du(2);
$class->set_days(['sunday', 'monday']);

$class2 = new ClassItem(2,'Science','exciting');
// set duration and days
$class2->set_du(1);
$class2->set_days(['saturday', 'monday']);

$student = new Student('ali','karami',25);

$student->addClass($class)->addClass($class2);

if ($student->isStudentHasClass($class)) {
    var_dump($student->classList());
}


//must like this
//[
//  ['id'=>1,'name'=>'Mathematics','description'=>'best','duration'=>1or2,'days'=>[]],
//  ['id'=>2,'name'=>'Science','description'=>'exciting','duration'=>1or2,'days'=>[]]
//]


