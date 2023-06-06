<?php 
include('session.php');
$idsession = session_id();
$agente = $_SESSION['cedula'];

// Consulta registros al azar ch1 para esta sesion
$consultatablach1azar = "SELECT * FROM horarios WHERE cedula = '$agente'";
$resultadoazarch1 = mysqli_query($conexion, $consultatablach1azar) or die("Algo ha salido mal en la consulta a la base de datos");
while ($columna = mysqli_fetch_array($resultadoazarch1))
{
$lunes = $columna['lunes'];
$martes = $columna['martes'];
$miercoles = $columna['miercoles'];
$jueves = $columna['jueves'];
$viernes = $columna['viernes'];
$sabado = $columna['sabado'];
$segmento = $columna['campana'];
}


// Consulta registros al azar ch1 del dia lunes
$consultatablach1azarlunes = "SELECT * FROM ch1 WHERE facilitador = '' and segmento = '$segmento' and ccfacilitador = '$lunes' and dia = 'lunes'";
$resultadoazarch1lunes = mysqli_query($conexion, $consultatablach1azarlunes) or die("Algo ha salido mal en la consulta a la base de datos");
while($rows=mysqli_fetch_array($resultadoazarch1lunes)){
  $razlunes =  $rows[1]."<br>";


}

// Consulta registros al azar ch1 del dia martes
$consultatablach1azarmartes = "SELECT * FROM ch1 WHERE facilitador = '' and segmento = '$segmento' and ccfacilitador = '$martes' and dia = 'martes'";
$resultadoazarch1martes = mysqli_query($conexion, $consultatablach1azarmartes) or die("Algo ha salido mal en la consulta a la base de datos");
while($rows=mysqli_fetch_array($resultadoazarch1martes)){
  $razmartes =  $rows[1]."<br>";


}

// Consulta registros al azar ch1 del dia miercoles
$consultatablach1azarmiercoles = "SELECT * FROM ch1 WHERE facilitador = '' and segmento = '$segmento' and ccfacilitador = '$miercoles' and dia = 'miercoles'";
$resultadoazarch1miercoles = mysqli_query($conexion, $consultatablach1azarmiercoles) or die("Algo ha salido mal en la consulta a la base de datos");
while($rows=mysqli_fetch_array($resultadoazarch1miercoles)){
  $razmiercoles =  $rows[1]."<br>";


}

// Consulta registros al azar ch1 del dia jueves
$consultatablach1azarjueves = "SELECT * FROM ch1 WHERE facilitador = '' and segmento = '$segmento' and ccfacilitador = '$jueves' and dia = 'jueves'";
$resultadoazarch1jueves = mysqli_query($conexion, $consultatablach1azarjueves) or die("Algo ha salido mal en la consulta a la base de datos");
while($rows=mysqli_fetch_array($resultadoazarch1jueves)){
  $razjueves =  $rows[1]."<br>";


}

// Consulta registros al azar ch1 del dia viernes
$consultatablach1azarviernes = "SELECT * FROM ch1 WHERE facilitador = '' and segmento = '$segmento' and ccfacilitador = '$viernes' and dia = 'viernes'";
$resultadoazarch1viernes = mysqli_query($conexion, $consultatablach1azarviernes) or die("Algo ha salido mal en la consulta a la base de datos");
while($rows=mysqli_fetch_array($resultadoazarch1viernes)){
  $razviernes =  $rows[1]."<br>";


}


// Consulta registros al azar ch1 del dia sabado
$consultatablach1azarsabado = "SELECT * FROM ch1 WHERE facilitador = '' and segmento = '$segmento' and ccfacilitador = '$sabado' and dia = 'sabado'";
$resultadoazarch1sabado = mysqli_query($conexion, $consultatablach1azarsabado) or die("Algo ha salido mal en la consulta a la base de datos");
while($rows=mysqli_fetch_array($resultadoazarch1sabado)){
  $razsabado =  $rows[1]."<br>";


}






