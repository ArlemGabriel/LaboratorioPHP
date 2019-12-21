<?php
    include_once 'C:\xampp\htdocs\Modelo\usuario.php';
    include_once 'C:\xampp\htdocs\Controlador\conexiondb.php';
    require_once 'C:\xampp\htdocs\Controlador\ConexionDB.php';

    function validarRegistro($registusuario){
        $base=ConexionDB::getInstance();     
        $sql = 'CALL validatenewuser(:correo,:nombreusuario)';
        $resultado = $base->prepararQuery($sql);
        $resultado->bindValue(":nombreusuario",$registusuario->getNombreUsuario());
        $resultado->bindValue(":correo",$registusuario->getCorreo());
        $resultado->execute();
        $numeroregistro = $resultado->rowCount();

        if($numeroregistro == 0){
            return false;
        }else{
            return true;
        }
    }
    function registrarUsuario($registusuario){
        $base=ConexionDB::getInstance();
        $sql = 'CALL insertnewuser(:nombreusuario,:correo,:nombre,:apellidos,:fechanacimiento,:telefono,:contrasenna)';
        $resultado = $base->prepararQuery($sql);
        $resultado->bindValue(":nombreusuario",$registusuario->getNombreUsuario());
        $resultado->bindValue(":correo",$registusuario->getCorreo());
        $resultado->bindValue(":nombre",$registusuario->getNombre());
        $resultado->bindValue(":apellidos",$registusuario->getApellidos());
        $resultado->bindValue(":fechanacimiento",$registusuario->getFechaNacimiento());
        $resultado->bindValue(":telefono",$registusuario->getTelefono());
        $resultado->bindValue(":contrasenna",$registusuario->getContrasenna());
        $resultado->execute();
        header("location:../Vista/registroexitoso.php");

    }
    function validarAutenticacion($authusuario){
        $base=ConexionDB::getInstance($authusuario);     
        $sql = 'CALL validatecredentials(:nombreusuario,:contrasenna)';
        $resultado = $base->prepararQuery($sql);
        $resultado->bindValue(":nombreusuario",$authusuario->getNombreUsuario());
        $resultado->bindValue(":contrasenna",$authusuario->getContrasenna());
        $resultado->execute();
        $numeroregistro = $resultado->rowCount();

        if($numeroregistro == 0){
            return false;
        }else{
            //AQUI CREARIA UNA NUEVA SESION CON ESE USUARIO, NOMBRE, APELLIDOS PARA MOSTRAR EN LA PAGINA DEL PERFIL
            return true;
        }
    }
    function loginUsuario(){
        //TODO: Mostrar el nombre y los apellidos del usuario que se autentico
        header("location:../Vista/perfilusuario.php");
    }

?>