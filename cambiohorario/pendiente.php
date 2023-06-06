<?php
include('db.php');
include('session.php');

$ccsolicitante=$_POST['ccsolicitante'];
$ccfacilitador=$_POST['ccfacilitador'];

echo $ccsolicitante;
echo "<br>";
echo $ccfacilitador;
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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "pendiente.css"], "outOfDate":[]};
</script>
  
  <title>pendiente</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4038565194"/>
  <link rel="stylesheet" type="text/css" href="css/pendiente.css?crc=135829025" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_pendiente.css?crc=3909422788" id="nomq_pagesheet"/>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1367"><!-- responsive breakpoint node -->
   <div class="clearfix" id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem" id="u2080"><!-- column -->
     <div class="position_content" id="u2080_position_content">
      <img class="colelem temp_no_img_src" id="u2057-4" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u2057-4.png?crc=165465384" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem" id="u2083"><!-- group -->
       <div class="rounded-corners clearfix grpelem" id="u2056"><!-- column -->
        <div class="position_content" id="u2056_position_content">
         <div class="rounded-corners clearfix colelem" id="u2062"><!-- group -->
          <div class="rounded-corners clearfix grpelem" id="u2059"><!-- group -->
           <div class="clearfix grpelem shared_content" id="u2081-4" data-content-guid="u2081-4_content"><!-- content -->
            <p>Paso 1</p>
           </div>
          </div>
          <div class="clearfix grpelem" id="pu2085"><!-- group -->
           <div class="rounded-corners grpelem shared_content" id="u2085" data-content-guid="u2085_content"><!-- simple frame --></div>
           <div class="rounded-corners grpelem shared_content" id="u2086" data-content-guid="u2086_content"><!-- simple frame --></div>
          </div>
         </div>
         <div class="clearfix colelem" id="pu2049-5"><!-- group -->
          <img class="grpelem temp_no_img_src" id="u2049-5" alt="◉ Usted cuenta con una solicitud de cambio de horario pendiente, consulte con su supervisor el estado de la misma " width="736" height="69" data-orig-src="images/u2049-5.png?crc=4249552060" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <img class="grpelem temp_no_img_src" id="u2189-7" alt="Estado de la solicitud:El supervisor aun no ha aceptado el cambio de horario " width="736" height="69" data-orig-src="images/u2189-7.png?crc=3801403210" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <form class="form-grp clearfix grpelem" id="widgetu2063" method="post" enctype="multipart/form-data" action="scripts/form-u2063.php"><!-- none box -->
           <div class="fld-grp clearfix grpelem" id="widgetu2065" data-required="false"><!-- none box -->
            <span class="fld-textarea actAsDiv clearfix grpelem" id="u2066-3"><!-- content --><textarea class="wrapped-input shared_content" id="widgetu2065_input" name="custom_U2065" tabindex="2" data-content-guid="widgetu2065_input_content"></textarea></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu2069" data-required="true"><!-- none box -->
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2070-3"><!-- content --><input class="wrapped-input shared_content" type="text" spellcheck="false" id="widgetu2069_input" name="custom_U2069" tabindex="1" data-content-guid="widgetu2069_input_content"/></span>
           </div>
           <div class="fld-grp clearfix grpelem" id="widgetu2076" data-required="true" data-type="email"><!-- none box -->
            <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u2077-3"><!-- content --><input class="wrapped-input shared_content" type="email" spellcheck="false" id="widgetu2076_input" name="Email" tabindex="3" data-content-guid="widgetu2076_input_content"/></span>
           </div>
           <div class="clearfix grpelem" id="u2074-4"><!-- content -->
            <p class="shared_content" data-content-guid="u2074-4_0_content">Enviando formulario...</p>
           </div>
           <div class="clearfix grpelem" id="u2073-4"><!-- content -->
            <p class="shared_content" data-content-guid="u2073-4_0_content">El servidor ha detectado un error.</p>
           </div>
           <div class="clearfix grpelem" id="u2064-4"><!-- content -->
            <p class="shared_content" data-content-guid="u2064-4_0_content">Formulario recibido.</p>
           </div>
           <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u2075-4" type="submit" value="Aceptar" tabindex="4"><!-- content -->
            <div style="margin-top:-14px;height:14px;" class="shared_content" data-content-guid="u2075-4_0_content">
             <p>Aceptar</p>
            </div>
           </button>
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="grpelem shared_content" id="u2052" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u2052_content"><!-- simple frame --></div>
    <div class="grpelem shared_content" id="u2082" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u2082_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u2050-4" data-content-guid="u2050-4_content"><!-- content -->
     <p>Paso 2</p>
    </div>
    <div class="clearfix grpelem shared_content" id="u2055-6" data-content-guid="u2055-6_content"><!-- content -->
     <p>Seleccionar <br/>agente</p>
    </div>
    <div class="clearfix grpelem shared_content" id="u2060-6" data-content-guid="u2060-6_content"><!-- content -->
     <p>Seleccionar <br/>día</p>
    </div>
    <div class="grpelem shared_content" id="u2051" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7193,M12=-0.6947,M21=0.6947,M22=0.7193,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-12" data-mu-ie-matrix-dy="-12" data-content-guid="u2051_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u2048-4" data-content-guid="u2048-4_content"><!-- content -->
     <p>Paso 3</p>
    </div>
    <div class="clearfix grpelem shared_content" id="u2061-6" data-content-guid="u2061-6_content"><!-- content -->
     <p>Confirmar <br/>solicitud</p>
    </div>
    <div class="verticalspacer" data-offset-top="558" data-content-above-spacer="520" data-content-below-spacer="61"></div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1366" data-max-width="1366"><!-- responsive breakpoint node -->
   <div class="clearfix temp_no_id" data-orig-id="page"><!-- group -->
    <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u2080"><!-- column -->
     <div class="position_content temp_no_id" data-orig-id="u2080_position_content">
      <img class="colelem temp_no_id temp_no_img_src" alt="Solicitud cambio de horario" width="325" height="33" data-orig-src="images/u2057-42.png?crc=165465384" data-orig-id="u2057-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u2083"><!-- group -->
       <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u2056"><!-- column -->
        <div class="position_content temp_no_id" data-orig-id="u2056_position_content">
         <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u2062"><!-- group -->
          <div class="rounded-corners grpelem temp_no_id" data-orig-id="u2059"><!-- simple frame --></div>
          <span class="rounded-corners grpelem placeholder" data-placeholder-for="u2085_content"><!-- placeholder node --></span>
          <span class="rounded-corners grpelem placeholder" data-placeholder-for="u2086_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix colelem temp_no_id" data-orig-id="pu2049-5"><!-- group -->
          <img class="grpelem temp_no_id temp_no_img_src" alt="◉ Usted cuenta con una solicitud de cambio de horario pendiente, consulte con su supervisor el estado de la misma " width="760" height="69" data-orig-src="images/u2049-52.png?crc=3946223086" data-orig-id="u2049-5" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <img class="grpelem temp_no_id temp_no_img_src" alt="Estado de la solicitud:El supervisor aun no ha aceptado el cambio de horario " width="640" height="69" data-orig-src="images/u2189-72.png?crc=194635664" data-orig-id="u2189-7" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <form class="form-grp clearfix grpelem temp_no_id" method="post" enctype="multipart/form-data" action="scripts/form-u2063.php" data-orig-id="widgetu2063"><!-- none box -->
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu2065"><!-- none box -->
            <span class="fld-textarea actAsDiv clearfix grpelem temp_no_id" data-orig-id="u2066-3"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu2065_input_content"><!-- placeholder node --></span></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu2069"><!-- none box -->
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u2070-3"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu2069_input_content"><!-- placeholder node --></span></span>
           </div>
           <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-type="email" data-orig-id="widgetu2076"><!-- none box -->
            <span class="fld-input NoWrap actAsDiv clearfix grpelem temp_no_id" data-orig-id="u2077-3"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu2076_input_content"><!-- placeholder node --></span></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u2074-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u2074-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u2073-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u2073-4_0_content"><!-- placeholder node --></span>
           </div>
           <div class="clearfix grpelem temp_no_id" data-orig-id="u2064-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u2064-4_0_content"><!-- placeholder node --></span>
           </div>
           <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" type="submit" value="Aceptar" tabindex="8" data-orig-id="u2075-4"><!-- content -->
            <span class="placeholder" data-placeholder-for="u2075-4_0_content"><!-- placeholder node --></span>
           </button>
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <span class="grpelem placeholder" data-placeholder-for="u2052_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u2082_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u2050-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u2055-6_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u2081-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u2060-6_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u2051_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u2048-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u2061-6_content"><!-- placeholder node --></span>
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
Muse.Utils.initWidget('#widgetu2063', ['#bp_infinity', '#bp_1366'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu2063 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4177726516" type="text/javascript" async data-main="scripts/museconfig.js?crc=3936894949" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
