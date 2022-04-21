<?php

namespace Post;

trait Ui {

    /**
     * creat a ui for show comment
     */

    public function show(){

        $result = '<div class="container">';

        $result .= '<div class="main">';

        $result .= '<div class="item">';
        $result .= $this->getSubject();
        $result .= '</div>';

        $result .= '<div class="item">';
        $result .= $this->getContent();
        $result .= '</div>';

        $result .= '<div class="item">';
        $result .= '<svg class="h-5 w-5 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
        </svg>
        <span class="likes">'.count($this->getLikes()).'</span>';
        $result .= '</div>';

        $result .= '</div>';

        $result .= '<div class="main">';
        foreach ($this->getComments() as $key => $value) {
            $result .= '<div class="item">';
            $result .= $value['user_name'].' : '.$value['comment']->getComment();
            $result .= '</div>';
        }
        $result .= '</div>';

        $result .= '</div>';

        return $result;
    }
}