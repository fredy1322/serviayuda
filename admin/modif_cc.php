<?php
include('db.php');
include('ejemplo.php');
include('session.php');

$admin = $_SESSION['cedula'];
$contrasenanueva = trim($_POST['contrasenanueva']);
$contrasenanueva = trim($_POST['contrasenanueva']);
$actualizar = ("UPDATE admi SET contrasena='$contrasenanueva' WHERE cedula ='$admin'");
$resultado=mysqli_query($conexion,$actualizar);

$idnuevo = '0';

$actualizar = ("UPDATE admi SET idsession='$idnuevo' WHERE cedula ='$admin'");
$resultado=mysqli_query($conexion,$actualizar);

unset ($_SESSION['cedula']);
session_destroy();

 if($resultado) {


     
echo '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Contraseña modificada",
              text: "La contraseña a sido modificada satisfactoriamente ",

          }).then(function() {
              window.location.href = "/Login";
          });
      });

      </script>';
}


?>
