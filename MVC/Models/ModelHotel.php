<?php

class ModelHotel{

    private $db;
    
    function __construct(){
    $this->db =new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
    
    }

    public function GetHoteles(){
        $datos= $this->db->prepare('SELECT h.*, d.nombreDestino, d.id_destino FROM hotel h INNER JOIN destino d ON d.id_destino=h.id_destino');
        $ok =$datos->execute();
        if (!$ok) {var_dump($datos->errorinfo()); die;}
        $hoteles= $datos->fetchAll(PDO::FETCH_OBJ);

        return $hoteles;
    }
    function getDestino(){
        $sentencia =$this->db->prepare("SELECT * FROM  destino ORDER BY destino.puntaje asc");
        $sentencia->execute();
        $obj = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $obj;
        }
    

    function getHotel($id){
        $sentencia =$this->db->prepare("SELECT * FROM hotel h  WHERE id_hotel=?");
        $sentencia->execute(array($id));
        $hotel=$sentencia->fetch(PDO::FETCH_OBJ);
        return $hotel;
    }

    public function InsertarHotel($nombre,$telefono,$direccion,$precio,$ocupado,$id_destino){
        $sentencia= $this->db->prepare("INSERT INTO hotel(nombre,telefono,direccion,precio,id_destino,ocupado) VALUES(?,?,?,?,?,?)");
        $resultado=$sentencia->execute(array($nombre,$telefono,$direccion,$precio,$id_destino,$ocupado));
    }

    public function FinalizarHotel($id){
        $sentencia= $this->db->prepare("UPDATE hotel SET ocupado=1 WHERE id_hotel=?");
        $sentencia->execute(array($id));
    }

    public function BorrarHotel($id){
        $sentencia= $this->db->prepare("DELETE FROM hotel WHERE id_hotel=?");
        $sentencia->execute(array($id));
    }

    public function InicializarHotel($id){
        $sentencia= $this->db->prepare("UPDATE hotel SET ocupado=0 WHERE id_hotel=?");
        $sentencia->execute(array($id));
    }

    public function ModificarHotel($id,$nombre,$telefono,$direccion,$precio,$idDestino,$ocupado){
        $sentencia= $this->db->prepare("UPDATE hotel SET nombre=?,telefono=?,direccion=?,precio=?,id_destino=?,ocupado=? WHERE id_hotel=?");
        $sentencia->execute(array($nombre,$telefono,$diereccion,$precio,$idDestino,$ocupado,$id));
        
    }

    public function HotelesdeunDestino($id){
        //'SELECT comentario.mensaje,comentario.valoracion, usuario.email FROM comentario  INNER JOIN hotel ON  comentario.id_hotel= hotel.id_hotel INNER JOIN usuario ON usuario.id_usuario=comentario.id_usuario WHERE hotel.id_hotel=?'
        $sentencia= $this->db->prepare("SELECT h.*, d.nombreDestino FROM hotel h INNER JOIN destino d ON h.id_destino=d.id_destino WHERE d.id_destino=?");
        $sentencia->execute(array($id));
        $hoteles=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $hoteles;
    }
    public function eliminarUnaImagen($id){
        $sentencia = $this->db->prepare("DELETE FROM imagen WHERE id_imagen=?");
        $sentencia->execute(array($id));
    }

   

}




?>