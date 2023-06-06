<?php
include('db.php');
include('ejemplo.php');
include('session.php');

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesactual = $meses[date('n')-1];
$mespasado = $meses[date('n')-2];

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
        $calidad               = !empty($datos[2])  ? ($datos[2]) : '';
   
if( !empty($cedula) ){
    $checkemail_duplicidad = ("SELECT cedula FROM calidad WHERE cedula ='$cedula'");
            $ca_dupli = mysqli_query($conexion, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

if ( $cant_duplicidad == 0 ) { 

$insertarData = "INSERT INTO calidad ( 
    nombre,
    cedula,
    mes,
    calidad
) VALUES(
    '$nombre',
    '$cedula',
    '$mespasado',
    '$calidad'
)";
mysqli_query($conexion, $insertarData);
        
} 
else{
    $updateData =  ("UPDATE calidad SET 
        calidad='$calidad'  
        WHERE cedula='$cedula' and mes = '$mespasado'
    ");
    $result_update = mysqli_query($conexion, $updateData);
 
    } 
  }

 $i++;
}

if($i++) {

   echo  '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Calidad actualizada",
              text: "Los datos se han actualizado correctamente",

          }).then(function() {
              window.location.href = "/Login/admin/subirexcel.php";
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
              window.location.href = "/Login/admin/subirexcel.php";
          });
      });

      </script>';
}

?>



