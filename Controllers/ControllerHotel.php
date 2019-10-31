<?php
require_once "./Models/ModelHotel.php";
require_once "./Views/ViewHotel.php";

class ControllerHotel{

    private $modelHotel;
    private $viewHotel;

    function __construct(){
        
        $this->modelHotel = new ModelHotel();
        $this->viewHotel = new ViewHotel();
    }

    public function GetHoteles(){
        $hoteles= $this->modelHotel->GetHoteles();
        $this->viewHotel->DisplayHoteles($hoteles);

    }
    public function InsertarHotel(){
        $ocupado=0;
        if($_POST['ocupado'] == 'on'){
            $ocupado=1;
        }
        $this->modelHotel->InsertarHotel($_POST["nombre"],$_POST["telefono"],$_POST["direccion"],$_POST["precio"],$ocupado,$_POST["id_destino"]);

        header("Location:" .BASE_URL);
    
    }
    public function ModificarHotel(){
        $ocupado=0;
        var_dump($_POST["id_hotel"]);die;
        $hotel =$this->model->ModificarHotel($_POST["id_hotel"],$_POST["nombre"],$_POST["telefono"],$_POST["direccion"],$_POST["precio"],$ocupado,$_POST["id_destino"]);
        header("location:" .BASE_URL);
       }
    public function FinalizarHotel($id){
        
        $this->modelHotel->FinalizarHotel($id);
        header("location:" .BASE_URL);
    }

    public function BorrarHotel($id){
        $this->modelHotel->BorrarHotel($id);
        header("location:" .BASE_URL);
    }
    public function InicializarHotel($id){
        $this->modelHotel->InicializarHotel($id);
        header("location:" .BASE_URL);
    }
    public function HotelesdeunDestino($id){
        $hoteles=$this->modelHotel->HotelesdeunDestino($id);
        $this->viewHotel->DisplayHotelesdeDestino($hoteles);

    }
    

}
?>