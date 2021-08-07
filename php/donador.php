<!--<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Pagina web">
    <meta name="viewport" content="width-device-width, users-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>SAC</title>
    <link rel="stylesheet" href="css/r_d.css">
    <link rel="stylesheet" href="css/fuente.css">
  </head>
  <body>
    <div class="contenedor">
<header id=cabecera>
  <div class="logo">
<img src="img/logo.png" alt="logo" width="100px">
</div>
<br>
<br>
<h1>La Luz de la Esperanza</h1>
</header>
<nav>
  <div class="navegacion">
  <ul>
    <li><a href="administrador.php">Inicio</a></li>
    <li><a href="donadores_tabla.php">Donadores</a></li>
    <li><a href="beneficiarios_tabla.php">Beneficiarios</a></li>
    <li><a href="apoyos_tabla.php">Apoyos</a></li>
    <li><a href="convenios_tabla.php">Convenios</a></li>
    <li><a href="socios_tabla.php">Socios</a></li>
    <li><a href="eventos_tabla.php">Eventos</a></li>
 </ul>
</div>
</nav>-->
<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {  
  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
  header('Access-Control-Allow-Credentials: true');  
  header('Access-Control-Max-Age: 86400');   
}  

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {  

  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))  
      header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");  

  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))  
      header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");  
}  
require_once("conexion.php");

if (isset($_POST['nombre'])) {
   $nombre = $_POST['nombre'];
 }
if (isset($_POST['tipo'])) {
      $tipo = $_POST['tipo'];
}
if (isset($_POST['cantidad'])) {
    $cantidad =$_POST['cantidad'];
}
if (isset($_POST['fecha'])) {
    $cantidad =$_POST['fecha'];
}

mysqli_query($conexion,("INSERT INTO donador(nombre_donador,tipo_donacion,cantidad_donada,fecha_donacion)VALUES('$_POST[nombre]','$_POST[tipo]','$_POST[cantidad]','$_POST[fecha]')"));
echo "Datos registrados";
?>

<br><br>
<a class="volver" href="administrador.php" >Regresar a Principal</a>
</div>

<?php
$conexion->close();
?>
</body>
</html>*/


i
?>
