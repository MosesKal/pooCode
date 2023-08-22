<?php

namespace App;

class Autoloader{
    public static function register(){
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }
    public static function autoload($class){
        $class = str_replace(__NAMESPACE__.'\\', '', $class);
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        $fichier = __DIR__.DIRECTORY_SEPARATOR.$class. '.php';

        if(file_exists($fichier)){
            require_once $fichier;
        }
        
    }

}