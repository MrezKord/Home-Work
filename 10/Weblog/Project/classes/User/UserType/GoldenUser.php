<?php

namespace UserType;

use Ability\CanArchive;
use Ability\CanComment;
use Ability\CanLike;
use User\User;


class GoldenUser extends User {
    use CanComment;
    use CanArchive;
    use CanLike;
}