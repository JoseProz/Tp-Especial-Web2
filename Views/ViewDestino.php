<?php
require_once('libs/Smarty.class.php');
class ViewDestino{

    function __construct(){

    }
    public function DisplayDestino($destinos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"MOSTRAR DESTINOS ");
        $smarty->assign('BASE',BASE_URL);
        $smarty->assign('destinos',$destinos);
        $smarty->display('templates/ver_destinos.tpl');
    }
}

?>