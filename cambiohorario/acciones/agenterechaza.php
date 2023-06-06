<?php
include('db.php');
include('session.php');

$agente = $_SESSION['cedula'];

$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabado=$_POST['sabado'];

// Acepta dia lunes

if(empty($lunes)) { } else {  
  $consultapendienteslunes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'lunes'";
  $resultadopendientelunes = mysqli_query($conexion, $consultapendienteslunes) or die("Algo ha salido mal en la consulta a la base de datos");
  
        while ($columna = mysqli_fetch_array($resultadopendientelunes))
        {
        $solicitantelunes = $columna['solicitante'];
        $ccsolicitantelunes = $columna['ccsolicitante'];
        $hsolicitantelunes = $columna['hsolicitante'];
        $facilitadorlunes = $columna['facilitador'];
        $ccfacilitadorlunes = $columna['ccfacilitador'];
        $hfacilitadorlunes = $columna['hfacilitador'];
        $dia = $columna['dia'];
        $segmentolunes = $columna['segmento'];
        }

        $insertarlunes = "INSERT INTO ch2 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador, segmento, dia) 
        VALUES ('$solicitantelunes','$ccsolicitantelunes','$hsolicitantelunes','$facilitadorlunes','$ccfacilitadorlunes','$hfacilitadorlunes','$segmentolunes','$dia')";
        $resultadolunes = mysqli_query ($conexion,$insertarlunes);
        if($resultadolunes) { 
  
          $eliminach1lunes = "DELETE FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'lunes'";
          $resultadopendientelunes = mysqli_query($conexion, $eliminach1lunes) or die("Algo ha salido mal en la consulta a la base de datos");
    // Consulta id desde ch2
    $consultaidlunesch2 = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'lunes'";
    $resultadoidlunesch2 = mysqli_query($conexion, $consultaidlunesch2) or die("Algo ha salido mal en la consulta a la base de datos");
    
          while ($columna = mysqli_fetch_array($resultadoidlunesch2))
          { $idlunes = $columna['id']; }

  } }
 
// Acepta dia martes

if(empty($martes)) { } else {  
$consultapendientesmartes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'martes'";
$resultadopendientemartes = mysqli_query($conexion, $consultapendientesmartes) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadopendientemartes))
      {
      $solicitantemartes = $columna['solicitante'];
      $ccsolicitantemartes = $columna['ccsolicitante'];
      $hsolicitantemartes = $columna['hsolicitante'];
      $facilitadormartes = $columna['facilitador'];
      $ccfacilitadormartes = $columna['ccfacilitador'];
      $hfacilitadormartes = $columna['hfacilitador'];
      $dia = $columna['dia'];
      $segmentomartes = $columna['segmento'];
      }

      $insertarmartes = "INSERT INTO ch2 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador, dia, segmento) 
      VALUES ('$solicitantemartes','$ccsolicitantemartes','$hsolicitantemartes','$facilitadormartes','$ccfacilitadormartes','$hfacilitadormartes','$dia','$segmentomartes')";
      $resultadomartes = mysqli_query ($conexion,$insertarmartes);
      if($resultadomartes) { 

        $eliminach1martes = "DELETE FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'martes'";
        $resultadopendientemartes = mysqli_query($conexion, $eliminach1martes) or die("Algo ha salido mal en la consulta a la base de datos");
    // Consulta id desde ch2
    $consultaidmartesch2 = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'martes'";
    $resultadoidmartesch2 = mysqli_query($conexion, $consultaidmartesch2) or die("Algo ha salido mal en la consulta a la base de datos");
    
          while ($columna = mysqli_fetch_array($resultadoidmartesch2))
          { $idmartes = $columna['id']; }

  } }      
// Acepta dia miercoles

if(empty($miercoles)) { } else {  
  $consultapendientesmiercoles = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'miercoles'";
  $resultadopendientemiercoles = mysqli_query($conexion, $consultapendientesmiercoles) or die("Algo ha salido mal en la consulta a la base de datos");
  
        while ($columna = mysqli_fetch_array($resultadopendientemiercoles))
        {
        $solicitantemiercoles = $columna['solicitante'];
        $ccsolicitantemiercoles = $columna['ccsolicitante'];
        $hsolicitantemiercoles = $columna['hsolicitante'];
        $facilitadormiercoles = $columna['facilitador'];
        $ccfacilitadormiercoles = $columna['ccfacilitador'];
        $hfacilitadormiercoles = $columna['hfacilitador'];
        $dia = $columna['dia'];
        $segmentomiercoles = $columna['segmento'];
        }
  
        $insertarmiercoles = "INSERT INTO ch2 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador, dia, segmento) 
        VALUES ('$solicitantemiercoles','$ccsolicitantemiercoles','$hsolicitantemiercoles','$facilitadormiercoles','$ccfacilitadormiercoles','$hfacilitadormiercoles','$dia','$segmentomiercoles')";
        $resultadomiercoles = mysqli_query ($conexion,$insertarmiercoles);
        if($resultadomiercoles) { 
  
          $eliminach1miercoles = "DELETE FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'miercoles'";
          $resultadopendientemiercoles = mysqli_query($conexion, $eliminach1miercoles) or die("Algo ha salido mal en la consulta a la base de datos");
    // Consulta id desde ch2
    $consultaidmiercolesch2 = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'miercoles'";
    $resultadoidmiercolesch2 = mysqli_query($conexion, $consultaidmiercolesch2) or die("Algo ha salido mal en la consulta a la base de datos");
    
          while ($columna = mysqli_fetch_array($resultadoidmiercolesch2))
          { $idmiercoles = $columna['id']; }

  } }


// Acepta dia jueves

if(empty($jueves)) { } else {  
$consultapendientesjueves = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'jueves'";
$resultadopendientejueves = mysqli_query($conexion, $consultapendientesjueves) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadopendientejueves))
      {
      $solicitantejueves = $columna['solicitante'];
      $ccsolicitantejueves = $columna['ccsolicitante'];
      $hsolicitantejueves = $columna['hsolicitante'];
      $facilitadorjueves = $columna['facilitador'];
      $ccfacilitadorjueves = $columna['ccfacilitador'];
      $hfacilitadorjueves = $columna['hfacilitador'];
      $dia = $columna['dia'];
      $segmentojueves = $columna['segmento'];

      }

      $insertarjueves = "INSERT INTO ch2 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador, dia, segmento) 
      VALUES ('$solicitantejueves','$ccsolicitantejueves','$hsolicitantejueves','$facilitadorjueves','$ccfacilitadorjueves','$hfacilitadorjueves','$dia','$segmentojueves')";
      $resultadojueves = mysqli_query ($conexion,$insertarjueves);
      if($resultadojueves) { 

        $eliminach1jueves = "DELETE FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'jueves'";
        $resultadopendientelunes = mysqli_query($conexion, $eliminach1jueves) or die("Algo ha salido mal en la consulta a la base de datos");
// Consulta id desde ch2
$consultaidjuevesch2 = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'jueves'";
$resultadoidjuevesch2 = mysqli_query($conexion, $consultaidjuevesch2) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadoidjuevesch2))
      { $idjueves = $columna['id']; }

} 

}

// Acepta dia viernes

if(empty($viernes)) { } else {  
  $consultapendientesviernes = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'viernes'";
  $resultadopendienteviernes = mysqli_query($conexion, $consultapendientesviernes) or die("Algo ha salido mal en la consulta a la base de datos");
  
        while ($columna = mysqli_fetch_array($resultadopendienteviernes))
        {
        $solicitanteviernes = $columna['solicitante'];
        $ccsolicitanteviernes = $columna['ccsolicitante'];
        $hsolicitanteviernes = $columna['hsolicitante'];
        $facilitadorviernes = $columna['facilitador'];
        $ccfacilitadorviernes = $columna['ccfacilitador'];
        $hfacilitadorviernes = $columna['hfacilitador'];
        $dia = $columna['dia'];
        $segmentoviernes = $columna['segmento'];

        }
  
        $insertarviernes = "INSERT INTO ch2 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador, segmento,dia) 
        VALUES ('$solicitanteviernes','$ccsolicitanteviernes','$hsolicitanteviernes','$facilitadorviernes','$ccfacilitadorviernes','$hfacilitadorviernes','$segmentoviernes','$dia')";
        $resultadoviernes = mysqli_query ($conexion,$insertarviernes);
        if($resultadoviernes) { 
  
          $eliminach1viernes = "DELETE FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'viernes'";
          $resultadopendienteviernes = mysqli_query($conexion, $eliminach1viernes) or die("Algo ha salido mal en la consulta a la base de datos");
    // Consulta id desde ch2
          $consultaidviernesch2 = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'viernes'";
          $resultadoidviernesch2 = mysqli_query($conexion, $consultaidviernesch2) or die("Algo ha salido mal en la consulta a la base de datos");
          
                while ($columna = mysqli_fetch_array($resultadoidviernesch2))
                { $idviernes = $columna['id']; }

        } }?>

<?php

// Acepta dia sabado

if(empty($sabado)) { } else {  
  $consultapendientessabado = "SELECT * FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'sabado'";
  $resultadopendientesabado = mysqli_query($conexion, $consultapendientessabado) or die("Algo ha salido mal en la consulta a la base de datos");
  
        while ($columna = mysqli_fetch_array($resultadopendientesabado))
        {
        $solicitantesabado = $columna['solicitante'];
        $ccsolicitantesabado = $columna['ccsolicitante'];
        $hsolicitantesabado = $columna['hsolicitante'];
        $facilitadorsabado = $columna['facilitador'];
        $ccfacilitadorsabado = $columna['ccfacilitador'];
        $hfacilitadorsabado = $columna['hfacilitador'];
        $dia = $columna['dia'];
        $segmentosabado = $columna['segmento'];
        
        }
  
        $insertarsabado = "INSERT INTO ch2 (solicitante, ccsolicitante, hsolicitante, facilitador, ccfacilitador, hfacilitador, dia, segmento) 
        VALUES ('$solicitantesabado','$ccsolicitantesabado','$hsolicitantesabado','$facilitadorsabado','$ccfacilitadorsabado','$hfacilitadorsabado','$dia','$segmentosabado')";
        $resultadosabado = mysqli_query ($conexion,$insertarsabado);
        if($resultadosabado) { 
  
          $eliminach1sabado = "DELETE FROM ch1 WHERE ccfacilitador = '$agente' AND dia = 'sabado'";
          $resultadopendientesabado = mysqli_query($conexion, $eliminach1sabado) or die("Algo ha salido mal en la consulta a la base de datos");
  // Consulta id desde ch2
  $consultaidsabadoch2 = "SELECT * FROM ch2 WHERE ccfacilitador = '$agente' AND dia = 'sabado'";
  $resultadoidsabadoch2 = mysqli_query($conexion, $consultaidsabadoch2) or die("Algo ha salido mal en la consulta a la base de datos");
  
        while ($columna = mysqli_fetch_array($resultadoidsabadoch2))
        { $idsabado = $columna['id']; }

} }?>

<script>
        var  datos= '<?php 
        echo "?solicitantelunes="; echo $solicitantelunes; echo "&facilitadorlunes="; echo $facilitadorlunes; echo "&idlunes="; echo $idlunes;
        echo "&solicitantemartes="; echo $solicitantemartes; echo "&facilitadormartes="; echo $facilitadormartes; echo "&idmartes="; echo $idmartes;
        echo "&solicitantemiercoles="; echo $solicitantemiercoles; echo "&facilitadormiercoles="; echo $facilitadormiercoles; echo "&idmiercoles="; echo $idmiercoles;
        echo "&solicitantejueves="; echo $solicitantejueves; echo "&facilitadorjueves="; echo $facilitadorjueves; echo "&idjueves="; echo $idjueves;
        echo "&solicitanteviernes="; echo $solicitanteviernes; echo "&facilitadorviernes="; echo $facilitadorviernes; echo "&idviernes="; echo $idviernes;
        echo "&solicitantesabado="; echo $solicitantesabado; echo "&facilitadorsabado="; echo $facilitadorsabado; echo "&idsabado="; echo $idsabado;
        ?>' ; 
</script>
  <?php
      
      echo   '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Cambio aceptado",
              text: "Solicitud aceptada, ahora debe esperar a que su supervisor valide y acepte el cambio.",
      
          }).then(function() {
            window.location.href = "/Login/phpmailer/nuevoch2.php"+datos;

      
          });
      });
      
      </script>';
            
?>



  