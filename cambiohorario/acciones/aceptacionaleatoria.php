<?php
include('db.php');
include('session.php');

$cedula = $_SESSION['cedula'];
$agente = "";


//Datos del agente que tomara la solicitud

$consultapendientesaleatorio = "SELECT * FROM horarios WHERE cedula = '$cedula'";
$resultadopendientealeatorio = mysqli_query($conexion, $consultapendientesaleatorio) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadopendientealeatorio))
      {
      $facilitador = $columna['nombre'];
      $hlunes = $columna['lunes'];
      $hmartes = $columna['martes'];
      $hmiercoles = $columna['miercoles'];
      $hjueves = $columna['jueves'];
      $hviernes = $columna['viernes'];
      $hsabado = $columna['sabado'];
      $segmento = $columna['segmento'];

      }




// Saber cual es el solicitante del dia lunes 

$consultapendientelunes = "SELECT * FROM ch1 WHERE facilitador = '$agente' AND dia = 'lunes' and ccfacilitador = '$hlunes'";
$resultadolunes = mysqli_query($conexion, $consultapendientelunes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadolunes))
      {
      $solicitantelunes = $columna['solicitante'];
      $diasolicitadolunes = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia martes 

$consultapendientemartes = "SELECT * FROM ch1 WHERE facilitador = '$agente' AND dia = 'martes' and ccfacilitador = '$hmartes'";
$resultadomartes = mysqli_query($conexion, $consultapendientemartes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadomartes))
      {
      $solicitantemartes = $columna['solicitante'];
      $diasolicitadomartes = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia miercoles 

$consultapendientemiercoles = "SELECT * FROM ch1 WHERE facilitador = '$agente' AND dia = 'miercoles' and ccfacilitador = '$hmiercoles'";
$resultadomiercoles = mysqli_query($conexion, $consultapendientemiercoles) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadomiercoles))
      {
      $solicitantemiercoles = $columna['solicitante'];
      $diasolicitadomiercoles = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia jueves 

$consultapendientejueves = "SELECT * FROM ch1 WHERE facilitador = '$agente' AND dia = 'jueves' and ccfacilitador = '$hjueves'";
$resultadojueves = mysqli_query($conexion, $consultapendientejueves) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadojueves))
      {
      $solicitantejueves = $columna['solicitante'];
      $diasolicitadojueves = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia viernes 

$consultapendienteviernes = "SELECT * FROM ch1 WHERE facilitador = '$agente' AND dia = 'viernes' and ccfacilitador = '$hviernes' ";
$resultadoviernes = mysqli_query($conexion, $consultapendienteviernes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadoviernes))
      {
      $solicitanteviernes = $columna['solicitante'];
      $diasolicitadoviernes = $columna['hsolicitante'];
      } 

      // Saber cual es el solicitante del dia sabado 
 $consultapendientesabado = "SELECT * FROM ch1 WHERE facilitador = '$agente' AND dia = 'sabado' and ccfacilitador = '$hsabado'";
      $resultadosabado = mysqli_query($conexion, $consultapendientesabado) or die("Algo ha salido mal en la consulta a la base de datos");
      
            while ($columna = mysqli_fetch_array($resultadosabado))
            {
            $solicitantesabado = $columna['solicitante'];
            $diasolicitadosabado = $columna['hsolicitante'];
            }       