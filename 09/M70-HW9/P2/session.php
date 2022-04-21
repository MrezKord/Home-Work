<?php
// session_start();
class Session {

    public static function exists($name) {
        // if (isset($_SESSION[$name])) {
        //     return true;
        // }else {
        //     return false;
        // }
        return isset($_SESSION[$name]);
    }

    public static function put($name, $value) {
        $_SESSION[$name] = $value;
    }

    public static function get($name) {
        return $_SESSION[$name];
    }

    public static function delete($name) {
        unset($_SESSION[$name]);
    }

    public static function flash ($name, $string = 'null') {
        if (isset($_SESSION[$name])) {
            $container = $_SESSION[$name];
            unset($_SESSION[$name]);
            return $container;
        }else {
            $_SESSION[$name] = $string;
        }
    }
}



// Session::put('reza', 'programmer');

// echo Session::get('reza');

// Session::flash('reza');

// echo Session::get('reza');

