<?php
    
    include('session.php');
    include('db.php');
    include('ejemplo.php');
    include('consultashorario.php');

$cc = $_SESSION['cedula']; 
$consulta = "SELECT * FROM ch3";                                                          
$ejecutar_consulta = $conexion->query($consulta);
 $nomx = array();
   while ($registro = $ejecutar_consulta->fetch_assoc())                                    
   {
     $nom = $registro["ccsolicitante"];
   }

// verificacion perfil

$consultaadmin = "SELECT * FROM admi WHERE cedula = '$cc'";
$resultadoadmin = mysqli_query($conexion, $consultaadmin) or die("Algo ha salido mal en la consulta a la base de datos");

     while ($columna = mysqli_fetch_array( $resultadoadmin ))
      {
      $cargo = $columna['cargo'];
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
<h3> <b> Horarios agente contact center </b></h3>
<h4>Recuerde validar el dia que debe realizar la media hora adicional.
<b> Importante:</b> <?php echo  $mensaje;?>  </h4>
    </center>

<!-- prueba -->
<br>
<a href="../cambiohorario/index.php" target="_blank"> <button class="button form-control" > Solicitar cambio de horario </button> </a>

<div class="button form-control" data-toggle="modal" value="Solicitar vacio laboral" data-target="#modalvacio"> Solicitar vacio laboral </div>  <?php include('modales/modalvacio.php'); ?>
<?php if(empty($cargo)){ } else { ?>
<div class="button form-control" data-toggle="modal" value="Descargar" onclick="window.open('../admin/descargarh.php', '_blank');"> Descargar 🔽 </div> 
<?php } ?>
    </div>
    </div>

<!-- prueba -->
<br>
<br>



 <?php

    include('db.php');


$consultamensaje = "SELECT * FROM mensaje WHERE ID ='2'";
$resultadomensaje = mysqli_query($conexion, $consultamensaje) or die("Algo ha salido mal en la consulta a la base de datos");

      
      while ($columna = mysqli_fetch_array( $resultadomensaje ))
      {
      $mensaje = $columna['mensaje'];
      } 

// consulta ultima actualizacion de los horarios

$consultaultima = "SELECT * FROM mensaje WHERE ID ='3'";
$resultadoultima = mysqli_query($conexion, $consultaultima) or die("Algo ha salido mal en la consulta a la base de datos");

      
      while ($columna2 = mysqli_fetch_array( $resultadoultima ))
      {
      $ultimaactualizacion = $columna2['fecha'];
      } 


    $sqlClientes = ("SELECT * FROM horarios WHERE cedula >1");
    $queryData   = mysqli_query($conexion, $sqlClientes);
    $total_client = mysqli_num_rows($queryData);
    
    ?>
    Ultima actualizacion de horarios:  <em> <?php echo $ultimaactualizacion;  ?> </em>
          <table class="table-fill">
            <thead>
              <tr>
              
                 <th> <div style="width: 10px;">cedula</th>
                <th > <div style="width: 50px;">nombre</th>
                <th>campaña</th>
                 <th>lunes</th>
                 <th>martes</th>
                 <th>miercoles</th>
                 <th>jueves</th>
                 <th>viernes</th>
                 <th>break1</th>
                 <th>almuerzo</th>
                 <th>break2</th>
                 <th>Sabado</th>
                 <th>Break sabado</th>                 
              </tr>
            </thead>
            
              <?php 
              $i = 1;
              while ($data = mysqli_fetch_array($queryData)) { 
                
                $cedula = $data['cedula'];
                $dialunes = $data['lunes'];
                $diamartes = $data['martes'];
                $diamiercoles = $data['miercoles'];
                $diajueves = $data['jueves'];
                $diaviernes = $data['viernes'];
                $diasabado = $data['sabado'];
                ?>
              <tr>
                <td><?php echo $cedula; ?> </td>
                <td><?php echo $data['nombre']; ?></td>
                <td><?php echo $data['campana']; ?></td>
                <td <?php 
                 $consultahorarioslunes = "SELECT * FROM ch3 WHERE ccsolicitante = '$cedula' and dia = 'lunes' and resultado = 'aprobado'";
                 $resultadohorarioslunes = mysqli_query($conexion, $consultahorarioslunes) or die("Algo ha salido mal en la consulta a la base de datos");
                     
                           while ($columna = mysqli_fetch_array($resultadohorarioslunes))
                           {$ccsolilunes = $columna['ccsolicitante'];
                            $facililunes = $columna['facilitador'];}
                if($cedula==$ccsolilunes){ echo "style='color:red;' title='".$facililunes."'";} 
                
                ?>
                ><?php echo $dialunes; ?></td>
                <td <?php 
                 $consultahorariosmartes = "SELECT * FROM ch3 WHERE ccsolicitante = '$cedula' and dia = 'martes' and resultado = 'aprobado'";
                 $resultadohorariosmartes = mysqli_query($conexion, $consultahorariosmartes) or die("Algo ha salido mal en la consulta a la base de datos");
                     
                           while ($columna = mysqli_fetch_array($resultadohorariosmartes))
                           {$ccsolimartes = $columna['ccsolicitante'];
                            $facilimartes = $columna['facilitador'];}
                if($cedula==$ccsolimartes){ echo "style='color:red;' title='".$facilimartes."'";} 
                
                ?>
                ><?php echo $diamartes; ?></td>
                <td <?php 
                 $consultahorariosmiercoles = "SELECT * FROM ch3 WHERE ccsolicitante = '$cedula' and dia = 'miercoles' and resultado = 'aprobado'";
                 $resultadohorariosmiercoles = mysqli_query($conexion, $consultahorariosmiercoles) or die("Algo ha salido mal en la consulta a la base de datos");
                     
                           while ($columna = mysqli_fetch_array($resultadohorariosmiercoles))
                           {$ccsolimiercoles = $columna['ccsolicitante'];
                            $facilimiercoles = $columna['facilitador'];}
                if($cedula==$ccsolimiercoles){ echo "style='color:red;' title='".$facilimiercoles."'";} 
                
                ?>
                ><?php echo $diamiercoles; ?></td>
                <td <?php 
                 $consultahorariosjueves = "SELECT * FROM ch3 WHERE ccsolicitante = '$cedula' and dia = 'jueves' and resultado = 'aprobado'";
                 $resultadohorariosjueves = mysqli_query($conexion, $consultahorariosjueves) or die("Algo ha salido mal en la consulta a la base de datos");
                     
                           while ($columna = mysqli_fetch_array($resultadohorariosjueves))
                           {$ccsolijueves = $columna['ccsolicitante'];
                            $facilijueves = $columna['facilitador'];}
                if($cedula==$ccsolijueves){ echo "style='color:red;' title='".$facilijueves."'";} 
                
                ?>
                ><?php echo $diajueves; ?></td>
                <td <?php 
                 $consultahorariosviernes = "SELECT * FROM ch3 WHERE ccsolicitante = '$cedula' and dia = 'viernes' and resultado = 'aprobado'";
                 $resultadohorariosviernes = mysqli_query($conexion, $consultahorariosviernes) or die("Algo ha salido mal en la consulta a la base de datos");
                     
                           while ($columna = mysqli_fetch_array($resultadohorariosviernes))
                           {$ccsoliviernes = $columna['ccsolicitante'];
                            $faciliviernes = $columna['facilitador'];}
                if($cedula==$ccsoliviernes){ echo "style='color:red;' title='".$faciliviernes."'";} 
                
                ?>
                ><?php echo $diaviernes; ?></td>

                <td><?php echo $data['break1']; ?></td>
                <td><?php echo $data['almuerzo']; ?></td>
                <td><?php echo $data['break2']; ?></td>
                <td <?php 
                 $consultahorariossabado = "SELECT * FROM ch3 WHERE ccsolicitante = '$cedula' and dia = 'sabado' and resultado = 'aprobado'";
                 $resultadohorariossabado = mysqli_query($conexion, $consultahorariossabado) or die("Algo ha salido mal en la consulta a la base de datos");
                     
                           while ($columna = mysqli_fetch_array($resultadohorariossabado))
                           {$ccsolisabado = $columna['ccsolicitante'];
                            $facilisabado = $columna['facilitador'];}
                if($cedula==$ccsolisabado){ echo "style='color:red;' title='".$facilisabado."'";} 
                
                ?>
                ><?php echo $diasabado; ?></td>
                <td><div style="width: 100px; text-align:center;"><?php echo $data['breaksabado']; ?></td>
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