<?php

class Redirect {
    public static function to($location = null) {
        if ($location != null) {
            header('Location: '.$location);
        }
    }
}