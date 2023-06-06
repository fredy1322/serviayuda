<?php
include('db.php');
include('session.php');

$agente = $_SESSION['cedula'];
$consultahorarios = "SELECT * FROM horarios WHERE cedula = '$agente'";
$resultadohorarios = mysqli_query($conexion, $consultahorarios) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadohorarios )){
      $break1 = $columna['break1'];
      $almuerzo = $columna['almuerzo'];
      $break2 = $columna['break2'];
      $nombre = $columna['nombre'];
      $cedula = $columna['cedula'];
      } 
      
// Numero del dia de hoy segun esta semana 
$dia = date("N");
date_default_timezone_set("America/Bogota");
$horaactual = date("G");

//Lunes
if($dia=="1") {
  $flunes = date('d-m-Y',strtotime($fecha_actual.'+ 0 days')); 
  $fmartes = date('d-m-Y',strtotime($fecha_actual.'+ 1 days')); 
  $fmiercoles = date('d-m-Y',strtotime($fecha_actual.'+ 2 days')); 
  $fjueves = date('d-m-Y',strtotime($fecha_actual.'+ 3 days')); 
  $fviernes = date('d-m-Y',strtotime($fecha_actual.'+ 4 days')); 
  $fsabado = date('d-m-Y',strtotime($fecha_actual.'+ 5 days')); 
}
//Martes
if($dia=="2") {
  $flunes = date('d-m-Y',strtotime($fecha_actual.'- 1 days')); 
  $fmartes = date('d-m-Y',strtotime($fecha_actual.'+ 0 days')); 
  $fmiercoles = date('d-m-Y',strtotime($fecha_actual.'+ 1 days')); 
  $fjueves = date('d-m-Y',strtotime($fecha_actual.'+ 2 days')); 
  $fviernes = date('d-m-Y',strtotime($fecha_actual.'+ 3 days')); 
  $fsabado = date('d-m-Y',strtotime($fecha_actual.'+ 4 days')); 
}
//Miercoles
if($dia=="3") {
  $flunes = date('d-m-Y',strtotime($fecha_actual.'- 2 days')); 
  $fmartes = date('d-m-Y',strtotime($fecha_actual.'- 1 days')); 
  $fmiercoles = date('d-m-Y',strtotime($fecha_actual.'+ 0 days')); 
  $fjueves = date('d-m-Y',strtotime($fecha_actual.'+ 1 days')); 
  $fviernes = date('d-m-Y',strtotime($fecha_actual.'+ 2 days')); 
  $fsabado = date('d-m-Y',strtotime($fecha_actual.'+ 3 days')); 
}
//Jueves
if($dia=="4") {
  $flunes = date('d-m-Y',strtotime($fecha_actual.'- 3 days')); 
  $fmartes = date('d-m-Y',strtotime($fecha_actual.'- 2 days')); 
  $fmiercoles = date('d-m-Y',strtotime($fecha_actual.'- 1 days')); 
  $fjueves = date('d-m-Y',strtotime($fecha_actual.'+ 0 days')); 
  $fviernes = date('d-m-Y',strtotime($fecha_actual.'+ 1 days')); 
  $fsabado = date('d-m-Y',strtotime($fecha_actual.'+ 2 days')); 
}
//Viernes
if($dia=="5" AND $horaactual<"14") {
  $flunes = date('d-m-Y',strtotime($fecha_actual.' - 4 days')); 
  $fmartes = date('d-m-Y',strtotime($fecha_actual.'- 3 days')); 
  $fmiercoles = date('d-m-Y',strtotime($fecha_actual.'- 2 days')); 
  $fjueves = date('d-m-Y',strtotime($fecha_actual.'- 1 days')); 
  $fviernes = date('d-m-Y',strtotime($fecha_actual.' + 0 days')); 
  $fsabado = date('d-m-Y',strtotime($fecha_actual.'+ 1 days')); 
} else { 
if($dia=="5") {
  $flunes = date('d-m-Y',strtotime($fecha_actual.' + 3 days')); 
  $fmartes = date('d-m-Y',strtotime($fecha_actual.'+ 4 days')); 
  $fmiercoles = date('d-m-Y',strtotime($fecha_actual.'+ 5 days')); 
  $fjueves = date('d-m-Y',strtotime($fecha_actual.'+ 6 days')); 
  $fviernes = date('d-m-Y',strtotime($fecha_actual.' + 7 days')); 
  $fsabado = date('d-m-Y',strtotime($fecha_actual.'+ 1 days')); 
} }
//Sabado
if($dia=="6") {
  $flunes = date('d-m-Y',strtotime($fecha_actual.' + 2 days')); 
  $fmartes = date('d-m-Y',strtotime($fecha_actual.'+ 3 days')); 
  $fmiercoles = date('d-m-Y',strtotime($fecha_actual.'+ 4 days')); 
  $fjueves = date('d-m-Y',strtotime($fecha_actual.'+ 5 days')); 
  $fviernes = date('d-m-Y',strtotime($fecha_actual.' + 6 days')); 
  $fsabado = date('d-m-Y',strtotime($fecha_actual.'+ 7 days')); 
}
if (($dia=="5") && ($horaactual>="14")) { 
    $habilitado =   "enabled";  }


// Validar si el agente ya tiene una solicitud pendiente en tabla ch1

//Consulta lunes en tabla ch1
$consutapendientech1lunes = "SELECT * FROM ch1 WHERE ccsolicitante = '$agente' AND dia = 'lunes'";
$resultadoch1lunes = mysqli_query($conexion, $consutapendientech1lunes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch1lunes )){
      $ccsolicitantech1lunes = $columna['ccsolicitante'];
} 

//Consulta martes en tabla ch1
$consutapendientech1martes = "SELECT * FROM ch1 WHERE ccsolicitante = '$agente' AND dia = 'martes'";
$resultadoch1martes = mysqli_query($conexion, $consutapendientech1martes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch1martes )){
      $ccsolicitantech1martes = $columna['ccsolicitante'];
} 

//Consulta miercoles en tabla ch1
$consutapendientech1miercoles = "SELECT * FROM ch1 WHERE ccsolicitante = '$agente' AND dia = 'miercoles'";
$resultadoch1miercoles = mysqli_query($conexion, $consutapendientech1miercoles) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch1miercoles )){
      $ccsolicitantech1miercoles = $columna['ccsolicitante'];
} 

//Consulta jueves en tabla ch1
$consutapendientech1jueves = "SELECT * FROM ch1 WHERE ccsolicitante = '$agente' AND dia = 'jueves'";
$resultadoch1jueves = mysqli_query($conexion, $consutapendientech1jueves) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch1jueves )){
      $ccsolicitantech1jueves = $columna['ccsolicitante'];
} 

//Consulta viernes en tabla ch1
$consutapendientech1viernes = "SELECT * FROM ch1 WHERE ccsolicitante = '$agente' AND dia = 'viernes'";
$resultadoch1viernes = mysqli_query($conexion, $consutapendientech1viernes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch1viernes )){
      $ccsolicitantech1viernes = $columna['ccsolicitante'];
} 


//Consulta sabado en tabla ch1
$consutapendientech1sabado = "SELECT * FROM ch1 WHERE ccsolicitante = '$agente' AND dia = 'sabado'";
$resultadoch1sabado = mysqli_query($conexion, $consutapendientech1sabado) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch1sabado )){
      $ccsolicitantech1sabado = $columna['ccsolicitante'];
} 

// Validar si el agente ya tiene una solicitud pendiente en tabla ch2

//Consulta lunes en tabla ch2
$consutapendientech2lunes = "SELECT * FROM ch2 WHERE ccsolicitante = '$agente' AND dia = 'lunes'";
$resultadoch2lunes = mysqli_query($conexion, $consutapendientech2lunes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch2lunes )){
      $ccsolicitantech2lunes = $columna['ccsolicitante'];
} 

//Consulta martes en tabla ch2
$consutapendientech2martes = "SELECT * FROM ch2 WHERE ccsolicitante = '$agente' AND dia = 'martes'";
$resultadoch2martes = mysqli_query($conexion, $consutapendientech2martes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch2martes )){
      $ccsolicitantech2martes = $columna['ccsolicitante'];
} 

//Consulta miercoles en tabla ch2
$consutapendientech2miercoles = "SELECT * FROM ch2 WHERE ccsolicitante = '$agente' AND dia = 'miercoles'";
$resultadoch2miercoles = mysqli_query($conexion, $consutapendientech2miercoles) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch2miercoles )){
      $ccsolicitantech2miercoles = $columna['ccsolicitante'];
} 

//Consulta jueves en tabla ch2
$consutapendientech2jueves = "SELECT * FROM ch2 WHERE ccsolicitante = '$agente' AND dia = 'jueves'";
$resultadoch2jueves = mysqli_query($conexion, $consutapendientech2jueves) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch2jueves )){
      $ccsolicitantech2jueves = $columna['ccsolicitante'];
} 

//Consulta viernes en tabla ch2
$consutapendientech2viernes = "SELECT * FROM ch2 WHERE ccsolicitante = '$agente' AND dia = 'viernes'";
$resultadoch2viernes = mysqli_query($conexion, $consutapendientech2viernes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch2viernes )){
      $ccsolicitantech2viernes = $columna['ccsolicitante'];
} 


//Consulta sabado en tabla ch2
$consutapendientech2sabado = "SELECT * FROM ch2 WHERE ccsolicitante = '$agente' AND dia = 'sabado'";
$resultadoch2sabado = mysqli_query($conexion, $consutapendientech2sabado) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadoch2sabado )){
      $ccsolicitantech2sabado = $columna['ccsolicitante'];
} 


////////// Validaciones para el facilitador que impide que el facilitador cambie el horario si alguien le envio solicitud

// Validar si el agente ya tiene una solicitud pendiente en tabla ch1

//Consulta lunes en tabla ch1
$consutapendientedosch1lunes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'lunes'";
$resultadodosch1lunes = mysqli_query($conexion, $consutapendientedosch1lunes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch1lunes )){
      $ccfacilitadorch1lunes = $columna['ccfacilitador'];
} 

//Consulta martes en tabla ch1
$consutapendientedosch1martes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'martes'";
$resultadodosch1martes = mysqli_query($conexion, $consutapendientedosch1martes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch1martes )){
      $ccfacilitadorch1martes = $columna['ccfacilitador'];
} 

//Consulta miercoles en tabla ch1
$consutapendientedosch1miercoles = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'miercoles'";
$resultadodosch1miercoles = mysqli_query($conexion, $consutapendientedosch1miercoles) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch1miercoles )){
      $ccfacilitadorch1miercoles = $columna['ccfacilitador'];
} 

//Consulta jueves en tabla ch1
$consutapendientedosch1jueves = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'jueves'";
$resultadodosch1jueves = mysqli_query($conexion, $consutapendientedosch1jueves) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch1jueves )){
      $ccfacilitadorch1jueves = $columna['ccfacilitador'];
} 

//Consulta viernes en tabla ch1
$consutapendientedosch1viernes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'viernes'";
$resultadodosch1viernes = mysqli_query($conexion, $consutapendientedosch1viernes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch1viernes )){
      $ccfacilitadorch1viernes = $columna['ccfacilitador'];
} 


//Consulta sabado en tabla ch1
$consutapendientedosch1sabado = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'sabado'";
$resultadodosch1sabado = mysqli_query($conexion, $consutapendientedosch1sabado) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch1sabado )){
      $ccfacilitadorch1sabado = $columna['ccfacilitador'];
} 

// Validar si el agente ya tiene una solicitud pendiente en tabla ch2

//Consulta lunes en tabla ch2
$consutapendientedosch2lunes = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'lunes'";
$resultadodosch2lunes = mysqli_query($conexion, $consutapendientedosch2lunes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch2lunes )){
      $ccfacilitadorch2lunes = $columna['ccfacilitador'];
} 

//Consulta martes en tabla ch2
$consutapendientedosch2martes = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'martes'";
$resultadodosch2martes = mysqli_query($conexion, $consutapendientedosch2martes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch2martes )){
      $ccfacilitadorch2martes = $columna['ccfacilitador'];
} 

//Consulta miercoles en tabla ch2
$consutapendientedosch2miercoles = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'miercoles'";
$resultadodosch2miercoles = mysqli_query($conexion, $consutapendientedosch2miercoles) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch2miercoles )){
      $ccfacilitadorch2miercoles = $columna['ccfacilitador'];
} 

//Consulta jueves en tabla ch2
$consutapendientedosch2jueves = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'jueves'";
$resultadodosch2jueves = mysqli_query($conexion, $consutapendientedosch2jueves) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch2jueves )){
      $ccfacilitadorch2jueves = $columna['ccfacilitador'];
} 

//Consulta viernes en tabla ch2
$consutapendientedosch2viernes = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'viernes'";
$resultadodosch2viernes = mysqli_query($conexion, $consutapendientedosch2viernes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch2viernes )){
      $ccfacilitadorch2viernes = $columna['ccfacilitador'];
} 


//Consulta sabado en tabla ch2
$consutapendientedosch2sabado = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'sabado'";
$resultadodosch2sabado = mysqli_query($conexion, $consutapendientedosch2sabado) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadodosch2sabado )){
      $ccfacilitadorch2sabado = $columna['ccfacilitador'];
} 


