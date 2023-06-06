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




$consultacampana = "SELECT * FROM horarios WHERE cedula = '$cedula'";
$resultadocampana = mysqli_query($conexion, $consultacampana) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array($resultadocampana))
      {
      $campana = $columna['campana'];
      } 

//Consulta para el dia lunes
$consultaagentehorariolunes="SELECT * FROM horarios WHERE lunes = '$lunes' AND campana = '$campana'";
$resultado_lunes=mysqli_query($conexion,$consultaagentehorariolunes);

if(empty($lunes)) { 
    
    $agentevaciolunes = "
    <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' spellcheck='false' id='widgetu757_input' name='lunes' tabindex='1' data-content-guid='widgetu757_input_content'>
    <option value=''>No aplica</option>
    </select>
    ";
}

//Consulta para el dia martes
$consultaagentehorariomartes="SELECT * FROM horarios WHERE martes = '$martes' AND campana = '$campana'";
$resultado_martes=mysqli_query($conexion,$consultaagentehorariomartes);

if(empty($martes)) { 
    
    $agentevaciomartes = "
<select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu1740_input' name='martes' tabindex='2' data-content-guid='widgetu1740_input_content'>
<option value=''>No aplica</option>
</select>
    ";

} 

//Consulta para el dia miercoles
$consultaagentehorariomiercoles="SELECT * FROM horarios WHERE miercoles = '$miercoles' AND campana = '$campana'";
$resultado_miercoles=mysqli_query($conexion,$consultaagentehorariomiercoles);

if(empty($miercoles)) { 
    
    $agentevaciomiercoles = "
<select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu1766_input' name='miercoles' tabindex='3' data-content-guid='widgetu1766_input_content'>
<option value=''>No aplica</option>
</select>
    ";
}

//Consulta para el dia jueves
$consultaagentehorariojueves="SELECT * FROM horarios WHERE jueves = '$jueves' AND campana = '$campana'";
$resultado_jueves=mysqli_query($conexion,$consultaagentehorariojueves);

if(empty($jueves)) { 
    
    $agentevaciojueves = "
<select style='width:100%; height:100%'  class='wrapped-input shared_content' type='text' id='widgetu1917_input' name='jueves' tabindex='4' data-content-guid='widgetu1917_input_content'>
<option value=''>No aplica</option>
</select>
    ";
} 

 //Consulta para el dia viernes
$consultaagentehorarioviernes="SELECT * FROM horarios WHERE viernes = '$viernes' AND campana = '$campana'";
$resultado_viernes=mysqli_query($conexion,$consultaagentehorarioviernes);

if(empty($viernes)) { 
    
    $agentevacioviernes = "
<select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu1786_input' name='viernes' tabindex='5' data-content-guid='widgetu1786_input_content'>
<option value=''>No aplica</option>
</select>
    ";
}

  //Consulta para el dia sabado
$consultaagentehorariosabado="SELECT * FROM horarios WHERE sabado = '$sabado' AND campana = '$campana'";
$resultado_sabado=mysqli_query($conexion,$consultaagentehorariosabado);

if(empty($sabado)) { 
    
    $agentevaciosabado = "
<select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4326_input' name='sabado' tabindex='6' data-content-guid='widgetu4326_input_content'>
<option value=''>No aplica</option>
</select>
    ";
} 