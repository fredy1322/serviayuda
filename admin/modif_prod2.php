<?php
include('db.php');
include('ejemplo.php');
include('session.php');

	$ID = trim($_POST['ID']);
	$nombre = trim($_POST['nombre']);
	$cedula = trim($_POST['cedula']);
    $fechaingreso = trim($_POST['fechaingreso']);
    $segmento = trim($_POST['segmento']);
    $ciudad = trim($_POST['ciudad']);



$actualizar = ("UPDATE login SET nombre='$nombre', cedula='$cedula' , fechaingreso='$fechaingreso' , segmento='$segmento' , ciudad='$ciudad' WHERE ID ='$ID'");
$resultado=mysqli_query($conexion,$actualizar);

$actualizarenhorarios = ("UPDATE horarios SET campana='$segmento' WHERE cedula ='$cedula'");
$resultado2=mysqli_query($conexion,$actualizarenhorarios);

 if($resultado) {
echo '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Agente actualizado",
              text: "Se han guardado los datos correctamente",

          }).then(function() {
              window.location.href = "/Login/admin/agentes.php";
          });
      });

      </script>';

}


?>
