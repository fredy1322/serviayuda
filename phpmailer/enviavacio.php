
<?php



include('db.php');
include('ejemplo.php');
include('session.php');

$dia = date("Y-m-d");
$correo1 = "coord.bogota@servitel.co"; // coord.bogota@servitel.co
$correo2 = "jsanchez@servitel.co"; //  jsanchez@servitel.co




//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// REQUIRES NECESARIOS


require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Valiar si hay cambios de horarios pendientes por aceptar en ch2 PARA ALTO VALOR

// $dia = date("d");
$dia = date("N");
$mes = date("m");
$anio = date("Y");
$aniovencido = date('Y')-1;
$mesprox =date('m', strtotime('+1 month'));

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$mesactual = $meses[date('n')-1];
$messsiguiente = $meses[date('n')];
 
// Dia correcto para enviar correo
if($dia=="1" or $dia=="2") {
    // Consultar si el correo ya fue enviado
    $consultaemailvacio = "SELECT * FROM correovacio WHERE mes = '$mes' and anio = '$anio'";
    if ($resultaemailvacio=mysqli_query($conexion,$consultaemailvacio)) {
        $verificador=mysqli_num_rows($resultaemailvacio);
        
    }
    // Actualiza los datos para que siempre se envie el encabezado del correo
    $actualizar = ("UPDATE login SET fechaingreso='$aniovencido'.'-'.$mesactual.'-1' WHERE cedula ='CEDULA'");
    $resultado=mysqli_query($conexion,$actualizar);
    if($verificador>"0") { 
        // Correo ya fue enviado, no se envia correo
     } else 

     //   Orden de enviar correo a los coordinadores
        $mail = new PHPMailer(true);
        
        try {
            $fechainicial = $aniovencido.'-'.$mes.'-01';
            $fechafinal = $aniovencido.'-'.$mesprox.'-31';
            $sentencia="SELECT * FROM login WHERE fechaingreso between '$fechainicial' and '$fechafinal'";
            $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
            while($filas=$resultado->fetch_assoc())
            {
                $nombre =      $filas['nombre']; 
                $cedula =      $filas['cedula']; 
                $segmento =      $filas['segmento']; 
                $ciudad =      $filas['ciudad']; 
                $fechaingreso = $filas['fechaingreso'];
            
            //CONFIGURACION DEL SERVER 
            $mail->SMTPDebug = 0;                                       // DEBUG FEATURE - 0 para off, 2 para ON
            $mail->isSMTP();                                            // SE USA SMTP
            $mail->Host       = 'smtp.gmail.com';                       // CONF SMTP DEL SERVER
            $mail->SMTPAuth   = true;                                   // SMTP authentication
            $mail->Username   = 'tservitel@servitel.co';                  // SMTP CORREO
            $mail->Password   = 'kpbaubfzrgezobck';                      // SMTP CLAVE
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable implicit TLS encryption
            $mail->Port       = 25;                                     // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            // DESTINATARIOS
            $mail->setFrom('soporte@servitel.cc', 'Vacios laborales');                      // EMISOR CORREO
            $mail->addCC($correo1);                // DESTINATARIO
            $mail->addCC($correo2);                // DESTINATARIO
        
            // $mail->addAddress('fgutierrez@servitel.co');                     // DESTINATARIO 2
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('aebrochero@utp.edu.co');                      // CON COPIA PARA
            // $mail->addBCC('fredyguti95@gmail.com');                     // CON COPIA OCULTA PARA

            // Consulta segun las fechas

       
            $mail->isHTML(true);  //Set email format to HTML4
            $mail->Subject = $asunto = 'Vacios laborales mes ' .$mesactual. '-' . $messsiguiente;
            $mail->Body  .= "<tr><td style='border:  0.5px solid black;'>".$filas['nombre']."</td><td style='border:  0.5px solid black;'>".$filas['cedula']."<td style='border:  0.5px solid black;'>".$filas['segmento']."</td><td style='border:  0.5px solid black;'>".$filas['ciudad']."</td><td style='border:  0.5px solid black;'>".$filas['fechaingreso']."</td>";

        
        }
        $mail->send();                                              // ENVIA EL CORREO
        
        } catch (Exception $e) {
        echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
        }
        
        //Inserta la fecha en corte3pm para no enviar otra vez el correo
        
        $insertarfecha="INSERT INTO correovacio (mes , anio) values ('$mes','$anio')";
        $resultado = $conexion->query($insertarfecha);        
        }  
?>