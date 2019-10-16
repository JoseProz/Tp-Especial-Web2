<?php
    class ModelDestino {

        private $db;

        function __construct(){
            $this->db= new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
            }

        function getDestino(){
            $sentencia =$this->db->prepare("SELECT * FROM destino");
            $sentencia->execute();
            $obj = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $obj;
            }

            public function InsertarDestino($nombre,$descripcion,$temporada_alta,$puntaje ){
                $sentencia = $this->db->prepare("INSERT INTO destino(nombre,descripcion,temporada_alta,puntaje) VALUES(?,?,?,?)");
                $sentencia->execute(array($nombre,$descripcion,$temporada_alta,$puntaje ));
            }
            public function BorrarDestino($id_destino){
                $sentencia = $this->db->prepare("DELETE FROM destino WHERE id_destino=?");
                $sentencia->execute(array($id_destino));
        }
    }