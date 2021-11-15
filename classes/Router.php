<?php

    class Router{

        public static function getRoute(){
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
            $slug = explode('/',$url)[0];
            if(file_exists('views/'.$slug.'.php')){
                include('views/includes/header.php');
                include('views/'.$slug.'.php');
                include('views/includes/footer.php');
            }
        }

    }

?>