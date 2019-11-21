<?php
    class ComentarioModel{
        private $db;

        public function __construct(){
            $this->db= new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
        }

        function getComentarios($id){
            $sentencia=$this->db->prepare('SELECT comentario.mensaje,comentario.valoracion, usuario.email, usuario.tipo FROM comentario  INNER JOIN hotel ON  comentario.id_hotel= hotel.id_hotel INNER JOIN usuario ON usuario.id_usuario=comentario.id_usuario WHERE hotel.id_hotel=?');
            $sentencia-> execute(array($id));
            $obj=$sentencia->fetchAll(PDO::FETCH_OBJ);
            return $obj;
        }

    }