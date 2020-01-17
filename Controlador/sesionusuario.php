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
    public function setErrorRegistro($errorRegistro){
        $_SESSION['errorRegistro'] = $errorRegistro;
    }
    public function unsetErrorRegistro(){
        unset($_SESSION['errorRegistro']);
    }
    public function setErrorContra($errorContra){
        $_SESSION['errorContra'] = $errorContra;
    }
    public function unsetErrorContra(){
        unset($_SESSION['errorContra']);
    }
    public function setCampoNombre($campoNombre){
        $_SESSION['campoNombre'] = $campoNombre;
    }
    public function unsetCampoNombre(){
        unset($_SESSION['campoNombre']);
    }
    public function setCampoApellidos($campoApellidos){
        $_SESSION['campoApellidos'] = $campoApellidos;
    }
    public function unsetCampoApellidos(){
        unset($_SESSION['campoApellidos']);
    }
    public function setCampoNombreUsuario($campoNombreUsuario){
        $_SESSION['campoNombreUsuario'] = $campoNombreUsuario;
    }
    public function unsetCampoNombreUsuario(){
        unset($_SESSION['campoNombreUsuario']);
    }
    public function setCampoCorreo($campoCorreo){
        $_SESSION['campoCorreo'] = $campoCorreo;
    }
    public function unsetCampoCorreo(){
        unset($_SESSION['campoCorreo']);
    }
    public function setCampoFecha($campoFecha){
        $_SESSION['campoFecha'] = $campoFecha;
    }
    public function unsetCampoFecha(){
        unset($_SESSION['campoFecha']);
    }
    public function setCampoNumero($campoNumero){
        $_SESSION['campoNumero'] = $campoNumero;
    }
    public function unsetCampoNumero(){
        unset($_SESSION['campoNumero']);
    }
}

?>