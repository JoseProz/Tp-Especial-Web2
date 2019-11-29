<?php

class ModelImagen{

    private $db;
    
    function __construct(){
    $this->db =new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
    
    }

    function getImagen($id){
        $sentencia= $this->db->prepare('SELECT * FROM imagen WHERE id_hotel=?');
        $sentencia->execute(array($id));
        $obj=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $obj;
    }
    public function InsertarImagen($idHotel,$imagen = null){

        $filepath = null;
        if ($imagen)
            $filepath = $this->moveFile($imagen);


        $sentencia = $this->db->prepare("INSERT INTO imagen(id_hotel,ruta) VALUES(?,?)");
        $sentencia->execute(array($idHotel,$filepath));

    }


         //  mueve la imagen y retorna la ubicación}
 private function moveFile($imagen) {
$filepath = "img/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
move_uploaded_file($imagen['tmp_name'], $filepath);
return $filepath;

    }



}

?>