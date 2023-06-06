<meta http-equiv="refresh" content="2;'mensajecambiohorario.php'">
<body style="overflow-x:hidden; overflow-y:hidden">
<link href="/Login/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="/Login/dist/css/style.min.css" rel="stylesheet" />

<?php 

include('session.php');
include('db.php');
include('ejemplo.php');
include('iframecode.php');

$idsession = session_id();
$agente = $_SESSION['cedula'];

$hoy = date('Y-m-d');

$actualizar = ("UPDATE login SET idsession='$idsession' WHERE cedula ='$agente'");
$resultado=mysqli_query($conexion,$actualizar);

$admin = $_SESSION['cedula'];
 $consultaadmin = "SELECT * FROM login WHERE cedula = '$admin'";
      $resultadoadmin = mysqli_query($conexion, $consultaadmin) or die("Algo ha salido mal en la consulta a la base de datos");
    while ($columna = mysqli_fetch_array( $resultadoadmin ))
      {
     $contrasena = $columna['contrasena'];
        } 
      if ($contrasena=='Servitel123*') {

        echo "<script>alert('Por favor cambie la contraseña, de lo contrario el usuario se bloqueará.');</script>";
        header('Location: panelagente/cc2.php');

             }


// Cuenta registros de solicitud por el agente en ch1
$sql = "SELECT * FROM ch1 WHERE ccsolicitante = '$agente'";
if ($result=mysqli_query($conexion,$sql)) {
    $solicitudcambio=mysqli_num_rows($result);
}

// Cuenta registros de solicitud por el agente en ch4
$sql = "SELECT * FROM ch4 WHERE ccsolicitante = '$agente' and fecha = '$hoy' ";
if ($result=mysqli_query($conexion,$sql)) {
    $solicitudcambiorechazada=mysqli_num_rows($result);
}

// Cuenta registros de solicitud por el agente en ch2
$sql = "SELECT * FROM ch2 WHERE ccsolicitante = '$agente'";
if ($resultdos=mysqli_query($conexion,$sql)) {
    $solicitudcambiodos=mysqli_num_rows($resultdos);
}

// Cuenta registros de solicitud por el agente en ch2
$sql = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente'";
if ($resultdos=mysqli_query($conexion,$sql)) {
    $solicitudcambioparafac=mysqli_num_rows($resultdos);
}


// Verifica si tiene solicitud y el agente no ha aceptado
if($solicitudcambio>="1") { ?>
<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Tiene una solicitud pendiente de cambio de horario. El agente aún no ha aceptado el cambio.
<?php } ?>
<?php 
// Verifica si tiene solicitud y el agente no ha aceptado
if($solicitudcambiorechazada>="1") { ?>
<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Su solicitud de cambio fue rechazada por su compañer@.
<?php } ?>

<?php 
// Agente ya acepto (para solicitante), falta el supervisor vista solicitante
if($solicitudcambiodos>="1") { ?>
<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Tiene una solicitud pendiente de cambio de horario. El agente ya acepto el cambio, ahora el supervisor está revisando la solicitud.
<?php } ?>
<?php 
// Agente ya acepto (para facilitador), falta el supervisor vista solicitante
if($solicitudcambioparafac>="1") { ?>
    <img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Tiene una solicitud pendiente de cambio de horario. Ahora el supervisor está revisando la solicitud.
    <?php } ?>

<?php 
// Cuenta registros de pedido de solicitud
$sql = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente'";
if ($result=mysqli_query($conexion,$sql)) {
    $solicitudcambio=mysqli_num_rows($result);
}
 ?>

<?php 
// valida registros aceptados en ch3 del de dia de hoy para solicitante
$sql = "SELECT * FROM ch3 WHERE ccsolicitante = '$agente' AND resultado = 'aprobado'";
if ($result=mysqli_query($conexion,$sql)) {
    $cantidadch3aceptados=mysqli_num_rows($result);

if($cantidadch3aceptados>="1") { 

    $consultatablach3 = "SELECT * FROM ch3 WHERE ccsolicitante = '$agente' AND resultado = 'aprobado'";
    $resultaconsultatablach3 = mysqli_query($conexion, $consultatablach3) or die("Algo ha salido mal en la consulta a la base de datos");
  while ($columna = mysqli_fetch_array($resultaconsultatablach3))
    {
   $fecha = $columna['fecha'];
      }
      
      if($fecha==$hoy) { ?>

<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> El cambio de horario que usted solicitó fue autorizado, <a href="/Login/panelagente/horarios.php" target="_blank"> verifique el nuevo horario. </a>
 
<?php }}}

// valida registros aceptados en ch3 del de dia de hoy para facilitador
$sql = "SELECT * FROM ch3 WHERE ccfacilitador = '$agente' AND resultado = 'aprobado'";
if ($result=mysqli_query($conexion,$sql)) {
    $cantidadch3aceptados=mysqli_num_rows($result);

if($cantidadch3aceptados>="1") { 

    $consultatablach3 = "SELECT * FROM ch3 WHERE ccfacilitador = '$agente' AND resultado = 'aprobado'";
    $resultaconsultatablach3 = mysqli_query($conexion, $consultatablach3) or die("Algo ha salido mal en la consulta a la base de datos");
  while ($columna = mysqli_fetch_array($resultaconsultatablach3))
    {
   $fecha = $columna['fecha'];
      }
      
      if($fecha==$hoy) { ?>

<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> El cambio de horario que usted solicitó fue autorizado, <a href="/Login/panelagente/horarios.php" target="_blank"> verifique el nuevo horario. </a>
 
<?php }}}

// valida registros RECHAZADOS en ch3 del de dia de hoy para solicitante
$sql = "SELECT * FROM ch3 WHERE ccsolicitante = '$agente' AND resultado = 'rechazado'";
if ($result=mysqli_query($conexion,$sql)) {
    $cantidadch3aceptados=mysqli_num_rows($result);

if($cantidadch3aceptados>="1") { 

    $consultatablach3 = "SELECT * FROM ch3 WHERE ccsolicitante = '$agente' AND resultado = 'rechazado'";
    $resultaconsultatablach3 = mysqli_query($conexion, $consultatablach3) or die("Algo ha salido mal en la consulta a la base de datos");
  while ($columna = mysqli_fetch_array($resultaconsultatablach3))
    {
   $fecha = $columna['fecha'];
      }
      
      if($fecha==$hoy) { ?>

<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> El cambio de horario que usted solicitó fue <b> rechazado </b>, <a href="/Login/panelagente/horarios.php" target="_blank"> Ver horarios. </a>
 
<?php }}}

// valida registros RECHAZADOS en ch3 del de dia de hoy para facilitador
$sql = "SELECT * FROM ch3 WHERE ccfacilitador = '$agente' AND resultado = 'rechazado'";
if ($result=mysqli_query($conexion,$sql)) {
    $cantidadch3aceptados=mysqli_num_rows($result);

if($cantidadch3aceptados>="1") { 

    $consultatablach3 = "SELECT * FROM ch3 WHERE ccfacilitador = '$agente' AND resultado = 'rechazado'";
    $resultaconsultatablach3 = mysqli_query($conexion, $consultatablach3) or die("Algo ha salido mal en la consulta a la base de datos");
  while ($columna = mysqli_fetch_array($resultaconsultatablach3))
    {
   $fecha = $columna['fecha'];
      }
      
      if($fecha==$hoy) { ?>

<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> El cambio de horario que usted solicitó fue <b> rechazado </b>, <a href="/Login/panelagente/horarios.php" target="_blank"> Ver horarios. </a>
 
<?php }}}

// FIN RECHAZADOS


if($solicitudcambio>="1") { ?>
<img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Un agente desea cambiar de horario con usted. <a href="/Login/cambiohorario/aceptacion.php" target="_blank"> Ver solicitud </a>
<?php } ?>

<?php // Mensaje para cambio del dia lunes al azar
if(empty($razlunes)) {} else { ?>
  <img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Un agente desea su horario del dia <b>lunes</b><a href="/Login/cambiohorario/aceptacionaleatoria.php" target="_blank"> Ver solicitud </a>
  <?php } echo $razlunes;?>

  <?php // Mensaje para cambio del dia martes al azar
if(empty($razmartes)) {} else { ?>
  <img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Un agente desea su horario del dia <b>martes</b><a href="/Login/cambiohorario/aceptacionaleatoria.php" target="_blank"> Ver solicitud </a>
  <?php } ?>

  <?php // Mensaje para cambio del dia miercoles al azar
if(empty($razmiercoles)) {} else { ?>
  <img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Un agente desea su horario del dia <b>miércoles</b><a href="/Login/cambiohorario/aceptacionaleatoria.php" target="_blank"> Ver solicitud </a>
  <?php } ?>

  <?php // Mensaje para cambio del dia jueves al azar
if(empty($razjueves)) {} else { ?>
  <img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Un agente desea su horario del dia <b>jueves</b><a href="/Login/cambiohorario/aceptacionaleatoria.php" target="_blank"> Ver solicitud </a>
  <?php } ?>

  <?php // Mensaje para cambio del dia viernes al azar
if(empty($razviernes)) {} else { ?>
  <img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Un agente desea su horario del dia <b>viernes</b><a href="/Login/cambiohorario/aceptacionaleatoria.php" target="_blank"> Ver solicitud </a>
  <?php } ?>


<?php // Mensaje para cambio del dia sabado al azar
if(empty($razsabado)) {} else { ?>
  <img src="../assets/images/users/reloj.png" style="margin-left: 5%; width: 2%;" alt="" /> Un agente desea su horario del dia <b>Sábado</b><a href="/Login/cambiohorario/aceptacionaleatoria.php" target="_blank"> Ver solicitud </a>
  <?php } ?>

