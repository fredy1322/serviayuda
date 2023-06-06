<?php 
include('acciones/paso2.php');
include('session.php');
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabado=$_POST['sabado'];
?>

<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="es-ES">
 <head>
 <script src="alert.min.js"></script>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.1.1.386"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "paso2.css"], "outOfDate":[]};
</script>
  
  <title>paso2</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4038565194"/>
  <link rel="stylesheet" type="text/css" href="css/paso2.css?crc=500052722" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_paso2.css?crc=402136832" id="nomq_pagesheet"/>
  <![endif]-->
   </head>
 <body>
<script>
 Swal.fire({
    icon: 'question',
    html: `<b>¿Ya cuenta con un agente para el cambio?</h1></b><br><br>
    En caso de no tener agente el sistema enviará la solicitud a todos los agentes que cuenten con el horario que usted requiere, solo un agente podrá aceptar la solicitud
    `,
    showCloseButton: true,
  showCancelButton: true,
    confirmButtonText:
    '<a href="#">Si</a>',
    cancelButtonText:
    '<a href="nta.php?nombre=<?php echo $nombre; ?>&cedula=<?php echo $cedula; ?>&lunes=<?php echo $lunes; ?>&martes=<?php echo $martes; ?>&miercoles=<?php echo $miercoles; ?>&jueves=<?php echo $jueves; ?>&viernes=<?php echo $viernes; ?>&sabado=<?php echo $sabado; ?>">No</a><i class="fa fa-thumbs-down"></i>',
  cancelButtonAriaLabel: 'Thumbs down'
});
</script>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1367"><!-- responsive breakpoint node -->
   <div class="clearfix" id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem" id="u753"><!-- group -->
     <div class="rounded-corners clearfix grpelem" id="u751"><!-- column -->
      <img class="colelem temp_no_img_src" id="u747-4" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u747-4.png?crc=165465384" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem shared_content" id="u749" data-content-guid="u749_content"><!-- group -->
       <div class="rounded-corners grpelem" id="u750"><!-- simple frame --></div>
       <div class="rounded-corners grpelem" id="u782"><!-- simple frame --></div>
      </div>
      <img class="colelem temp_no_img_src" id="u752-4" alt="Seleccione el agente con el que desea realizar el cambio" width="736" height="33" data-orig-src="images/u752-4.png?crc=4221804576" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     </div>
    </div>
    <div class="grpelem shared_content" id="u783" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u783_content"><!-- simple frame --></div>
    <div class="rounded-corners clearfix grpelem" id="u4321"><!-- column -->
     <div class="clearfix colelem" id="pu771-4"><!-- group -->
      <div class="clearfix grpelem shared_content" id="u771-4" data-content-guid="u771-4_content"><!-- content -->
       <p>Paso 1</p>
      </div>
      <div class="clearfix grpelem shared_content" id="u784-4" data-content-guid="u784-4_content"><!-- content -->
       <p>Paso 2</p>
      </div>
     </div>
     <div class="clearfix colelem shared_content" id="u785-6" data-content-guid="u785-6_content"><!-- content -->
      <p>Seleccionar <br/>agente</p>
     </div>
     <div class="clearfix colelem" id="pwidgetu754"><!-- group -->
      <form class="form-grp clearfix grpelem" id="widgetu754" method="post" enctype="multipart/form-data" action="paso2-1.php"><!-- none box -->
      <input type="hidden" name="ccsolicitante" value="<?php echo $cedula; ?>"/> 
      <div class="fld-grp clearfix grpelem" id="widgetu757" data-required="false"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u758-4" for="widgetu757_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u758-4_0_content" <?php if(empty($lunes)) { echo "style='color: #D6D3D3'"; } ?>>Lunes:</span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u759-4"><!-- content -->
        <?php 
            if(empty($lunes)) {
              echo $agentevaciolunes;
            } else { ?>
               <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' spellcheck='false' id='widgetu757_input' name='lunes' tabindex='1' data-content-guid='widgetu757_input_content' required>
                <option style="display:none" value="">Seleccione un agente</option> 
                <?php  while($columna=mysqli_fetch_array($resultado_lunes)){
               echo "<option value='".$columna['cedula']."'>".$columna['nombre']."</option>"; }    ?>  
               </select>    
          <?php } ?>
        <label class="wrapped-input fld-prompt" id="widgetu757_prompt" for="widgetu757_input"><span class="actAsPara shared_content" data-content-guid="widgetu757_prompt_0_content"></span></label></span>
       </div>
       <div class="clearfix grpelem" id="u769-4"><!-- content -->
        <p class="shared_content" data-content-guid="u769-4_0_content">Enviando formulario...</p>
       </div>
       <div class="clearfix grpelem" id="u755-4"><!-- content -->
        <p class="shared_content" data-content-guid="u755-4_0_content">El servidor ha detectado un error.</p>
       </div>
       <div class="clearfix grpelem" id="u756-4"><!-- content -->
        <p class="shared_content" data-content-guid="u756-4_0_content">Formulario recibido.</p>
       </div>
       <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u770-4" type="submit" value="Siguiente" tabindex="7"><!-- content -->
        <div style="margin-top:-14px;height:14px;" class="shared_content" data-content-guid="u770-4_0_content">
         <p>Siguiente</p>
        </div>
       </button>
       <div class="fld-grp clearfix grpelem" id="widgetu1740" data-required="false"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u1743-4" for="widgetu1740_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1743-4_0_content"<?php if(empty($martes)) { echo "style='color: #D6D3D3'"; } ?>>Martes:</span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1741-4"><!-- content -->
        <?php 
            if(empty($martes)) {
              echo $agentevaciomartes;
            } else { ?>
              <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu1740_input' name='martes' tabindex='2' data-content-guid='widgetu1740_input_content' required>
               <option style="display:none" value="">Seleccione un agente</option> 
               <?php  while($columna=mysqli_fetch_array($resultado_martes)){
              echo "<option value='".$columna['cedula']."'>".$columna['nombre']."</option>"; }    ?>  
              </select>    
         <?php } ?>
        <label class="wrapped-input fld-prompt" id="widgetu1740_prompt" for="widgetu1740_input"><span class="actAsPara shared_content" data-content-guid="widgetu1740_prompt_0_content"></span></label></span>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu1766" data-required="false"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u1769-4" for="widgetu1766_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1769-4_0_content" <?php if(empty($miercoles)) { echo "style='color: #D6D3D3'"; } ?>>Miércoles:</span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1767-4"><!-- content -->
        <?php 
            if(empty($miercoles)) {
              echo $agentevaciomiercoles;
            } else { ?>
            <select  style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu1766_input' name='miercoles' tabindex='3' data-content-guid='widgetu1766_input_content' required>
               <option style="display:none" value="">Seleccione un agente</option> 
               <?php  while($columna=mysqli_fetch_array($resultado_miercoles)){
              echo "<option value='".$columna['cedula']."'>".$columna['nombre']."</option>"; }    ?>  
              </select>    
         <?php } ?>
        <label class="wrapped-input fld-prompt" id="widgetu1766_prompt" for="widgetu1766_input"><span class="actAsPara shared_content" data-content-guid="widgetu1766_prompt_0_content"></span></label></span>

      </div>
       <div class="fld-grp clearfix grpelem" id="widgetu1786" data-required="false"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u1789-4" for="widgetu1786_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1789-4_0_content"<?php if(empty($viernes)) { echo "style='color: #D6D3D3'"; } ?>>Viernes:</span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1787-4"><!-- content -->
        <?php 
            if(empty($viernes)) {
              echo $agentevacioviernes;
            } else { ?>
             <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu1786_input' name='viernes' tabindex='5' data-content-guid='widgetu1786_input_content' required>
              <option style="display:none" value="">Seleccione un agente</option> 
              <?php 
                    $sentencia="SELECT * FROM ch1";
                    $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
                    while ($filas = mysqli_fetch_array($resultado)) { 
                    $facilitador = $filas['facilitador']; 
                   echo $facilitador;
                  }
              ?>
              <?php  while($columna = mysqli_fetch_array($resultado_viernes)){
                $facilitadordos = $columna['nombre'];
               if($facilitador==$facilitadordos) {  $ocultar = " style='display:none' "; } else {  $ocultar = " style='display:flex' ";  }
             echo "<option".$ocultar."value='".$columna['cedula']."'>".$columna['nombre']."</option>"; }    ?>  
             </select>    
        <?php } ?>
        <label class="wrapped-input fld-prompt" id="widgetu1786_prompt" for="widgetu1786_input"><span class="actAsPara shared_content" data-content-guid="widgetu1786_prompt_0_content"></span></label></span>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu1917" data-required="false"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u1919-4" for="widgetu1917_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1919-4_0_content"<?php if(empty($jueves)) { echo "style='color: #D6D3D3'"; } ?>>Jueves:</span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1918-4"><!-- content -->
        <?php 
            if(empty($jueves)) {
              echo $agentevaciojueves;
            } else { ?>
             <select style='width:100%; height:100%'  class='wrapped-input shared_content' type='text' id='widgetu1917_input' name='jueves' tabindex='4' data-content-guid='widgetu1917_input_content' required>
               <option style="display:none" value="">Seleccione un agente</option> 
               <?php  while($columna=mysqli_fetch_array($resultado_jueves)){
              echo "<option value='".$columna['cedula']."'>".$columna['nombre']."</option>"; }    ?>  
              </select>    
         <?php } ?>
        <label class="wrapped-input fld-prompt" id="widgetu1917_prompt" for="widgetu1917_input"><span class="actAsPara shared_content" data-content-guid="widgetu1917_prompt_0_content"></span></label></span>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu4326" data-required="false"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u4329-4" for="widgetu4326_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4329-4_0_content"<?php if(empty($sabado)) { echo "style='color: #D6D3D3'"; } ?>>Sábado:</span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u4327-4"><!-- content -->
        
        <?php 
            if(empty($sabado)) {
              echo $agentevaciosabado;
            } else { ?>
                <select style='width:100%; height:100%' class='wrapped-input shared_content' type='text' id='widgetu4326_input' name='sabado' tabindex='6' data-content-guid='widgetu4326_input_content' required>
                <option style="display:none" value="">Seleccione un agente</option> 
                <?php  while($columna=mysqli_fetch_array($resultado_sabado)){
               echo "<option value='".$columna['cedula']."'>".$columna['nombre']."</option>"; }    ?>  
               </select>    
          <?php } ?>

        <label class="wrapped-input fld-prompt" id="widgetu4326_prompt" for="widgetu4326_input"><span class="actAsPara shared_content" data-content-guid="widgetu4326_prompt_0_content"></span></label></span>
       
      </div>
      </form>
      <a class="nonblock nontext clearfix grpelem shared_content" id="u864-3" href="paso1-2.php" data-content-guid="u864-3_content"><!-- content --><p>&nbsp;</p></a>
      <a class="nonblock nontext clearfix grpelem shared_content" id="u892-4" href="paso1-2.php" data-content-guid="u892-4_content"><!-- content --><p>Atrás</p></a>
     </div>
    </div>
    <div class="grpelem shared_content" id="u748" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u748_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u772-6" data-content-guid="u772-6_content"><!-- content -->
     <p>Seleccionar <br/>día</p>
    </div>
    <div class="verticalspacer" data-offset-top="521" data-content-above-spacer="521" data-content-below-spacer="61"></div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1366" data-max-width="1366"><!-- responsive breakpoint node -->
   <div class="clearfix temp_no_id" data-orig-id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u753"><!-- group -->
     <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u751"><!-- column -->
      <img class="colelem temp_no_id temp_no_img_src" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u747-42.png?crc=165465384" data-orig-id="u747-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u749_content"><!-- placeholder node --></span>
      <img class="colelem temp_no_id temp_no_img_src" alt="Seleccione el agente con el que desea realizar el cambio" width="743" height="33" data-orig-src="images/u752-42.png?crc=385552139" data-orig-id="u752-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     </div>
    </div>
    <span class="grpelem placeholder" data-placeholder-for="u783_content"><!-- placeholder node --></span>
    <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u4321"><!-- column -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u784-4_content"><!-- placeholder node --></span>
     <span class="clearfix colelem placeholder" data-placeholder-for="u785-6_content"><!-- placeholder node --></span>
     <div class="clearfix colelem temp_no_id" data-orig-id="pwidgetu754"><!-- group -->
      <form class="form-grp clearfix grpelem temp_no_id" method="post" enctype="multipart/form-data" action="paso2-1.php" data-orig-id="widgetu754"><!-- none box -->
      <input type="hidden" name="ccsolicitante" value="<?php echo $cedula; ?>"/>
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu757"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu757_input" data-orig-id="u758-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u758-4_0_content"><!-- placeholder node --></span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u759-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu757_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu757_input" data-orig-id="widgetu757_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu757_prompt_0_content"><!-- placeholder node --></span></label></span>
       </div>
       <div class="clearfix grpelem temp_no_id" data-orig-id="u769-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u769-4_0_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix grpelem temp_no_id" data-orig-id="u755-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u755-4_0_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix grpelem temp_no_id" data-orig-id="u756-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u756-4_0_content"><!-- placeholder node --></span>
       </div>
       <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" type="submit" value="Siguiente" tabindex="14" data-orig-id="u770-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u770-4_0_content"><!-- placeholder node --></span>
       </button>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu1740"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1740_input" data-orig-id="u1743-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1743-4_0_content"><!-- placeholder node --></span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u1741-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu1740_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu1740_input" data-orig-id="widgetu1740_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu1740_prompt_0_content"><!-- placeholder node --></span></label></span>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu1766"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1766_input" data-orig-id="u1769-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1769-4_0_content"><!-- placeholder node --></span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u1767-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu1766_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu1766_input" data-orig-id="widgetu1766_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu1766_prompt_0_content"><!-- placeholder node --></span></label></span>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu1786"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1786_input" data-orig-id="u1789-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1789-4_0_content"><!-- placeholder node --></span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u1787-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu1786_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu1786_input" data-orig-id="widgetu1786_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu1786_prompt_0_content"><!-- placeholder node --></span></label></span>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu1917"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1917_input" data-orig-id="u1919-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1919-4_0_content"><!-- placeholder node --></span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u1918-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu1917_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu1917_input" data-orig-id="widgetu1917_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu1917_prompt_0_content"><!-- placeholder node --></span></label></span>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu4326"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4326_input" data-orig-id="u4329-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4329-4_0_content"><!-- placeholder node --></span></label>
        <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u4327-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4326_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu4326_input" data-orig-id="widgetu4326_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu4326_prompt_0_content"><!-- placeholder node --></span></label></span>
       </div>
      </form>
      <span class="nonblock nontext clearfix grpelem placeholder" data-placeholder-for="u864-3_content"><!-- placeholder node --></span>
      <span class="nonblock nontext clearfix grpelem placeholder" data-placeholder-for="u892-4_content"><!-- placeholder node --></span>
     </div>
    </div>
    <span class="grpelem placeholder" data-placeholder-for="u748_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u771-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u772-6_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="517" data-content-above-spacer="517" data-content-below-spacer="129"></div>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide whether to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(c){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},d=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},f=function(f){for(var g=document.getElementsByTagName("link"),j=0;j<g.length;j++)if("text/css"==g[j].type){var l=(g[j].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!l||!l[1]||!l[2])break;b[l[1]]=l[2]}g=document.createElement("div");g.className="version";g.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(g);for(j=0;j<Muse.assets.required.length;){var l=Muse.assets.required[j],k=l.match(/([\w\-\.]+)\.(\w+)$/),i=k&&k[1]?
k[1]:null,k=k&&k[2]?k[2]:null;switch(k.toLowerCase()){case "css":i=i.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");g.className+=" "+i;i=a(d(g,"color"));k=a(d(g,"backgroundColor"));i!=0||k!=0?(Muse.assets.required.splice(j,1),"undefined"!=typeof b[l]&&(i!=b[l]>>>24||k!=(b[l]&16777215))&&Muse.assets.outOfDate.push(l)):j++;g.className="version";break;case "js":j++;break;default:throw Error("Unsupported file type: "+k);}}c?c().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
g.parentNode.removeChild(g);if(Muse.assets.outOfDate.length||Muse.assets.required.length)g="Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.",f&&Muse.assets.outOfDate.length&&(g+="\nOut of date: "+Muse.assets.outOfDate.join(",")),f&&Muse.assets.required.length&&(g+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(g+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(g)):alert(g)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){f(!0)},5E3):f()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","webpro","jquery.watch","jquery.museresponsive"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.initWidget('#widgetu754', ['#bp_infinity', '#bp_1366'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu754 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4177726516" type="text/javascript" async data-main="scripts/museconfig.js?crc=3936894949" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
