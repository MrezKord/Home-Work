<?php


class Cookie {
    public static function exists($name) {
        return (isset($_COOKIE[$name])) ? true : false;
    }

    public static function get($name) {
        return $_COOKIE[$name];
    }

    public static function put($name, $value, $expiry) {
        if(setcookie($name, $value, time() + $expiry, '/')) {
            return true;
        }
        return false;
    }

    public static function delete($name) {
        self::put($name, '', time() -1);
    }
}

// Cookie::put('reza', '20', 60);
// if (Cookie::exists('reza')) {
//     echo 'rr';
// }else {
//     echo "bb";
// }

// Cookie::delete('reza');

// echo Cookie::get('reza');

