<?php
class auth {
    public function entrar($usuario) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['user'] = $usuario->id_usuario;
        $_SESSION['nombre'] = $usuario->nombre;
    }
    public function salir() {
        session_start();
        session_destroy();
    }
    public function check_entrar() {
        session_start();
        if (!isset($_SESSION['id_nombre'])) {
            header('Location: ' . ENTRAR);
            die();
        }       
    }
    public function getLoggedUserName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['nombre'];
    }
}