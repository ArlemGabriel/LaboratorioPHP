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
            return true;
        }
    }
    function validarExistenciUsuario($authusuario){
        $base=ConexionDB::getInstance($authusuario);
        $sql = 'CALL validateuserexistent(:correousuario)';
        $resultado = $base->prepararQuery($sql);
        $resultado->bindValue(":correousuario",$authusuario->getCorreo());
        $resultado->execute();
        $numeroregistro = $resultado->rowCount();
        if($numeroregistro == 0){
            return false;
        }else{
            return true;
        }
    }
    function cambiarContrasenna($authusuario){
        $base=ConexionDB::getInstance($authusuario);
        $sql = 'CALL changepassword(:correousuario,:nuevacontrasenna)';
        $resultado = $base->prepararQuery($sql);
        $resultado->bindValue(":correousuario",$authusuario->getCorreo());
        $resultado->bindValue(":nuevacontrasenna",$authusuario->getContrasenna());
        $resultado->execute();
        header("location:../Vista/cambiocontrasennaexitoso.php");
    }
    function loginUsuario($authusuario){
        //TODO: Mostrar el nombre y los apellidos del usuario que se autentico
        $base=ConexionDB::getInstance();
        $sql = 'CALL getuserdata(:nombreusuario)';
        $resultado = $base->prepararQuery($sql);
        $resultado->bindValue(":nombreusuario",$authusuario->getNombreUsuario());
        $resultado->execute();
        $numeroregistro = $resultado->rowCount();
        if($numeroregistro == 1){
            echo "Login exitoso";
            $row = $resultado->fetch(PDO::FETCH_ASSOC);
            $authusuario->setApellidos($row['apellidos']);
            $authusuario->setNombre($row['nombre']);
            return $authusuario;
        }else{
            echo "Error: Hay más de un usuario con el mismo nombre de usuario";
        }
    }

?>