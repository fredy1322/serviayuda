<?php
include('db.php');
include('ejemplo.php');
include('session.php');

$actualizar = ("UPDATE login SET idsession='0'");
$resultado=mysqli_query($conexion,$actualizar);





