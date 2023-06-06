<?php 
include('acciones/index.php');
include('session.php');
include('db.php');


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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <title>paso1</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4038565194"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=3959015725" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_index.css?crc=101099475" id="nomq_pagesheet"/>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1367"><!-- responsive breakpoint node -->
   <div class="clearfix" id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem" id="u194"><!-- group -->
     <div class="rounded-corners clearfix grpelem" id="u178"><!-- column -->
      <img class="colelem temp_no_img_src" id="u284-4" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u284-4.png?crc=165465384" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem" id="u198"><!-- column -->
       <div class="position_content" id="u198_position_content">
        <div class="rounded-corners clearfix colelem" id="u252"><!-- group -->
         <div class="rounded-corners clearfix grpelem" id="u258"><!-- group -->
          <div class="clearfix grpelem shared_content" id="u302-4" data-content-guid="u302-4_content"><!-- content -->
           <p>Paso 1</p>
          </div>
         </div>
        </div>
        <img class="colelem temp_no_img_src" id="u430-4" alt="Valide que sus datos estén correctos" width="390" height="33" data-orig-src="images/u430-4.png?crc=246813007" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
        <form class="form-grp clearfix colelem" method="post" enctype="multipart/form-data" action="paso1-2.php"><!-- none box -->
         <div class="fld-grp clearfix grpelem" id="widgetu364" data-required="true"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u365-4" for="widgetu364_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u365-4_0_content">Nombre completo:</span></label>
          <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u366-4"><!-- content --><input class="wrapped-input shared_content" type="text" spellcheck="false" id="widgetu364_input" name="nombre" tabindex="1" data-content-guid="widgetu364_input_content" value="<?php echo $nombre ?>"required="required" readonly/><label class="wrapped-input fld-prompt" id="widgetu364_prompt" for="widgetu364_input"><span class="actAsPara shared_content" data-content-guid="widgetu364_prompt_0_content"></span></label></span>
         </div>
         <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u363-4" type="submit" value="Siguiente" tabindex="10"><!-- content -->
          <div style="margin-top:-13px;height:13px;">
           <p class="shared_content" data-content-guid="u363-4_0_0_content">Siguiente</p>
          </div>
         </button>
         <div class="fld-grp clearfix grpelem" id="widgetu1482" data-required="false" data-type="checkbox"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u1484-4" for="widgetu1482_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1484-4_0_content" <?php  if($dia>="1") { echo "style='color: #D6D3D3;'"; }  if (($dia=="5") && ($horaactual>="14")) { echo "id='cambiohora'";  } else {} if(empty($ccsolicitantech1lunes) && empty($ccsolicitantech2lunes )){ } else { echo "style='color:  #D6D3D3'"; } if(empty($ccfacilitadorch1lunes) && empty($ccfacilitadorch2lunes )){ } else { echo "style='color:  #D6D3D3'"; }?>>Lunes - <?php echo $flunes ?></span></label>
          <div class="fld-checkbox museBGSize grpelem" id="u1495"><!-- simple frame -->
           <input class="wrapped-input shared_content" type="checkbox" value="lunes" id="widgetu1482_input" name="lunes" tabindex="4" data-content-guid="widgetu1482_input_content" <?php if($dia>="1") { echo "disabled "; } if (($dia=="5") && ($horaactual>="14") && empty($ccsolicitantech1lunes) && empty($ccsolicitantech2lunes)) {echo "enabled";} ?> />
           <label for="widgetu1482_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem" id="widgetu1581" data-required="false" data-type="checkbox"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u1584-4" for="widgetu1581_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1584-4_0_content" <?php  if($dia>="2") { echo "style='color: #D6D3D3'"; } if (($dia=="5") && ($horaactual>="14")) { echo "id='cambiohora'";  } else {} if(empty($ccsolicitantech1martes) && empty($ccsolicitantech2martes )){ } else { echo "style='color:  #D6D3D3'"; } if(empty($ccfacilitadorch1martes) && empty($ccfacilitadorch2martes )){ } else { echo "style='color:  #D6D3D3'"; }?>>Martes - <?php echo $fmartes ?></span></label>
          <div class="fld-checkbox museBGSize grpelem" id="u1582"><!-- simple frame -->
           <input class="wrapped-input shared_content" type="checkbox" value="martes" id="widgetu1581_input" name="martes" tabindex="5" data-content-guid="widgetu1581_input_content"<?php if($dia>="2") { echo "disabled "; } if (($dia=="5") && ($horaactual>="14") && empty($ccsolicitantech1martes) && empty($ccsolicitantech2martes)) {echo "enabled";} ?> />
           <label for="widgetu1581_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem" id="widgetu1601" data-required="false" data-type="checkbox"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u1602-4" for="widgetu1601_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1602-4_0_content"<?php  if($dia>="3") { echo "style='color: #D6D3D3'"; }if (($dia=="5") && ($horaactual>="14")) { echo "id='cambiohora'";  }else {} if(empty($ccsolicitantech1miercoles) && empty($ccsolicitantech2miercoles )){ } else { echo "style='color:  #D6D3D3'"; } if(empty($ccfacilitadorch1miercoles) && empty($ccfacilitadorch2miercoles )){ } else { echo "style='color:  #D6D3D3'"; }?>>Miércoles -<?php echo $fmiercoles ?></span></label>
          <div class="fld-checkbox museBGSize grpelem" id="u1603"><!-- simple frame -->
           <input class="wrapped-input shared_content" type="checkbox" value="miercoles" id="widgetu1601_input" name="miercoles" tabindex="6" data-content-guid="widgetu1601_input_content"<?php if($dia>="3") { echo "disabled "; }if (($dia=="5") && ($horaactual>="14")) {echo "enabled";} if(empty($ccsolicitantech1miercoles) && empty($ccsolicitantech2miercoles) && empty($ccfacilitadorch1miercoles) && empty($ccfacilitadorch2miercoles)){echo "enabled";} else { echo "disabled "; } ?>/>
           <label for="widgetu1601_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem" id="widgetu1621" data-required="false" data-type="checkbox"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u1622-4" for="widgetu1621_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1622-4_0_content"<?php  if($dia>="4") { echo "style='color: #D6D3D3'"; }if (($dia=="5") && ($horaactual>="14")) { echo "id='cambiohora'";  }else {} if(empty($ccsolicitantech1jueves) && empty($ccsolicitantech2jueves )){ } else { echo "style='color:  #D6D3D3'"; } if(empty($ccfacilitadorch1jueves) && empty($ccfacilitadorch2jueves )){ } else { echo "style='color:  #D6D3D3'"; } ?>>Jueves - <?php echo $fjueves ?></span></label>
          <div class="fld-checkbox museBGSize grpelem" id="u1624"><!-- simple frame -->
           <input class="wrapped-input shared_content" type="checkbox" value="jueves" id="widgetu1621_input" name="jueves" tabindex="7" data-content-guid="widgetu1621_input_content"<?php if($dia>="4") { echo "disabled "; }if (($dia=="5") && ($horaactual>="14")) {echo "enabled";} if(empty($ccsolicitantech1jueves) && empty($ccsolicitantech2jueves) && empty($ccfacilitadorch1jueves) && empty($ccfacilitadorch2jueves)){echo "enabled";} else { echo "disabled "; } ?>/>
           <label for="widgetu1621_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem" id="widgetu1870" data-required="false" data-type="checkbox"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u1873-4" for="widgetu1870_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u1873-4_0_content"<?php  if($dia>="5") { echo "style='color: #D6D3D3'"; }if (($dia=="5") && ($horaactual>="14")) { echo "id='cambiohora'";  } else {} if(empty($ccsolicitantech1viernes) && empty($ccsolicitantech2viernes )){ } else { echo "style='color:  #D6D3D3'"; }?>>Viernes - <?php echo $fviernes ?></span></label>
          <div class="fld-checkbox museBGSize grpelem" id="u1871"><!-- simple frame -->
           <input class="wrapped-input shared_content" type="checkbox" value="viernes" id="widgetu1870_input" name="viernes" tabindex="8" data-content-guid="widgetu1870_input_content"<?php if($dia>="5") { echo "disabled "; }if (($dia=="5") && ($horaactual>="14")) {echo "enabled";}  if(empty($ccsolicitantech1viernes) && empty($ccsolicitantech2viernes) && empty($ccfacilitadorch1viernes) && empty($ccfacilitadorch2viernes)){echo "enabled";} else { echo "disabled "; }?>/>
           <label for="widgetu1870_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem" id="widgetu4010" data-required="false" data-type="checkbox"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u4012-4" for="widgetu4010_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4012-4_0_content" <?php  if($dia>="6") { echo "style='color: #D6D3D3'"; }if (($dia=="5") && ($horaactual>="14")) { echo "id='cambiohora'";  } else {} if(empty($ccsolicitantech1sabado) && empty($ccsolicitantech2sabado )){ } else { echo "style='color:  #D6D3D3'"; } ?>>Sábado - <?php echo $fsabado ?></span></label>
          <div class="fld-checkbox museBGSize grpelem" id="u4011"><!-- simple frame -->
           <input class="wrapped-input shared_content" type="checkbox" value="sabado" id="widgetu4010_input" name="sabado" tabindex="9" data-content-guid="widgetu4010_input_content" <?php if($dia>="6") { echo "disabled "; }if (($dia=="5") && ($horaactual>="14")) {echo "enabled";} if(empty($ccsolicitantech1sabado) && empty($ccsolicitantech2sabado) && empty($ccfacilitadorch1sabadoñ) && empty($ccfacilitadorch2sabado) ){echo "enabled";} else { echo "disabled "; } ?>/>
           <label for="widgetu4010_input"></label>
          </div>
         </div>
         <div style="z-index:-1000" class="fld-grp clearfix grpelem" id="widgetu4204" data-required="false"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u4205-4" for="widgetu4204_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4205-4_0_content">¿Que día desea cambiar?</span></label>
         </div>
         <div class="fld-grp clearfix grpelem" id="widgetu4778" data-required="true"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem" id="u4781-4" for="widgetu4778_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u4781-4_0_content">Cédula:</span></label>
          <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u4780-4"><!-- content --><input class="wrapped-input shared_content" type="tel" spellcheck="false" id="widgetu4778_input" name="cedula" tabindex="2" data-content-guid="widgetu4778_input_content" value="<?php echo $cedula ?>" readonly/><label class="wrapped-input fld-prompt" id="widgetu4778_prompt" for="widgetu4778_input"><span class="actAsPara shared_content" data-content-guid="widgetu4778_prompt_0_content"></span></label></span>
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
    <div class="grpelem shared_content" id="u272" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u272_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u306-6" data-content-guid="u306-6_content"><!-- content -->
     <p>Seleccionar<br/>día</p>
    </div>
    <div class="verticalspacer" data-offset-top="571" data-content-above-spacer="563" data-content-below-spacer="61"></div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxunchecked.jpg?crc=495023700" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxuncheckedrollover.jpg?crc=4076496830" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxuncheckedmousedown.jpg?crc=361678653" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxchecked.jpg?crc=477278992" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxcheckedrollover.jpg?crc=435737969" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxcheckedmousedown.jpg?crc=4004261994" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_1366" data-max-width="1366"><!-- responsive breakpoint node -->
   <div class="clearfix temp_no_id" data-orig-id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u194"><!-- group -->
     <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u178"><!-- column -->
      <img class="colelem temp_no_id temp_no_img_src" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u284-42.png?crc=165465384" data-orig-id="u284-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u198"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u198_position_content">
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u252"><!-- group -->
         <div class="rounded-corners grpelem temp_no_id" data-orig-id="u258"><!-- simple frame --></div>
        </div>
        <img class="colelem temp_no_id temp_no_img_src" alt="Valide que sus datos estén correctos" width="534" height="33" data-orig-src="images/u430-42.png?crc=176829873" data-orig-id="u430-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
        <form class="form-grp clearfix colelem temp_no_id" method="post" enctype="multipart/form-data" action="paso1-2.php"><!-- none box -->
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu364"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu364_input" data-orig-id="u365-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u365-4_0_content"><!-- placeholder node --></span></label>
          <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u366-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu364_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu364_input" data-orig-id="widgetu364_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu364_prompt_0_content"><!-- placeholder node --></span></label></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="u372-4"><!-- content -->
          <span class="placeholder" data-placeholder-for="u372-4_0_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="u362-4"><!-- content -->
          <span class="placeholder" data-placeholder-for="u362-4_0_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="u357-3"><!-- content -->
          <span class="placeholder" data-placeholder-for="u357-3_0_content"><!-- placeholder node --></span>
         </div>
         <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" type="submit" value="Siguiente" tabindex="20" data-orig-id="u363-4"><!-- content -->
          <div style="margin-top:-15px;height:15px;">
           <span class="placeholder" data-placeholder-for="u363-4_0_0_content"><!-- placeholder node --></span>
          </div>
         </button>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu1482"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1482_input" data-orig-id="u1484-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1484-4_0_content"><!-- placeholder node --></span></label>
          <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u1495"><!-- simple frame -->
           <span class="wrapped-input placeholder" data-placeholder-for="widgetu1482_input_content"><!-- placeholder node --></span>
           <label for="widgetu1482_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu1581"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1581_input" data-orig-id="u1584-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1584-4_0_content"><!-- placeholder node --></span></label>
          <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u1582"><!-- simple frame -->
           <span class="wrapped-input placeholder" data-placeholder-for="widgetu1581_input_content"><!-- placeholder node --></span>
           <label for="widgetu1581_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu1601"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1601_input" data-orig-id="u1602-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1602-4_0_content"><!-- placeholder node --></span></label>
          <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u1603"><!-- simple frame -->
           <span class="wrapped-input placeholder" data-placeholder-for="widgetu1601_input_content"><!-- placeholder node --></span>
           <label for="widgetu1601_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu1621"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1621_input" data-orig-id="u1622-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1622-4_0_content"><!-- placeholder node --></span></label>
          <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u1624"><!-- simple frame -->
           <span class="wrapped-input placeholder" data-placeholder-for="widgetu1621_input_content"><!-- placeholder node --></span>
           <label for="widgetu1621_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu1870"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu1870_input" data-orig-id="u1873-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u1873-4_0_content"><!-- placeholder node --></span></label>
          <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u1871"><!-- simple frame -->
           <span class="wrapped-input placeholder" data-placeholder-for="widgetu1870_input_content"><!-- placeholder node --></span>
           <label for="widgetu1870_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu4010"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4010_input" data-orig-id="u4012-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4012-4_0_content"><!-- placeholder node --></span></label>
          <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u4011"><!-- simple frame -->
           <span class="wrapped-input placeholder" data-placeholder-for="widgetu4010_input_content"><!-- placeholder node --></span>
           <label for="widgetu4010_input"></label>
          </div>
         </div>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu4204"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4204_input" data-orig-id="u4205-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4205-4_0_content"><!-- placeholder node --></span></label>
          <span class="" data-orig-id="u4206-3" type="hidden"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4204_input_content"><!-- placeholder node --></span></span>
         </div>
         <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu4778"><!-- none box -->
          <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu4778_input" data-orig-id="u4781-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u4781-4_0_content"><!-- placeholder node --></span></label>
          <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u4780-4"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu4778_input_content"><!-- placeholder node --></span><label class="wrapped-input fld-prompt temp_no_id" for="widgetu4778_input" data-orig-id="widgetu4778_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu4778_prompt_0_content"><!-- placeholder node --></span></label></span>
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
    <span class="grpelem placeholder" data-placeholder-for="u272_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u302-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u306-6_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="511" data-content-above-spacer="510" data-content-below-spacer="128"></div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxunchecked.jpg?crc=495023700" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxuncheckedrollover.jpg?crc=4076496830" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxuncheckedmousedown.jpg?crc=361678653" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxchecked.jpg?crc=477278992" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxcheckedrollover.jpg?crc=435737969" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/checkboxcheckedmousedown.jpg?crc=4004261994" alt="" src="images/blank.gif?crc=4208392903"/>

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
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","webpro","jquery.watch","jquery.museresponsive"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.initWidget('#widgetu356', ['#bp_infinity', '#bp_1366'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu356 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4177726516" type="text/javascript" async data-main="scripts/museconfig.js?crc=3936894949" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
