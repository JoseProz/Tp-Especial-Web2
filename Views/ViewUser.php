<?php

require_once('libs/Smarty.class.php');


class ViewUser {

    function __construct(){

    }

    public function DisplayLogin(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Login");
        $smarty->assign('BASE',BASE_URL);
        $smarty->display('templates/login.tpl');
    }
}

