<?php
require_once ('./libs/Smarty.class.php');
class ViewHotel {

    function __construct(){

    }

    public function DisplayHoteles($hoteles){

            $smarty = new Smarty();
            $smarty->assign('titulo',"Mostrar Hoteles");
            $smarty->assign('BASE',BASE_URL);
            $smarty->assign('ver_hoteles',$hoteles);
            $smarty->display('./templates/verhoteles.tpl');
        }

    public function DisplayHotelesdeDestino($hoteles){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Hoteles");
        $smarty->assign('BASE',BASE_URL);
        $smarty->assign('ver_hoteles',$hoteles);
        $smarty->display('./templates/HotelesdeDestino.tpl');
    }

    public function DisplayHotel($id,$user){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Hotel");
        $smarty->assign('BASE',BASE);
        $smarty->assign('hotel',$id);
        $smarty->assign('idUser',$user);
        $smarty->display('./templates/verHotel.tpl');
    }

    }
    

?>