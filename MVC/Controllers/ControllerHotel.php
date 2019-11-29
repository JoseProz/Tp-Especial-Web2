<?php
require_once "./MVC/Models/ModelHotel.php";
require_once "./MVC/Models/ModelImagen.php";
require_once "./MVC/Views/ViewHotel.php";

class ControllerHotel{
    
    private $modelHotel;
    private $viewHotel;
    private $modelImagen;
    
    function __construct(){
        
        $this->modelImagen= new ModelImagen();
        $this->modelHotel = new ModelHotel();
        $this->viewHotel = new ViewHotel();
    }
    
    public function GetHoteles(){
        $hoteles= $this->modelHotel->GetHoteles();
        $destinos = $this->modelHotel->getDestino();
        $this->viewHotel->DisplayHoteles($hoteles,$destinos);
        
    }
    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['user']) || ($_SESSION['tipo'] != 1) ){
            header("Location: " . URL_login);
            //var_dump($_SESSION);
            die();
        }
    }
    
    
   
    public function getTipo(){
       if(isset($_SESSION['tipo'])){
           $tipo=$_SESSION['tipo'];
       }
       
       return $tipo;
    }

    public function getUser(){
       if(isset($_SESSION['idUser'])){
           $idUser=$_SESSION['idUser'];
       }
       return $idUser;
    }
        

    public function getHotel($id){
        session_start();
        
          
        $hotel = $this->modelHotel->getHotel($id);
        $imagen=$this->modelImagen->getImagen($id);
        $user=$this->getUser();
        $tipo=$this->getTipo();
        $this->viewHotel->DisplayHotel($hotel,$imagen,$user,$tipo);
    }
    public function getHotelVisita($id){
        $hotel = $this->modelHotel->getHotel($id);
        $imagen=$this->modelImagen->getImagen($id);
        $this->viewHotel->DisplayHotelVisita($hotel,$imagen);
    }
    

    
    public function InsertarHotel(){
        $this->checkLogIn();
        $ocupado=0;
        if($_POST['ocupado'] == 'on'){
            $ocupado=1;
        }
        $this->modelHotel->InsertarHotel($_POST["nombre"],$_POST["telefono"],$_POST["direccion"],$_POST["precio"],$ocupado,$_POST["id_destino"]);

        header("Location:" .BASE_URL);
    
    }
    public function ModificarHotel(){
        $this->checkLogIn();
        $ocupado=0;
        $id=$_POST["id_hotel"];
        $nombre=$_POST["nombre"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $precio=$_POST["precio"];
        $idDestino=$_POST["id_destino"];
        $hotel=$this->modelHotel->ModificarHotel($id,$nombre,$telefono,$direccion,$precio,$idDestino,$ocupado);
        header("location:" .BASE_URL);
       }
    public function FinalizarHotel($id){
        $this->checkLogIn();
        
        $this->modelHotel->FinalizarHotel($id);
        header("location:" .BASE_URL);
    }

    public function BorrarHotel($id){
        $this->checkLogIn();
        $this->modelHotel->BorrarHotel($id);
        header("location:" .BASE_URL);
    }
    public function InicializarHotel($id){        
        $this->checkLogIn();
        $this->modelHotel->InicializarHotel($id);
        header("location:" .BASE_URL);
    }
    public function HotelesdeunDestino($id){
        $hoteles=$this->modelHotel->HotelesdeunDestino($id);
        $this->viewHotel->DisplayHotelesdeDestino($hoteles);

    }
    public function HotelesdeunDestinoVisita($id){
        $hoteles=$this->modelHotel->HotelesdeunDestino($id);
        $this->viewHotel->DisplayHotelesdeDestinoVisita($hoteles);

    }
    public function eliminarUnaImagen($id){
        $this->checkLogIn();
        $this->modelHotel->eliminarUnaImagen($id);
        header("location:" .BASE_URL);
    }
    public function vereditarHotel($id){
        $hotel=$this->modelHotel->getHotel($id);
        $destinos = $this->modelHotel->getDestino();
        $this->viewHotel->DisplayEdicion($hotel,$destinos);
    }
    public function InsertarImagen(){
        $this->checkLogIn();
        if ($_FILES['img']['name']) {
            if ($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/png") {

                $this->modelImagen->InsertarImagen($_POST['id_hotel'],$_FILES['img']);
            }
            else {
                $this->view->showError("Formato no aceptado");
                die();
            }
        }
        header("location:" .BASE_URL);
    }

}
?>