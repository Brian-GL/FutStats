<!DOCTYPE html>

<?php
  include("conexion.php")
?>

<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--Title-->
  <title>Crear Cuenta</title>

  <!-- Favicon-->
  <link rel="icon" type="image/png" href="assets/img/icon.png" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  <!-- Third party plugin CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <!-- Navigation (FutStats (Icono Balon)-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <img class="img-fluid" src="assets/img/logo_icon.png" alt="FutStats Logo Icon">
  </nav>
  <!-- Masthead-->
  <form action="storecrearcuenta.php" method="POST">
    <header class="login masthead">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-end">
            <h2>Información del Jugador/Director</h2>
            <h8 class="text-uppercase text-white font-weight-bold">Ingresa tu nombre</h8>
            <input type="text" name="name" placeholder="Nombre">
            <hr>
            <h8 class="text-uppercase text-white font-weight-bold">Ingresa tu edad</h8>
            <input type="number" name="age" placeholder="Edad" min="1" max="100">
            <hr>
            <h8 class="text-uppercase text-white font-weight-bold">Ingresa tu sexo</h8>
            <select class="select" name="sex">
            	<option value="F">Femenino</option>
            	<option value="M">Masculino</option>
            </select>
            <hr>
            <h8 class="text-uppercase text-white font-weight-bold">Ingresa tu rol</h8>
            <select class="select" name="rol">
            	<option value="Jugador">Jugador</option>
            	<option value="Director">Director</option>
            </select>
            <hr>
          </div>
          <div class="col-lg-8 align-self-baseline">
          	<h2>Información de usuario para la página</h2>
          	<h8 class="text-uppercase text-white font-weight-bold">Ingresa tu nombre de usuario</h8>
            <input type="text" name="username" placeholder="Usuario">
            <hr>
          	<h8 class="text-uppercase text-white font-weight-bold">Ingresa tu correo electronico:</h8>
            <input type="text" name="correo" placeholder="Correo">
            <hr>
            <h8 class="text-uppercase text-white font-weight-bold">Ingresa una contraseña</h8>
            <input type="password" name="contrasenia", placeholder="Contraseña">
            <hr>
            <h8 class="text-uppercase text-white font-weight-bold">Confirmar tu contraseña</h8>
            <input type="password" name="contraseniaconfirmada", placeholder="Confirmar contraseña">
            <hr>
            <button class="button" style="vertical-align: middle"><span>Crear</span></button>
          </div>
        </div>
      </div>
    </header>
  </form>

</body>
</html>