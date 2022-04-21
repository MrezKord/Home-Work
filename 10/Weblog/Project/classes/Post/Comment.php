<?php

namespace Post;

class Comment {

    private string $comment;

    public function __construct(string $comment)
    {
        $this->comment = $comment;       
    }

    public function getComment(){
        return $this->comment;
    }
    
}