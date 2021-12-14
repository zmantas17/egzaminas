<?php

namespace Imones;

use PDO;
use PDOException;

class Database {
    private static $connection = 'mysql:host=localhost';
    private static $user = 'mantas';
    private static $password = 'mantelyzas';
    private static $database = 'mantas';
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ];

    public static function connect(){
        try {
            return new PDO(
                self::$connection.';dbname='.self::$database,
                self::$user,
                self::$password,
                self::$options,
            );
        } catch (PDOException $ex){
            die($ex->getMessage());
        }
    }
}