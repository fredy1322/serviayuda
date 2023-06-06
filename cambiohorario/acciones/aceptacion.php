<?php
include('db.php');
include('session.php');

$agente = $_SESSION['cedula'];

// Saber cual es el solicitante del dia lunes 

$consultapendientelunes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'lunes'";
$resultadolunes = mysqli_query($conexion, $consultapendientelunes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadolunes))
      {
      $solicitantelunes = $columna['solicitante'];
      $diasolicitadolunes = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia martes 

$consultapendientemartes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'martes'";
$resultadomartes = mysqli_query($conexion, $consultapendientemartes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadomartes))
      {
      $solicitantemartes = $columna['solicitante'];
      $diasolicitadomartes = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia miercoles 

$consultapendientemiercoles = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'miercoles'";
$resultadomiercoles = mysqli_query($conexion, $consultapendientemiercoles) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadomiercoles))
      {
      $solicitantemiercoles = $columna['solicitante'];
      $diasolicitadomiercoles = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia jueves 

$consultapendientejueves = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'jueves'";
$resultadojueves = mysqli_query($conexion, $consultapendientejueves) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadojueves))
      {
      $solicitantejueves = $columna['solicitante'];
      $diasolicitadojueves = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia viernes 

$consultapendienteviernes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'viernes'";
$resultadoviernes = mysqli_query($conexion, $consultapendienteviernes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadoviernes))
      {
      $solicitanteviernes = $columna['solicitante'];
      $diasolicitadoviernes = $columna['hsolicitante'];
      } 

// Saber cual es el solicitante del dia sabado 

$consultapendientesabado = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'sabado'";
$resultadosabado = mysqli_query($conexion, $consultapendientesabado) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadosabado))
      {
      $solicitantesabado = $columna['solicitante'];
      $diasolicitadosabado = $columna['hsolicitante'];
      }       