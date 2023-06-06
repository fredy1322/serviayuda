<?php
session_start();
include_once('db.php');

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
		$arquivo = 'Agentes-Serviayuda.xls';

		// Crear la tabla HTML
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td><b>Nombre</b></td>';
		$html .= '<td><b>Cedula</b></td>';
		$html .= '<td><b>Segmento</b></td>';
		$html .= '<td><b>Ciudad</b></td>';
		$html .= '<td><b>Fecha de ingreso</b></td>';

        
		$html .= '</tr>';

		//Seleccionar todos los elementos de la tabla
		$result_msg_contatos = "SELECT * FROM login WHERE cedula > '0'";
		$resultado_msg_contatos = mysqli_query($conexion, $result_msg_contatos);

		while ($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)) {
			$html .= '<tr>';
			$html .= '<td>' . $row_msg_contatos["nombre"] . '</td>';
			$html .= '<td>' . $row_msg_contatos["cedula"] . '</td>';
			$html .= '<td>' . $row_msg_contatos["segmento"] . '</td>';
			$html .= '<td>' . $row_msg_contatos["ciudad"] . '</td>';
			$html .= '<td>' . $row_msg_contatos["fechaingreso"] . '</td>';
			$html .= '</tr>';;
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
		exit; ?>
	</body>

</html>