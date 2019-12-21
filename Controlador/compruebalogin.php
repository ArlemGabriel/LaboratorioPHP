
    <?php
        try{
            $base = new PDO("mysql:host=localhost; dbname=desarrolloweb","usuarioweb","abcd123");

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql= "SELECT * FROM USUARIOS WHERE NOMBREUSUARIO= :nombreusuario AND CONTRASENNA= :contrasenna";

            $resultado = $base->prepare($sql);

            $nombreusuario = htmlentities(addslashes($_POST["authusuario"]));
            $contrasenna = htmlentities(addslashes($_POST["authpass"]));

            $resultado->bindValue(":nombreusuario",$nombreusuario);
            $resultado->bindValue(":contrasenna",$contrasenna);

            $resultado->execute();

            $numeroregistro = $resultado->rowCount();

            if($numeroregistro!=0){
                echo "Existe el usuario";
            }else{
                echo "No existe el usuario";
            }

        }catch(Exception $e){
            die("Error: " . $e->getMessage());
        }
    ?>

