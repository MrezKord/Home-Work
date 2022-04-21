<?php

class Input {
    public static function exists($type = 'post') {
        
        if ($type === 'post') {
            if (!$_POST) {
                return false;
            }else {
                return true;
            }
        }else{
            if (!$_GET) {
               return false;

            }else {
                return true;
            }
        }
    }

    public static function get($item) {
        if (self::exists()) {
            if ($_POST[$item]) {
                return $_POST[$item];
            }else {
                return 'undefind';
            }
        }else{
            if (self::exists('get')) {
                return $_GET[$item];

            }else {
                return 'undeifind';
            }
        }
    }
}

// Input::exists('get');
echo Input::get('reza');