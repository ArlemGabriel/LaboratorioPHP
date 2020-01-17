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
            //TODO: Establecer una variable de sesion que permita mostrar el registro solamente a un usuario que hace submit en registro
        }else{
            echo "Existe ese usuario"; //TODO
            $errorRegistro = "Nombre de usuario y/o correo ya registrado";
            $sesion->setErrorRegistro($errorRegistro);
            $sesion->setCampoNombre($pnombre);
            $sesion->setCampoApellidos($papellidos);
            $sesion->setCampoNombreUsuario($pnombreusuario);
            $sesion->setCampoCorreo($pcorreo);
            $sesion->setCampoFecha($pfechanacimiento);
            $sesion->setCampoNumero($ptelefono);
            header("location:../Vista/registro.php");
        }
    }else if(isset($_POST['inputEmailForgot']) && isset($_POST['inputPassForgot']) && isset($_POST['inputConfirmPassForgot'])){
        echo "RECUPERAR CONTRASENNA";
        $pemail = htmlentities(addslashes($_POST["inputEmailForgot"]));
        $pnuevacontrasenna = htmlentities(addslashes($_POST["inputPassForgot"]));
        $authusuario= new Usuario("","","",$pemail,"","",$pnuevacontrasenna);
        if(validarExistenciUsuario($authusuario)==false){
           
            $errorContra = "Ooops! No pudimos cambiar tu contraseña, ese usuario no se encuentra registrado";
            $sesion->setErrorContra($errorContra);
            header("location:../Vista/recuperarcontra.php");
            
        }else{
            cambiarContrasenna($authusuario);
        }
    }else{
        echo "Ninguno";
    }
?>