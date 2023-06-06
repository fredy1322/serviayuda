<meta charset="UTF-8">
<?php

date_default_timezone_set("America/Bogota");
$horaactualg = date("G");



include('db.php');
include('ejemplo.php');
include('session.php');


$dia = date("Y-m-d");
$correo1 = "sacosta@servitel.co"; // sacosta@servitel.co
$correo2 = "coord.bogota@servitel.co"; // coord.bogota@servitel.co
$correo3 = "jsanchez@servitel.co"; //  jsanchez@servitel.co
$correo4 = "ntorres@servitel.co"; // ntorres@servitel.co
$correo5 = "ygarcia@servitel.co"; // ygarcia@servitel.co
$correo6 = "ctorres@servitel.co"; // ctorres@servitel.co

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

if($horaactualg==='15') { 

$consultach2altov = "SELECT * FROM ch2 WHERE segmento = 'ALTO VALOR'";
if ($resultacch2altov=mysqli_query($conexion,$consultach2altov)) {
    $cantidadch2altov=mysqli_num_rows($resultacch2altov);
}

if($cantidadch2altov>"0") {

date_default_timezone_set("America/Bogota");
$horaactual = date("G");

$consultacorte="SELECT * FROM corte3pm WHERE fecha ='$dia' and segmento = 'ALTO VALOR'";
$resultado = $conexion->query($consultacorte);
while($filas=$resultado->fetch_assoc())
{ $fecha = $filas['fecha'];}

if(empty($fecha)) { 

if($horaactual==='15') {
    // Orden de enviar correo a los coordinadores

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
    $mail->setFrom('soporte@servitel.cc', 'Corte cambio de horario');                      // EMISOR CORREO
    $mail->addCC($correo1);                // DESTINATARIO
    $mail->addCC($correo2);                // DESTINATARIO

    // $mail->addAddress('fgutierrez@servitel.co');                     // DESTINATARIO 2
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('aebrochero@utp.edu.co');                      // CON COPIA PARA
    // $mail->addBCC('fredyguti95@gmail.com');                     // CON COPIA OCULTA PARA


    $mail->isHTML(true);  //Set email format to HTML4
    $mail->Subject = $asunto = 'Corte de solicitudes de cambio de horario Alto valor' ;
    $mail->Body = "Cordial saludo <br><br>

    Usted tiene solicitudes pendientes para cambio de horario. Ingrese a Serviayuda para gestionarlas<br><br>


    <a href='http://172.20.250.155/Login'> Ingresar a Serviayuda </a>
    <br>
    <br>
    Mensaje automático Serviayuda .$dia.
    <br>
    <img src='https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png' style='width:140px;height:100px'>
    ";


$mail->send();                                              // ENVIA EL CORREO

} catch (Exception $e) {
echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}

//Inserta la fecha en corte3pm para no enviar otra vez el correo

$insertarfecha="INSERT INTO corte3pm (fecha , segmento) values ('$dia','ALTO VALOR')";
$resultado = $conexion->query($insertarfecha);


}


 } 

 
} else { 
  
  // Hasta la hora no hay solicitudes pendientes, se agregará la fecha para no enviar correo.

  $consultacorteceroalv="SELECT * FROM corte3pm WHERE fecha ='$dia'and segmento = 'ALTO VALOR'";
  $resultadoceroalv = $conexion->query($consultacorteceroalv);
  while($filas=$resultadoceroalv->fetch_assoc())
  { $fechaalv = $filas['fecha'];}
  
  if(empty($fechaalv)) { 
  $insertarfechaalv="INSERT INTO corte3pm (fecha , segmento) values ('$dia','ALTO VALOR')";
  $resultadoalv = $conexion->query($insertarfechaalv);
  }
  
}



// Validar si hay cambios de horarios pendientes por aceptar en ch2 PARA CLIENTE CORPORATIVO

$consultach2cc2 = "SELECT * FROM ch2 WHERE segmento = 'CLIENTE CORPORATIVO'";
if ($resultacch2cc2=mysqli_query($conexion,$consultach2cc2)) {
    $cantidadch2cc2=mysqli_num_rows($resultacch2cc2);
}

if($cantidadch2cc2>"0") {

date_default_timezone_set("America/Bogota");
$horaactual = date("G");

$consultacorte2="SELECT * FROM corte3pm WHERE fecha ='$dia' and segmento = 'CLIENTE CORPORATIVO'";
$resultado2 = $conexion->query($consultacorte2);
while($filas=$resultado2->fetch_assoc())
{ $fecha2 = $filas['fecha'];}

if(empty($fecha2)) { 

if($horaactual2==='15') {
    // Orden de enviar correo a los coordinadores

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
    $mail->setFrom('soporte@servitel.cc', 'Corte cambio de horario');                      // EMISOR CORREO
    $mail->addCC($correo2);                // DESTINATARIO
    $mail->addCC($correo3);                // DESTINATARIO
    $mail->addCC($correo4);                // DESTINATARIO
    $mail->addCC($correo5);                // DESTINATARIO
    $mail->addCC($correo6);                // DESTINATARIO

    // $mail->addAddress('fgutierrez@servitel.co');                     // DESTINATARIO 2
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('aebrochero@utp.edu.co');                      // CON COPIA PARA
    // $mail->addBCC('fredyguti95@gmail.com');                     // CON COPIA OCULTA PARA


    $mail->isHTML(true);  //Set email format to HTML4
    $mail->Subject = $asunto2 = 'Corte de solicitudes de cambio de horario Cliente corporativo .';
    $mail->Body = "Cordial saludo <br><br>

    Usted tiene solicitudes pendientes para cambio de horario. Ingrese a Serviayuda para gestionarlas<br><br>


    <a href='http://172.20.250.155/Login'> Ingresar a Serviayuda </a>
    <br>
    <br>
    Mensaje automático Serviayuda .$dia.
    <br>
    <img src='https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png' style='width:140px;height:100px'>
    ";


$mail->send();                                              // ENVIA EL CORREO

} catch (Exception $e) {
echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}

//Inserta la fecha en corte3pm para no enviar otra vez el correo

$insertarfecha2="INSERT INTO corte3pm (fecha , segmento) values ('$dia','CLIENTE CORPORATIVO')";
$resultado22 = $conexion->query($insertarfecha2);

}


 } 

 
} else { 
  
  // Hasta la hora no hay solicitudes pendientes, se agregará la fecha para no enviar correo.

  $consultacortecero2="SELECT * FROM corte3pm WHERE fecha ='$dia' and segmento = 'CLIENTE CORPORATIVO'";
  $resultadocero2 = $conexion->query($consultacortecero2);
  while($filas=$resultadocero2->fetch_assoc())
  { $fecha2 = $filas['fecha'];}
  
  if(empty($fecha2)) { 
  $insertarfecha2="INSERT INTO corte3pm (fecha , segmento) values ('$dia','CLIENTE CORPORATIVO')";
  $resultado222 = $conexion->query($insertarfecha2);
  }
  
}
// Validar si hay cambios de horarios pendientes por aceptar en ch2 PARA WHATSAPP/CHATBOT

$consultach2wc = "SELECT * FROM ch2 WHERE segmento = 'WHATSAPP/CHATBOT'";
if ($resultacch2wc=mysqli_query($conexion,$consultach2wc)) {
    $cantidadch2wc=mysqli_num_rows($resultacch2wc);
}

if($cantidadch2wc>"0") {

date_default_timezone_set("America/Bogota");
$horaactual3 = date("G");



$consultacorte3="SELECT * FROM corte3pm WHERE fecha ='$dia' and segmento = 'WHATSAPP/CHATBOT'";
$resultado3 = $conexion->query($consultacorte3);
while($filas=$resultado3->fetch_assoc())
{ $fecha3 = $filas['fecha'];}

if(empty($fecha3)) { 

if($horaactual3==='15') {
    // Orden de enviar correo a los coordinadores

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
    $mail->setFrom('soporte@servitel.cc', 'Corte cambio de horario');                      // EMISOR CORREO
    $mail->addCC($correo3);                // DESTINATARIO
    $mail->addCC($correo5);                // DESTINATARIO
    $mail->addCC($correo6);                // DESTINATARIO

    // $mail->addAddress('fgutierrez@servitel.co');                     // DESTINATARIO 2
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('aebrochero@utp.edu.co');                      // CON COPIA PARA
    // $mail->addBCC('fredyguti95@gmail.com');                     // CON COPIA OCULTA PARA


    $mail->isHTML(true);  //Set email format to HTML4
    $mail->Subject = $asunto3 = 'Corte de solicitudes de cambio de horario WHATSAPP/CHATBOT.';
    $mail->Body = "Cordial saludo <br><br>

    Usted tiene solicitudes pendientes para cambio de horario. Ingrese a Serviayuda para gestionarlas<br><br>


    <a href='http://172.20.250.155/Login'> Ingresar a Serviayuda </a>
    <br>
    <br>
    Mensaje automático Serviayuda .$dia.
    <br>
    <img src='https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png' style='width:140px;height:100px'>
    ";


$mail->send();                                              // ENVIA EL CORREO

} catch (Exception $e) {
echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}

//Inserta la fecha en corte3pm para no enviar otra vez el correo

$insertarfecha3="INSERT INTO corte3pm (fecha , segmento) values ('$dia','WHATSAPP/CHATBOT')";
$resultado33 = $conexion->query($insertarfecha3);

}

 } 
 
} else { 
  
  // Hasta la hora no hay solicitudes pendientes, se agregará la fecha para no enviar correo.

  $consultacortecero3="SELECT * FROM corte3pm WHERE fecha ='$dia' and segmento = 'WHATSAPP/CHATBOT'";
  $resultadocero3 = $conexion->query($consultacortecero3);
  while($filas=$resultadocero3->fetch_assoc())
  { $fecha3 = $filas['fecha'];}
  
  if(empty($fecha3)) { 
  $insertarfecha3="INSERT INTO corte3pm (fecha , segmento) values ('$dia','WHATSAPP/CHATBOT')";
  $resultado333 = $conexion->query($insertarfecha3);
  }
  

}


// Validar si hay cambios de horarios pendientes por aceptar en ch2 PARA E-ENTREGA

$consultach2ee = "SELECT * FROM ch2 WHERE segmento = 'E-ENTREGA'";
if ($resultacch2ee=mysqli_query($conexion,$consultach2ee)) {
    $cantidadch2ee=mysqli_num_rows($resultacch2ee);
}

if($cantidadch2ee>"0") {

date_default_timezone_set("America/Bogota");
$horaactual4 = date("G");


$consultacorte4="SELECT * FROM corte3pm WHERE fecha ='$dia' and segmento = 'E-ENTREGA'";
$resultado4 = $conexion->query($consultacorte4);
while($filas=$resultado4->fetch_assoc())
{ $fecha4 = $filas['fecha'];}

if(empty($fecha4)) { 

if($horaactual4==='15') {
    // Orden de enviar correo a los coordinadores

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
    $mail->setFrom('soporte@servitel.cc', 'Corte cambio de horario');                      // EMISOR CORREO
    $mail->addCC($correo3);                // DESTINATARIO
    $mail->addCC($correo5);                // DESTINATARIO
    $mail->addCC($correo6);                // DESTINATARIO

    // $mail->addAddress('fgutierrez@servitel.co');                     // DESTINATARIO 2
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('aebrochero@utp.edu.co');                      // CON COPIA PARA
    // $mail->addBCC('fredyguti95@gmail.com');                     // CON COPIA OCULTA PARA


    $mail->isHTML(true);  //Set email format to HTML4
    $mail->Subject = $asunto4 = 'Corte de solicitudes de cambio de horario E-Entrega.';
    $mail->Body = "Cordial saludo <br><br>

    Usted tiene solicitudes pendientes para cambio de horario. Ingrese a Serviayuda para gestionarlas<br><br>


    <a href='http://172.20.250.155/Login'> Ingresar a Serviayuda </a>
    <br>
    <br>
    Mensaje automático Serviayuda .$dia.
    <br>
    <img src='https://servitel.co/wp-content/uploads/2019/04/Mesa-de-trabajo-1@280x-8.png' style='width:140px;height:100px'>
    ";


$mail->send();                                              // ENVIA EL CORREO

} catch (Exception $e) {
echo "Mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}

//Inserta la fecha en corte3pm para no enviar otra vez el correo

$insertarfecha4="INSERT INTO corte3pm (fecha , segmento) values ('$dia','E-ENTREGA')";
$resultado44 = $conexion->query($insertarfecha4);

}

 } 
 
} else { 
  
  // Hasta la hora no hay solicitudes pendientes, se agregará la fecha para no enviar correo.

  $consultacortecero4="SELECT * FROM corte3pm WHERE fecha ='$dia' and segmento = 'E-ENTREGA'";
  $resultadocero4 = $conexion->query($consultacortecero4);
  while($filas=$resultadocero4->fetch_assoc())
  { $fecha4 = $filas['fecha'];}
  
  if(empty($fecha4)) { 
  $insertarfecha4="INSERT INTO corte3pm (fecha , segmento) values ('$dia','E-ENTREGA')";
  $resultado444 = $conexion->query($insertarfecha4);
  }
  

} } else { }

?>

