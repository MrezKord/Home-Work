<?php

namespace Tools;

use Post\Post;
use User\User;

trait Serializable
{

    private $file_path;

    /**
     * Save log in file
     * 
     * @param string @path
     * @param Post $subject
     */

    protected function saveLog(string $path, Post $subject)
    {
        // echo $_SERVER['DOCUMENT_ROOT'];

        $this->file_path = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) .'/'. $path;
        $serialize = serialize($subject) . PHP_EOL;

        if (!file_exists($this->file_path )) {
            $open = fopen($this->file_path , 'a+');
            fwrite($open, $serialize);
            fclose($open);
        }else {
            if (!$this->CheckExist($serialize)) {
                $open = fopen($path, 'a+');
                fwrite($open, $serialize);
                fclose($open);
            }    
        }
    }

    /**
     * Check post is exist in file or not
     * 
     * @param string $serialized_post
     */

    protected function CheckExist(string $serialized_post)
    {
        $open = fopen($this->file_path , 'r');
        $container = [];
        while (!feof($open)) {
            $container[] = fgets($open);
        }

        $flag = false;

        foreach ($container as $key => $value) {
            if ($value === $serialized_post) {
                $flag = true;
                break;
            }
        }

        return $flag;
    }
}
