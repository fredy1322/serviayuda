<?php 
include('db.php');
include('session.php');
include('ejemplo.php');

$id = ($_GET['id']);
$res = "visto";

$cedulasupervisor = $_SESSION['cedula'];


// Consulta nombre el supervisor para ingresar en el historial

$sentenciasu="SELECT * FROM admi WHERE cedula = '$cedulasupervisor'";
$resultadosu = $conexion->query($sentenciasu) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadosu)) {  
        $nombresupervisor = $filas['nombre'];
      }


// Consulta solicitudes pendientes

$actualizar = ("UPDATE vacio SET estado='$res', supervisor='$nombresupervisor' WHERE id ='$id'");
$resultado=mysqli_query($conexion,$actualizar);


?>



<script>
          jQuery(function(){
              swal({type: "success",
                    icon: "success",
                  title: "Solicitud depurada",
                  text: "La solicitud ya fue gestionada",
          
              }).then(function() {
                window.location.href = "/Login/admin/vacio.php";
          
              });
          });
          
          </script>';


