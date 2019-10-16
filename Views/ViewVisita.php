<?php
require_once('libs/Smarty.class.php');
class ViewVisita {
    function __construct(){
    }
    public function DisplayVisita($destinos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Destinos");
        $smarty->assign('BASE',BASE);
        $smarty->assign('ver_destinos',$destinos);
        $smarty->display('templates/visita.tpl');
    }
}
?>