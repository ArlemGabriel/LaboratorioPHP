<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro de Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/estilosperfil.css">
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION["nombreusuario"])){
      header("location:../Vista/index.php");
    }

?>
<div class="jumbotron text-center" style="margin-bottom:0" id = "encabezadoinicio">
  <h1 id = "datosencabezadoinicio">
  <p id = "datosencabezadoinicio">¡Bienvenido!</p>
  </h1>
  <div class="container">           
    <img src="Recursos/usericon.png" class="img-circle" alt="Cinque Terre" width="150" height="150"> 
  </div>
  <?php
    if(isset($_SESSION["nombreusuario"]))
    { 
      $nombre = $_SESSION["nombre"];
      $usuario = $_SESSION["nombreusuario"];
      $apellidos = $_SESSION["apellidos"];
      echo '<h4 id="nombreperfil">' . $nombre . " " . $apellidos . '<br></h4>';
      echo '<h6 id="usuarioperfil">' . $usuario . '<br></h6>';
      
    }
    ?>
</div>

<nav class="navbar navbar-expand-sm navbar-dark" id="bg-orange">
  <a class="navbar-brand" href="perfilusuario.php">Perfil</a>
  <a class="navbar-brand" href="../Controlador/cerrarsesion.php">Cerrar Sesión</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button> 
</nav>


<div class="jumbotron text-center" style="margin-bottom:0" id = "piepagina">
  <p>©Tecnológico de Costa Rica, 2019</p>
  <a href="https://github.com/ArlemGabriel/PortafolioWeb">
      <img src="Recursos/icongit.png" alt="Icono Git" id="icongit">
  </a>
  <a href="https://www.facebook.com/arlemgabriel.brenesaguilar">
    <img src="Recursos/iconfb.png" alt="Icono Facebook" width="200" height="200" id="iconfb">
</a>
</div>

</body>
</html>
