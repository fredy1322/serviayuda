<?php
include('db.php');
include('ejemplo.php');
include('session.php');


$tipo       = $_FILES['dataClientes']['type'];
$tamanio    = $_FILES['dataClientes']['size'];
$archivotmp = $_FILES['dataClientes']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
        $cedula                = !empty($datos[0])  ? ($datos[0]) : '';
        $nombre                = !empty($datos[1])  ? ($datos[1]) : '';
        $sabado               = !empty($datos[2])  ? ($datos[2]) : '';
        $breaksabado               = !empty($datos[3])  ? ($datos[3]) : '';

            

    $updateData =  ("UPDATE horarios SET 
        sabado='" .$sabado. "',
        breaksabado='" .$breaksabado. "'        
        WHERE cedula='".$cedula."'
    ");
    $result_update = mysqli_query($conexion, $updateData);

  }

 $i++;



if($i++) {



   echo  '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Horarios actualizados",
              text: "Los datos se han actualizado correctamente",

          }).then(function() {
            window.location.href = "/Login/phpmailer/enviarhorariossabado.php";
          });
      });

      </script>';
}

else {

 echo  '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "error",
              title: "Revise el tipo de archivo",
              text: "Recuerde que debe guardar el excel como CSV UTF-8 Delimitado por comas"

          }).then(function() {
              window.location.href = "/Login/admin/subirhorarios.php";
          });
      });

      </script>';
}
}
?>





