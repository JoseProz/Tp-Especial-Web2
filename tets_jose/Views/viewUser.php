<?php

require_once('libs/Smarty.class.php');


class viewUser {

    function __construct(){

    }

    public function DisplayLogin(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Login");
        $smarty->assign('BASE',BASE);
        $smarty->display('templates/login.tpl');
    }
}

?>
