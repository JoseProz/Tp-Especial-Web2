<?php
require_once "./Models/modelRegistro.php";
require_once "./Views/viewRegistro.php";
require_once "./Views/viewDatosUsuario.php";
require_once "./Views/viewVisita.php";

class controllerRegistro{
    private $modelRegistro;
    private $viewRegistro;
    private $viewVisita;

    function __construct(){
        
        $this->modelVisita = new modelRegistro();
        $this->viewRegistro = new viewRegistro();
        $this->viewVisita= new viewVisita();
    }

    public function getInicio(){
        $this->viewRegistro->DisplayRegistro();
       // header("Location:" .URL_INICIO);
    }

    public function getVisita(){
        $hoteles= $this->modelVisita->GetVisita();
        $this->viewVisita->DisplayVisita($hoteles);
    }


}





?>