<?php

include('db.php');
include('session.php');

$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabado=$_POST['sabado'];

if(empty($lunes) AND empty($martes) AND empty($miercoles) AND empty($jueves) AND empty($viernes) AND empty($sabado) ) {

      echo  '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "warning",
           title: "Debe seleccionar minimo un dia",
           text: "Todos los campos no pueden estar en blanco.",
 
          }).then(function() {
            window.location.href = "/Login/cambiohorario/index.php";
          });
      });
 
       </script>';
}

if(empty($nombre) ) {

      echo  '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "warning",
           title: "Inicie sesión nuevamente",
           text: "Su sesión ha caducado, por favor inicie nuevamente",
 
          }).then(function() {
            window.close();
          });
      });
 
       </script>';
}


if(empty($lunes)) { } else { $dia1 = "Lunes"; }
if(empty($martes)) { } else { $dia2 = "Martes";}
if(empty($miercoles)) { } else { $dia3 = "Miercoles";}
if(empty($jueves)) { } else { $dia4 = "Jueves";}
if(empty($viernes)) { } else { $dia5 = "Viernes";}
if(empty($sabado)) { } else { $dia6 = "Sabado";}


$consultahorarios = "SELECT * FROM horarios WHERE cedula = '$cedula'";
$resultadohorarios = mysqli_query($conexion, $consultahorarios) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadohorarios ))
      {
      $rlunes = $columna['lunes'];
      $rmartes = $columna['martes'];
      $rmiercoles = $columna['miercoles'];
      $rjueves = $columna['jueves'];
      $rviernes = $columna['viernes'];
      $rsabado = $columna['sabado'];
      } 



// Consulta horarios relacionados para el dia lunes

if($rlunes=="7:00 - 16:30" || $rlunes=="7:30 - 17:00" || $rlunes=="8:00 - 17:30" ||
    $rlunes=="8:30 - 18:00" || $rlunes=="9:00 - 18:30" || $rlunes=="10:00 - 19:30") {
        $horariosrlunes = "
        <select style='width:100%; height:100%;'  class='wrapped-input shared_content' type='text' spellcheck='false' id='widgetu1210_input' name='lunes' tabindex='3' data-content-guid='widgetu1210_input_content' required>
              <option style='display:none' value='' >Seleccione un horario</option> 
              <option value='7:00 - 16:30'>7:00 - 16:30</option> 
              <option value='7:30 - 17:00'>7:30 - 17:00</option> 
              <option value='8:00 - 17:30'>8:00 - 17:30</option> 
              <option value='8:30 - 18:00'>8:30 - 18:00</option> 
              <option value='9:00 - 18:30'>9:00 - 18:30</option> 
              <option value='9:30 - 19:00'>9:30 - 19:00</option> 
              <option value='10:00 - 19:30'>10:00 - 19:30</option> 
        </select>
        
        ";
 } else {

        $horariosrlunes = "
        <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' spellcheck='false' id='widgetu1210_input' name='lunes' tabindex='3' data-content-guid='widgetu1210_input_content' required>
                 <option style='display:none' value='' >Seleccione un horario</option> 
                 <option value='7:00 - 17:00'>7:00 - 17:00</option> 
                 <option value='7:30 - 17:30'>7:30 - 17:30</option> 
                 <option value='8:00 - 18:00'>8:00 - 18:00</option> 
                 <option value='8:30 - 18:30'>8:30 - 18:30</option> 
                 <option value='9:00 - 19:00'>9:00 - 19:00</option> 
        </select>
    
    ";

 }

 // Consulta horarios relacionados para el dia martes

 if($rmartes=="7:00 - 16:30" || $rmartes=="7:30 - 17:00" || $rmartes=="8:00 - 17:30" ||
 $rmartes=="8:30 - 18:00" || $rmartes=="9:00 - 18:30" || $rmartes=="9:30 - 19:00" || $rmartes=="10:00 - 19:30") {
     $horariosrmartes = "
     <select style='width:100%; height:100%;' class='wrapped-input shared_content' type='text' id='widgetu4612_input' name='martes' tabindex='4' data-content-guid='widgetu4612_input_content' required>
           <option style='display:none' value='' >Seleccione un horario</option> 
           <option value='7:00 - 16:30'>7:00 - 16:30</option> 
           <option value='7:30 - 17:00'>7:30 - 17:00</option> 
           <option value='8:00 - 17:30'>8:00 - 17:30</option> 
           <option value='8:30 - 18:00'>8:30 - 18:00</option> 
           <option value='9:00 - 18:30'>9:00 - 18:30</option> 
           <option value='9:30 - 19:00'>9:30 - 19:00</option> 
           <option value='10:00 - 19:30'>10:00 - 19:30</option> 
     </select>
     
     ";
 } else {
 
     $horariosrmartes = "
     <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4612_input' name='martes' tabindex='4' data-content-guid='widgetu4612_input_content' required>
              <option style='display:none' value='' >Seleccione un horario</option> 
              <option value='7:00 - 17:00'>7:00 - 17:00</option> 
              <option value='7:30 - 17:30'>7:30 - 17:30</option> 
              <option value='8:00 - 18:00'>8:00 - 18:00</option> 
              <option value='8:30 - 18:30'>8:30 - 18:30</option> 
              <option value='9:00 - 19:00'>9:00 - 19:00</option> 
     </select>
 
 ";
 
 }

 // Consulta horarios relacionados para el dia miercoles

 if($rmiercoles=="7:00 - 16:30" || $rmiercoles=="7:30 - 17:00" || $rmiercoles=="8:00 - 17:30" ||
 $rmiercoles=="8:30 - 18:00" || $rmiercoles=="9:00 - 18:30" || $rmiercoles=="9:30 - 19:00" || $rmiercoles=="10:00 - 19:30") {
     $horariosrmiercoles = "
     <select style='width:100%; height:100%;' class='wrapped-input shared_content' type='text' id='widgetu4531_input' name='miercoles' tabindex='6' data-content-guid='widgetu4531_input_content' required>
           <option style='display:none' value='' >Seleccione un horario</option> 
           <option value='7:00 - 16:30'>7:00 - 16:30</option> 
           <option value='7:30 - 17:00'>7:30 - 17:00</option> 
           <option value='8:00 - 17:30'>8:00 - 17:30</option> 
           <option value='8:30 - 18:00'>8:30 - 18:00</option> 
           <option value='9:00 - 18:30'>9:00 - 18:30</option> 
           <option value='9:30 - 19:00'>9:30 - 19:00</option> 
           <option value='10:00 - 19:30'>10:00 - 19:30</option> 
     </select>
     
     ";
 } else {
 
     $horariosrmiercoles = "
     <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4531_input' name='miercoles' tabindex='6' data-content-guid='widgetu4531_input_content' required>
              <option style='display:none' value='' >Seleccione un horario</option> 
              <option value='7:00 - 17:00'>7:00 - 17:00</option> 
              <option value='7:30 - 17:30'>7:30 - 17:30</option> 
              <option value='8:00 - 18:00'>8:00 - 18:00</option> 
              <option value='8:30 - 18:30'>8:30 - 18:30</option> 
              <option value='9:00 - 19:00'>9:00 - 19:00</option> 
     </select>
 
 ";
 
 }
 // Consulta horarios relacionados para el dia jueves
 if($rjueves=="7:00 - 16:30" || $rjueves=="7:30 - 17:00" || $rjueves=="8:00 - 17:30" ||
 $rjueves=="8:30 - 18:00" || $rjueves=="9:00 - 18:30" || $rjueves=="9:30 - 19:00"  || $rjueves=="10:00 - 19:30") {
     $horariosrjueves = "
     <select style='width:100%; height:100%;' class='wrapped-input shared_content' type='text' id='widgetu4592_input' name='jueves' tabindex='5' data-content-guid='widgetu4592_input_content' required>
           <option style='display:none' value='' >Seleccione un horario</option> 
           <option value='7:00 - 16:30'>7:00 - 16:30</option> 
           <option value='7:30 - 17:00'>7:30 - 17:00</option> 
           <option value='8:00 - 17:30'>8:00 - 17:30</option> 
           <option value='8:30 - 18:00'>8:30 - 18:00</option> 
           <option value='9:00 - 18:30'>9:00 - 18:30</option> 
           <option value='9:30 - 19:00'>9:30 - 19:00</option> 
           <option value='10:00 - 19:30'>10:00 - 19:30</option> 
     </select>
     
     ";
 } else {
 
     $horariosrjueves = "
     <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4592_input' name='jueves' tabindex='5' data-content-guid='widgetu4592_input_content' required>
              <option style='display:none' value='' >Seleccione un horario</option> 
              <option value='7:00 - 17:00'>7:00 - 17:00</option> 
              <option value='7:30 - 17:30'>7:30 - 17:30</option> 
              <option value='8:00 - 18:00'>8:00 - 18:00</option> 
              <option value='8:30 - 18:30'>8:30 - 18:30</option> 
              <option value='9:00 - 19:00'>9:00 - 19:00</option> 
     </select>
 
 ";
 
 }
 
  // Consulta horarios relacionados para el dia viernes

  if($rviernes=="7:00 - 16:30" || $rviernes=="7:30 - 17:00" || $rviernes=="8:00 - 17:30" ||
  $rviernes=="8:30 - 18:00" || $rviernes=="9:00 - 18:30" || $rviernes=="9:30 - 19:00"  || $rviernes=="10:00 - 19:30") {
      $horariosrviernes = "
      <select style='width:100%; height:100%;' class='wrapped-input shared_content' type='text' id='widgetu4552_input' name='viernes' tabindex='7' data-content-guid='widgetu4552_input_content' required>
            <option style='display:none' value='' >Seleccione un horario</option> 
            <option value='7:00 - 16:30'>7:00 - 16:30</option> 
            <option value='7:30 - 17:00'>7:30 - 17:00</option> 
            <option value='8:00 - 17:30'>8:00 - 17:30</option> 
            <option value='8:30 - 18:00'>8:30 - 18:00</option> 
            <option value='9:00 - 18:30'>9:00 - 18:30</option> 
            <option value='9:30 - 19:00'>9:30 - 19:00</option> 
            <option value='10:00 - 19:30'>10:00 - 19:30</option> 
      </select>
      
      ";
  } else {
  
      $horariosrviernes = "
      <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4552_input' name='viernes' tabindex='7' data-content-guid='widgetu4552_input_content' required>
               <option style='display:none' value='' >Seleccione un horario</option> 
               <option value='7:00 - 17:00'>7:00 - 17:00</option> 
               <option value='7:30 - 17:30'>7:30 - 17:30</option> 
               <option value='8:00 - 18:00'>8:00 - 18:00</option> 
               <option value='8:30 - 18:30'>8:30 - 18:30</option> 
               <option value='9:00 - 19:00'>9:00 - 19:00</option> 
      </select>
  
  ";
  
  }


// Consulta horarios relacionados para el dia sabado


if($rsabado=="07:00 - 12:00" || $rsabado=="07:30 - 12:30" || $rsabado=="08:00 - 13:00" ||
$rsabado=="09:00 - 14:00" || $rsabado=="10:00 - 15:00" || $rsabado=="11:00 - 16:00"  || $rsabado=="12:00 - 17:00" || $rsabado=="12:30 - 17:30") {
    $horariosrsabado = "
    <select style='width:100%; height:100%;' class='wrapped-input shared_content' type='text' id='widgetu4572_input' name='sabado' tabindex='8' data-content-guid='widgetu4572_input_content' required>
          <option style='display:none' value='' >Seleccione un horario</option> 
          <option value='07:00 - 12:00'>07:00 - 12:00</option> 
          <option value='07:30 - 12:30'>07:30 - 12:30</option> 
          <option value='08:00 - 13:00'>08:00 - 13:00</option> 
          <option value='09:00 - 14:00'>09:00 - 14:00</option> 
          <option value='10:00 - 15:00'>10:00 - 15:00</option> 
          <option value='11:00 - 16:00'>11:00 - 16:00</option> 
          <option value='12:00 - 17:00'>12:00 - 17:00</option> 
          <option value='12:30 - 17:30'>12:30 - 17:30</option> 
          

    </select>
    
    ";
} else {

    $horariosrsabado = "
    <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4572_input' name='sabado' tabindex='8' data-content-guid='widgetu4572_input_content' required>
             <option style='display:none' value='' >Seleccione un horario</option> 
             <option value='07:00 - 12:00'>07:00 - 12:00</option> 
             <option value='07:30 - 12:30'>07:30 - 12:30</option> 
             <option value='08:00 - 13:00'>08:00 - 13:00</option> 
             <option value='09:00 - 14:00'>09:00 - 14:00</option> 
             <option value='10:00 - 15:00'>10:00 - 15:00</option> 
             <option value='11:00 - 16:00'>11:00 - 16:00</option> 
             <option value='12:00 - 17:00'>12:00 - 17:00</option> 
             <option value='12:30 - 17:30'>12:30 - 17:30</option> 
    </select>

";

}

// Campos vacios para cada dia en caso de no ser seleccionados o no aplicar por ser dia actual o pasado

// dia lunes
$campovaciolunes = "
        <select style='width:100%; height:100%;'  class='wrapped-input shared_content' type='text' spellcheck='false' id='widgetu1210_input' name='lunes' tabindex='3' data-content-guid='widgetu1210_input_content' >
              <option style='display:none' value='' >No aplica</option> 
        </select>

";

// dia martes
$campovaciomartes = "
        <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4612_input' name='martes' tabindex='4' data-content-guid='widgetu4612_input_content'>
              <option style='display:none' value='' >No aplica</option> 
        </select>

";
// dia miercoles
$campovaciomiercoles = "
        <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4531_input' name='miercoles' tabindex='6' data-content-guid='widgetu4531_input_content'>
              <option style='display:none' value='' >No aplica</option> 
        </select>

";
// dia jueves
$campovaciojueves = "
        <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4592_input' name='jueves' tabindex='5' data-content-guid='widgetu4592_input_content'>
              <option style='display:none' value='' >No aplica</option> 
        </select>

";
// dia viernes
$campovacioviernes = "
        <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4552_input' name='viernes' tabindex='7' data-content-guid='widgetu4552_input_content'>
              <option style='display:none' value='' >No aplica</option> 
        </select>

";
// dia sabado
$campovaciosabado = "
        <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4572_input' name='sabado' tabindex='8' data-content-guid='widgetu4572_input_content'>
              <option style='display:none' value='' >No aplica</option> 
        </select>

";


