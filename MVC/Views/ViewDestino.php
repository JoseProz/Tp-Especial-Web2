<?php
require_once('./libs/Smarty.class.php');
class ViewDestino{

    function __construct(){

    }
    public function DisplayDestino($destinos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"MOSTRAR DESTINOS ");
        $smarty->assign('BASE',URL_DESTINO);
        $smarty->assign('destinos',$destinos);
        $smarty->display('./templates/ver_destinos.tpl');
    }
    public function DisplayIdDestino($id){
        $smarty = new Smarty();
        $smarty->assign('titulo',"DESTINO DEL ID : ");
        $smarty->assign('BASE',BASE);
        $smarty->assign('iddestino',$id);
        $smarty->display('./templates/ver_Iddestino.tpl');
    }

    public function DisplayEdicion($destino,$id){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Modificar Datos");
        $smarty->assign('BASE',BASE);
        $smarty->assign('destino',$destino);
        $smarty->assign('id',$id);
        $smarty->display('./templates/editar_destinos.tpl');
    }
    public function ModificarDestino($destino){
        $smarty = new Smarty();
        $smarty->assign('titulo',"modifico destino");
        $smarty->assign('BASE',BASE);
        $smarty->assign('destino',$destino);
        $smarty->display('./templates/modificar_destino.tpl');
    }
}

?>