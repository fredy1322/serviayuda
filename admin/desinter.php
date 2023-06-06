<?php
session_start();
date_default_timezone_set("America/Bogota");
require_once('db.php');
session_start();

$desde=$_GET['desde'];
$hasta=$_GET['hasta'];

$desde = "2023-04-17";
$hasta = "2023-04-18";

// Consulta interacciones CHAT  entre fechas para un agente 
$consulta = "SELECT SUM(chat) as 'totalchat' FROM interacciones WHERE cedula >='0'  
AND DATE( fecha ) 
BETWEEN DATE( '$desde') AND DATE(  '$hasta' )";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
$cantidadchat = $data['totalchat'];

// Consulta interacciones WHATSAPP  entre fechas para un agente 
$consulta = "SELECT SUM(whatsapp) as 'totalwhatsapp' FROM interacciones WHERE cedula >='0'
AND DATE( fecha ) 
BETWEEN DATE( '$desde') AND DATE(  '$hasta' )";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
$cantidadwhatsapp = $data['totalwhatsapp'];

// fin consulta WHATSAPP

// Consulta interacciones LLAMADAS  entre fechas para un agente 
$consulta = "SELECT SUM(llamadas) as 'totalllamadas' FROM interacciones WHERE cedula >='0'
AND DATE( fecha ) 
BETWEEN DATE( '$desde') AND DATE(  '$hasta' )";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
$cantidadllamadas = $data['totalllamadas'];


?>
<!DOCTYPE html>
<html lang="es-es">

<head>
	<meta charset="utf-8">
	<title>Exportacion</title>

	<head>

	<body>
		<?php
		// Definimos el archivo exportado
		$arquivo = 'Interacciones.xls';

		// Crear la tabla HTML

		$html .= '<table border="1">';
		$html .= '<thead>';
		$html .= '<tr>';
		$html .= '<th style="background-color:rgb(51, 153, 97); color: #fff;" rowspan="2"><b>Nombre</b></th>';
		$html .= '<th style="background-color:rgb(51, 153, 97); color: #fff;" rowspan="2"><b>Cedula</b></th>';
		$html .= '<th style="background-color:rgb(51, 153, 97); color: #fff;" rowspan="2"><b>Segmento</b></th>';

		$fecha_inicial = new DateTime($desde);
		$fecha_final = new DateTime($hasta);
		for($i = $fecha_inicial; $i <= $fecha_final; $i->modify('+1 day')){
		  $res =  $i->format("d-m-y");
			$i->format("d-m-y");
	  
			$html .= "<th style='background-color:rgb(51, 153, 97); color: #fff;' colspan='3'>".$res."</th>";
	   } 
        
		$html .= '</tr>';
		$html .= '<tr>';
		$fecha_inicial = new DateTime($desde);
		$fecha_final = new DateTime($hasta);
		for($i = $fecha_inicial; $i <= $fecha_final; $i->modify('+1 day')){
		$html .= "<th style='background-color:rgb(51, 153, 97); color: #fff;' class='colc'><p align='center'>Chat</p></th>";
		$html .="<th style='background-color:rgb(51, 153, 97); color: #fff;' class='colw'><p align='center'>Whatsapp</p></th>";
		$html .="<th style='background-color:rgb(51, 153, 97); color: #fff;' class='coll'><p align='center'>Llamadas</p></th>";
	   }
	   $html .= '</tr>';
		$html .= '</thead>';
		$html .= '</tbody>';
		$html .= '<tr>';

		$consultanombre = "SELECT DISTINCT nombre , cedula , segmento FROM interacciones  WHERE cedula > '0' AND DATE( fecha ) 
BETWEEN DATE('$desde') AND DATE('$hasta')";
$resultadonmbr = mysqli_query($conexion, $consultanombre); 
while ($columna = mysqli_fetch_array( $resultadonmbr )) { 
$cedula = $columna['cedula'];
$html .= "<td ><p align='left'>".$columna['nombre']."</td>";
$html .= "<td ><p align='left'>".$cedula."</td>";
$html .= "<td ><p align='left'>".$columna['segmento']."</td>";


$fecha_inicial = new DateTime($desde);
$fecha_final = new DateTime($hasta);
for($i = $fecha_inicial; $i <= $fecha_final; $i->modify('+1 day')){
  $res =  $i->format("Y-m-d");
    $i->format("Y-m-d");
    $consulta = "SELECT SUM(chat) as 'totalchat' FROM interacciones WHERE cedula = '$cedula' AND fecha = '$res'";
    $result = mysqli_query($conexion,$consulta);
    $data=mysqli_fetch_array($result);
    $html .= "<td><p align='center'>".$data['totalchat']."</p></td>";   

    $i->format("Y-m-d");
    $consultaw = "SELECT SUM(whatsapp) as 'totalwhatsapp' FROM interacciones WHERE cedula = '$cedula' AND fecha = '$res'";
    $resultw = mysqli_query($conexion,$consultaw);
    $dataw=mysqli_fetch_array($resultw);
    $html .= "<td><p align='center'>".$dataw['totalwhatsapp']."</p></td>";  

        $consultal = "SELECT SUM(llamadas) as 'totalllamadas' FROM interacciones  WHERE cedula = '$cedula' AND fecha = '$res'";
        $resultl = mysqli_query($conexion,$consultal);
        $datal=mysqli_fetch_array($resultl);
        $html .= "<td><p align='center'>".$datal['totalllamadas']."</p></td>";  }
        $html .= "<tr class='col2'>";
       }

		// Configuración en la cabecera
		header("Expires: Mon, 26 Jul 2227 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");
		header("Content-type: application/x-msexcel");
		header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
		header("Content-Description: PHP Generado Data");
		// Envia contenido al archivo
		echo $html;
		 ?>
  

    </thead>
    <tbody>   
    </table>





















	</body>

</html>