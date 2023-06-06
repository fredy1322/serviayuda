<?php
include('db.php');
include('ejemplo.php');
include('session.php');



// Migrar ch3 al finalizar la semana para no interferir con la vista de cambios
$sentenciamigrarch3="SELECT * FROM ch3";
$resultadomigrarch3 = $conexion->query($sentenciasu) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadomigrarch3)) {  
        $idi = $filas['idi'];
        $solicitante = $filas['solicitante'];
        $ccsolicitante = $filas['ccsolicitante'];
        $hsolicitante = $filas['hsolicitante'];
        $facilitador = $filas['facilitador'];
        $ccfacilitador = $filas['ccfacilitador'];
        $hfacilitador = $filas['hfacilitador'];
        $segmento = $filas['segmento'];
        $dia = $filas['dia'];
        $resultado = $filas['resultado'];
        $supervisor =$filas['supervisor'];
        $fecha = $filas['fecha'];
     }


      
 $insertarmartes = "INSERT INTO historicoch3 (idi, solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,segmento,dia, resultado, supervisor, fecha) 
      VALUES ('$idi','$solicitante','$ccsolicitante','$hsolicitante','$facilitador','$ccfacilitador','$hfacilitador','$segmento','$dia','$resultado','$supervisor','$fecha')";
      $resultadomartes = mysqli_query ($conexion,$insertarmartes); 


      if($resultadomartes) {
        echo "Correcto";
      } else { echo "incorecto" ;}