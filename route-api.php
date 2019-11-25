<?php
require_once("Router.php");
require_once("./api/ComentarioApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("hoteles/:ID/comentarios", "GET", "ComentarioApiController", "getComentarios");
//$router->addRoute("tareas/:ID", "GET", "TareasApiController", "getTarea");
$router->addRoute("comentarios/:ID", "DELETE", "ComentarioApiController", "eliminarComentario");
$router->addRoute("comentarios", "POST", "ComentarioApiController", "addComentario");
//$router->addRoute("tareas/:ID", "PUT", "TareasApiController", "updateTask");


// rutea
$router->route($resource, $method);

?>