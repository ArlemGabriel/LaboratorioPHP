<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro de Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <!-- Popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <!-- BootStrap 4.4.1 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!-- JavaScript 4.4.1 -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Hoja de Estilo CSS Registro -->
  <link rel="stylesheet" type="text/css" href="CSS/estilosregistro.css">
  <!-- Script DatePicker-->
  <link rel="stylesheet" type = "text/css" href="libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
  <script src="libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


</head>

<body>
<div class="jumbotron text-center" style="margin-bottom:0" id = "encabezadoinicio">
  <h1 id = "datosencabezadoinicio">Introducción al Desarrollo de Páginas Web</h1>
  <p id = "datosencabezadoinicio">Página de Registro</p> 
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
            <h5 class="card-title text-center">Registro</h5>
            <form class="form-register" onsubmit="return validar();" action="../Controlador/controladorusuarios.php" method="POST">

              <div class="form-label-group">
                <input type="text" id="inputUsername" name="registusername" class="form-control" placeholder="Username">
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Su nombre de usuario debe contener de 3-16 caracteres, puede contener letras y números, guiones bajos _ y guiones altos -
                </small>
                <label for="inputUsername">Usuario*</label>
              </div>
              
              
              <div class="alert alert-danger fade show" style="display:none;" role="alert" id="usuarioalert">
                <strong>Error: </strong> Formato de nombre de usuario inválido
              </div>

              <div class="form-label-group">
                <input type="text" id="inputName" name="registname" class="form-control" placeholder="Name">
                <label for="inputName">Nombre*</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputLastName" name="registlastname" class="form-control" placeholder="LastName">
                <label for="inputLastName">Apellidos*</label>
              </div>

              <div class="alert alert-danger fade show" style="display:none;" role="alert" id="nombreapellidosalert">
                <strong>Error: </strong> Los campos de nombre y apellido solamente deben contener letras
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" name="registemail" class="form-control" placeholder="Email address">
                <label for="inputEmail">Correo Electrónico*</label>
              </div>

              <div class="alert alert-danger fade show" style="display:none;" role="alert" id="formatocorreoalert">
                <strong>Error: </strong> Formato de correo inválido
              </div>

                <div class="form-label-group date ag-date">
                  <input type="text" id="inputBirth" name="registbirth" class="form-control">
                  <label for="inputBirth">Fecha de Nacimiento</label>
                  <span class="input-group-addon">
                  </span>
                </div>
              <script src="js/registro.js"></script>
         
              <div class="form-label-group">
                <input type="number" id="inputNumber" name="registnumber" class="form-control" placeholder="Phone Number">
                <label for="inputNumber">Telefono</label>
              </div>
              <div class="alert alert-danger fade show" style="display:none;" role="alert" id="telefonoalert">
                <strong>Error: </strong> Formato de télefono inválido
              </div>
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="registpassword" class="form-control" placeholder="Password">
                <label for="inputPassword">Contraseña*</label>
              </div>

              <div class="alert alert-danger fade show" style="display:none;" role="alert" id="passwordalert">
                <strong>Error: </strong> Formato de contraseña inválido
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" name="registconfirmpassword" class="form-control" placeholder="Password">
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Su contraseña debe tener de 8-16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
                  además no debe contener espacios en blanco, caracteres especiales, emojis, ni otros símbolos
                </small>
                <label for="inputConfirmPassword">Confirmar Contraseña*</label>
              </div>

              <div class="alert alert-danger fade show" style="display:none;" role="alert" id="passwordconfalert">
                <strong>Error: </strong> Las contraseñas no coinciden
              </div>
              <div class="alert alert-danger fade show" style="display:none;" role="alert" id="camposobligatoriosalert">
                <strong>Error: </strong> Los campos con * son obligatorios
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrarse</button>
              <a class="d-block text-center mt-2 small" href="autenticacion.php">Acceder</a>
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
