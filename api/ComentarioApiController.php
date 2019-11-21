<?php
require_once("./MVC/Models/ModelComentario.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class ComentarioApiController extends ApiController{
  
    public function getComentarios($params = null) {

        $id= $params[':ID'];
        $comentarios = $this->model->getComentarios($id);
        

        if ($comentarios){
            $this->view->response($comentarios, 200);
        }
        else{
            $this->view->response ("no existe el hotel", 404);
        }
    }

      // TareaApiController.php
   public function addComentario($params = []) {     
    $comentario = $this->getData(); // la obtengo del body

    // inserta la tarea
    $comentarioId = $this->model->InsertarComentario($comentario->mensaje, $comentario->valoracion);

    // obtengo la recien creada
    $comentarioNuevo = $this->model->GetTarea($comentarioId);
    
    if ($comentarioNuevo)
        $this->view->response($comentarioNuevo, 200);
    else
        $this->view->response("Error al insertar comentario", 500);

}



}

?>