<?php

class Person{
    protected string $firstName;
    protected string $lastName;
    protected int $age;

    // TODO Generate constructor with all properties of the class



   public function __construct($firstname,$lastName,$age)
   {
       $this->firstname = $firstname;
       $this->lastName = $lastName;
       $this->age = $age;
   }

}