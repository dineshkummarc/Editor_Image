<?php

    namespace controllers;

    class accessController{

        public static function controlAccess(){
            if(@$_GET['url'] == 'register' || @$_GET['url'] == 'login'){
                if(isset($_SESSION['login'])){
                    header('location: '.BASE.'');
                }
            }
        }

        public static function controlAccessDashboard(){
            if(@$_GET['url'] == ''){
                if(!isset($_SESSION['login'])){
                    header('location: '.BASE.'login');
                }
            }
        }

    }

?>

