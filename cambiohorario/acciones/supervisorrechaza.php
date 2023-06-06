<?php 
include('db.php');
include('session.php');
include('ejemplo.php');

$id = ($_GET['id']);
$res = "rechazado";
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

$superrechaza = "INSERT INTO ch3 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,segmento, dia , resultado, supervisor, idi) 
VALUES ('$solicitante','$ccsolicitante','$hsolicitante','$facilitador','$ccfacilitador','$hfacilitador','$segmento','$dia', '$res', '$nombresupervisor','$id')";
        $resultadosuperrechaza = mysqli_query ($conexion,$superrechaza);
        if($resultadosuperrechaza) {
  
          $eliminardech2 = "DELETE FROM ch2 WHERE id = '$id'";
          $resultadodeeliminarch2 = mysqli_query($conexion, $eliminardech2) or die("Algo ha salido mal en la consulta a la base de datos");
  
        }

        
 ?>
 <script>

var  datos= '<?php echo "?id="; echo $id; echo "&supervisor="; echo $nombresupervisor; ?>' ; 
</script>

<?php


         if($eliminardech2) { 
          
          echo   '<script>
          jQuery(function(){
              swal({type: "success",
                    icon: "success",
                  title: "Cambio rechazado",
                  text: "El cambio de horario fue rechazado correctamente",
          
              }).then(function() {
                window.location.href = "/Login/phpmailer/superrechaza.php"+datos;
          
              });
          });
          
          </script>';
          
        }
          
          ?>


