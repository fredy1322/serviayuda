<?php
include('db.php');
include('ejemplo.php');
include('session.php');

$fecha = $_POST['fecha'];

$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
        $nombre                = !empty($datos[0])  ? ($datos[0]) : '';
        $cedula                = !empty($datos[1])  ? ($datos[1]) : '';
        $chat               = !empty($datos[2])  ? ($datos[2]) : '';
        $whatsapp               = !empty($datos[3])  ? ($datos[3]) : '';
        $llamadas               = !empty($datos[4])  ? ($datos[4]) : '';

        $consultaseg = "SELECT * FROM login WHERE cedula = '$cedula'";
$resultadoseg = mysqli_query($conexion, $consultaseg); 
while ($columna = mysqli_fetch_array( $resultadoseg )) { 
$segmento = $columna['segmento'];  }
    }
$insertarData = "INSERT INTO interacciones( 
    nombre,
    cedula,
    segmento,
    chat,
    whatsapp,
    llamadas,
    fecha
) VALUES(
    '$nombre',
    '$cedula',
    '$segmento',
    '$chat',
    '$whatsapp',
    '$llamadas',
    '$fecha'

)";
mysqli_query($conexion, $insertarData);

 $i++;
} 


if($i++) {



   echo  '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Interacciones almacenadas",
              text: "Los datos se han almacenado correctamente",

          }).then(function() {
            window.location.href = "/Login/admin/interacciones.php";
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
              window.location.href = "/Login/admin/interacciones.php";
          });
      });

      </script>';
}

?>
