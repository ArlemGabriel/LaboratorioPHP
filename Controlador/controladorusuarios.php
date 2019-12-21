<?php
    include_once 'C:\xampp\htdocs\Modelo\usuario.php';
    include_once 'C:\xampp\htdocs\Controlador\DAOusuarios.php';

    if(isset($_POST['authusuario']) && isset($_POST['authpass'])){
        validarAutenticacion();
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
            echo "No existe ese usuario";
            registrarUsuario($registusuario);
        }else{
            echo "Existe ese usuario";
        }
    }else{
        echo "Ninguno";
    }
?>