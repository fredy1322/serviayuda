
<?php
include('session.php');
include('db.php');
include('ejemplo.php');
include('iframecode.php');
include('phpmailer/enviacorte.php');



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


             
header("Refresh: 3600; URL='caducada.php'");
?>
<!DOCTYPE html> 
<html>

<head>

<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
<meta http-equiv="Pragma" content="no-cache">


<title>Serviayuda</title>

</head>

</style>

<body>

    <link href="/Login/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="/Login/dist/css/style.min.css" rel="stylesheet" />
    <script src="/Login/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Login/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/Login/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/Login/assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="/Login/dist/js/waves.js"></script>
    <script src="/Login/dist/js/sidebarmenu.js"></script>
    <script src="/Login/dist/js/custom.min.js"></script>
    <script src="/Login/assets/libs/flot/excanvas.js"></script>
    <script src="/Login/assets/libs/flot/jquery.flot.js"></script>
    <script src="/Login/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="/Login/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="/Login/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="/Login/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="/Login/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="/Login/dist/js/pages/chart/chart-page-init.js"></script>



<iframe src="/Login/panelagente/panel.php" 

width="100%"height="12%" scrolling="none" style="border-color: transparent;position: static; " >

</iframe>

<a title="cerrarsesion" href="caducada.php"><img src="assets/images/users/3.png" style="margin-left: 1%; margin-top:-8px;width: 3%; z-index:1;position: absolute;" alt="cerrarsesion" /></a>
<a title="Cambio de horario" href="caducada.php"> </a>
<!-- Mensaje de cambio de horario -->

<iframe src="/Login/panelagente/mensajecambiohorario.php" 

width="100%" height="7%" scrolling="none" style="border-color: red;position: static; " >

</iframe> 

 </div>
<iframe src="/Login/Aplicativo/index.php"

width="100%"height="670px" scrolling="none" style="border-color: transparent;position: static; z-index:2; " >

</iframe> 

	
</body>
</html> 


