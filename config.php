<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $autoload = function($class){
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);
    
    define('BASE','http://localhost/image-editor-php/');
    define('BASE_UPLOADS', __DIR__.'/uploads/');

    if(!isset($_SESSION['login'])){
        $_SESSION['name'] = 'Visitante';
        $_SESSION['email'] = 'email@example.com';
    }

?>
