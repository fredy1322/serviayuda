<?php
include('db.php');
include('ejemplo.php');
include('session.php');
date_default_timezone_set("America/Bogota");

mysqli_query($conexion,"DELETE FROM horarios WHERE cedula >= 1");

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
        $cedula                = !empty($datos[0])  ? ($datos[0]) : '';
        $nombre                = !empty($datos[1])  ? ($datos[1]) : '';
        $campana               = !empty($datos[2])  ? ($datos[2]) : '';
        $lunes               = !empty($datos[3])  ? ($datos[3]) : '';
        $martes               = !empty($datos[4])  ? ($datos[4]) : '';
        $miercoles               = !empty($datos[5])  ? ($datos[5]) : '';
        $jueves               = !empty($datos[6])  ? ($datos[6]) : '';
        $viernes               = !empty($datos[7])  ? ($datos[7]) : '';
        $break1               = !empty($datos[8])  ? ($datos[8]) : '';
        $almuerzo               = !empty($datos[9])  ? ($datos[9]) : '';
        $break2               = !empty($datos[10])  ? ($datos[10]) : '';
        $sabado               = !empty($datos[11])  ? ($datos[11]) : '';
        $breaksabado               = !empty($datos[12])  ? ($datos[12]) : '';

        
       
if( !empty($cedula) ){
    $checkemail_duplicidad = ("SELECT cedula FROM horarios WHERE cedula='".($cedula)."' ");
            $ca_dupli = mysqli_query($conexion, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

if ( $cant_duplicidad == 0 ) { 

$insertarData = "INSERT INTO horarios( 
    cedula,
    nombre,
    campana,
    lunes,
    martes,
    miercoles,
    jueves,
    viernes,
    sabado,
    break1,
    almuerzo,
    break2,
    breaksabado
) VALUES(
    '$cedula',
    '$nombre',
    '$campana',
    '$lunes',
    '$martes',
    '$miercoles',
    '$jueves',
    '$viernes',
    '$sabado',
    '$break1',
    '$almuerzo',
    '$break2',
    '$breaksabado'

)";
mysqli_query($conexion, $insertarData);

$updateData2 =  ("UPDATE login SET 
segmento='" .$campana. "'    
WHERE cedula='".$cedula."'
");
$result_update2 = mysqli_query($conexion, $updateData2);
        
} 
else{
    $updateData =  ("UPDATE horarios SET 
        cedula='" .$cedula. "',
        nombre='" .$nombre. "',
        campana='" .$campana. "',
        lunes='" .$lunes. "',
        martes='" .$martes. "',
        miercoles='" .$miercoles. "',
        jueves='" .$jueves. "',
        viernes='" .$viernes. "',
        sabado='" .$sabado. "',
        break1='" .$break1. "',
        almuerzo='" .$almuerzo. "',
        break2='" .$break2. "',
        breaksabado='" .$breaksabado. "'        
        WHERE cedula='".$cedula."'
    ");
    $result_update = mysqli_query($conexion, $updateData);

    $updateData2 =  ("UPDATE login SET 
    segmento='" .$campana. "'    
    WHERE cedula='".$cedula."'
");
$result_update2 = mysqli_query($conexion, $updateData2);


    } 
  }

 $i++;
} 


if($i++) {

    $sentenciamigrarch3="SELECT * FROM ch3";
$resultadomigrarch3 = $conexion->query($sentenciamigrarch3) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadomigrarch3)) {  
        $idi = $filas['idi'];
        $solicitante = $filas['solicitante'];
        $ccsolicitante = $filas['ccsolicitante'];
        $hsolicitante = $filas['hsolicitante'];
        $facilitador = $filas['facilitador'];
        $ccfacilitador = $filas['ccfacilitador'];
        $hfacilitador = $filas['hfacilitador'];
        $segmento = $filas['segmento'];
        $dia = $filas['dia'];
        $resultado = $filas['resultado'];
        $supervisor =$filas['supervisor'];
        $fecha = $filas['fecha'];

      
 $insertarmartes = "INSERT INTO historicoch3 (idi, solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,segmento,dia, resultado, supervisor, fecha) 
      VALUES ('$idi','$solicitante','$ccsolicitante','$hsolicitante','$facilitador','$ccfacilitador','$hfacilitador','$segmento','$dia','$resultado','$supervisor','$fecha')";
      $resultadomartes = mysqli_query ($conexion,$insertarmartes);       }

      mysqli_query($conexion,"TRUNCATE TABLE ch3");

   echo  '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Horarios actualizados",
              text: "Los datos se han actualizado correctamente",

          }).then(function() {
            window.location.href = "/Login/phpmailer/enviarhorarios.php";
          });
      });

      </script>';
      $fechaact = date('Y-m-d H:i:s');
      $actualizar = ("UPDATE mensaje SET fecha='$fechaact' WHERE ID ='3'");
      $resultado=mysqli_query($conexion,$actualizar);

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

?>





