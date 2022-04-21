<?php
namespace UserType;

use Ability\CanLike;
use User\User;

class NormalUser extends User {
    use CanLike;
}