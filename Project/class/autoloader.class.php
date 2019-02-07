<?php

class Autoloader {
    public static function register() {
        spl_autoload_register(array(__CLASS__, 'load')); 
    }

    public static function load($class) {
        require '../class/' . $class . '.class.php';

    }
}

?>