<?php

include('db.php');
include('ejemplo.php');
include('session.php');

	   $cedula = trim($_POST['cedula']);
	   $nueva = 'Servitel123*';

$actualizar = ("UPDATE login SET contrasena= '$nueva' WHERE cedula ='$cedula'");
$resultado=mysqli_query($conexion,$actualizar);

?>

      <script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Contraseña reseteada",
              text: "La nueva contraseña es: Servitel123* ",

          }).then(function() {
              window.location.href = "/Login/admin/agentes.php";
          });
      });

      </script>
