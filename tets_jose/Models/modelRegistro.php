<?php

class modelRegistro{

    private $db;
    
    function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
    
    }
    
    public function GetVisita(){
        $datos= $this->db->prepare('SELECT*FROM hotel');
        $ok =$datos->execute();
        if (!$ok) {var_dump($datos->errorinfo()); die;}
        $hoteles= $datos->fetchAll(PDO::FETCH_OBJ);

        return $hoteles;
    }

}


?>