<?php
    class ComentarioModel{
        private $db;

        public ComentarioModel(){
            $this->db= new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
        }

        function getComentarios(){
            $sentencia=$this->db->prepare('SELECT mensaje, valoracion, mail FROM comentario JOIN usuario ON hotel WHERE fk.hotel.id_hotel= comentario.id_hotel')
        }

    }