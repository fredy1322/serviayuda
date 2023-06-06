<?php
include('db.php');
include('ejemplo.php');
include('session.php');

$agente = $_SESSION['cedula'];
$contrasenanueva = trim($_POST['contrasenanueva']);
$actualizar = ("UPDATE login SET contrasena='$contrasenanueva' WHERE cedula ='$agente'");
$resultado=mysqli_query($conexion,$actualizar);

if($actualizar)

{

$idnuevo = '0';

$actualizar = ("UPDATE login SET idsession='$idnuevo' WHERE cedula ='$agente'");
$resultado=mysqli_query($conexion,$actualizar);

unset ($_SESSION['cedula']);
session_destroy();
}

?>


      <script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Contraseña modificada",
              text: "La contraseña a sido modificada satisfactoriamente, por favor inicie sesion con la contraseña nueva. ",

          }).then(function() {
              window.location.href = "/Login";
          });
      });

      </script>



