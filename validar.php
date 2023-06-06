<?php

include('db.php');
$cedula=$_POST['cedula'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['cedula']=$cedula;

// login agentes //
$consulta="SELECT * FROM login WHERE cedula='$cedula' and contrasena='$contrasena' and idsession='0'";
// $consulta="SELECT * FROM login WHERE cedula='$cedula' and contrasena='$contrasena'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
   header("location:iframe.php");
}


// login admin //
$consulta2="SELECT * FROM admi where cedula='$cedula' and contrasena='$contrasena'and idsession='0'";
// $consulta2="SELECT * FROM admi where cedula='$cedula' and contrasena='$contrasena'";

$resultado2=mysqli_query($conexion,$consulta2);
$filas=mysqli_num_rows($resultado2);

// comparativo login
if($filas){
     header("location:admin");
}

else{
    ?>
    <?php
    include("index.html");

    mysqli_free_result($resultado);
mysqli_close($conexion);

}

  ?>

  <h1 class="bad">Error de ingreso, valide con su supervisor</h1>
