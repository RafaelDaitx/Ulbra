<?php

    class UsersController{

        public function index(){

        }

        public function validateLogin()
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
            require_once('models/UsersModel.php');
            $UserModel = new UsersModel();
            $UserModel -> getUser($login);

            $result = $UserModel -> getConsult();

            if($line = $result->fetch_assoc()){
                if($password == $line['password']){
                    $_SESSION['idUser'] = $line['idUser'];
                    $_SESSION['name'] = $line['name'];
                    $_SESSION['login'] = $line['user'];
                    header('Location:index.php?controller=main&action=index');
                } else {
                    print ('Senha Incorreta');
                }

            }else{
                print ('Usuário não existe');
            }

        }

    }

?>