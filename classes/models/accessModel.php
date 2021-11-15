<?php

    namespace models;

    class accessModel{

        public static function signUp($id, $name, $password, $email){
            if(isset($_POST['register'])){
                $newUser = \firebaseConnection::connectAuth()->createAuth()->createUserWithEmailAndPassword($email, $password);
                $newUser = [ 'id' => $id, 'name' => $name, 'password' => $password, 'email' => $email ];
                \firebaseConnection::connect()->getReference('users/' . $id)->set($newUser);
                $_SESSION['login'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
                header('Location: '.BASE.'');
            }
        }

        public static function signIn($email, $password){
            if(isset($_POST['login'])){
                try{
                    $userAuth = \firebaseConnection::connectAuth()->createAuth()->signInWithEmailAndPassword($email, $password);
                    $userData = $userAuth->data();
                    $_SESSION['login'] = true;
                    $_SESSION['email'] = $userData['email'];
                    $_SESSION['password'] = $userData['password'];
                    header('Location: '.BASE.'');
                }catch(Exception $e){
                    echo 'campos errado';
                
            }
                
            }
        }

    }
    
?>