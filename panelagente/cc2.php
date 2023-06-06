<?php

include('db.php');
include('session.php');

$agente = $_SESSION['cedula'];
$consulta = "SELECT * FROM login WHERE cedula = '$agente'";
$resultado = mysqli_query($conexion, $consulta) or die("Algo ha salido mal en la consulta a la base de datos");

      
      while ($columna = mysqli_fetch_array( $resultado ))
      {
      $nombre = $columna['nombre'];
      $cedula = $columna['cedula'];
      } 

 ?>

<!DOCTYPE html>
<html lang="es">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Ingreso Serviayuda</title>

    <link rel="stylesheet" href="/Login/css/login.css">
    <link rel="stylesheet" href="/Login/css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>

   <form action="modif_cc2.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Cambio de contraseña </h1>
       <h3> <?php echo $nombre; ?> </h3> <br> 
   <p>Verifique su cedula <input type="numer" name="cedula" value="<?php echo $cedula; ?>" disabled></p> <br>
   <p>Nueva contraseña <input type="password" name="contrasenanueva" required></p>
   <input type="submit" value="Cambiar contraseña">
   
   </form> 
</body>
</html>