<?php
    
    include('session.php');
    include('db.php');
    include('ejemplo.php');
    include('consultashorario.php');

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesactual = $meses[date('n')-1];
$mespasado = $meses[date('n')-2];

$cc = $_SESSION['cedula']; 
$consulta = "SELECT * FROM ch3";                                                          
$ejecutar_consulta = $conexion->query($consulta);
 $nomx = array();
   while ($registro = $ejecutar_consulta->fetch_assoc())                                    
   {
     $nom = $registro["ccsolicitante"];
   }


$consultamensaje = "SELECT * FROM mensaje WHERE ID ='2'";
$resultadomensaje = mysqli_query($conexion, $consultamensaje) or die("Algo ha salido mal en la consulta a la base de datos");

      
      while ($columna = mysqli_fetch_array( $resultadomensaje ))
      {
      $mensaje = $columna['mensaje'];
      }

      $dia = date("l");

  ?>

  


<html lang="en">
<head>
  <!-- Para Modales -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

	<meta charset="utf-8" />
	<title>Horarios</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
	<link href="/Login/css/horarios.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css">
  
  
</head>

<body>
  <center>
    <br>
<div class="table-title">
<h3> <b> Nota de calidad mes <?php echo $mespasado ?> </b></h3>

    </center>

<!-- prueba -->
<br>
<a hidden href="../cambiohorario/index.php" target="_blank"> <button class="button form-control" > Solicitar cambio de horario </button> </a>

<div hidden class="button form-control" data-toggle="modal" value="Solicitar vacio laboral" data-target="#modalvacio"> Solicitar vacio laboral </div>  <?php include('modales/modalvacio.php'); ?>

    </div>
    </div>

<!-- prueba -->
<br>
<br>



 <?php

    include('db.php');





    $sqlClientes = ("SELECT * FROM calidad WHERE mes = '$mespasado'");
    $queryData   = mysqli_query($conexion, $sqlClientes);
    $total_client = mysqli_num_rows($queryData);
    ?>
          <table class="table-fill">
            <thead>
              <tr>
              
                 <th>Nombre</th>
                <th>Cedula</th>
                <th>Mes</th>
                 <th>Calidad</th>
               
              </tr>
            </thead>
            
              <?php 
              $i = 1;
              while ($data = mysqli_fetch_array($queryData)) { 
                
                $nombre = $data['nombre'];
                $cedula = $data['cedula'];
                $mes = $data['mes'];
                $calidad = $data['calidad'];
                ?>
              <tr>
                <td><?php echo $nombre; ?> </td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $mes; ?></td>
                <td><?php echo $calidad; ?></td>
              </tr>
            <?php }
            
  ?>

            

            	  </tbody>
          </table>

      </div>
    </div>

  </div>


  

  

  </body>

        <!-- <script>
      jQuery(function(){
          swal({type: "success",
                icon: "info",
              title: "¡Atencion! Recuerde validar el dia que debe realizar la media hora adicional.",
         
          });
      });

      </script> -->