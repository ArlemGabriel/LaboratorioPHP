<?php
    if(isset($_POST['authusuario']) && isset($_POST['authpass'])){
        echo "Validacion de login";
    }else if(isset($_POST['registusername']) && isset($_POST['registname']) && isset($_POST['registlastname']) && isset($_POST['registemail']) && isset($_POST['registpassword']) && isset($_POST['registconfirmpassword'])){
        echo "Registro de usuario nuevo";
    }else{
        echo "Ninguno";
    }
?>