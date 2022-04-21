<?php

namespace User;

use User\SaveUser;

abstract class User {

    private string $user_name;
    private string $email;

    use SaveUser;

    public function __construct(string $user_name, string $email)
    {
        $this->user_name = $user_name;
        $this->email = $email;
        $this->addUser($this);
    }
    
    public function getUserName(){
        return $this->user_name;
    }
}