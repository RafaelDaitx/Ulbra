<?php

class UsersModel{

    var $result;

    function __construct(){
        require_once('bd/ConnectClass.php');
    }

    public function getUser($login)
    {

        $Oconn = new ConnectClass();
        $Oconn -> openConnect();
        $conn = $Oconn -> getConn();

        $sql = "
        SELECT * FROM users
        WHERE user= '{$login}'
        ";

        $this -> result = $conn -> query($sql);
    }

    public function getConsult()
    {
        return $this -> result;
    }
}

?>