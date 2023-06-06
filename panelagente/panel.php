<body style="overflow-x:hidden; overflow-y:hidden">
<?php

include('db.php');
include('session.php');

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesactual = $meses[date('n')-1];
$mespasado = $meses[date('n')-2];
$numeromespasado = date('n')-1;
$numeromesactual= date('n');
$numeroañoactual = date('Y');



// consulta por interacciones mes pasado
// chat
$agente = $_SESSION['cedula'];
$consulta = "SELECT  SUM(chat) as 'chatr' FROM interacciones WHERE cedula = '$agente' AND DATE( fecha ) 
BETWEEN DATE( '$numeroañoactual-$numeromespasado-01') AND DATE(  '$numeroañoactual-$numeromespasado-31' )";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
$chatr  = $data['chatr'];
// whatsapp

$consultaw = "SELECT  SUM(whatsapp) as 'whatsappr' FROM interacciones WHERE cedula = '$agente' AND DATE( fecha ) 
BETWEEN DATE( '$numeroañoactual-$numeromespasado-01') AND DATE(  '$numeroañoactual-$numeromespasado-31' )";
$resultw = mysqli_query($conexion,$consultaw);
$dataw=mysqli_fetch_array($resultw);
$whatsappr  = $dataw['whatsappr'];
// llamadas

$consultal = "SELECT  SUM(llamadas) as 'llamadasr' FROM interacciones WHERE cedula = '$agente' AND DATE( fecha ) 
BETWEEN DATE( '$numeroañoactual-$numeromespasado-01') AND DATE(  '$numeroañoactual-$numeromespasado-31' )";
$resultl = mysqli_query($conexion,$consultal);
$datal=mysqli_fetch_array($resultl);
$llamadasl  = $datal['llamadasr'];

// suma de interacciones mes pasado
$resultadointeraccionespasado = $chatr+$whatsappr+$llamadasl; 

// consulta por interacciones mes actual
// chat

$consultaa = "SELECT  SUM(chat) as 'chatra' FROM interacciones WHERE cedula = '$agente' AND DATE( fecha ) 
BETWEEN DATE( '$numeroañoactual-$numeromesactual-01') AND DATE(  '$numeroañoactual-$numeromesactual-31' )";
$resulta = mysqli_query($conexion,$consultaa);
$dataa=mysqli_fetch_array($resulta);
$chatra  = $dataa['chatra'];
// whatsapp

$consultawa = "SELECT  SUM(whatsapp) as 'whatsappra' FROM interacciones WHERE cedula = '$agente' AND DATE( fecha ) 
BETWEEN DATE( '$numeroañoactual-$numeromesactual-01') AND DATE(  '$numeroañoactual-$numeromesactual-31' )";
$resultwa = mysqli_query($conexion,$consultawa);
$datawa=mysqli_fetch_array($resultwa);
$whatsappra  = $datawa['whatsappra'];
// llamadas

$consultala = "SELECT  SUM(llamadas) as 'llamadasra' FROM interacciones WHERE cedula = '$agente' AND DATE( fecha ) 
BETWEEN DATE( '$numeroañoactual-$numeromesactual-01') AND DATE(  '$numeroañoactual-$numeromesactual-31' )";
$resultla = mysqli_query($conexion,$consultala);
$datala=mysqli_fetch_array($resultla);
$llamadasla  = $datala['llamadasra'];

// suma de interacciones mes actual
$resultadointeraccionesactual = $chatra+$whatsappra+$llamadasla; 


$consultahorarios = "SELECT * FROM login WHERE cedula = '$agente'";
$resultadohorarios = mysqli_query($conexion, $consultahorarios) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadohorarios ))
      {
      $break1 = $columna['break1'];
      $almuerzo = $columna['almuerzo'];
      $break2 = $columna['break2'];
      $nombre = $columna['nombre'];
      } 
 
      $consultaaht = "SELECT * FROM calidad WHERE cedula = '$agente'";
      $resultadoaht = mysqli_query($conexion, $consultaaht) or die("Algo ha salido mal en la consulta a la base de datos");
      while ($columna = mysqli_fetch_array( $resultadoaht ))
      {
      $calidad = $columna['calidad'];
      $nombre = $columna['nombre'];
      } 

      $consultamensaje = "SELECT * FROM mensaje WHERE ID ='1'";
      $resultadomensaje = mysqli_query($conexion, $consultamensaje) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadomensaje ))
      {
      $mensaje = $columna['mensaje'];
      } 

      // mes pasado
      $consultacalidad = "SELECT * FROM calidad WHERE cedula = '$agente' and mes = '$mespasado'";
      $resultadocalidad = mysqli_query($conexion, $consultacalidad) or die("Algo ha salido mal en la consulta a la base de datos");
 
     while ($columna = mysqli_fetch_array( $resultadocalidad ))
      {
      $calidadpasado = $columna['calidad'];
      }

         // mes actual
         $consultacalidad = "SELECT * FROM calidad WHERE cedula = '$agente' and mes = '$mesactual'";
         $resultadocalidad = mysqli_query($conexion, $consultacalidad) or die("Algo ha salido mal en la consulta a la base de datos");
    
        while ($columna = mysqli_fetch_array( $resultadocalidad ))
         {
         $calidadactual = $columna['calidad'];
         }  

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
<head>
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

</head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="Serviayuda"
    />
    <meta
      name="description"
      content="Serviayuda"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Serviayuda</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
  
  </head>
  <body>


 
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            
            <div class="col-md-6 col-lg-2 col-xlg-3"  >
              <div class="card card-hover">
                <div class="box bg-cyan text-center" >
                  <h1 class="font-light text-white" >
                

                  
                  </h1>
                  <h6 style="padding:5%"class="text-white" ><?php echo $nombre;?> <br> </h6>
                      <!-- AHT consolidado <?php echo  $calidadpasado;?>  -->
                   
                </div>
              </div>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                  
                  </h1>
                  <h6 class="text-white">  Mensaje importante:</h6>
                        <h6 class="text-black"> <?php echo  $mensaje;?></h6>
                      
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3" style="height: 50%">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class=""></i>
                  </h1>

                  <h6 class="text-white">Calidad <?php echo $mespasado ?>: <?php echo  $calidadpasado;?></h6>
                  <h6 class="text-white">Calidad parcial <?php echo $mesactual ?>: <?php echo  $calidadactual;?></h6>

                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3"><a href="horarios.php"> </a>

              <div class="card card-hover" >
                <div class="box bg-danger text-center" >


                 <h6 class="text-white">Cantidad de Interacciones</h6> 
                  <a href="interagenpasado.php" target="_blank"><h6 class="text-white"><?php echo $mespasado.': '; echo $resultadointeraccionespasado?> </h6></a>
                  <a href="interagenactual.php" target="_blank"><h6 class="text-white">Parciales <?php echo $mesactual.': '; echo $resultadointeraccionesactual ?> </h6>  </a>

                    
                  </h1>
                </div>
              </div>
            </div></a>
            <!-- Column -->
        

            <div class="col-md-6 col-lg-2 col-xlg-3" >

              <div class="card card-hover" >
                <div class="box bg-info text-center" >

                  <a href="horarios.php" target="_blank"> <h6 class="text-white">🕜 Ver horarios </h6>    </a>
                  <a href="horarios.php" target="_blank"> <h6 class="text-white">🔄 Cambiar turno </h6>    </a>
                  <a href="cc2.php" target="_blank"> <h6 class="text-white">🔐 Cambiar contraseña </h6>    </a>
                 
     
                  </div>  

              </div>
            </div>
                
            
            <!-- Column -->
         
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
         
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
    
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>
  </body>
</html>
