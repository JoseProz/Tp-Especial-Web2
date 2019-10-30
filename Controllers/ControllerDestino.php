<?php
    require_once "./Models/ModelDestino.php";
    require_once "./Views/ViewDestino.php";
    class ControllerDestino{

        private $model;
        private $view;

        function __construct(){
            $this->model=new ModelDestino();
            $this->view=new ViewDestino();
        }

        public function getDestino(){
            $destinos = $this->model->getDestino();
            $this->view->DisplayDestino($destinos);
        }

        public function InsertarDestino(){
            

            $this->model->InsertarDestino($_POST['nombre'],$_POST['descripcion'],$_POST['temporada_alta'],$_POST['puntaje']);
        
            header("Location: " . BASE_URL);
         }

         public function BorrarDestino($id_destino){
            $this->model->BorrarDestino($id_destino);
            header("Location: " . BASE_URL);
         }
        
    }
        
