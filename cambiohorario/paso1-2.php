<?php 
include('acciones/paso1-2.php');
include('acciones/index.php');

?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="es-ES">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.1.1.386"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "paso1-2.css"], "outOfDate":[]};
</script>
  
  <title>paso1-2</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4038565194"/>
  <link rel="stylesheet" type="text/css" href="css/paso1-2.css?crc=231256897" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_paso1-2.css?crc=262615044" id="nomq_pagesheet"/>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1367"><!-- responsive breakpoint node -->
   <div class="clearfix" id="page"><!-- column -->
    <div class="clearfix colelem" id="pu1116"><!-- group -->
     <div class="rounded-corners clearfix grpelem" id="u1116"><!-- group -->
      <div class="rounded-corners clearfix grpelem" id="u1118"><!-- column -->
       <img class="colelem temp_no_img_src" id="u1094-4" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u1094-4.png?crc=165465384" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
       <div class="rounded-corners clearfix colelem" id="u1096"><!-- column -->
        <div class="position_content" id="u1096_position_content">
         <div class="rounded-corners clearfix colelem" id="u1117"><!-- group -->
          <div class="rounded-corners clearfix grpelem" id="u1095"><!-- group -->
           <div class="clearfix grpelem shared_content" id="u1115-4" data-content-guid="u1115-4_content"><!-- content -->
            <p>Paso 1</p>
           </div>
          </div>
         </div>
         <img class="colelem temp_no_img_src" id="u1093-4" alt="Valide que sus datos estén correctos" width="390" height="33" data-orig-src="images/u1093-4.png?crc=246813007" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
         <div class="clearfix colelem" id="pu1709-6"><!-- group -->
          <div class="clearfix grpelem shared_content" id="u1709-6" data-content-guid="u1709-6_content"><!-- content -->
           <p><span id="u1709"> Estos son los días seleccionados:</span><?php echo $dia1 . " " .  $dia2 . " " . $dia3 . " " . $dia4 . " " . $dia5 . " " . $dia6; ?> <br><span id="u1709"> Ahora debe seleccionar el horario deseado para cada dia. </span><br/>
           <p></p>
            
       

          </div>

          <form class="form-grp clearfix grpelem" id="widgetu1097" method="post" enctype="multipart/form-data" action="paso2.php"><!-- none box -->
           <div class="clearfix grpelem" id="u1113-4"><!-- content -->
            <p class="shared_content" data-content-guid="u1113-4_0_content">Enviando formulario...</p>
           </div>
           <div class="clearfix grpelem" id="u1106-4"><!-- content -->
            <p class="shared_content" data-content-guid="u1106-4_0_content">El servidor ha detectado un error.</p>
           </div>
           <div class="clearfix grpelem" id="u1112-4"><!-- content -->
            <p class="shared_content" data-content-guid="u1112-4_0_content">Formulario recibido.</p>
           </div>
           <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u1111-4" type="submit" value="Siguiente" tabindex="9"><!-- content -->
            <div style="margin-top:-13px;height:13px;">
             <p class="shared_content" data-content-guid="u1111-4_0_0_content">Siguiente</p>
            </div>
           </button>
           <div class="fld-grp clearfix grpelem" id="widgetu1210" data-required="false"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u1211-4" for="widgetu1210_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1211-4_0_content" <?php if(empty($lunes)) { echo "style='color: #D6D3D3'"; } ?>>Lunes:</span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1212-4"><!-- content -->
            <?php   
            if(empty($lunes)) {
            echo $campovaciolunes;
             } else { 
            echo $horariosrlunes;
            }
            ?>
            
            <label class="wrapped-input fld-prompt" id="widgetu1210_prompt" for="widgetu1210_input"><span class="actAsPara shared_content" data-content-guid="widgetu1210_prompt_0_content"></span></label></span>
          </div>
           <div class="fld-grp clearfix grpelem" id="widgetu1107" data-required="false"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u1109-4" for="widgetu1107_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1109-4_0_content">Nombre completo:</span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1110-4"><!-- content --><input class="wrapped-input shared_content" type="text" spellcheck="false" id="widgetu1107_input" name="nombre" tabindex="1" data-content-guid="widgetu1107_input_content" value="<?php echo $nombre ?>" readonly/><label class="wrapped-input fld-prompt" id="widgetu1107_prompt" for="widgetu1107_input"><span class="actAsPara shared_content" data-content-guid="widgetu1107_prompt_0_content"></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu1102" data-required="false" data-type="number"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u1105-4" for="widgetu1102_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1105-4_0_content">Cédula:</span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1104-4"><!-- content --><input class="wrapped-input shared_content" type="number" spellcheck="false" id="widgetu1102_input" name="cedula" tabindex="2" data-content-guid="widgetu1102_input_content" value="<?php echo $cedula ?>" readonly/><label class="wrapped-input fld-prompt" id="widgetu1102_prompt" for="widgetu1102_input"><span class="actAsPara shared_content" data-content-guid="widgetu1102_prompt_0_content"></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu4531" data-required="true"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u4533-4" for="widgetu4531_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4533-4_0_content" <?php if(empty($miercoles)) { echo "style='color: #D6D3D3'"; } ?>>Miércoles</span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u4534-4"><!-- content -->
            <?php 
            if(empty($miercoles)) {
              echo $campovaciomiercoles;
               } else { 
              echo $horariosrmiercoles;
              }
            ?>
            <label class="wrapped-input fld-prompt" id="widgetu4531_prompt" for="widgetu4531_input"><span class="actAsPara shared_content" data-content-guid="widgetu4531_prompt_0_content"></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu4552" data-required="true"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u4554-5" for="widgetu4552_input"><!-- content --><span class="actAsPara shared_content" id="u4554-3" data-content-guid="u4554-3_content"><span id="u4554" <?php if(empty($viernes)) { echo "style='color: #D6D3D3'"; } ?>>Viernes</span><span id="u4554-2">:</span></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u4553-4"><!-- content -->
            <?php 
            if(empty($viernes)) {
              echo $campovacioviernes;
               } else { 
              echo $horariosrviernes;
              }
            ?>
            <label class="wrapped-input fld-prompt" id="widgetu4552_prompt" for="widgetu4552_input"><span class="actAsPara shared_content" data-content-guid="widgetu4552_prompt_0_content"></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu4572" data-required="true"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u4574-4" for="widgetu4572_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4574-4_0_content" <?php if(empty($sabado)) { echo "style='color: #D6D3D3'"; } ?>>Sábado:</span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u4573-4"><!-- content -->
            <?php 
               if(empty($sabado)) {
              echo $campovaciosabado;
               } else { 
              echo $horariosrsabado;
              }
            ?>
            <label class="wrapped-input fld-prompt" id="widgetu4572_prompt" for="widgetu4572_input"><span class="actAsPara shared_content" data-content-guid="widgetu4572_prompt_0_content"></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu4592" data-required="true"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u4593-4" for="widgetu4592_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4593-4_0_content"<?php if(empty($jueves)) { echo "style='color: #D6D3D3'"; } ?>>Jueves:</span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u4595-4"><!-- content -->
            <?php 
            if(empty($jueves)) {
              echo $campovaciojueves;
               } else { 
              echo $horariosrjueves;
              }
            ?>
            <label class="wrapped-input fld-prompt" id="widgetu4592_prompt" for="widgetu4592_input"><span class="actAsPara shared_content" data-content-guid="widgetu4592_prompt_0_content"></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu4612" data-required="true"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem" id="u4613-4" for="widgetu4612_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4613-4_0_content"<?php if(empty($martes)) { echo "style='color: #D6D3D3'"; } ?>>Martes:</span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u4615-4"><!-- content -->
          
            <?php 
            if(empty($martes)) {
              echo $campovaciomartes;
               } else { 
              echo $horariosrmartes;
              }
            ?>
            
            <label class="wrapped-input fld-prompt" id="widgetu4612_prompt" for="widgetu4612_input"><span class="actAsPara shared_content" data-content-guid="widgetu4612_prompt_0_content"></span></label></span>
           </div>
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="grpelem shared_content" id="u1119" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u1119_content"><!-- simple frame --></div>
   
     <div class="clearfix grpelem shared_content" id="u1114-6" data-content-guid="u1114-6_content"><!-- content -->
      <p>Seleccionar<br/>horario</p>
     </div>
     
    </div>
    <div class="pointer_cursor MuseLinkActive rounded-corners clearfix colelem shared_content" id="u4644" data-content-guid="u4644_content"><!-- group -->
              
    <a class="block" href="index.php"><!-- Block link tag --></a>
    
     <a class="nonblock nontext MuseLinkActive rounded-corners clearfix grpelem" id="u4645-4" href="index.php"><!-- content --><p>Regresar</p></a>
    </div>
    <div class="verticalspacer" data-offset-top="733" data-content-above-spacer="690" data-content-below-spacer="285"></div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1366" data-max-width="1366"><!-- responsive breakpoint node -->
   <div class="clearfix temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu1116"><!-- group -->
     <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u1116"><!-- group -->
      <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u1118"><!-- column -->
       <img class="colelem temp_no_id temp_no_img_src" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u1094-42.png?crc=165465384" data-orig-id="u1094-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
       <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u1096"><!-- column -->
        <div class="position_content temp_no_id" data-orig-id="u1096_position_content">
         <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u1117"><!-- group -->
          <div class="rounded-corners grpelem temp_no_id" data-orig-id="u1095"><!-- simple frame --></div>
         </div>
         <img class="colelem temp_no_id temp_no_img_src" alt="Valide que sus datos estén correctos" width="534" height="33" data-orig-src="images/u1093-42.png?crc=176829873" data-orig-id="u1093-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
         <div class="clearfix colelem temp_no_id" data-orig-id="pu1709-6"><!-- group -->
          <span class="clearfix grpelem placeholder" data-placeholder-for="u1709-6_content"><!-- placeholder node --></span>
          <form class="form-grp clearfix grpelem temp_no_id" method="post" enctype="multipart/form-data" action="paso2.php" data-orig-id="widgetu1097"><!-- none box -->
           <div class="clearfix grpelem temp_no_id" data-orig-id="u1113-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1113-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u1106-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1106-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u1112-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1112-4_0_content"><!-- placeholder node --></span>
           </div>
           <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" type="submit" value="Siguiente" tabindex="18" data-orig-id="u1111-4"><!-- content -->
            <div style="margin-top:-15px;height:15px;">
             <span class="placeholder" data-placeholder-for="u1111-4_0_0_content"><!-- placeholder node --></span>
            </div>
           </button>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu1210"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1210_input" data-orig-id="u1211-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1211-4_0_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u1212-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu1210_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu1210_input" data-orig-id="widgetu1210_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu1210_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu1107"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1107_input" data-orig-id="u1109-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1109-4_0_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u1110-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu1107_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu1107_input" data-orig-id="widgetu1107_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu1107_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="number" data-orig-id="widgetu1102"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1102_input" data-orig-id="u1105-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1105-4_0_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u1104-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu1102_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu1102_input" data-orig-id="widgetu1102_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu1102_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu4531"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4531_input" data-orig-id="u4533-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4533-4_0_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u4534-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4531_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu4531_input" data-orig-id="widgetu4531_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu4531_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu4552"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4552_input" data-orig-id="u4554-5"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4554-3_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u4553-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4552_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu4552_input" data-orig-id="widgetu4552_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu4552_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu4572"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4572_input" data-orig-id="u4574-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4574-4_0_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u4573-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4572_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu4572_input" data-orig-id="widgetu4572_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu4572_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu4592"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4592_input" data-orig-id="u4593-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4593-4_0_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u4595-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4592_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu4592_input" data-orig-id="widgetu4592_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu4592_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu4612"><!-- none box -->
            <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4612_input" data-orig-id="u4613-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4613-4_0_content"><!-- placeholder node --></span></label>
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u4615-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4612_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu4612_input" data-orig-id="widgetu4612_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu4612_prompt_0_content"><!-- placeholder node --></span></label></span>
           </div>
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
     <span class="grpelem placeholder" data-placeholder-for="u1119_content"><!-- placeholder node --></span>
     <span class="clearfix grpelem placeholder" data-placeholder-for="u1115-4_content"><!-- placeholder node --></span>
     <span class="clearfix grpelem placeholder" data-placeholder-for="u1114-6_content"><!-- placeholder node --></span>
    </div>
    <span class="pointer_cursor MuseLinkActive rounded-corners clearfix colelem placeholder" data-placeholder-for="u4644_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="706" data-content-above-spacer="650" data-content-below-spacer="336"></div>
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
Muse.Utils.initWidget('#widgetu1097', ['#bp_infinity', '#bp_1366'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1097 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4177726516" type="text/javascript" async data-main="scripts/museconfig.js?crc=3936894949" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
