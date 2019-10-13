<?php

require_once('libs/Smarty.class.php');


class viewRegistro {

    function __construct(){

    }

    public function DisplayRegistro(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Registro");
        $smarty->assign('BASE',BASE);
        $smarty->display('templates/registro.tpl');
    }
}

?>