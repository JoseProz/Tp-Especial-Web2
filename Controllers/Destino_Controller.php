<?php
    require_once "./Models/Destino_Model.php";
    require_once "./Views/Destino_View.php";
    class Destino_Controller{

        private $model;
        private $view;

        function __construct(){
            $this->model=new Destino_Model();
            $this->view=new Destino_View();
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
        
