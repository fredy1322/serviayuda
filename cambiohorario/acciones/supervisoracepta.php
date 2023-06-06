<?php 
include('db.php');
include('session.php');
include('ejemplo.php');

$id = ($_GET['id']);
$res = "aprobado";

$cedulasupervisor = $_SESSION['cedula'];


// Consulta nombre el supervisor para ingresar en el historial

$sentenciasu="SELECT * FROM admi WHERE cedula = '$cedulasupervisor'";
$resultadosu = $conexion->query($sentenciasu) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadosu)) {  
        $nombresupervisor = $filas['nombre'];
      }


// Consulta solicitudes pendientes

$sentencia="SELECT * FROM ch2 WHERE id = '$id'";
$resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultado)) {  
        $solicitante = $filas['solicitante'];
        $ccsolicitante = $filas['ccsolicitante'];
        $hsolicitante = $filas['hsolicitante'];
        $facilitador = $filas['facilitador'];
        $ccfacilitador = $filas['ccfacilitador'];
        $hfacilitador = $filas['hfacilitador'];
        $segmento = $filas['segmento'];
        $dia = $filas['dia'];
      }

// Consulta break antiguo del solicitante

$sentenciabs="SELECT * FROM horarios WHERE cedula = '$ccsolicitante'";
$resultadobs = $conexion->query($sentenciabs) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadobs)) {  
        $break1s = $filas['break1'];
        $almuerzos = $filas['almuerzo'];
        $break2s = $filas['break2'];
      }

      
// Consulta break antiguo del facilitador

$sentenciabs="SELECT * FROM horarios WHERE cedula = '$ccfacilitador'";
$resultadobs = $conexion->query($sentenciabs) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadobs)) {  
        $break1f = $filas['break1'];
        $almuerzof = $filas['almuerzo'];
        $break2f = $filas['break2'];
      }


$superacepta = "INSERT INTO ch3 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,segmento, dia , resultado, supervisor, idi) 
        VALUES ('$solicitante','$ccsolicitante','$hsolicitante','$facilitador','$ccfacilitador','$hfacilitador','$segmento','$dia', '$res', '$nombresupervisor','$id')";
        $resultadosuperacepta = mysqli_query ($conexion,$superacepta);
        if($resultadosuperacepta) {
  
          $eliminardech2 = "DELETE FROM ch2 WHERE id = '$id'";
          $resultadodeeliminarch2 = mysqli_query($conexion, $eliminardech2) or die("Algo ha salido mal en la consulta a la base de datos");
  
        }




//Cambio de horario en la tabla de horarios

$cambiodehorariouno = ("UPDATE horarios set $dia = '$hfacilitador' , break1 = '$break1f' , almuerzo = '$almuerzof' , break2 = '$break2f' WHERE cedula = '$ccsolicitante'");
$resultadouno=mysqli_query($conexion,$cambiodehorariouno);

$cambiodehorariodos = ("UPDATE horarios set $dia = '$hsolicitante' , break1 = '$break1s' , almuerzo = '$almuerzos' , break2 = '$break2s' WHERE cedula = '$ccfacilitador'");
$resultadodos=mysqli_query($conexion,$cambiodehorariodos);
?>
<script>
var  datos= '<?php echo "?id="; echo $id; echo "&supervisor="; echo $nombresupervisor; ?>' ; 
</script>
<?php


         if($resultadodos) { 
          
          echo   '<script>
          jQuery(function(){
              swal({type: "success",
                    icon: "success",
                  title: "Cambio aceptado",
                  text: "El cambio de horario se generó correctamente",
          
              }).then(function() {
                window.location.href = "/Login/phpmailer/superacepta.php"+datos;
          
              });
          });
          
          </script>';
          
        }
          
          ?>

