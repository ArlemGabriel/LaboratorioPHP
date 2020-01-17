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
  <link rel="stylesheet" type="text/css" href="CSS/estilosrecuperarcontra.css">
  <script src="js/registro.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0" id = "encabezadoinicio">
  <h1 id = "datosencabezadoinicio">Introducción al Desarrollo de Páginas Web</h1>
  <p id = "datosencabezadoinicio">Página de Recuperación de Contraseña</p>
</div>

<nav class="navbar navbar-expand-sm navbar-dark" id="bg-orange">
  <a class="navbar-brand" href="index.php">Volver</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
           <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">¿Olvidó su contraseña?</h5>
          <h6>Ingrese su correo electrónico y su nueva contraseña</h6>
          <br>
          <form class="form-signin" onsubmit="return validarolvidocontra();" action="../Controlador/controladorusuarios.php" method="POST">
          <div class="form-label-group">
                <input type="email" id="inputEmailForgot" name="inputEmailForgot" class="form-control">
                <label for="inputEmailForgot">Correo Electrónico*</label>
              </div>
            <div class="form-label-group">
                <input type="password" id="inputPassForgot" name="inputPassForgot" class="form-control" >
                <label for="inputPassForgot">Nueva Contraseña</label>
            </div>
            <div class="form-label-group">
                <input type="password" id="inputConfirmPassForgot" name="inputConfirmPassForgot" class="form-control">
                <label for="inputConfirmPassForgot">Confirmar Nueva Contraseña</label>
            </div>
            <div class="alert alert-danger fade show" style="display:none;" role="alert" id="emailforgotalert">
                <strong>Error: </strong> Formato de correo inválido
            </div>
            <div class="alert alert-danger fade show" style="display:none;" role="alert" id="passforgotalert">
                <strong>Error: </strong> Formato de contraseña inválido
            </div>
            <div class="alert alert-danger fade show" style="display:none;" role="alert" id="passconfforgotalert">
                <strong>Error: </strong> Las contraseñas ingresadas no coinciden
            </div>
            <div class="alert alert-danger fade show" style="display:none;" role="alert" id="camposobligatoriosalertforgot">
                <strong>Error: </strong> Todos los campos son obligatorios
            </div>
            <div class="alert alert-danger fade show" style="display:none;" role="alert" id="authalert">
              <strong>Error: </strong> Usuario Inválido
            </div>
            
            <?php session_start(); if(isset($_SESSION["errorContra"])){ $error = $_SESSION["errorContra"]; echo '<div class="alert alert-danger fade show" role="alert" id="authalert">
              ' . $error . '</div>';unset($_SESSION['errorContra']);}?>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Cambiar Contraseña</button>
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
<!--Scripts-->
</body>
</html>