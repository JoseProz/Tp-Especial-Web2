<?php

require_once('libs/Smarty.class.php');


class viewDatosUsuario {

    function __construct(){

    }

    public function DisplayDatosUsuario(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Registrese");
        $smarty->assign('BASE',BASE);
        $smarty->display('templates/datosUser.tpl');
    }
}

?>