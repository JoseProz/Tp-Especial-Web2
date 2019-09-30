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
    }
        
