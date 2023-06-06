<?php
include('db.php');
include('ejemplo.php');
include('session.php');

$mensaje = trim($_POST['mensaje']);

$actualizar = "UPDATE mensaje SET mensaje='$mensaje' WHERE ID ='1'";

$resultado=mysqli_query($conexion,$actualizar);


{

echo '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Mensaje guardado",
              text: "El mensaje fue actualizado correctamente",

          }).then(function() {
              window.location.href = "/Login/admin/mensaje.php";
          });
      });

      </script>';

}


?>




	