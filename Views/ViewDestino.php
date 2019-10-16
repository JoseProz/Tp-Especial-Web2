<?php
require_once('libs/Smarty.class.php');
class ViewDestino{

    function __construct(){

    }
    public function DisplayDestino($destinos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"MOSTRAR DESTINOS ");
        $smarty->assign('BASE',URL_DESTINO);
        $smarty->assign('destinos',$destinos);
        $smarty->display('templates/ver_destinos.tpl');
    }
}

?>