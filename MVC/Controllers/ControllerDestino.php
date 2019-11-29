<?php
    require_once "./MVC/Models/ModelDestino.php";
    require_once "./MVC/Views/ViewDestino.php";
    class ControllerDestino{

        private $model;
        private $view;

        function __construct(){
            $this->model=new ModelDestino();
            $this->view=new ViewDestino();
        }
        public function checkLogIn(){
            session_start();
            
            if(!isset($_SESSION['user']) || ($_SESSION['tipo'] != 1) ){
                header("Location: " . URL_login);
                //var_dump($_SESSION);
                die();
            }
        }

        public function getDestino(){
            $destinos = $this->model->getDestino();
            $this->view->DisplayDestino($destinos);
        }
        public function getIdDestino($id){
            $destino = $this->model->getIdDestino($id);
            $this->view->DisplayIdDestino($destino);
        }

        public function InsertarDestino(){
            $this->checkLogIn();
            
            if ($_FILES['img']['name']) {
                if ($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/png") {
    
                    $this->model->InsertarDestino($_POST['nombre'],$_POST['descripcion'],$_POST['temporada_alta'],$_POST['puntaje'],$_FILES['img']);
                }
                else {
                    $this->view->showError("Formato no aceptado");
                    die();
                }
            }
            else {
                $this->model->InsertarDestino($_POST['nombre'],$_POST['descripcion'],$_POST['temporada_alta'],$_POST['puntaje']);  
            }
    
        
            header("Location: " . URL_DESTINO);
         }


         public function BorrarDestino($id){
             $this->checkLogIn();
            $this->model->BorrarDestino($id);
            header("Location: " . URL_DESTINO);
         }
         //public function ModificarItem($id, $nombre, $descripcion, $temp,$puntaje) {
          //  if(isset($_GET) && isset($_GET['id_destino']) && isset($_GET['nombre']) && isset($_GET['descripcion'])&& isset($_GET['temporada_alta'])&& isset($_GET['puntaje'])) {
            //    $this->model->ModificarItem($_GET['id_destino'], $_GET['nombre'], $_GET['descripcion'], $_GET['temporada_alta'], $_GET['puntaje']);
              //  header("Location: " . BASE);
           // } 
              //  $destinos = array($id, $nombre, $descripcion, $temp, $puntaje);
              //  $this->view->DisplayDestino($destinos);
           // }
       // }
             
         public function ModificarItem(){
            $this->checkLogIn();
             $destinos =$this->model->ModificarItem($_POST["id_destino"],$_POST["nombre"],$_POST["descripcion"],$_POST["temporada_alta"],$_POST["puntaje"]);
             header("location:" .URL_DESTINO);
            }
        
        public function ModificarItemDestino($id){
            $this->checkLogIn();
                $destino = $this->model->getIdDestino($id);
                $this->view->ModificarDestino($destino);
                }
    
        public function eliminarImagen($id){
            $this->checkLogIn();
            $destino=$this->model->eliminarImagen($id);
            header("location:" .URL_DESTINO);

        }
            
            

                
            
    
        

        //public function GuardarItem(){

            //$this->model->ModificarItem($_GET['id_destino'],$_GET['nombre'],$_GET['descripcion'],$_GET['temporada_alta'],$_GET['puntaje']);
            //header("location:" .URL_DESTINO);
            
       //}

         

    }
        
