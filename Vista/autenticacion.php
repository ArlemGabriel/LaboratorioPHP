<!DOCTYPE html>
<html lang="en">
<head>
  <title>Acceso de Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/estilosautenticacion.css">
  <script src="js/autenticacion.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0" id = "encabezadoinicio">
  <h1 id = "datosencabezadoinicio">Introducción al Desarrollo de Páginas Web</h1>
  <p id = "datosencabezadoinicio">Página de Autenticación</p>
</div>

<nav class="navbar navbar-expand-sm navbar-dark" id="bg-orange">
  <a class="navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="registro.php">Registrarse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="autenticacion.php">Acceder</a>
      </li> 
    </ul>
  </div>  
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
           <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Acceso</h5>
          <form class="form-signin" action="../Controlador/controladorusuarios.php" method="POST">
            <div class="form-label-group">
              <input type="text" id="authusuario" name="authusuario" class="form-control" placeholder="Authusername" required autofocus>
              <label for="authusuario">Usuario</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="authpass" name="authpass"class="form-control" placeholder="Authpassword" required>
              <label for="authpass">Contraseña</label>
              <a class="d-block text-left mt-2 small" href="recuperarcontra.php">¿Olvidó su contraseña?</a>
            </div>

            <div class="alert alert-danger fade show" style="display:none;" role="alert" id="authalert">
              <strong>Error: </strong> Usuario Inválido
            </div>
            
            <?php session_start(); if(isset($_SESSION["errorLogin"])){ $error = $_SESSION["errorLogin"]; echo '<div class="alert alert-danger fade show" role="alert" id="authalert">
              ' . $error . '</div>';unset($_SESSION['errorLogin']);}?>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Acceder</button>
            <a class="d-block text-center mt-2 small" href="registro.php">Registrarse</a>
            <hr class="my-4">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

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