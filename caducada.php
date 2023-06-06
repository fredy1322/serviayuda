<?php
include('db.php');
include('ejemplo.php');
include('session.php');


$agente = $_SESSION['cedula'];
$idnuevo = '0';

$actualizar = ("UPDATE login SET idsession='$idnuevo' WHERE cedula ='$agente'");
$resultado=mysqli_query($conexion,$actualizar);

if($actualizar)
{

unset ($_SESSION['cedula']);
session_destroy();


?>

      <script>
      jQuery(function(){
          swal({type: "success",
                icon: "warning",
              title: "Sesion finalizada",
              text: "La sesion a finalizado, por favor inicie nuevamente. ",

          }).then(function() {
            window.location.href = "/Login";
          });
      });

      </script>


<?php } else { echo "error";} ?>



