<?php
include('db.php');
include('session.php');
include('acciones/aceptacionaleatoria.php');
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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "aceptacion.css"], "outOfDate":[]};
</script>
  
  <title>aceptacion</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4038565194"/>
  <link rel="stylesheet" type="text/css" href="css/aceptacion.css?crc=279034441" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_aceptacion.css?crc=4121608543" id="nomq_pagesheet"/>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1367"><!-- responsive breakpoint node -->
   <div class="clearfix" id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem" id="u3186"><!-- column -->
     <div class="position_content" id="u3186_position_content">
      <img class="colelem temp_no_img_src" id="u3184-4" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u3184-4.png?crc=165465384" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem" id="u3163"><!-- column -->
       <div class="rounded-corners clearfix colelem shared_content" id="u3185" data-content-guid="u3185_content"><!-- group -->
        <div class="rounded-corners grpelem" id="u3161"><!-- simple frame --></div>
       </div>
       <img class="colelem temp_no_img_src" id="u3187-7" alt="Seleccione los dias a cambiar, para saber el agente y el nuevo horario relacionado con la solicitud debe pasar el mouse encima del dia habilitado." width="736" height="69" data-orig-src="images/u3187-7.png?crc=3762534591" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      </div>
     </div>
    </div>
    <div class="grpelem shared_content" id="u3164" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u3164_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u3162-4" data-content-guid="u3162-4_content"><!-- content -->
Aceptacion
    </div>
    <div class="rounded-corners clearfix grpelem" id="u3165"><!-- column -->
     <div class="position_content" id="u3165_position_content">
      <div class="clearfix colelem" id="pu3183-4"><!-- group -->
       <div class="clearfix grpelem shared_content" id="u3183-4" data-content-guid="u3183-4_content"><!-- content -->
        <p>Solicitud</p>
       </div>
       <img class="grpelem temp_no_img_src" id="u3271-4" alt="Días a cambiar: " width="736" height="33" data-orig-src="images/u3271-4.png?crc=4014512431" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
       <img class="grpelem temp_no_img_src" id="u3188-4" alt="¿Acepta el cambio de horario?" width="358" height="33" data-orig-src="images/u3188-4.png?crc=4086196636" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
       <form style="z-index:1000000" class="form-grp clearfix grpelem temp_no_id" method="post" enctype="multipart/form-data" action="acciones/agenteaceptaaleatorio.php">
        
        <div class="clearfix grpelem" id="u3315-3"><!-- content -->
         <p class="shared_content" data-content-guid="u3315-3_0_content">aaa</p>
        </div>
        <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u3321-3" type="submit" value="aaaaaaaa" tabindex="8"><!-- content -->
         <div style="margin-top:0px;height:12px; font-size:20; color:white;" class="shared_content" data-content-guid="u3321-3_0_content">
          <p>Aceptar</p>
         </div>
        </button>

        <div class="fld-grp clearfix grpelem" id="widgetu3373" data-required="false" data-type="checkbox"><!-- none box -->
         <label class="fld-label actAsDiv clearfix grpelem" id="u3376-4" for="widgetu3373_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u3376-4_0_content" title="<?php echo $solicitantelunes."-".$diasolicitadolunes?>" <?php if(empty($solicitantelunes)) { echo "style='color: #D6D3D3;'"; } ?>>Lunes</span></label>
         <div class="fld-checkbox museBGSize grpelem" id="u3392"><!-- simple frame -->
          <input class="wrapped-input shared_content" type="checkbox" value="lunes$<?php echo $solicitantelunes; ?>" id="widgetu3373_input" name="lunes" tabindex="4" data-content-guid="widgetu3373_input_content" <?php if(empty($solicitantelunes)) { echo "disabled"; } ?>/>
          <label for="widgetu3373_input"></label>
         </div>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu3458" data-required="false" data-type="checkbox"><!-- none box -->
         <label class="fld-label actAsDiv clearfix grpelem" id="u3461-4" for="widgetu3458_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u3461-4_0_content" title="<?php echo $solicitantemartes."-".$diasolicitadomartes ?>"<?php if(empty($solicitantemartes)) { echo "style='color: #D6D3D3;'"; } ?>>Martes</span></label>
         <div class="fld-checkbox museBGSize grpelem" id="u3460"><!-- simple frame -->
          <input class="wrapped-input shared_content" type="checkbox" value="martes$<?php echo $solicitantemartes; ?>" id="widgetu3458_input" name="martes" tabindex="2" data-content-guid="widgetu3458_input_content" <?php if(empty($solicitantemartes)) { echo "disabled"; } ?>/>
          <label for="widgetu3458_input"></label>
         </div>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu3482" data-required="false" data-type="checkbox"><!-- none box -->
         <label class="fld-label actAsDiv clearfix grpelem" id="u3484-4" for="widgetu3482_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u3484-4_0_content" title="<?php echo $solicitantemiercoles."-".$diasolicitadomiercoles ?>"<?php if(empty($solicitantemiercoles)) { echo "style='color: #D6D3D3;'"; } ?>>Miércoles</span></label>
         <div class="fld-checkbox museBGSize grpelem" id="u3483"><!-- simple frame -->
          <input class="wrapped-input shared_content" type="checkbox" value="miercoles$<?php echo $solicitantemiercoles; ?>" id="widgetu3482_input" name="miercoles" tabindex="5" data-content-guid="widgetu3482_input_content" <?php if(empty($solicitantemiercoles)) { echo "disabled"; } ?>/>
          <label for="widgetu3482_input"></label>
         </div>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu3506" data-required="false" data-type="checkbox"><!-- none box -->
         <label class="fld-label actAsDiv clearfix grpelem" id="u3509-4" for="widgetu3506_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u3509-4_0_content" title="<?php echo $solicitantejueves."-".$diasolicitadojueves ?>"<?php if(empty($solicitantejueves)) { echo "style='color: #D6D3D3;'"; } ?>>Jueves</span></label>
         <div class="fld-checkbox museBGSize grpelem" id="u3507"><!-- simple frame -->
          <input class="wrapped-input shared_content" type="checkbox" value="jueves$<?php echo $solicitantejueves; ?>" id="widgetu3506_input" name="jueves" tabindex="3" data-content-guid="widgetu3506_input_content"<?php if(empty($solicitantejueves)) { echo "disabled"; } ?>/>
          <label for="widgetu3506_input"></label>
         </div>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu3530" data-required="false" data-type="checkbox"><!-- none box -->
         <label class="fld-label actAsDiv clearfix grpelem" id="u3532-4" for="widgetu3530_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u3532-4_0_content" title="<?php echo $solicitanteviernes."-".$diasolicitadoviernes ?>"<?php if(empty($solicitanteviernes)) { echo "style='color: #D6D3D3;'"; } ?>>Viernes</span></label>
         <div class="fld-checkbox museBGSize grpelem" id="u3531"><!-- simple frame -->
          <input class="wrapped-input shared_content" type="checkbox" value="viernes$<?php echo $solicitanteviernes; ?>" id="widgetu3530_input" name="viernes" tabindex="6" data-content-guid="widgetu3530_input_content"<?php if(empty($solicitanteviernes)) { echo "disabled"; } ?>/>
          <label for="widgetu3530_input"></label>
         </div>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu3554" data-required="false" data-type="checkbox"><!-- none box -->
         <label class="fld-label actAsDiv clearfix grpelem" id="u3556-4" for="widgetu3554_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u3556-4_0_content" title="<?php echo $solicitantesabado."-".$diasolicitadosabado ?>"<?php if(empty($solicitantesabado)) { echo "style='color: #D6D3D3;'"; } ?>>Sábado</span></label>
         <div class="fld-checkbox museBGSize grpelem" id="u3555"><!-- simple frame -->
          <input class="wrapped-input shared_content" type="checkbox" value="sabado$<?php echo $solicitantesabado; ?>" id="widgetu3554_input" name="sabado" tabindex="7" data-content-guid="widgetu3554_input_content" <?php if(empty($solicitantesabado)) { echo "disabled"; } ?>/>
          <label for="widgetu3554_input"></label>
         </div>
        </div>
       </form>
      </div>
      <div class="clearfix colelem shared_content" id="pu3239" data-content-guid="pu3239_content"><!-- group -->
       <div class="pointer_cursor rounded-corners clearfix grpelem" id="u3239"><!-- group -->

       </div>
       <div class="pointer_cursor rounded-corners clearfix grpelem" id="u3247"><!-- group -->
        <a class="block" href="paso1-2.php"><!-- Block link tag --></a>
        <a class="nonblock nontext clearfix grpelem" id="u3253-4" href="paso1-2.php"><!-- content --><p>Rechazar</p></a>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="521" data-content-above-spacer="520" data-content-below-spacer="61"></div>
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
    <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u3186"><!-- column -->
     <div class="position_content temp_no_id" data-orig-id="u3186_position_content">
      <img class="colelem temp_no_id temp_no_img_src" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u3184-42.png?crc=165465384" data-orig-id="u3184-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u3163"><!-- column -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u3185_content"><!-- placeholder node --></span>
       <p class="colelem temp_no_id temp_no_img_src" alt="El agente John Fredy Gutierrez Orozco con horario 7:00 - 4:30 desea cambiar el horario con usted (09:30 - 07:30) " width="746" height="69" data-orig-src="images/u3187-72.png?crc=421859312" data-orig-id="u3187-7" src="images/blank.gif?crc=4208392903" style="font-size: 18px"> Seleccione los dias a cambiar, para saber el agente y el nuevo horario relacionado con la solicitud debe pasar el mouse encima del dia habilitado. </p><!-- rasterized frame -->
      </div>
     </div>
    </div>
    <span class="grpelem placeholder" data-placeholder-for="u3164_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u3162-4_content"><!-- placeholder node --></span>
    <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u3165"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu3183-4"><!-- group -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u3183-4_content"><!-- placeholder node --></span>
      <img class="grpelem temp_no_id temp_no_img_src" alt="Días a cambiar: " width="538" height="28" data-orig-src="images/u3271-42.png?crc=3916556214" data-orig-id="u3271-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <img class="grpelem temp_no_id temp_no_img_src" alt="¿Acepta el cambio de horario?" width="333" height="28" data-orig-src="images/u3188-42.png?crc=325297586" data-orig-id="u3188-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <form class="form-grp clearfix grpelem temp_no_id" method="post" enctype="multipart/form-data" action="acciones/agenteaceptaaleatorio.php">
      <!-- none box -->
       <div class="clearfix grpelem temp_no_id" data-orig-id="u3314-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u3314-4_0_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix grpelem temp_no_id" data-orig-id="u3320-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u3320-4_0_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix grpelem temp_no_id" data-orig-id="u3315-3"><!-- content -->
        <span class="placeholder" data-placeholder-for="u3315-3_0_content"><!-- placeholder node --></span>
       </div>
       <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" type="submit" value="aaaa" tabindex="16" data-orig-id="u3321-3"><!-- content -->
        <span class="placeholder" data-placeholder-for="u3321-3_0_content"><!-- placeholder node --></span>
       </button>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu3316"><!-- none box -->
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu3373"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu3373_input" data-orig-id="u3376-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u3376-4_0_content"><!-- placeholder node --></span></label>
        <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u3392"><!-- simple frame -->
         <span class="wrapped-input placeholder" data-placeholder-for="widgetu3373_input_content"><!-- placeholder node --></span>
         <label for="widgetu3373_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu3458"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu3458_input" data-orig-id="u3461-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u3461-4_0_content"><!-- placeholder node --></span></label>
        <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u3460"><!-- simple frame -->
         <span class="wrapped-input placeholder" data-placeholder-for="widgetu3458_input_content"><!-- placeholder node --></span>
         <label for="widgetu3458_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu3482"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu3482_input" data-orig-id="u3484-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u3484-4_0_content"><!-- placeholder node --></span></label>
        <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u3483"><!-- simple frame -->
         <span class="wrapped-input placeholder" data-placeholder-for="widgetu3482_input_content"><!-- placeholder node --></span>
         <label for="widgetu3482_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu3506"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu3506_input" data-orig-id="u3509-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u3509-4_0_content"><!-- placeholder node --></span></label>
        <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u3507"><!-- simple frame -->
         <span class="wrapped-input placeholder" data-placeholder-for="widgetu3506_input_content"><!-- placeholder node --></span>
         <label for="widgetu3506_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu3530"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu3530_input" data-orig-id="u3532-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u3532-4_0_content"><!-- placeholder node --></span></label>
        <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u3531"><!-- simple frame -->
         <span class="wrapped-input placeholder" data-placeholder-for="widgetu3530_input_content"><!-- placeholder node --></span>
         <label for="widgetu3530_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-type="checkbox" data-orig-id="widgetu3554"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" for="widgetu3554_input" data-orig-id="u3556-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u3556-4_0_content"><!-- placeholder node --></span></label>
        <div class="fld-checkbox museBGSize grpelem temp_no_id" data-orig-id="u3555"><!-- simple frame -->
         <span class="wrapped-input placeholder" data-placeholder-for="widgetu3554_input_content"><!-- placeholder node --></span>
         <label for="widgetu3554_input"></label>
        </div>
       </div>
      </form>
     </div>
     <span class="clearfix colelem placeholder" data-placeholder-for="pu3239_content"><!-- placeholder node --></span>
    </div>
    <div class="verticalspacer" data-offset-top="451" data-content-above-spacer="450" data-content-below-spacer="129"></div>
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
Muse.Utils.initWidget('#widgetu3305', ['#bp_infinity', '#bp_1366'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu3305 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4177726516" type="text/javascript" async data-main="scripts/museconfig.js?crc=3936894949" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
