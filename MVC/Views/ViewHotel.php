<?php
require_once ('./libs/Smarty.class.php');
class ViewHotel {

    function __construct(){

    }

    public function DisplayHoteles($hoteles,$destinos){

            $smarty = new Smarty();
            $smarty->assign('titulo',"Mostrar Hoteles");
            $smarty->assign('BASE',BASE_URL);
            $smarty->assign('ver_hoteles',$hoteles);
            $smarty->assign('destinos',$destinos);
            $smarty->display('./templates/verhoteles.tpl');
        }

    public function DisplayHotelesdeDestino($hoteles){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Hoteles");
        $smarty->assign('BASE',BASE_URL);
        $smarty->assign('ver_hoteles',$hoteles);
        $smarty->display('./templates/HotelesdeDestino.tpl');
    }
    public function DisplayHotelesdeDestinoVisita($hoteles){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Hoteles");
        $smarty->assign('BASE',BASE_URL);
        $smarty->assign('ver_hoteles',$hoteles);
        $smarty->display('./templates/Visita/HotelesdeDestinoVisita.tpl');
    }

    public function DisplayHotel($id,$imagen,$user,$tipo){
        $smarty = new Smarty();
        $smarty->assign('titulo','Hotel');
        $smarty->assign('BASE',BASE);
        $smarty->assign('hotel',$id);
        $smarty->assign('imagenes',$imagen);
        $smarty->assign('idUser',$user);
        $smarty->assign('tipo',$tipo);
        $smarty->display('./templates/verHotel.tpl');
    }
    public function DisplayHotelVisita($id,$imagen){
        $smarty = new Smarty();
        $smarty->assign('titulo','Hotel');
        $smarty->assign('BASE',BASE);
        $smarty->assign('hotel',$id);
        $smarty->assign('imagenes',$imagen);
        $smarty->display('./templates/Visita/verHotelVisita.tpl');
    }
    public function DisplayEdicion($hotel,$destinos){
        $smarty = new Smarty();
        $smarty->assign('titulo','Edicion Hotel');
        $smarty->assign('BASE',BASE);
        $smarty->assign('hotel',$hotel);
        $smarty->assign('destinos',$destinos);
        $smarty->display('./templates/EdicionHotel.tpl');
    }
    

    }
    

?>