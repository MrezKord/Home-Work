<?php

namespace Ability;
use Post\Post;

trait CanArchive {

    private $posts = [];

    public function archive(Post $post){
        $this->posts[] = $post;
    }

    public function getArchivePost(){
        return $this->posts;
    }
}