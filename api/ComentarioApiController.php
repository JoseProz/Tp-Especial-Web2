<?php
require_once("MVC/Models/ModelComentario.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class TareasApiController extends ApiController{
  
    public function getComentarios($params = null) {

        $id= $params[':ID']
        $comentarios = $this->model->getComentarios($id);

        if ($comentarios){
            $this->view->response($comentarios, 200);
        }
        else{
            $this->view->response ("no existe el hotel", 404);
        }
    }

}

?>