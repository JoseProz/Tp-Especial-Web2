<?php
    class ComentarioModel{
        private $db;

        public ComentarioModel(){
            $this->db= new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
        }

        function getComentarios($id){
            $sentencia=$this->db->prepare('SELECT mensaje, valoracion, mail FROM comentario JOIN usuario ON  hotel.id_hotel= comentario.id_hotel WHERE hotel.id_hotel');
            $sentencia-> execute(array($id));
            $obj=$sentencia->fetchAll(PDO::FETCH_OBJ);
            return $obj;
        }

    }