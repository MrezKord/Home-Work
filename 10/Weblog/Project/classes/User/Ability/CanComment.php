<?php

namespace Ability;


use Post\Post;
use Post\Comment;

trait CanComment {
    
    public function comment(string $subject, Post $post){

        $comment = new Comment($subject);
        $post->receiveComment($comment, $this->getUserName());
    }
}