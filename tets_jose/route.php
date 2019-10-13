<?php
require_once "Controllers/controllerHotel.php";
require_once "Controllers/controllerUser.php";
require_once "Controllers/controllerRegistro.php";
require_once "Controllers/controllerDatosUsuario.php";

//require_once "Controllers/ControllerUsuario.php";

$action=$_GET["action"];

define("BASE", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/hoteles');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("URL_IR", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/iniciarRegistro');
//define("URL_REGISTRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/iniciarRegistro');



$controllerHotel = new ControllerHotel();
$controllerUser = new controllerUser();
$controllerRegistro = new controllerRegistro();

if($action==""){
    $controllerRegistro->getInicio();
    
}
else{
    if(isset($action)){
        $partesURL = explode("/",$action);
        if($partesURL[0]=="registro"){
                $controllerRegistro= new controllerRegistro();
                $controllerRegistro->getInicio();
                
            }
        elseif($partesURL[0]=="hoteles"){
            $controllerHotel->GetHoteles();
            
        }
        elseif($partesURL[0]=="insertar"){
            $controllerHotel->InsertarHotel();
           
        }
        elseif($partesURL[0]=="finalizar"){
            $controllerHotel->FinalizarHotel($partesURL[1]);
        }
        elseif($partesURL[0]=="borrar"){
            $controllerHotel->BorrarHotel($partesURL[1]);
            
        }
        elseif($partesURL[0]=="inicializar"){
            $controllerHotel->InicializarHotel($partesURL[1]);
        }
        elseif($partesURL[0]=="login"){
            $controllerUser = new controllerUser();
            $controllerUser->Login();
        }
        elseif($partesURL[0] == "iniciarSesion") {
            var_dump("llegue");
            $controllerUser = new controllerUser();
            $controllerUser->IniciarSesion();
        }
        elseif($partesURL[0] == "logout") {
            $controllerUser = new controllerUser();
            $controllerUser->Logout();
        }
        elseif($partesURL[0]== "iniciarRegistro"){
            $controllerDatos= new controllerDatosUsuario();
            $controllerDatos->registrar();
        }
        elseif($partesURL[0]=="datosUser"){
            $controllerDatos= new controllerDatosUsuario();
            $controllerDatos->ingresarDatos();
        }
        elseif($partesURL[0]=="iniciarVisita"){
            $controllerRegistro= new controllerRegistro();
            $controllerRegistro->getVisita();
        }
        



    }   
}



?>