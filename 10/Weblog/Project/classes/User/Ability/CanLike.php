<?php

namespace Ability;
use Post\Post;

trait CanLike {
   
    public function like(Post $post) {
        $post->addLike($this->getUserName(), true);
    }
}