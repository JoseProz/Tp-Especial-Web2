<?php
require_once "./Models/modelDatosUsuario.php";
require_once "./Views/viewDatosUsuario.php";

class controllerDatosUsuario{
    private $modelDatos;
    private $viewDatos;

    function __construct(){
        
        $this->modelDatos = new ModelDatosUsuario();
        $this->viewDatos = new ViewDatosUsuario();
    }

    public function registrar(){
        $this->viewDatos->DisplayDatosUsuario();
       //header("Location:" .URL_IR);

        
    }

    public function ingresarDatos(){
        $this->modelDatos->InsertarDatos($_POST['user'],$_POST['pass']);

        header("Location:" .URL_LOGIN);

    }


}





?>
