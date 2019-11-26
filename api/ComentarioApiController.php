<?php
require_once("./MVC/Models/ModelComentario.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");


class ComentarioApiController extends ApiController{

  
    public function getComentarios($params = null) {

        $id= $params[':ID'];
        $comentarios = $this->model->getComentarios($id);
        var_dump($comentarios);die;
        //$tipo= $this->controller->getUser();
        

        if ($comentarios){
            $this->view->response($comentarios, 200);
        }
        else{
            $this->view->response ("no existe el hotel", 404);
        }
    }

      // TareaApiController.php

   public function addComentario($params = []) {     
    $comentarioId = $this->getData(); // la obtengo del body
    // inserta la tarea
    $this->model->InsertarComentario($comentarioId->id_hotel,$comentarioId->id_usuario,$comentarioId->mensaje, $comentarioId->valoracion);

    // obtengo la recien creada
    $comentarioNuevo = $this->model->getComentarios($comentarioId);
    
    if ($comentarioNuevo)
        $this->view->response($comentarioNuevo, 200);
    else
        $this->view->response("Error al insertar comentario", 500);

}

public function deleteComentario($params =  []{
    $idComent=$this->getData();
    $this->model->deleteComentario($idComent->id_comentario);
})



}

?>