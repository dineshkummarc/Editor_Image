<?php

    require './vendor/autoload.php';
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    class firebaseConnection{

        private static $factory;

        public function __construct(){
            self::$factory = (new Factory())->withServiceAccount('classes/firebaseConfig.json')->withDatabaseUri('https://photoshop-aa1a2-default-rtdb.firebaseio.com/');
        }

        public static function connect(){
            $database = self::$factory->createDatabase();
            return $database;
        }

        public static function connectAuth(){
            $database = self::$factory;
            return $database;
        }
        
    }


?>