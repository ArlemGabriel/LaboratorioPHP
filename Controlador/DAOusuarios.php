<?php
    include_once 'C:\xampp\htdocs\Modelo\usuario.php';
    include_once 'C:\xampp\htdocs\Controlador\conexiondb.php';

    function validarRegistro($registusuario){
        /*echo $registusuario->getNombreUsuario() . " ";
        echo $registusuario->getNombre() . " ";
        echo $registusuario->getApellidos() . " ";
        echo $registusuario->getCorreo() . " ";
        echo $registusuario->getFechaNacimiento() . " ";
        echo $registusuario->getTelefono() . " ";
        echo $registusuario->getContrasenna() . " ";*/
        try{
            
            $base = new PDO("mysql:host=localhost; dbname=desarrolloweb","usuarioweb","abcd123");

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = 'CALL validatenewuser(:correo,:nombreusuario)';

            $resultado = $base->prepare($sql);

            $resultado->bindValue(":nombreusuario",$registusuario->getNombreUsuario());
            $resultado->bindValue(":correo",$registusuario->getCorreo());

            $resultado->execute();

            $numeroregistro = $resultado->rowCount();

            if($numeroregistro!=0){
                header("location:../Vista/registro.php");
                
                /*echo "Existe el usuario";
                echo $registusuario->getNombreUsuario() . " ";
                echo $registusuario->getCorreo() . " ";*/
            }else{
                $sql = 'CALL insertnewuser(:nombreusuario,:correo,:nombre,:apellidos,:fechanacimiento,:telefono,:contrasenna)';
                $resultado = $base->prepare($sql);
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

        }catch(Exception $e){
            die("Error: " . $e->getMessage());
        }

    }
    function validarAutenticacion(){
        echo "validar autenticacion";
    }

?>