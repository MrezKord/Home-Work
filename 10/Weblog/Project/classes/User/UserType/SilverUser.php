<?php
namespace UserType;

use Ability\CanComment;
use Ability\CanLike;
use User\User;

class SilverUser extends User {

    use CanComment;
    use CanLike;
}