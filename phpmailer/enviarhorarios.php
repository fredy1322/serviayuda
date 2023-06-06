<meta charset="UTF-8">
<?php
include('db.php');
include('ejemplo.php');
include('session.php');


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// REQUIRES NECESARIOS

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


//Llama al nombre de la tabla y la persona que subio la informacion.


date_default_timezone_set('America/Bogota');
$fechaactual = date('d/m/y h:i:s');
$dia = date("N");

if($dia=="1") {
  $del = date('d-m-Y',strtotime($fecha_actual.'+ 7 days'));
  $hasta = date('d-m-Y',strtotime($fecha_actual.'+ 11 days'));
}

if($dia=="2") {
  $del = date('d-m-Y',strtotime($fecha_actual.'+ 6 days'));
  $hasta = date('d-m-Y',strtotime($fecha_actual.'+ 10 days'));
}

if($dia=="3") {
  $del = date('d-m-Y',strtotime($fecha_actual.'+ 5 days'));
  $hasta = date('d-m-Y',strtotime($fecha_actual.'+ 9 days'));
}

if($dia=="4") {
  $del = date('d-m-Y',strtotime($fecha_actual.'+ 4 days'));
  $hasta = date('d-m-Y',strtotime($fecha_actual.'+ 8 days'));
}

if($dia=="5") {
  $del = date('d-m-Y',strtotime($fecha_actual.'+ 3 days'));
  $hasta = date('d-m-Y',strtotime($fecha_actual.'+ 7 days'));
}

if($dia=="6") {
  $del = date('d-m-Y',strtotime($fecha_actual.'+ 2 days'));
  $hasta = date('d-m-Y',strtotime($fecha_actual.'+ 6 days'));
}

if($dia=="7") {
  $del = date('d-m-Y',strtotime($fecha_actual.'+ 1 days'));
  $hasta = date('d-m-Y',strtotime($fecha_actual.'+ 5 days'));
}


$cedulasupervisor = $_SESSION['cedula'];

// Consulta nombre el supervisor para ingresar en el historial
$sentenciasu="SELECT * FROM admi WHERE cedula = '$cedulasupervisor'";
$resultadosu = $conexion->query($sentenciasu) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadosu)) {  
        $nombresupervisor = $filas['nombre'];
      }

if(empty($dia)) {} else { 
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
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
    $mail->setFrom('soporte@servitel.cc', 'Horarios agentes Servitel');                      // EMISOR CORREO
    // $mail->addCC('desarrollo@servitel.co');                // DESTINATARIO
    $mail->addAddress('jsanchez@servitel.co');                     // DESTINATARIO 1
    $mail->addAddress('coord.bogota@servitel.co');            
    // $mail->addAddress('ntorres@servitel.co');         
    $mail->addAddress('fgutierrez@servitel.co');          // DESTINATARIO 2
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('aebrochero@utp.edu.co');                      // CON COPIA PARA
    // $mail->addBCC('fredyguti95@gmail.com');                     // CON COPIA OCULTA PARA


    // ENVIA CORREO DEL DIA JUEVES

    $sentencia="SELECT * FROM horarios  ORDER BY `horarios`.`cedula` DESC";
    $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
    while($filas=$resultado->fetch_assoc())
    {

     $cedula =  $filas['cedula']; 
     $nombre =     $filas['nombre']; 
     $campana =    $filas['campana']; 
     $lunes =    $filas['lunes']; 
     $martes =     $filas['martes']; 
     $miercoles =     $filas['miercoles']; 
     $jueves =     $filas['jueves']; 
     $viernes =     $filas['viernes']; 
     $break1 =    $filas['break1']; 
     $almuerzo =      $filas['almuerzo']; 
     $break2 =       $filas['break2']; 
     $sabado =     $filas['sabado']; 
     $breaksabado =   $filas['breaksabado'];  


    $mail->isHTML(true);  //Set email format to HTML4
    $mail->Subject = $asunto = 'Horarios del ' .$del.  '. hasta el '. $hasta." ".$nombresupervisor;
    $mail->Body .= "<tr><td style='border:  0.5px solid black;'>".$filas['cedula']."</td><td style='border:  0.5px solid black;'>".$filas['nombre']."<td style='border:  0.5px solid black;'>".$filas['campana']."</td><td style='border:  0.5px solid black;'>".$filas['lunes']."</td><td style='border:  0.5px solid black;'>".$filas['martes']."</td><td style='border:  0.5px solid black;'>".$filas['miercoles']."</td><td style='border:  0.5px solid black;'>".$filas['jueves']."</td><td style='border:  0.5px solid black;'>".$filas['viernes']."</td><td style='border:  0.5px solid black;'>".$filas['break1']."</td><td style='border:  0.5px solid black;'>".$filas['almuerzo']."</td><td style='border:  0.5px solid black;'>".$filas['break2']."</td><td style='border:  0.5px solid black;'>".$filas['sabado']."</td><td style='border:  0.5px solid black;'>".$filas['breaksabado']."</td> ";

}
$mail->send();                                              // ENVIA EL CORREO

} catch (Exception $e) {
echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}

echo '<script>
window.location.href = "/Login/admin/subirhorarios.php";
</script>';
}