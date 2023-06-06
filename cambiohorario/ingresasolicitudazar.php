<?php
include('db.php');
include('session.php');
include('ejemplo.php');

$ccsolicitante=$_POST['ccsolicitante'];

$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabado=$_POST['sabado'];

//Consulta horarios del solicitante 

$consultahorariossolicitante = "SELECT * FROM horarios WHERE cedula = '$ccsolicitante'";
$resultadosolicitante = mysqli_query($conexion, $consultahorariossolicitante) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadosolicitante ))
      {
      $snombre = $columna['nombre'];
      $slunes = $columna['lunes'];
      $smartes = $columna['martes'];
      $smiercoles = $columna['miercoles'];
      $sjueves = $columna['jueves'];
      $sviernes = $columna['viernes'];
      $ssabado = $columna['sabado'];
      } 

// Consulta horario del facilitador y lo ingresa en la tabla ch1 en caso de tener datos

// lunes
if(empty($lunes))  { } else {

      $consultalunes= "SELECT * FROM horarios WHERE cedula = '$lunes'";
      $resultadolunes = mysqli_query($conexion, $consultalunes) or die("Algo ha salido mal en la consulta a la base de datos");
           while ($columna = mysqli_fetch_array( $resultadolunes ))
           {
           $nombrefacilitadorlunes = $columna['nombre'];
           $hfacilitadorlunes = $columna['lunes'];
           } 
     $insertarlunes = "INSERT INTO ch1 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador, dia) 
                        VALUES ('$snombre','$ccsolicitante','$slunes','$nombrefacilitadorlunes','$lunes','$hfacilitadorlunes','lunes')";
                        $resultadolunes = mysqli_query ($conexion,$insertarlunes);
     }

// martes
if(empty($martes))  { } else {

      $consultamartes= "SELECT * FROM horarios WHERE cedula = '$martes'";
      $resultadomartes = mysqli_query($conexion, $consultamartes) or die("Algo ha salido mal en la consulta a la base de datos");
           while ($columna = mysqli_fetch_array( $resultadomartes ))
           {
           $nombrefacilitadormartes = $columna['nombre'];
           $hfacilitadormartes = $columna['martes'];
           } 
     $insertarmartes = "INSERT INTO ch1 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,dia) 
                        VALUES ('$snombre','$ccsolicitante','$smartes','$nombrefacilitadormartes','$martes','$hfacilitadormartes','martes')";
                        $resultadomartes = mysqli_query ($conexion,$insertarmartes);
     }
     
// miercoles
if(empty($miercoles))  { } else {

      $consultamiercoles= "SELECT * FROM horarios WHERE cedula = '$miercoles'";
      $resultadomiercoles = mysqli_query($conexion, $consultamiercoles) or die("Algo ha salido mal en la consulta a la base de datos");
           while ($columna = mysqli_fetch_array( $resultadomiercoles ))
           {
           $nombrefacilitadormiercoles = $columna['nombre'];
           $hfacilitadormiercoles = $columna['miercoles'];
           } 
     $insertarmiercoles = "INSERT INTO ch1 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,dia) 
                        VALUES ('$snombre','$ccsolicitante','$smiercoles','$nombrefacilitadormiercoles','$miercoles','$hfacilitadormiercoles','miercoles')";
                        $resultadomiercoles = mysqli_query ($conexion,$insertarmiercoles);
     }

// Jueves
if(empty($jueves))  { } else {

      $consultajueves= "SELECT * FROM horarios WHERE cedula = '$jueves'";
      $resultadojueves = mysqli_query($conexion, $consultajueves) or die("Algo ha salido mal en la consulta a la base de datos");
           while ($columna2 = mysqli_fetch_array( $resultadojueves ))
           {
           $nombrefacilitadorjueves = $columna2['nombre'];
           $hfacilitadorjueves = $columna2['jueves'];
           } 
     $insertarjueves = "INSERT INTO ch1 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,dia) 
                        VALUES ('$snombre','$ccsolicitante','$sjueves','$nombrefacilitadorjueves','$jueves','$hfacilitadorjueves','jueves')";
                        $resultadojuevesinsert = mysqli_query ($conexion,$insertarjueves);
     }     
          
     
// viernes
if(empty($viernes))  { } else {

      $consultaviernes= "SELECT * FROM horarios WHERE cedula = '$viernes'";
      $resultadoviernes = mysqli_query($conexion, $consultaviernes) or die("Algo ha salido mal en la consulta a la base de datos");
           while ($columna = mysqli_fetch_array( $resultadoviernes ))
           {
           $nombrefacilitadorviernes = $columna['nombre'];
           $hfacilitadorviernes = $columna['viernes'];
           } 
     $insertarviernes = "INSERT INTO ch1 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,dia) 
                        VALUES ('$snombre','$ccsolicitante','$sviernes','$nombrefacilitadorviernes','$viernes','$hfacilitadorviernes','viernes')";
                        $resultadoviernes = mysqli_query ($conexion,$insertarviernes);
     }
     
     
// sabado
if(empty($sabado))  { } else {

      $consultasabado= "SELECT * FROM horarios WHERE cedula = '$sabado'";
      $resultadosabado = mysqli_query($conexion, $consultasabado) or die("Algo ha salido mal en la consulta a la base de datos");
           while ($columna2 = mysqli_fetch_array( $resultadosabado ))
           {
           $nombrefacilitadorsabado = $columna2['nombre'];
           $hfacilitadorsabado = $columna2['sabado'];
           } 
     $insertarsabado = "INSERT INTO ch1 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador,dia) 
                        VALUES ('$snombre','$ccsolicitante','$ssabado','$nombrefacilitadorsabado','$sabado','$hfacilitadorsabado','sabado')";
                        $resultadosabadoinsert = mysqli_query ($conexion,$insertarsabado);
  

                  }
?>

<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
           title: "Solicitud enviada con exito",
           text: "Su solicitud ha sido enviada con exito, ahora el agente deberá ingresar y aceptar el cambio de horario.",
 
          }).then(function() {
            window.close();
          });
      });
 
       </script>
