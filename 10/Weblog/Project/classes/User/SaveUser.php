<?php

use User\User;
namespace User;

trait SaveUser {

    private static $users = [];

    public function addUser(User $user){
        self::$users[] = $user;
    }

    public static function getUsers(){
        return self::$users;
    }

}