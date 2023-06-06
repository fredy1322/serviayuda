<?php 

include('db.php');
include('ejemplo.php');

$cc=($_POST['cc']);
$fecha=($_POST['fecha']);



//Consulta el nombre para ingresar a la tabla vacio
$consulta = "SELECT * FROM login WHERE cedula = '$cc'";                                                          
$ejecutar_consulta = $conexion->query($consulta);
 $nomx = array();
   while ($registro = $ejecutar_consulta->fetch_assoc())                                    
   {
     $nombre = $registro["nombre"];
     $fechaingreso = $registro["fechaingreso"];
   }

$crearvacio = "INSERT INTO vacio (nombre,cedula,fecha,estado,fechaingreso) VALUES ('$nombre','$cc','$fecha','activo','$fechaingreso')";
$crea = mysqli_query($conexion,$crearvacio);

if($crea) { 
  echo  '<script>
       jQuery(function(){
           swal({type: "success",
                 icon: "success",
               title: "Solicitud enviada",
               text: "La solicitud fue enviada correctamente, el supervisor le dará mas información al respecto",
 
           }).then(function() {
               window.close();
           });
       });
 
       </script>';
    };

?>