<?php 
include('db.php');
include('session.php');

$nombre=$_GET['nombre'];
$ccsolicitante=$_GET['cedula'];

$lunes=$_GET['lunes'];
$martes=$_GET['martes'];
$miercoles=$_GET['miercoles'];
$jueves=$_GET['jueves'];
$viernes=$_GET['viernes'];
$sabado=$_GET['sabado'];



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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "paso2-1.css"], "outOfDate":[]};
</script>
  
  <title>paso2-1</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4038565194"/>
  <link rel="stylesheet" type="text/css" href="css/paso2-1.css?crc=4055800516" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_paso2-1.css?crc=532511667" id="nomq_pagesheet"/>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1367"><!-- responsive breakpoint node -->
   <div class="clearfix" id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem" id="u991"><!-- column -->
     <div class="position_content" id="u991_position_content">
      <img class="colelem temp_no_img_src" id="u996-4" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u996-4.png?crc=165465384" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem" id="u995"><!-- group -->
       <div class="rounded-corners clearfix grpelem" id="u987"><!-- column -->
        <div class="position_content" id="u987_position_content">
         <div class="rounded-corners clearfix colelem" id="u997"><!-- group -->
          <div class="rounded-corners clearfix grpelem" id="u998"><!-- group -->
           <div class="clearfix grpelem shared_content" id="u988-4" data-content-guid="u988-4_content"><!-- content -->
            <p>Paso 1</p>
           </div>
          </div>
          <div class="clearfix grpelem" id="pu990"><!-- group -->
           <div class="rounded-corners grpelem shared_content" id="u990" data-content-guid="u990_content"><!-- simple frame --></div>
           <div class="rounded-corners grpelem shared_content" id="u1356" data-content-guid="u1356_content"><!-- simple frame --></div>
          </div>
         </div>
         <div class="clearfix colelem" id="pu989-5"><!-- group -->
          <img class="grpelem temp_no_img_src" id="u989-5" alt="◉ Al dar clic en enviar la solicitud le llegara al agente el cual podrá aceptar o rechazar su solicitud de cambio de horario " width="736" height="69" data-orig-src="images/u989-5.png?crc=119470929" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <a class="nonblock nontext clearfix grpelem shared_content" id="u994-3" href="paso2.php" data-content-guid="u994-3_content"><!-- content --><p>&nbsp;</p></a>
          <a class="nonblock nontext clearfix grpelem shared_content" id="u993-4" href="paso2.php " data-content-guid="u993-4_content"><!-- content --><p>Atrás</p></a>
          <img class="grpelem temp_no_img_src" id="u1397-5" alt="◉ Si el agente acepta la solicitud de cambio su supervisor recibirá la notificación y aceptará o rechazará la solicitud " width="852" height="69" data-orig-src="images/u1397-5.png?crc=383797126" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <img class="grpelem temp_no_img_src" id="u1403-4" alt="◉ La pagina principal de Serviayuda le informará el estado de la solicitud" width="822" height="23" data-orig-src="images/u1403-4.png?crc=4039851655" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <form class="form-grp clearfix grpelem" method="post" enctype="multipart/form-data" action="ingresasolicitud.php"><!-- none box -->
        
          <input type="hidden" name="ccsolicitante" value="<?php echo $ccsolicitante; ?>"/>
          <input type="hidden" name="lunes" value="<?php echo $lunes; ?>"/>
          <input type="hidden" name="martes" value="<?php echo $martes; ?>"/>
          <input type="hidden" name="miercoles" value="<?php echo $miercoles; ?>"/>
          <input type="hidden" name="jueves" value="<?php echo $jueves; ?>"/>
          <input type="hidden" name="viernes" value="<?php echo $viernes; ?>"/>
          <input type="hidden" name="sabado" value="<?php echo $sabado; ?>"/>


           <div class="clearfix grpelem temp_no_id" data-orig-id="u1016-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1016-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u1014-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1014-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u1017-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1017-4_0_content"><!-- placeholder node --></span>
           </div>
           <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u1015-4" type="submit" value="Enviar" tabindex="4"><!-- content -->
            <div style="margin-top:-14px;height:14px;" class="shared_content" data-content-guid="u1015-4_0_content">
             <p>Enviar</p>
            </div>
           </button>
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="grpelem shared_content" id="u992" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u992_content"><!-- simple frame --></div>
    <div class="grpelem shared_content" id="u1018" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u1018_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u1000-4" data-content-guid="u1000-4_content"><!-- content -->
     <p>Paso 2</p>
    </div>
    <div class="clearfix grpelem shared_content" id="u1019-6" data-content-guid="u1019-6_content"><!-- content -->
     <p>Seleccionar <br/>agente</p>
    </div>
    <div class="clearfix grpelem shared_content" id="u999-6" data-content-guid="u999-6_content"><!-- content -->
     <p>Seleccionar <br/>día</p>
    </div>
    <div class="grpelem shared_content" id="u1357" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u1357_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u1358-4" data-content-guid="u1358-4_content"><!-- content -->
     <p>Paso 3</p>
    </div>
    <div class="clearfix grpelem shared_content" id="u1359-6" data-content-guid="u1359-6_content"><!-- content -->
     <p>Confirmar <br/>solicitud</p>
    </div>
    <div class="verticalspacer" data-offset-top="558" data-content-above-spacer="520" data-content-below-spacer="61"></div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1366" data-max-width="1366"><!-- responsive breakpoint node -->
   <div class="clearfix temp_no_id" data-orig-id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u991"><!-- column -->
     <div class="position_content temp_no_id" data-orig-id="u991_position_content">
      <img class="colelem temp_no_id temp_no_img_src" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u996-42.png?crc=165465384" data-orig-id="u996-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u995"><!-- group -->
       <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u987"><!-- column -->
        <div class="position_content temp_no_id" data-orig-id="u987_position_content">
         <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u997"><!-- group -->
          <div class="rounded-corners grpelem temp_no_id" data-orig-id="u998"><!-- simple frame --></div>
          <span class="rounded-corners grpelem placeholder" data-placeholder-for="u990_content"><!-- placeholder node --></span>
          <span class="rounded-corners grpelem placeholder" data-placeholder-for="u1356_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix colelem temp_no_id" data-orig-id="pu989-5"><!-- group -->
          <img class="grpelem temp_no_id temp_no_img_src" alt="◉ Al dar clic en enviar la solicitud le llegara al agente el cual podrá aceptar o rechazar su solicitud de cambio de horario " width="760" height="69" data-orig-src="images/u989-52.png?crc=4124199511" data-orig-id="u989-5" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <span class="nonblock nontext clearfix grpelem placeholder" data-placeholder-for="u994-3_content"><!-- placeholder node --></span>
          <span class="nonblock nontext clearfix grpelem placeholder" data-placeholder-for="u993-4_content"><!-- placeholder node --></span>
          <img class="grpelem temp_no_id temp_no_img_src" alt="◉ Si el agente acepta la solicitud de cambio su supervisor recibirá la notificación y aceptará o rechazará la solicitud " width="760" height="69" data-orig-src="images/u1397-52.png?crc=43182745" data-orig-id="u1397-5" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <img class="grpelem temp_no_id temp_no_img_src" alt="◉ La pagina principal de Serviayuda le informará el estado de la solicitud" width="534" height="46" data-orig-src="images/u1403-42.png?crc=370444975" data-orig-id="u1403-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <form class="form-grp clearfix grpelem" method="post" enctype="multipart/form-data" action="ingresasolicitud.php">
        <!-- CODIGO -->
          <input type="hidden" name="ccsolicitante" value="<?php echo $ccsolicitante; ?>"/>
          <input type="hidden" name="lunes" value="<?php echo $lunes; ?>"/>
          <input type="hidden" name="martes" value="<?php echo $martes; ?>"/>
          <input type="hidden" name="miercoles" value="<?php echo $miercoles; ?>"/>
          <input type="hidden" name="jueves" value="<?php echo $jueves; ?>"/>
          <input type="hidden" name="viernes" value="<?php echo $viernes; ?>"/>
          <input type="hidden" name="sabado" value="<?php echo $sabado; ?>"/>


           <div class="clearfix grpelem temp_no_id" data-orig-id="u1016-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1016-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u1014-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1014-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u1017-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1017-4_0_content"><!-- placeholder node --></span>
           </div>
           <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" type="submit" value="Enviar" tabindex="8" data-orig-id="u1015-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u1015-4_0_content"><!-- placeholder node --></span>
           </button>
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <span class="grpelem placeholder" data-placeholder-for="u992_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u1018_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u1000-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u1019-6_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u988-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u999-6_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u1357_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u1358-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u1359-6_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="451" data-content-above-spacer="450" data-content-below-spacer="129"></div>
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
Muse.Utils.initWidget('#widgetu1001', ['#bp_infinity', '#bp_1366'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1001 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4177726516" type="text/javascript" async data-main="scripts/museconfig.js?crc=3936894949" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>



