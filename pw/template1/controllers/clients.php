<?php

class clientsController
{
    public function index(){

    }
    
    public function register()
    {
        require_once('views/templates/header.php');
        require_once('views/clients/register.php');
        require_once('views/templates/footer.php');
    }

    public function registerView(){
        if(isset($_POST['estendido'])){
            $estendido=$_POST['estendido'];
        } else{
            $estendido="";
        }
        $client = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'interest' => $_POST['interest'],
            'password' => $_POST['password'],
            'radio' => $_POST['radio'],
            'textarea' => $_POST['textarea'],
            'select' => $_POST['select'],
            'estendido' => $estendido
        );

        require_once('views/templates/header.php');
        require_once('views/clients/registerView.php');
        require_once('views/templates/footer.php');
    }

    public function listClients(){
        require_once('models/clientsModel.php');
        $client = new clientsModel();
        $client -> listClients();
        $result = $client -> getConsult();

        $arrayClients = array();

        while($line = $result -> fetch_assoc()){
            array_push($arrayClients,$line);
        }

        require_once('views/templates/header.php');
        require_once('views/clients/listClients.php');
        require_once('views/templates/footer.php');
    }
}

?>
