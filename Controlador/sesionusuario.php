<?php

class SesionUsuario{

    public function __construct(){
        session_start();
    }
    public function setNombreUsuario($usuario){
        $_SESSION['nombreusuario'] = $usuario;
    }
    public function getNombreUsuario(){
        return $_SESSION['nombreusuario'];
    }
    public function setNombre($nombre){
        $_SESSION['nombre'] = $nombre;
    }
    public function getNombre(){
        return $_SESSION['nombre'];
    }
    public function setApellidos($apellidos){
        $_SESSION['apellidos'] = $apellidos;
    }
    public function getApellidos(){
        return $_SESSION['apellidos'];
    }
    public function cerrarSesion(){
        session_unset();
        session_destroy();
    }
    public function setErrorLogin($errorLogin){
        $_SESSION['errorLogin'] = $errorLogin;
    }
    public function unsetErrorLogin(){
        unset($_SESSION['errorLogin']);
    }
}

?>