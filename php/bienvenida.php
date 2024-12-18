<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
        alert("Debes iniciar sesión");
        window.location = "../index.php";
        </script>
    ';
    session_destroy();
    die();
}

$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/estilosBienvenida.css">
<title>Bienvenida</title>
</head>
<body>

<div class="navbar">
  <a href="#home">Inicio</a>
  <div class="dropdown">
    <button class="dropbtn">Mis Documentos 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Historial Académico</a>
      <a href="#">Record Académico</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Administración Personal
      <i class="fa fa-caret-down"></i>
    </button>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Inscripciones
      <i class="fa fa-caret-down"></i>
    </button>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Seguridad
      <i class="fa fa-caret-down"></i>
    </button>
  </div> 

  <div class="dropdown" id="usuario">
    <button class="dropbtn">
      <?php echo $usuario; ?> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </div>
  </div> 
</div>

<h3>Bienvenido, <?php echo $usuario; ?>!</h3>
<p>Este es tu panel de inicio.</p>

</body>
</html>
