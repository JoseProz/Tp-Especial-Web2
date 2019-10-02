<?php

    require_once "./Controllers/Destino_Controller.php";
    $action = $_GET["action"];
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    $controller = new Destino_Controller();
    
    if($action == ''){
        $controller->getDestino();
    
    }else{
        if (isset($action)){
            $partesURL = explode("/", $action);
            
            if($partesURL[0] == "materias"){
            $controller-> getDestino();
            }
            else if($partesURL[0] == "insertar"){
                $controller->InsertarDestino();
            }elseif($partesURL[0] == "borrar") {
                $controller->BorrarDestino($partesURL[1]);
            }
        }
    }
?>