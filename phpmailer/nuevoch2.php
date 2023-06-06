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

$solicitantelunes=$_GET['solicitantelunes'];
$facilitadorlunes=$_GET['facilitadorlunes'];
$idlunes=$_GET['idlunes'];

//  Seleccionar correo para enviar segun el segmento para el dia lunes
$consultacorreolunes="SELECT * FROM ch2 WHERE id = '$idlunes'";
$resultadocorreolunes = $conexion->query($consultacorreolunes) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadocorreolunes)) {  
        $segmentolunes = $filas['segmento'];
        if($segmentolunes=="ALTO VALOR") {
            $correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // correo vacio
            $correo3 = "1@1.com"; // correo vacio
            $correo4 = "1@1.com"; // correo vacio
            $correo5 = "1@1.com"; // correo vacio
            $correo6 = "1@1.com"; // correo vacio
        } 
        if($segmentolunes=="CLIENTE CORPORATIVO") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentolunes=="WHATSAPP/CHATBOT") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentolunes=="E-ENTREGA") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
      } 

$solicitantemartes=$_GET['solicitantemartes'];
$facilitadormartes=$_GET['facilitadormartes'];
$idmartes=$_GET['idmartes'];

//  Seleccionar correo para enviar segun el segmento para el dia martes
$consultacorreomartes="SELECT * FROM ch2 WHERE id = '$idmartes'";
$resultadocorreomartes = $conexion->query($consultacorreomartes) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadocorreomartes)) {  
        $segmentomartes = $filas['segmento'];
        if($segmentomartes=="ALTO VALOR") {
            $correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // correo vacio
            $correo3 = "1@1.com"; // correo vacio
            $correo4 = "1@1.com"; // correo vacio
            $correo5 = "1@1.com"; // correo vacio
            $correo6 = "1@1.com"; // correo vacio
        } 
        if($segmentomartes=="CLIENTE CORPORATIVO") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentomartes=="WHATSAPP/CHATBOT") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentomartes=="E-ENTREGA") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
      } 

$solicitantemiercoles=$_GET['solicitantemiercoles'];
$facilitadormiercoles=$_GET['facilitadormiercoles'];
$idmiercoles=$_GET['idmiercoles'];

//  Seleccionar correo para enviar segun el segmento para el dia miercoles
$consultacorreomiercoles="SELECT * FROM ch2 WHERE id = '$idmiercoles'";
$resultadocorreomiercoles = $conexion->query($consultacorreomiercoles) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadocorreomiercoles)) {  
        $segmentomiercoles = $filas['segmento'];
        if($segmentomiercoles=="ALTO VALOR") {
            $correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // correo vacio
            $correo3 = "1@1.com"; // correo vacio
            $correo4 = "1@1.com"; // correo vacio
            $correo5 = "1@1.com"; // correo vacio
            $correo6 = "1@1.com"; // correo vacio
        } 
        if($segmentomiercoles=="CLIENTE CORPORATIVO") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentomiercoles=="WHATSAPP/CHATBOT") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentomiercoles=="E-ENTREGA") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
      } 

$solicitantejueves=$_GET['solicitantejueves'];
$facilitadorjueves=$_GET['facilitadorjueves'];
$idjueves=$_GET['idjueves'];

//  Seleccionar correo para enviar segun el segmento para el dia jueves
$consultacorreojueves="SELECT * FROM ch2 WHERE id = '$idjueves'";
$resultadocorreojueves = $conexion->query($consultacorreojueves) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadocorreojueves)) {  
        $segmentojueves = $filas['segmento'];
        if($segmentojueves=="ALTO VALOR") {
            $correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // correo vacio
            $correo3 = "1@1.com"; // correo vacio
            $correo4 = "1@1.com"; // correo vacio
            $correo5 = "1@1.com"; // correo vacio
            $correo6 = "1@1.com"; // correo vacio
        } 
        if($segmentojueves=="CLIENTE CORPORATIVO") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentojueves=="WHATSAPP/CHATBOT") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentojueves=="E-ENTREGA") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
      } 

$solicitanteviernes=$_GET['solicitanteviernes'];
$facilitadorviernes=$_GET['facilitadorviernes'];
$idviernes=$_GET['idviernes'];

//  Seleccionar correo para enviar segun el segmento para el dia viernes
$consultacorreoviernes="SELECT * FROM ch2 WHERE id = '$idviernes'";
$resultadocorreoviernes = $conexion->query($consultacorreoviernes) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadocorreoviernes)) {  
        $segmentoviernes = $filas['segmento'];
        if($segmentoviernes=="ALTO VALOR") {
            $correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // correo vacio
            $correo3 = "1@1.com"; // correo vacio
            $correo4 = "1@1.com"; // correo vacio
            $correo5 = "1@1.com"; // correo vacio
            $correo6 = "1@1.com"; // correo vacio
        } 
        if($segmentoviernes=="CLIENTE CORPORATIVO") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentoviernes=="WHATSAPP/CHATBOT") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentoviernes=="E-ENTREGA") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
      } 

$solicitantesabado=$_GET['solicitantesabado'];
$facilitadorsabado=$_GET['facilitadorsabado'];
$idsabado=$_GET['idsabado'];

//  Seleccionar correo para enviar segun el segmento para el dia sabado
$consultacorreosabado="SELECT * FROM ch2 WHERE id = '$idsabado'";
$resultadocorreosabado = $conexion->query($consultacorreosabado) or die (mysqli_error($conexion));
      while ($filas = mysqli_fetch_array($resultadocorreosabado)) {  
        $segmentosabado = $filas['segmento'];
        if($segmentosabado=="ALTO VALOR") {
            $correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // correo vacio
            $correo3 = "1@1.com"; // correo vacio
            $correo4 = "1@1.com"; // correo vacio
            $correo5 = "1@1.com"; // correo vacio
            $correo6 = "1@1.com"; // correo vacio
        } 
        if($segmentosabado=="CLIENTE CORPORATIVO") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentosabado=="WHATSAPP/CHATBOT") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
        if($segmentosabado=="E-ENTREGA") {
            $correo1 = "1@1.com"; // sacosta@servitel.co
            $correo2 = "1@1.com"; // coord.bogota@servitel.co
            $correo3 = "1@1.com"; //  jsanchez@servitel.co
            $correo4 = "1@1.com"; // ntorres@servitel.co
            $correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
            $correo6 = "ctorres@servitel.co"; // ctorres@servitel.co
        } 
      } 

if(empty($solicitantelunes)) {} else { 
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
        $mail->addBCC($correo6);  
    
    
        // ENVIA CORREO DEL DIA lunes
    
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = $asunto = 'Solicitud cambio de horario ID:'.$idlunes;
        $mail->Body    = '
        Cordial saludo,
        <br>
        <br>
        <b>' .$solicitantelunes. '</b> y <b> '.$facilitadorlunes. '</b> solicitan de su colaboración para realizar un cambio de horario del dia <b>lunes</b>.<br><br> Debe ingresar a Serviayuda para dar tramite a la solicitud.
        <br>
        <a href="http://172.20.250.155/Login"> Ingresar a Serviayuda </a>
        <br>
        <br>
        Mensaje automático Serviayuda
        <br>
        <img src="https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png" style="width:140px;height:100px">';
    
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();                                              // ENVIA EL CORREO
    
    } catch (Exception $e) {
        echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
    }
    
    }

    if(empty($solicitantemartes)) {} else { 
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
            $mail->addBCC($correo6);  
            // ENVIA CORREO DEL DIA martes
        
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = $asunto = 'Solicitud cambio de horario ID:'.$idmartes;
            $mail->Body    = '
            Cordial saludo,
            <br>
            <br>
            <b>' .$solicitantemartes. '</b> y <b> '.$facilitadormartes. '</b> solicitan de su colaboración para realizar un cambio de horario del dia <b>martes</b>.<br><br> Debe ingresar a Serviayuda para dar tramite a la solicitud.
            <br>
            <a href="http://172.20.250.155/Login"> Ingresar a Serviayuda </a>
            <br>
            <br>
            Mensaje automático Serviayuda
            <br>
            <img src="https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png" style="width:140px;height:100px">';
        
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();                                              // ENVIA EL CORREO
        
        } catch (Exception $e) {
            echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
        }
        
        }  

        if(empty($solicitantemiercoles)) {} else { 
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
                $mail->addBCC($correo6);            
                   // DESTINATARIO 2

            
                $mail->isHTML(true);                                        //Set email format to HTML
                $mail->Subject = $asunto = 'Solicitud cambio de horario ID:'.$idmiercoles;
                $mail->Body    = '
                Cordial saludo,
                <br>
                <br>
                <b>' .$solicitantemiercoles. '</b> y <b> '.$facilitadormiercoles. '</b> solicitan de su colaboración para realizar un cambio de horario del dia <b>miercoles</b>.<br><br> Debe ingresar a Serviayuda para dar tramite a la solicitud.
                <br>
                <a href="http://172.20.250.155/Login"> Ingresar a Serviayuda </a>
                <br>
                <br>
                Mensaje automático Serviayuda
                <br>
                <img src="https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png" style="width:140px;height:100px">';
            
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();                                              // ENVIA EL CORREO
            
            } catch (Exception $e) {
                echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
              
            }
            
            }
            
            
if(empty($solicitantejueves)) {} else { 
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
    $mail->addBCC($correo6);                   // CON COPIA OCULTA PARA


    // ENVIA CORREO DEL DIA JUEVES

    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = $asunto = 'Solicitud cambio de horario ID:'.$idjueves;
    $mail->Body    = '
    Cordial saludo,
    <br>
    <br>
    <b>' .$solicitantejueves. '</b> y <b> '.$facilitadorjueves. '</b> solicitan de su colaboración para realizar un cambio de horario del dia <b>Jueves</b>.<br><br> Debe ingresar a Serviayuda para dar tramite a la solicitud.
    <br>
    <a href="http://172.20.250.155/Login"> Ingresar a Serviayuda </a>
    <br>
    <br>
    Mensaje automático Serviayuda
    <br>
    <img src="https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png" style="width:140px;height:100px">';

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();                                              // ENVIA EL CORREO

} catch (Exception $e) {
    echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}

}


if(empty($solicitanteviernes)) {} else { 
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
        $mail->addBCC($correo6);  
    
        // ENVIA CORREO DEL DIA viernes
    
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = $asunto = 'Solicitud cambio de horario ID:'.$idviernes;
        $mail->Body    = '
        Cordial saludo,
        <br>
        <br>
        <b>' .$solicitanteviernes. '</b> y <b> '.$facilitadorviernes. '</b> solicitan de su colaboración para realizar un cambio de horario del dia <b>Viernes</b>.<br><br> Debe ingresar a Serviayuda para dar tramite a la solicitud.
        <br>
        <a href="http://172.20.250.155/Login"> Ingresar a Serviayuda </a>
        <br>
        <br>
        Mensaje automático Serviayuda
        <br>
        <img src="https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png" style="width:140px;height:100px">';
    
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();                                              // ENVIA EL CORREO
    
    } catch (Exception $e) {
        echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
    }
    
    }



if(empty($solicitantesabado)) {} else { 
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
        $mail->addBCC($correo6);  
    
        // ENVIA CORREO DEL DIA sabado
    
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = $asunto = 'Solicitud cambio de horario ID:'.$idsabado;
        $mail->Body    = '
        Cordial saludo,
        <br>
        <br>
        <b>' .$solicitantesabado. '</b> y <b> '.$facilitadorsabado. '</b> solicitan de su colaboración para realizar un cambio de horario del dia <b>sabado</b>.<br><br> Debe ingresar a Serviayuda para dar tramite a la solicitud.
        <br>
        <a href="http://172.20.250.155/Login"> Ingresar a Serviayuda </a>
        <br>
        <br>
        Mensaje automático Serviayuda
        <br>
        <img src="https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png" style="width:140px;height:100px">';
    
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();                                              // ENVIA EL CORREO
    
    } catch (Exception $e) {
        echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
    }
    
    }


    ?>


    <script>
        window.close();
    </script>