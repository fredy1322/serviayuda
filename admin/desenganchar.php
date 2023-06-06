<?php
include('db.php');
include('ejemplo.php');

       $idnuevo = '0';
       $cedula = trim($_POST['cedula']);

$actualizar = ("UPDATE login SET idsession='$idnuevo' WHERE cedula ='$cedula'"); 
$resultado=mysqli_query($conexion,$actualizar);

?>

      <script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Usuario habilitado",
              text: "La sesion del usuario a sido reiniciada, ahora ya puede iniciar sesion correctamente.",

          }).then(function() {
              window.location.href = "/Login/admin/agentes.php";
          });
      });

      </script>
