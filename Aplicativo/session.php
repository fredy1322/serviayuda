<?php

include('ejemplo.php');

session_start();

if (isset($_SESSION['cedula']) && $_SESSION['cedula'] == true) {

} else {
   
 header('Location: /Login');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}

if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 20)) {

    session_unset(); 
    session_destroy(); 
   echo  '<script>
     jQuery(function(){
         swal({type: "success",
               icon: "warning",
          title: "Sesion caducada",
          text: "Por favor inicie sesion nuevamente",

         }).then(function() {
           window.location.href = "/Login";
         });
     });

      </script>';
}

$_SESSION['start'] = time();

?>