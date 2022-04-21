<?php

namespace Post;

use Tools\Serializable;
use Post\Ui;
use User\User;

class Post {

    private $subject;
    private $content;
    private $comments = [];
    private $likes = [];

    use Serializable;
    use Ui;

    /**
     * Constructor
     * 
     * @param string $subject
     * @param string $content
     */
    public function __construct(string $subject, string $content)
    {
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * get Post
     * 
     * @return array
     */

    public function getPost(){
        return [
            'subject' => $this->subject,
            'content' => $this->content
        ];
    }

    public function getSubject(){
        return $this->subject;
    }

    public function getContent(){
        return $this->content;
    }

    /**
     * get a comment
     * 
     * @param Comment $comment
     * @param string $user_name
     */

    public function receiveComment(Comment $comment, string $user_name){
        $this->comments[] = ['user_name' => $user_name, 'comment' => $comment];
    }

    public function getComments(){
        return $this->comments;
    }

    /**
     * add user liked Post
     * 
     * @param string $user_name
     * @param bool $like
     */

    public function addLike(string $user_name, bool $like = false){
        $this->likes[] = ['user_name' => $user_name, 'like' => $like]; 
    }

    public function getLikes(){
        return $this->likes;
    }

    /**
     * Save log in end
     */

    public function __destruct()
    {
        $this->saveLog('Project/Data/Post.log', $this);
    }
}