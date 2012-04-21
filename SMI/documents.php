<?php
include 'logic/parametros.php';
include 'logic/adminWeb.php';
include 'logic/functions.php';
//INSTANCIA DE LA CLASE ENCARGADA DE LOS PARAMETROS
$param=new parametros();
$aw=new adminWeb();
$fun=new functions();
//
$pathFtp="tpl/img/Administrador/";
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html
	class="no-js" lang="en">
<!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="www-segurosmedicosinternacionales-com"
	data-template-set="html5-reset">
<meta name="viewport" content="width=1200">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Inicio | Bienvenidos - Seguros Medicos Internacionales</title>
<meta name="title" content="">
<meta name="description" content="">
<meta name="author" content="Seguros Medicos Internacionales">
<meta name="Copyright"
	content="Copyright © 2011 Seguros Medicos Internacionales All Rights Reserved">
<![if !IE]>
<!--- IE FIXURE FONT REPLACE GOOGLE API - OTHER BROWSER OK!-->
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,700,600,400'
	rel='stylesheet' type='text/css'>
<![endif]>
<!-- Uncomment to use; use thoughtfully!
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
<link rel="Shortcut Icon" href="tpl/img/favicon.ico">
<link rel="icon" href="tpl/img/favicon.ico" type="image/x-icon">
<!-- CSS: screen, mobile & print are all in the same file -->
<link rel="stylesheet" href="tpl/css/style.css" type="text/css" />
<link type="text/css" href="tpl/css/start/jquery-ui-1.8.16.custom.css"
	rel="stylesheet" />
<!-- all our JS is at the bottom of the page, except for Modernizr. -->
<script src="tpl/js/modernizr-1.7.min.js"></script>
<script src="tpl/js/gen_validatorv4.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link href="tpl/css/jquery.selectbox.css" type="text/css"
	rel="stylesheet" />

<script src="https://www.google.com/jsapi"></script>
<script type="text/javascript"
	src="https://static.plupper.com/js/plupper.js"></script>
</head>

<!--Start of Zopim Live Chat Script-->

<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?g9y23H0LeKputTMayHiR1XCwQTEtPNI3';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>


<!--End of Zopim Live Chat Script-->


<script language="JavaScript">
/////////////////////////////////////////////////////////////////////////////////////////////////////////
//FUNCIONES AJAX PARA LA ACTUALIZACION DINAMICA DE LOS RESULTADOS DEL CARRITO DE COMPRAS.
function ajaxRequest(){
	 var activexmodes=["Msxml2.XMLHTTP", "Microsoft.XMLHTTP"] //activeX versions to check for in IE
	 if (window.ActiveXObject){ //Test for support for ActiveXObject in IE first (as XMLHttpRequest in IE7 is broken)
	  for (var i=0; i<activexmodes.length; i++){
	   try{
	    return new ActiveXObject(activexmodes[i])
	   }
	   catch(e){
	    //suppress error
	   }
	  }
	 }
	 else if (window.XMLHttpRequest) // if Mozilla, Safari etc
	  return new XMLHttpRequest()
	 else
	  return false
	}
var mygetrequest=new ajaxRequest();
//FUNCION QUE ENVIA UNA PETICION AJAX UTILIZANDO UN METODO GET A UN FICHERO QUE SE ENCARGA DE RETORNAR LOS RESULTADOS EN FORMA DE ITEMS EN EL CARRITO DE COMPRAS.
function cargarDocumentos(){	

	var mygetrequest=new ajaxRequest()
	 mygetrequest.onreadystatechange=function(){
	  if (mygetrequest.readyState==4){
	   if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
	    document.getElementById("infoPartn").innerHTML=mygetrequest.responseText
	   }
	   else{
	    alert("An error has occured making the request")
	   }
	  }
	 }
	var IdPais = encodeURIComponent(document.getElementById("f_quicklyCountry_id").value);	
	mygetrequest.open("GET", "logic/getDocsCountry.php?IdPais="+IdPais, true)
	mygetrequest.send(null)
	}	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
</script>


<body onload="cargarDocumentos()">

<div class="wrapper"><!--- START HEADER ---> <header>
<div id="headerTop"><!--- START THE TOP HEADER --->
<div id="headerCont"><a href="index.php"><img class="logoSMI"
	src="tpl/img/SegurosMedicosInternacionales.png" /></a><!-- LOGO SMI POSITION -->
<!-- HELP AREA RIGHT SMI -->
<div class="contactHelp"><img src="tpl/img/skypeIcon.png" /></div>


<div class="contactInfo">
<p>Línea Nacional Gratuita: <span>01-8000-123-009</span> </p>

</div>
<!-- ENDS AREA RIGHT SMI --></div>
</div>
<!---ENDS THE TOP HEADER---> <!--NAVIGATION BAR-->
<div id="barNav">
<div id="navContain"><nav>
<ul id="trans-nav">
	<li><a href="index.php">Inicio</a></li>
	<li><a href="about_us.php">Conocenos</a></li>
	<li><a href="clauses.php">Clausulados</a></li>
	<li><a href="services.php">Servicios</a>
	<li><a href="companies.php">Compañias</a></li>
	<li><a href="plans.php">Planes</a></li>
	<li><a href="contact_us.php">Contacto</a></li>
	<li><a href="faq.php">Preguntas Frecuentes </a></li>

</ul>
</nav></div>
</div>
<!---ENDS NAVIGATION BAR---> </header> <!--- ENDS HEADER ---> <!--START THE FULL BODY CONTAINER-->
<div id="mainBody" class="highLights"><!--FEATURED ZONE-->
<div id="featuredArea"><!--START THE SLIDER HOME-->
<div id="sliderHome"><!-- HERE START ALL SLIDER CONTENTS, CONFIGS, NAVS -->
<!--/topSlider-->
<div id="headerSlide">
<div class="wrap">
<div id="slide-holder">

<div id="slide-runner"><a href=""> <?php 
$nombreImagen="";
//IMAGEN 1 DE LA SECCION 1
$r= $aw->cargarComponenteBySeccion(1, 1);
while (!$r->EOF) {
	$nombreImagen=$pathFtp."".$r->fields[0];
	$r->MoveNext();
}
?> <img id="slide-img-1" src="<?php echo $nombreImagen; ?>"
	class="slide" alt="" /> </a> <a href=""> <?php 
	$nombreImagen="";
	//IMAGEN 8 DE LA SECCION 1
	$r= $aw->cargarComponenteBySeccion(1, 8);
	while (!$r->EOF) {
		$nombreImagen=$pathFtp."".$r->fields[0];

		$r->MoveNext();
	}
	?> <img id="slide-img-2" src="<?php echo $nombreImagen; ?>"
	class="slide" alt="" /> </a> <a href=""> <?php 
	$nombreImagen="";
	//IMAGEN 8 DE LA SECCION 1
	$r= $aw->cargarComponenteBySeccion(1, 9);
	while (!$r->EOF) {
		$nombreImagen=$pathFtp."".$r->fields[0];

		$r->MoveNext();
	}
	?> <img id="slide-img-3" src="<?php echo $nombreImagen; ?>"
	class="slide" alt="" /> </a> <a href=""> <?php 
	$nombreImagen="";
	//IMAGEN 8 DE LA SECCION 1
	$r= $aw->cargarComponenteBySeccion(1, 10);
	while (!$r->EOF) {
		$nombreImagen=$pathFtp."".$r->fields[0];

		$r->MoveNext();
	}
	?> <img id="slide-img-4" src="<?php echo $nombreImagen; ?>"
	class="slide" alt="" /> </a>
<div id="slide-controls">
<p id="slide-client" class="text"><strong>Destacado: </strong><span></span></p>
<p id="slide-desc" class="text"></p>
<p id="slide-nav"></p>
</div>
</div>
<!--content featured ends gallery here --></div>
</div>
</div>
<!--/headerSlider--></div>
<!--ENDS THE SLIDER HOME--> <!--- COUNTRY SELECT -->
<div id="checkCountry"><span class="checkTittle">¿Que documentos
necesitas para viajar?</span>
<p>Elija un país y conozca la documentación requerida para viajar.</p>
<br />

<form name="quicklySearch" id="quicklySearch" method=""><?php

$idPais=$_POST ["quicklyCountry_id"];

//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA
$r=$param->FillOrigenes();
echo "<select name=\"quicklyCountry_id\" id=\"f_quicklyCountry_id\">";
while (!$r->EOF) {
	
	if($r->fields[0]!=$idPais)
	echo "<option value=".$r->fields[0] ." >".$fun->fixEncoding($r->fields[2]) ."</option>";	
	else
	echo "<option value=".$r->fields[0] ." SELECTED>".$fun->fixEncoding( $r->fields[2] )."</option>";
	$r->MoveNext();
	
	
}
echo "</select> "; ?> <!-- CHOOSE A COUNTRY --> <input type="button"
	src="tpl/img/clear.png" class="submitQuickly" value="Consultar"
	onclick="cargarDocumentos()" /></form>
<script language="JavaScript" type="text/javascript"
	xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("quicklySearch");  
  frmvalidator.addValidation("quicklyCountry_id","dontselect=0","Debe Ingresar El País.");
  
//]]></script></div>
</div>
<!--ENDS FEATURED AREA--> <!--PARTNERS LOGOS PLACE HERE--->

<div id="partners"><a href="companies.php"><img
	src="tpl/img/Partners/TravelGuard.png" width="125" height="70"
	alt="TravelGuard"></a> <a href="companies.php"><img
	src="tpl/img/Partners/Qualitas.png" width="135" height="70"
	alt="Qualitas"></a> <a href="companies.php"><img
	src="tpl/img/Partners/AssistCard.png" width="155" height="70"
	alt="Assist Card"></a> <a href="companies.php"><img
	src="tpl/img/Partners/Coris.png" width="83" height="70" alt="Coris"></a>
<a href="companies.php"><img
	src="tpl/img/Partners/SegurViaje.png" width="89" height="70"
	alt="SegurViaje"></a> <a
	href="companies.php"><img
	src="tpl/img/Partners/Mafre.png" width="176" height="70" alt="Mafre"></a>
<a href="companies.php"><img
	src="tpl/img/Partners/TravelAce.png" width="60" height="70"
	alt="Travel Ace"></a> <img
	src="tpl/img/Partners/UniversalAssistance.png" width="60" height="70"
	alt="UniversalAssistance"> <img src="tpl/img/Partners/Safest.png"
	width="66" height="70" alt="Safest" href="companies.php"></div>
	
<!--ENDS LOGOS--> <!--START THE MAGIC QUOTE CONTENT--> <!--START THE DOC INFO PARTNER-->
<div id="infoPartn">






</div>
<!--ENDS THE BOX INFO PARTNER --> <!--END THE MAGIC QUOTE CONTENT--> <!--FAST NAVIGATION SPAN BUTTONS-->
<div id="fastNav"><!---BUTTONS HERE-->
<div class="buttonFast"><span><a href="sell_travel_insurance.php">Desea vender seguros de viajes?</a></span></div>

<div class="buttonFast"><span><<a href="corporative_travels.php">Viajes corporativos</a></span>
</div>
</div>
<!--FAST NAVIGATION SPAN BUTTONS--> <!-- NEWS AREA-->
<div id="boxNews"><!---NEWS #1--->
<div id="newsCont">
<h3>Viaje Diversión</h3><?php 
$nombreImagen="";
//IMAGEN 8 DE LA SECCION 1 
$r= $aw->cargarComponenteBySeccion(1, 2);
while (!$r->EOF) {		
	$nombreImagen=$pathFtp."".$r->fields[0];

	$r->MoveNext();
}
?>
<div id="newsImg"><img src="<?php echo $nombreImagen; ?>" alt="ImgNews1"	height="170" width="290"></div>
<div id="newsDesc">

<?php 
//TEXTO 5 DE LA SECCION 1 
$r= $aw->cargarComponenteBySeccion(1, 5);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding($r->fields[1])."</p>";	
	$r->MoveNext();
}
?>


</a></p>
</div>
</div>
<!---NEWS #2--->
<div id="newsCont">
<h3>Viaje Negocios</h3>
<?php 
$nombreImagen="";
//IMAGEN 3 DE LA SECCION 1 
$r= $aw->cargarComponenteBySeccion(1, 3);
while (!$r->EOF) {		
	$nombreImagen=$pathFtp."".$r->fields[0];

	$r->MoveNext();
}
?>
<div id="newsImg"><img src="<?php echo $nombreImagen; ?>" alt="ImgNews1"	height="170" width="290"></div>
<div id="newsDesc">

<?php 
//TEXTO 6 DE LA SECCION 1 
$r= $aw->cargarComponenteBySeccion(1, 6);
while (!$r->EOF) {	
	echo"<p>". $fun->fixEncoding($r->fields[1])."</p>";	
	$r->MoveNext();
}
?>



</div>
</div>
<!---NEWS #3--->
<div id="newsCont">
<h3>Viaje Placer</h3><?php 
$nombreImagen="";
//IMAGEN 4 DE LA SECCION 1 
$r= $aw->cargarComponenteBySeccion(1, 4);
while (!$r->EOF) {		
	$nombreImagen=$pathFtp."".$r->fields[0];
	echo 
	$r->MoveNext();
}
?>
<div id="newsImg"><img src="<?php echo $nombreImagen; ?>" alt="ImgNews1"	height="170" width="290"></div>
<div id="newsDesc">
<?php 
//TEXTO 7 DE LA SECCION 1 
$r= $aw->cargarComponenteBySeccion(1, 7);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>
</div>
</div>
</div>
<!-- ENDS NEWS AREA--></div>
<!--ENDS THE FULL BODY CONTAINER--> <!---INIT THE FOOTER CONTENT HERE-->

<?php
//EL FOOTER LO TENEMOS ALMACENADO Y SECILLMANTE LO REPLICAMOS EN LAS PAGINAS QUE NECESITMAOS
echo $fun->getFooter(); 
?>


<!--ENDS ALL FOOTER CONTAINS--></div>
<!--ENDS WRAPPER-->
<script>window.jQuery || document.write("<script src='tpl/js/jquery-1.6.2.min.js'>\x3C/script>")</script>
<script type="text/javascript" src="tpl/js/jquery.selectbox-0.1.3.js"></script>
<script src="tpl/js/jquery.custom_radio_checkbox.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="tpl/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="tpl/js/functions.js"></script>
<!---ONLY SETTINGS SLIDER NAV--->
<script type="text/javascript">
                                    if(!window.slider) var slider={};
                                        slider.data=[
                                            {"id":"slide-img-1","client":"12/ENE/2012","desc":"SEGUROS MEDICOS INTERNACIONALES"},
                                            {"id":"slide-img-2","client":"12/ENE/2012","desc":"SEGUROS MEDICOS INTERNACIONALES"},
                                            {"id":"slide-img-3","client":"12/ENE/2012","desc":"SEGUROS MEDICOS INTERNACIONALES"},
                                            {"id":"slide-img-4","client":"12/ENE/2012","desc":"SEGUROS MEDICOS INTERNACIONALES"}
                                        ];
                                   </script>
</body>
</html>
>
