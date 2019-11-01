<?php
require_once "./Models/ModelInicio.php";
require_once "./Views/ViewInicio.php";
require_once "./Views/ViewRegistro.php";
require_once "./Views/ViewVisita.php";
class ControllerInicio{
    private $modelVisita;
    private $viewInicio;
    private $viewVisita;
    function __construct(){
        
        $this->modelVisita = new ModelInicio();
        $this->viewInicio = new ViewInicio();
        $this->viewVisita= new ViewVisita();
    }
    public function getInicio(){
        $this->viewInicio->DisplayInicio();
       // header("Location:" .URL_INICIO);
    }
    public function getVisita(){
        $destinos= $this->modelVisita->GetVisita();
        $this->viewVisita->DisplayVisita($destinos);
    }
    public function getVisitaHoteles(){
        $hoteles= $this->modelVisita->GetVisitaHoteles();
        $this->viewVisita->DisplayVisitaHoteles($hoteles);
    }


}