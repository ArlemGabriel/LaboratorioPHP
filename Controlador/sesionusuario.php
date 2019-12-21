<?php

class SesionUsuario{

    public function __construct(){
        session_start();
    }
    public function setUsuarioActual($usuario){
        $_SESSION['usuarioactual'] = $usuario;
    }
    public function getUsuarioActual(){
        return $_SESSION['usuarioactual'];
    }
    public function cerrarSesion(){
        session_unset();
        session_destroy();
    }
}

?>