<?php
    class ComentarioModel{
        private $db;

        public function __construct(){
            $this->db= new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
        }

        function getComentarios($id){
            $sentencia=$this->db->prepare('SELECT comentario.mensaje,comentario.valoracion,comentario.fecha,usuario.email, usuario.tipo FROM comentario  INNER JOIN hotel ON  comentario.id_hotel= hotel.id_hotel INNER JOIN usuario ON usuario.id_usuario=comentario.id_usuario  WHERE hotel.id_hotel=? ORDER BY comentario.fecha desc');
            $sentencia-> execute(array($id));
            $obj=$sentencia->fetchAll(PDO::FETCH_OBJ);
            return $obj;
        }
       

        public function InsertarComentario($id_user,$id_hotel,$mensaje,$valoracion){
        $sentencia=$this->db->prepare('INSERT INTO comentario(id_hotel,id_usuario,mensaje,valoracion,fecha ) VALUES (?,?,?,?,?)');
        $sentencia->execute(array($id_user,$id_hotel,$mensaje,$valoracion));
        header("Location:" .BASE_URL);
    
    }

    public function InsertarDestino($nombre,$descripcion,$temporada_alta,$puntaje ){
                $sentencia = $this->db->prepare("INSERT INTO destino(nombreDestino,descripcion,temporada_alta,puntaje) VALUES(?,?,?,?)");
                $sentencia->execute(array($nombre,$descripcion,$temporada_alta,$puntaje ));
        }

    }