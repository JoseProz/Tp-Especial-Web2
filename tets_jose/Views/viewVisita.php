<?php

require_once('libs/Smarty.class.php');


class viewVisita {

    function __construct(){

    }

    public function DisplayVisita($hoteles){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Hoteles");
        $smarty->assign('BASE',BASE);
        $smarty->assign('ver_hoteles',$hoteles);
        $smarty->display('templates/visita.tpl');
    }
}

?>