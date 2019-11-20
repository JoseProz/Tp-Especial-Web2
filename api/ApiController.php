<?php

abstract class ApiController{
    protected $model;
    protected $view;

    private $data;

    public function __construct(){
        $this->view= new JSONView();
        $this->data=file_get_contents("php://input");//Obtenga JSON como una cadena:file_get_contents, 
                                                    //que aunque solo se usaba para recuperar contenido 
                                                    //de archivos locales o URL tradicionales, le permite 
                                                    //usar la php://input dirección especial para recuperar 
                                                    //datos JSON como una cadena 
        $this->model = new comentarioModel();
    }

    public function getData(){
        return json_decode($this->data);
    }





}