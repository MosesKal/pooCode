<?php

namespace App\Db;

// on importe PDO

use PDO;
use PDOException;

Class Db extends PDO
{
    // Instance unique de la classe

    private static $instance;

    //Informations de connexion a la db

    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = 'demo_poo';

    private function __construct()
    {
        //DSN de connexion
        $_dns = 'msql:dbname='.self::DBNAME.';host='.self::DBHOST;

        //on appelle le constructeur de la class PDO

        try{
            parent::__construct($_dns, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }
}