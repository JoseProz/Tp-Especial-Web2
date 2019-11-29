<?php
    class ModelDestino {

        private $db;

        function __construct(){
            $this->db= new PDO('mysql:host=localhost;'.'dbname=turismo_argentina;charset=utf8', 'root', '');
            }

        function getDestino(){
            $sentencia =$this->db->prepare("SELECT * FROM  destino ORDER BY destino.puntaje asc");
            $sentencia->execute();
            $obj = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $obj;
            }
            function getIdDestino($id){
                $sentencia =$this->db->prepare("SELECT * FROM destino WHERE id_destino=?");
                $sentencia->execute(array($id));
                $destino=$sentencia->fetch(PDO::FETCH_OBJ);
                return $destino;
            }
            
     

            public function InsertarDestino($nombre,$descripcion,$temporada_alta,$puntaje,$imagen = null){

                $filepath = null;
                if ($imagen)
                    $filepath = $this->moveFile($imagen);
        
        
                $sentencia = $this->db->prepare("INSERT INTO destino(nombreDestino,descripcion,temporada_alta,puntaje,img) VALUES(?,?,?,?,?)");
                $sentencia->execute(array($nombre,$descripcion,$temporada_alta,$puntaje,$filepath));

            }


                 //  mueve la imagen y retorna la ubicación}
         private function moveFile($imagen) {
        $filepath = "img/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($imagen['tmp_name'], $filepath);
        return $filepath;

            }
            public function BorrarDestino($id){
                $sentencia = $this->db->prepare("DELETE FROM destino WHERE id_destino=?");
                $sentencia->execute(array($id));
        }

        public function eliminarImagen($id){
            $sentencia = $this->db->prepare("UPDATE destino SET img = '' WHERE id_destino=?");
            $sentencia->execute(array($id));
        }
        public function ModificarItem($id,$nombre,$descripcion,$temp,$puntaje){

            $sentencia= $this->db->prepare("UPDATE destino SET nombreDestino=?,descripcion=?,temporada_alta=?,puntaje=? WHERE id_destino=?");
            $sentencia->execute(array($nombre,$descripcion,$temp,$puntaje, $id));
            
        }
    }