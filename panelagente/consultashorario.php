<?php
    
    include('session.php');
    include('db.php');
    include('ejemplo.php');


$consultahorarios = "SELECT * FROM ch3";
$resultadohorarios = mysqli_query($conexion, $consultahorarios) or die("Algo ha salido mal en la consulta a la base de datos");
    
          while ($columna = mysqli_fetch_array($resultadohorarios))
          {
          $ccsolicitante = $columna['ccsolicitante'];
          $ccfacilitador = $columna['ccfacilitador'];
          $dia = $columna['dia'];   
          }






//           ?>