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
<html class="no-js" lang="en">
<!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="www-segurosmedicosinternacionales-com"
	data-template-set="html5-reset">
<meta charset="utf-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Contact Us | Seguros Medicos Internacionales</title>
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
<link rel="stylesheet" href="tpl/css/style.css">
<link type="text/css" href="tpl/css/start/jquery-ui-1.8.16.custom.css"
	rel="stylesheet" />
	
<!-- all our JS is at the bottom of the page, except for Modernizr. -->
<script src="tpl/js/modernizr-1.7.min.js"></script>
<script src="tpl/js/gen_validatorv4.js"></script>
<link href="tpl/css/jquery.selectbox.css" type="text/css"
	rel="stylesheet" />

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
<!--
	var nav4 = window.Event ? true : false;	
	function acceptNum(evt){	
	// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57
	var key = nav4 ? evt.which : evt.keyCode;
	return (key <= 13 || (key >= 48 && key <= 57));

}
//-->
</script>

<body>

<div class="wrapper"><!--- START HEADER ---> <header>
<div id="headerTop"><!--- START THE TOP HEADER --->
<div id="headerCont"><a href=""><img class="logoSMI"
	src="tpl/img/SegurosMedicosInternacionales.png" /></a><!-- LOGO SMI POSITION -->
<!-- HELP AREA RIGHT SMI -->
<div class="contactHelp"><img src="tpl/img/skypeIcon.png" /></div>

<div class="contactInfo">
<p>Línea Nacional Gratuita: <span>01-8000-123-009</span></p>
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
	<li><a href="contact_us.php" class="active">Contacto</a></li>
	<li><a href="faq.php">Preguntas Frecuentes </a></li>

</ul>
</nav></div>
</div>
<!---ENDS NAVIGATION BAR---> </header> <!--- ENDS HEADER ---> <!--START THE FULL BODY CONTAINER-->
<div id="mainBody" class="highLights">

<div id="contactTop">
<div class="contactTopIcon"><span>Línea Nacional Gratuita: <strong>01-8000-123-009</strong></span>
</div>
<img src="tpl/img/Corporatives/imgContact.png" align="right"
	alt="Contáctenos" /></div>

<!--START ALL CORPORATIVE TEXTS--->

<div id="Corporative" style="border-top: none"><!--- CONTENT COLUMS -->
<div id="contCols"><!--CONTACT COL--->
<div class="contOneCol">
<h3>Bogotá:</h3>
<?php 
//TEXTO 14 DE LA SECCION 3 ---------BOGOTA
$r= $aw->cargarComponenteBySeccion(3, 14);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>
</div>
<!--CONTACT COL--->
<div class="contOneCol">
<h3>Barranquilla:</h3>
<?php 
//TEXTO 15 DE LA SECCION 3 ---------BARRANQUILLA
$r= $aw->cargarComponenteBySeccion(3, 15);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>
</div>
<br class="clear" />
<!--CONTACT COL--->
<div class="contOneCol">
<h3>Medellín:</h3>

<?php 
//TEXTO 16 DE LA SECCION 3 ---------MEDELLIN
$r= $aw->cargarComponenteBySeccion(3, 16);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>
</div>
<!--CONTACT COL--->
<div class="contOneCol">
<h3>Pasto:</h3>


<?php 
//TEXTO 17 DE LA SECCION 3 ---------PASTO
$r= $aw->cargarComponenteBySeccion(3, 17);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>
</div>
<br class="clear" />
<!--CONTACT COL--->
<div class="contOneCol">
<h3>Bucaramanga:</h3>

<?php 
//TEXTO 18 DE LA SECCION 3 ---------BUCARAMANGA
$r= $aw->cargarComponenteBySeccion(3, 18);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>
</div>
<!--CONTACT COL--->
<div class="contOneCol">
<h3>Cali:</h3>
<?php 
//TEXTO 19 DE LA SECCION 3 ---------CALI
$r= $aw->cargarComponenteBySeccion(3, 19);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>
</div>
</div>
<!--- CONTENT COLUMS -->

<div id="contactBox">
<div class="contactForm">


<form name="contactenos" method="post" action="contact_us.php">
<div class="list">

<input type="hidden" name="GuardaEnvio" id="GuardaEnvio" value="1"/>
<label class="detail">Nombre:</label> *<br />
<input type="text" name="Nombre" id="Nombre" size="19" /></div>
<div class="list"><label class="detail">Apellido:</label> *<br />
<input type="text" name="Apellido" id="Apellido" size="19" /></div>
<div class="list"><label class="detail">Empresa:</label> *<br />
<input type="text" name="Empresa" id="Empresa" size="19" /></div>
<div class="list"><label class="detail">Email:</label> *<br />
<input type="text" name="Email" id="Email" size="19" /></div>
<div class="list"><label class="detail">Teléfono fijo:</label> *<br />
<input type="text" name="TelefonoFijo" id="TelefonoFijo" size="19" onkeypress="return acceptNum(event)"/></div>
<div class="list"><label class="detail">Teléfono Movil: </label> *<br />
<input type="text" name="TelefonoMovil" id="TelefonoMovil" size="19" onkeypress="return acceptNum(event)" /></div>
<div class="list"><label class="detail">Déjanos tu mensaje: </label> *<br />
<textarea name="Mensaje" cols="50" rows="5" style="width: 270px"></textarea> <span
	class="infoReq">(*) Campos requeridos</span></div>
<div class="list">
<fieldset>
<div style="margin-left: -10px">
<div class="checkbox"><input type="checkbox" id="Contacto" name="Contacto" ></div>
<label for="" class="leftInf">Deseo que me contacten.</label></div>
</fieldset>
</div>
<div class="list"><input type="submit" src="tpl/img/clear.png"
	class="submitConForm" value="Enviar" /></div>
<div class="list" align="center">

</div>
</form>
<script language="JavaScript" type="text/javascript"
						xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("contactenos");  
  frmvalidator.addValidation("Nombre","req","Debe Ingresar El Nombre.");
  frmvalidator.addValidation("Apellido","req","Debe Ingresar El Apellido.");  
  frmvalidator.addValidation("Empresa","req","Debe Ingresar La Empresa.");  
  frmvalidator.addValidation("TelefonoFijo","req","Debe Ingresar El Télefono Fijo.");  
  frmvalidator.addValidation("TelefonoMovil","req","Debe Ingresar El Télefono Movil.");  
  frmvalidator.addValidation("Mensaje","req","Debe Ingresar El Mensaje.");    
  frmvalidator.addValidation("Email","maxlen=50");
  frmvalidator.addValidation("Email","req","Debe Ingresar Un E-mail.");
  frmvalidator.addValidation("Email","email","Debe Ingresar Un E-mail Válido .");   
//]]></script>




<?php 
//REALIZAMOS EL ENVIO DEL CORREO DESDE ACA PARA REFRESCAR
$guarda=$_POST["GuardaEnvio"];
if($guarda==1){
	
	$guarda=$_POST["GuardaEnvio"];	
	$resultado=$fun->SendMailContact_Us($_POST["Email"], $_POST["Nombre"], $_POST["Apellido"], $_POST["Empresa"], $_POST["TelefonoFijo"],  $_POST["TelefonoMovil"], $_POST["Mensaje"], $_POST["Contacto"]);
	$guarda=0;
}





?>

</div>
</div>

</div>

<!--START BANNER BOTTOM AREA--->



<div id="banBotArea">
<div id="bannerLeft">


	
	<?php 
$nombreImagen="";
//IMAGEN 11 DE LA SECCION 2 -- BANNER IZQUIERDO
$r= $aw->cargarComponenteBySeccion(2, 11);
while (!$r->EOF) {		
	$nombreImagen=$pathFtp."".$r->fields[0];
	$r->MoveNext();
}
?>
	<img	src="<?php echo $nombreImagen; ?>" /> 


</div>
<div id="bannerRight"><!-- BANNER RIGHT CONTENTS--->
<div id="s3slider"><!--HERE START THE SLIDE-->
<ul id="s3sliderContent">
	<!--1ST BANNER SLIDE OFFER-->
	<li class="s3sliderImage">
	
	
	<?php 
$nombreImagen="";
//IMAGEN 13 DE LA SECCION 2 --BANNER DERECHO
$r= $aw->cargarComponenteBySeccion(2, 13);
while (!$r->EOF) {		
	$nombreImagen=$pathFtp."".$r->fields[0];
	$r->MoveNext();
}
?>
	<img	src="<?php echo $nombreImagen; ?>" /> 
	<span class="left">	
	<?php 
//TEXTO 12 DE LA SECCION 2 ---------COMENTARIO EN EL BANNER
$r= $aw->cargarComponenteBySeccion(2, 12);
while (!$r->EOF) {	
	echo"<p>".$fun->fixEncoding( $r->fields[1])."</p>";	
	$r->MoveNext();
}
?>	</span>	
	</li>	
	<div class="clear s3sliderImage"><!--CLEAR THE BANNERS--></div>
</ul>
</div>
<!--HERE ENDS THE SLIDE--></div>
</div>




<!--ENDS BANNER BOTTOM AREA--->


</div>
<!--ENDS THE FULL BODY CONTAINER--> 
<!---INIT THE FOOTER CONTENT HERE-->

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
</body>
</html>
