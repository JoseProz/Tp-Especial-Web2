<?php
require_once "./Models/modelUser.php";
require_once "./Views/viewUser.php";
//require_once "./generate_hash.php";

class controllerUser{
    private $modelUser;
    private $viewUser;

    function __construct(){
        
        $this->modelUser = new ModelUser();
        $this->viewUser = new ViewUser();
    }

    public function IniciarSesion(){
        $password = $_POST['pass'];
        //$pass= password_hash($password, PASSWORD_DEFAULT);
        //var_dump($pass);
        $usuario = $this->modelUser->GetPassword($_POST['user']);
        

        if (isset($usuario) && $usuario != null && password_verify($password,$usuario->password)) {
            session_start();
            $_SESSION['user'] = $usuario->email;
            $_SESSION['userId'] = $usuario->id_usuario;
            header("Location: " . BASE_URL);
        }
        else{
            header("Location: " . URL_LOGIN);
        }
    
        }
    




    public function Login(){
        $this->viewUser->DisplayLogin();
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . URL_LOGIN);
    }


} 


?>