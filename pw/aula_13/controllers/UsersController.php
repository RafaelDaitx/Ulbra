<?php

    class UsersController{
        public function _construct()
        {
            require_once('models/UsersModel.php');
            $this ->UserModel = new UserModel();
        }

        public function index(){

        }

        public function login()
        {
            $userData = json_decode(file_get_contents('php://input'));

            if(isset($userData ->user) && isset($userData->password)){
                $this ->UserModel ->getUser($userData->user);
                $result = $this->UserModel->getConsult();
                if($line = $result->fetch_assoc()){
                    if($line = ['password']==$userData->password){
                        $token = $this -> createJWT($line);
                        header('Content-Type: application/json');
                        echo json_encode('{"access": "true","token" : "'.$token.'"}');
                    } else{
                        print ('Senha Incorreta');
                    }
                } else{
                    print ('Usuário não existe');
                }
            }
        }

        public function createJWT($user){
        $header = [
        'alg' => 'HS256',
        'typ' => 'JWT'
        ];
        $header = json_encode($header);
        $header = base64_encode($header);
        $header = str_replace(['+', '/', '='], ['-', '_', ''], $header); //base64url

        $payload = [
        'iss' => 'localhost',
        'name' => "{$user['name']}",
        'user' => "{$user['user']}",
        'admin' => "{$user['admin']}"
        ];
        $payload = json_encode($payload);
        $payload = base64_encode($payload);
        $payload = str_replace(['+', '/', '='], ['-', '_', ''], $payload); //base64url

        $signature = hash_hmac('sha256',"$header.$payload",'minha-senha',true);
        $signature = base64_encode($signature);
        $signature = str_replace(['+', '/', '='], ['-', '_', ''], $signature); //base64url


        $token = $header . "." . $payload . "." . $signature;

        return $token;
    }

    public function checkJWT($headers){
        
        if($header['Authorization']){

        $header = apache_request_headers();
        $token = $header['Authorization'];

        $token = str_replace("Bearer ", "", $token); //se tiver o prefixo "Bearer" remover

        var_dump($token);

        $part = explode(".",$token);
        $header = $part[0];
        $payload = $part[1];
        $signature = $part[2];
        $paylod = base64_decode($payload);

        $valid = hash_hmac('sha256',"$header.$payload",'minha-senha',true);
        $valid = base64_encode($valid);
        $valid = str_replace(['+', '/', '='], ['-', '_', ''], $valid); //base64url

        if($signature == $valid){
            return true;
        }else{
            return false;
        }
    }

}

        public function isAdmin(){

            $headers = apache_request_headers();

            if($this ->checkJWT()){
                $token = $headers['Authorization'];
                $token = str_replace("Bearer ", "");

                $part = explode('.', $token);
                $payload = $part[1];
                $payload = base64_decode($payload);
                $payload = json_decode($payload);

                if($payload ->admin==1){
                    return true;
                } else{
                    return false;
                }
            } else{
                return false;
            }

        }
    }


?>