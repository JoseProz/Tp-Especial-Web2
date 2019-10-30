<?php
require_once "./Models/ModelRegistro.php";
require_once "./Views/ViewRegistro.php";
require_once "./Models/ModelUser.php";
class ControllerRegistro{
    private $modelRegistro;
    private $viewRegistro;
    private $model;
    function __construct(){
        $this->model= new ModelUser();
        $this->modelRegistro = new ModelRegistro();
        $this->viewRegistro = new ViewRegistro();
    }
    public function registrar(){
        $this->viewRegistro->DisplayRegistro();
       //header("Location:" .URL_IR);
        
    }
    public function ingresarDatos(){
        $email=$_POST['user'];
        $password=$_POST['pass'];
        $usuarios = $this->model->getUsuarios();
        

        
            foreach ($usuarios as $usuario) {
                if (($email)==($usuario->email)){
                    $this->registrar();die;
                }
                   
            }
            $this->modelRegistro->InsertarDatos($email,$password);
            header("Location:" .URL_LOGIN);
    }
}