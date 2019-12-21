<?php
    include_once 'C:\xampp\htdocs\Controlador\sesionusuario.php';
    $sesion = new SesionUsuario();
    if(isset($_SESSION['nombreusuario'])){
        $sesion->cerrarSesion();
        header("location:../Vista/autenticacion.php");
    }else{
        header("location:../Vista/index.php");
    }
?>