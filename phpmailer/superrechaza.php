<?php
include('db.php');
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

$id=$_GET['id'];
$supervisor=$_GET['supervisor'];

//  Seleccionar correo para enviar segun el segmento para el dia sabado
$consultacorreoacepta="SELECT * FROM ch3 WHERE idi = '$id'";
$resultadocorreoacepta = $conexion->query($consultacorreoacepta) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadocorreoacepta)) {  
        $email = $filas['segmento'];
        if($email=="ALTO VALOR") {
            $correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // correo vacio
            $correo3 = "1@1.com"; // correo vacio
            $correo4 = "1@1.com"; // correo vacio
            $correo5 = "1@1.com"; // correo vacio
            $correo6 = "1@1.com"; // correo vacio
        } 
        if($email=="CLIENTE CORPORATIVO") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($email=="WHATSAPP/CHATBOT") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($email=="E-ENTREGA") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
    }


if(empty($id)) {} else { 
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
    $mail->setFrom('soporte@servitel.cc', 'Solicitud cambio de horario');                      // EMISOR CORREO
    // $mail->addCC('desarrollo@servitel.co');                // DESTINATARIO
    $mail->addBCC($correo1);    
    $mail->addBCC($correo2);  
    $mail->addBCC($correo3);       
    $mail->addBCC($correo4);       
    $mail->addBCC($correo5);       
    $mail->addBCC($correo6);                    // CON COPIA OCULTA PARA


    // ENVIA CORREO DEL DIA JUEVES

    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = $asunto = 'Solicitud cambio de horario ID:'.$id;
    $mail->Body    = '
    Cordial saludo,
    <br>
    <br>
    El cambio de horario con ID <b>' .$id. '</b> fue <b>Rechazado</b> por el supervisor <b> '.$supervisor.'</b><br><br>
    <br>
    <a href="http://172.20.250.155/Login"> Ingresar a Serviayuda </a>
    <br>
    <br>
    Mensaje automático Serviayuda
    <br>
    <img src="https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png" style="width:140px;height:100px">';

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();                                                 // ENVIA EL CORREO

} catch (Exception $e) {
    echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}

echo '<script>
window.location.href = "/Login/admin/chorario.php";
</script>';
}

?>