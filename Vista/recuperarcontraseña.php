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
          <h6>Ingrese su correo electrónico, enviaremos un link para reestablecer su contraseña</h6>
          <br>
          <form class="form-signin">
            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Correo Electrónico</label>
              </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar Link</button>
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