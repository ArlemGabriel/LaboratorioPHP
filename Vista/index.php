<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/estilosinicio.css">
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0" id = "encabezadoinicio">
  <h1 id = "datosencabezadoinicio">Introducción al Desarrollo de Páginas Web</h1>
  <p id = "datosencabezadoinicio">Página de Inicio</p> 
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

<div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-sm-3">
      <h2 id="acercadetitle">Acerca de Mi</h2>
      <br>
      <div class="mifoto"></div>
      <br>
      <p>Estudiante de ingeniería en computación, amante de la música, películas y videojuegos</p>
      
    </div>
    <div class="col-sm-8">
      <h2>BOOTSTRAP</h2>
      <h5>Control de Usuarios, Dec 14, 2019</h5>
      <br>
      <div class="bootstrapimg"></div>
      <br>
      <h3>DESCRIPCIÓN:</h3>
      <p>Usando Bootstrap construya un pequeño proyecto que contenga una página o un conjunto de ellas que permitan autorización y autenticación de usuarios</p>
      <br>
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
