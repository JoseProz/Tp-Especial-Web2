<?php
require_once("MVC/Models/ModelComentario.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class TareasApiController extends ApiController{
  
    public function getComentarios($params = null) {
        $tareas = $this->model->getComentarios();
        $this->view->response($tareas, 200);
    }

}

?>