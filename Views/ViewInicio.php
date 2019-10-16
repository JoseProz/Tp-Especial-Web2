<?php
require_once('libs/Smarty.class.php');
class ViewInicio {
    function __construct(){
    }
    public function DisplayInicio(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Inicio");
        $smarty->assign('BASE',BASE_URL);
        $smarty->display('templates/Inicio.tpl');
    }
}
?>