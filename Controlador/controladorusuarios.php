<?php
    include_once 'C:\xampp\htdocs\Modelo\usuario.php';
    include_once 'C:\xampp\htdocs\Controlador\DAOusuarios.php';
    include_once 'C:\xampp\htdocs\Controlador\sesionusuario.php';

    $sesion = new SesionUsuario();

    if(isset($_POST['authusuario']) && isset($_POST['authpass'])){
        $pnombreusuario = htmlentities(addslashes($_POST["authusuario"]));
        $pcontrasenna = htmlentities(addslashes($_POST["authpass"]));
        $authusuario= new Usuario($pnombreusuario,"","","","","",$pcontrasenna);
        if(validarAutenticacion($authusuario)==false){
            //echo "No existe ese usuario"; //TODO
            $errorLogin = "Nombre de usuario y/o contraseña incorrectos";
            $sesion->setErrorLogin($errorLogin);
            header("location:../Vista/autenticacion.php");
            
        }else{
            $datosUsuario = loginUsuario($authusuario);
            $nombreUsuario = $datosUsuario->getNombreUsuario();
            $nombre = $datosUsuario->getNombre();
            $apellidos = $datosUsuario->getApellidos();
            $sesion->setNombre($nombre);
            $sesion->setApellidos($apellidos);
            $sesion->setNombreUsuario($nombreUsuario);
            header("location:../Vista/perfilusuario.php");
        }
    }else if(isset($_POST['registusername']) && isset($_POST['registname']) && isset($_POST['registlastname']) && isset($_POST['registemail']) && isset($_POST['registpassword']) && isset($_POST['registconfirmpassword'])){
        $pnombreusuario = htmlentities(addslashes($_POST["registusername"]));
        $pnombre = htmlentities(addslashes($_POST["registname"]));
        $papellidos = htmlentities(addslashes($_POST["registlastname"]));
        $pcorreo = htmlentities(addslashes($_POST["registemail"]));
        $pfechanacimiento = htmlentities(addslashes($_POST["registbirth"]));
        $ptelefono = htmlentities(addslashes($_POST["registnumber"]));
        $pcontrasenna = htmlentities(addslashes($_POST["registpassword"]));
        $registusuario= new Usuario($pnombreusuario,$pnombre,$papellidos,$pcorreo,$pfechanacimiento,$ptelefono,$pcontrasenna);

        if(validarRegistro($registusuario)==false){
            registrarUsuario($registusuario);
        }else{
            echo "Existe ese usuario"; //TODO
        }
    }else{
        echo "Ninguno";
    }
?>