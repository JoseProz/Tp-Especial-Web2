<?php
    class Destino_Model {

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

        }