<?php
include 'logic/compra.php';
$compra=new compra();
$guarda;//GUARDA PARA VERIFICAR SI SE PUEDO O NO CONTINUAR CON EL PAGO
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
<meta charset="utf-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Travel Details | Seguros Medicos Internacionales</title>
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

<script language="JavaScript">

	var nav4 = window.Event ? true : false;	
	function acceptNum(evt){	
	// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57
	var key = nav4 ? evt.which : evt.keyCode;
	return (key <= 13 || (key >= 48 && key <= 57));

}

//-->
</script>
</head>
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
	<li><a href="index.php" class="active">Inicio</a></li>
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
<div id="mainBody" class="highLights"><br />
<!--START THE MAGIC QUOTE CONTENT-->
<div id="magicArea" style="height: 80px"><!--MAGIC NAV-->
<div id="magicNav">
<div id="magicStep" class="off">
<p><span class="NumOff">1</span>Cotizar</p>
</div>
<div id="magicStep" class="off">
<p><span class="NumOff">2</span>Comparar</p>
</div>
<div id="magicStep" class="on">
<p><span class="NumOn">3</span>Solicitar</p>
</div>
<div id="magicStep" class="off">
<p><span class="NumOff">4</span>Comprar</p>
</div>
</div>
<div id="magicStepEnd"><!--ENDS HERE THE STEPS-->
<div id="magicStepCards"><img src="tpl/img/MasterMagicCards.png" alt="" />
<img src="tpl/img/PaypalMagicCards.png" alt="" /> <img
	src="tpl/img/AmexMagicCards.png" alt="" /> <img
	src="tpl/img/VisaMagicCards.png" alt="" /></div>
<!--ENDS HERE THE STEPS--></div>

<!--ENDS MAGIC NAV--> <!--HIDDEN  FORM BY DEFAULT ... PLACE WITHOUT DATA	--->

</div>
<!--END THE MAGIC QUOTE CONTENT--> <!--START HERE ALL SUBMIT FORMS---> <!--TRAVEL DETAILS--->
<div id="travelDtBox">
<h4>Datos del viajero:</h4>
<form name="compra" id="compra" method="post" action="logic/forwardForPayment.php"><!--START DETAILS BOX--->
<?php
//CAMPOS DE LOS PASAJEROS
//HABILITAMOS LOS CAMPOS DEPENDIENDO DE LA CANTIDAD DE PASAJEROS.
if($_POST['PasajerosCotizados']!=0&& $_POST['PrecioCotizado']!=0)
{
	$compra->HabilitarPasajeros($_POST['PasajerosCotizados']);
	$guarda=true;
	echo "<input type=\"hidden\" name=\"cantidadPasajeros\" id=\"cantidadPasajeros\" value=".$_POST['PasajerosCotizados']." />";
	echo "<input type=\"hidden\" name=\"PrecioCotizado\" id=\"PrecioCotizado\" value=".$_POST['PrecioCotizado']." />";
	//echo" PRECIO COTIZADO ".$_POST['PrecioCotizado'];
	

}
else// SI NO SE HAN INGRESADO LOS PASAJEROS NO SE PUEDE PROCEDER.
{
	echo "<h4>Es necesario cotizar al menos con un pasajero</h4>";
	$guarda=false;
	echo "<input type=\"hidden\" name=\"cantidadPasajeros\" id=\"cantidadPasajeros\"  value=".$_POST['PasajerosCotizados']." />";
}






?> <!--ENDS DETAILS BOX-->


<div id="dataPerInfo">
<div id="dataPerCol">
<h4>Datos de contacto - viajeros:</h4>
<div class="list"><label class="detail">Teléfono fijo:</label><br />
<input type="text" name="TelefonoContacto" value="" size="12"
	onkeypress="return acceptNum(event)" /></div>
<div class="list"><label class="detail">Teléfono Movil:</label><br />
<input type="text" name="CelularContacto" id="" size="12"
	onkeypress="return acceptNum(event)" /></div>
<div class="list"><label class="detail">Dirección:</label><br />
<input type="text" name="DireccionContacto" id="" size="18" /></div>
</div>

<div id="dataPerEmer">
<h4>Datos de contacto emergencias:</h4>
<div class="list"><label class="detail">Nombre:</label><br />
<input type="text" name="NombreEmergencia" id="" size="14" /></div>
<div class="list"><label class="detail">Apellido:</label><br />
<input type="text" name="ApellidoEmergencia" id="" size="14" /></div>
<div class="list"><label class="detail">Teléfono:</label><br />
<input type="text" name="TelefonoEmergencia" id="" size="14"
	onkeypress="return acceptNum(event)" /></div>

<div class="list"><label class="detail">Email:</label> <br />
<input type="text" name="EmailEmergencia" id="" size="16" /></div>
</div>

</div>


<div id="dataPerAddr">

<h4>Datos de facturación:</h4>
<div class="list"><label class="detail">Nombre / Entidad::</label><br />
<input type="text" name="NombreFactu" id="" size="14" /></div>
<div class="list"><label class="detail">Documento / Nit:</label><br />
<input type="text" name="DocumentoFactu" id="" size="14" /></div>
<div class="list"><label class="detail">Dirección:</label><br />
<input type="text" name="DireccionFactu" id="" size="14" /></div>

<div class="list"><label class="detail">Teléfono fijo:</label><br />
<input type="text" name="TelefonoFactu" id="" size="14"
	onkeypress="return acceptNum(event)" /></div>
<?php
if($guarda)//VALIDAMOS LA CANTIDAD DE PASAJEROS COTIZADOS
echo"	<div id=\"paymentIcon\"><input type=\"submit\" src=\"tpl/img/clear.png\" class=\"submitPayment\" value=\"Pagar\" /></div>";
?>

</form>
<script language="JavaScript" type="text/javascript"
	xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("compra");  
  //CONTACTO VIAJEROS
  frmvalidator.addValidation("TelefonoContacto","req","Debe Ingresar Un Teléfono-Contacto.");
  frmvalidator.addValidation("CelularContacto","req","Debe Ingresar Un Teléfono Movil-Contacto."); 
  frmvalidator.addValidation("DireccionContacto","req","Debe Ingresar Una Dirección-Contacto.");
  //CONTACTO EMERGENCIA
  frmvalidator.addValidation("NombreEmergencia","req","Debe Ingresar El Nombre-Contacto Emergencia.");
  frmvalidator.addValidation("ApellidoEmergencia","req","Debe Ingresar El Apellido-Contacto Emergencia."); 
  frmvalidator.addValidation("TelefonoEmergencia","req","Debe Ingresar El Télefono-Contacto Emergencia.");
  frmvalidator.addValidation("EmailEmergencia","maxlen=50");
  frmvalidator.addValidation("EmailEmergencia","req","Debe Ingresar Un E-mail-Contacto Emergencia.");
  frmvalidator.addValidation("EmailEmergencia","email","Debe Ingresar Un E-mail Válido-Contacto Emergencia."); 
  //FACTURACION
  frmvalidator.addValidation("NombreFactu","req","Debe Ingresar El Nombre/Entidad-Facturación.");
  frmvalidator.addValidation("DocumentoFactu","req","Debe Ingresar El Documento/Nit-Facturación."); 
  frmvalidator.addValidation("DireccionFactu","req","Debe Ingresar La Dirección-Facturación.");
  frmvalidator.addValidation("TelefonoFactu","req","Debe Ingresar El Teléfono-Facturación.");
  var cantidadPasajeros=encodeURIComponent(document.getElementById("cantidadPasajeros").value)//OBTENEMOS LA CANTIDAD DE PASAJEROS PARA ASI APLICAR LAS VALIDACAIONES


//APLICAMOS LAS VALIDCACIONES DEPENDIENDO DE LA CANTIDAD DE PASAJEROS.
  if(cantidadPasajeros==1){

		//PASAJERO1
	  frmvalidator.addValidation("n1","req","Debe Ingresar El Nombre-Pasajero 1.");
	  frmvalidator.addValidation("a1","req","Debe Ingresar El Apellido-Pasajero 1."); 
	  frmvalidator.addValidation("d1","req","Debe Ingresar El Documento-Pasajero 1.");
	  frmvalidator.addValidation("em1","maxlen=50");
	  frmvalidator.addValidation("em1","req","Debe Ingresar Un E-mail-Pasajero 1.");
	  frmvalidator.addValidation("em1","email","Debe Ingresar Un E-mail Válido-Pasajero 1."); 
	  frmvalidator.addValidation("fndia1","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnmes1","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnanio1","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 1.");
	    }
  else if(cantidadPasajeros==2){
	  
		//PASAJERO1
	  frmvalidator.addValidation("n1","req","Debe Ingresar El Nombre-Pasajero 1.");
	  frmvalidator.addValidation("a1","req","Debe Ingresar El Apellido-Pasajero 1."); 
	  frmvalidator.addValidation("d1","req","Debe Ingresar El Documento-Pasajero 1.");
	  frmvalidator.addValidation("em1","maxlen=50");
	  frmvalidator.addValidation("em1","req","Debe Ingresar Un E-mail-Pasajero 1.");
	  frmvalidator.addValidation("em1","email","Debe Ingresar Un E-mail Válido-Pasajero 1."); 
	  frmvalidator.addValidation("fndia1","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnmes1","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnanio1","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 1.");
	//PASAJERO2
	  frmvalidator.addValidation("n2","req","Debe Ingresar El Nombre-Pasajero 2.");
	  frmvalidator.addValidation("a2","req","Debe Ingresar El Apellido-Pasajero 2."); 
	  frmvalidator.addValidation("d2","req","Debe Ingresar El Documento-Pasajero 2.");
	  frmvalidator.addValidation("em2","maxlen=50");
	  frmvalidator.addValidation("em2","req","Debe Ingresar Un E-mail-Pasajero 2.");
	  frmvalidator.addValidation("em2","email","Debe Ingresar Un E-mail Válido-Pasajero 2."); 
	  frmvalidator.addValidation("fndia2","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 2.");
	  frmvalidator.addValidation("fnmes2","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 2.");
	  frmvalidator.addValidation("fnanio2","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 2.");
  }
  else if(cantidadPasajeros==3){


		//PASAJERO1
	  frmvalidator.addValidation("n1","req","Debe Ingresar El Nombre-Pasajero 1.");
	  frmvalidator.addValidation("a1","req","Debe Ingresar El Apellido-Pasajero 1."); 
	  frmvalidator.addValidation("d1","req","Debe Ingresar El Documento-Pasajero 1.");
	  frmvalidator.addValidation("em1","maxlen=50");
	  frmvalidator.addValidation("em1","req","Debe Ingresar Un E-mail-Pasajero 1.");
	  frmvalidator.addValidation("em1","email","Debe Ingresar Un E-mail Válido-Pasajero 1."); 
	  frmvalidator.addValidation("fndia1","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnmes1","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnanio1","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 1.");
		//PASAJERO2
	  frmvalidator.addValidation("n2","req","Debe Ingresar El Nombre-Pasajero 2.");
	  frmvalidator.addValidation("a2","req","Debe Ingresar El Apellido-Pasajero 2."); 
	  frmvalidator.addValidation("d2","req","Debe Ingresar El Documento-Pasajero 2.");
	  frmvalidator.addValidation("em2","maxlen=50");
	  frmvalidator.addValidation("em2","req","Debe Ingresar Un E-mail-Pasajero 2.");
	  frmvalidator.addValidation("em2","email","Debe Ingresar Un E-mail Válido-Pasajero 2."); 
	  frmvalidator.addValidation("fndia2","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 2.");
	  frmvalidator.addValidation("fnmes2","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 2.");
	  frmvalidator.addValidation("fnanio2","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 2.");
	//PASAJERO3
	  frmvalidator.addValidation("n3","req","Debe Ingresar El Nombre-Pasajero 3.");
	  frmvalidator.addValidation("a3","req","Debe Ingresar El Apellido-Pasajero 3."); 
	  frmvalidator.addValidation("d3","req","Debe Ingresar El Documento-Pasajero 3.");
	  frmvalidator.addValidation("em3","maxlen=50");
	  frmvalidator.addValidation("em3","req","Debe Ingresar Un E-mail-Pasajero 3.");
	  frmvalidator.addValidation("em3","email","Debe Ingresar Un E-mail Válido-Pasajero 3."); 
	  frmvalidator.addValidation("fndia3","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 3.");
	  frmvalidator.addValidation("fnmes3","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 3.");
	  frmvalidator.addValidation("fnanio3","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 3.");

	  }
  else if(cantidadPasajeros==4){
	  		//PASAJERO1
	  frmvalidator.addValidation("n1","req","Debe Ingresar El Nombre-Pasajero 1.");
	  frmvalidator.addValidation("a1","req","Debe Ingresar El Apellido-Pasajero 1."); 
	  frmvalidator.addValidation("d1","req","Debe Ingresar El Documento-Pasajero 1.");
	  frmvalidator.addValidation("em1","maxlen=50");
	  frmvalidator.addValidation("em1","req","Debe Ingresar Un E-mail-Pasajero 1.");
	  frmvalidator.addValidation("em1","email","Debe Ingresar Un E-mail Válido-Pasajero 1."); 
	  frmvalidator.addValidation("fndia1","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnmes1","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 1.");
	  frmvalidator.addValidation("fnanio1","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 1.");
		//PASAJERO2
	  frmvalidator.addValidation("n2","req","Debe Ingresar El Nombre-Pasajero 2.");
	  frmvalidator.addValidation("a2","req","Debe Ingresar El Apellido-Pasajero 2."); 
	  frmvalidator.addValidation("d2","req","Debe Ingresar El Documento-Pasajero 2.");
	  frmvalidator.addValidation("em2","maxlen=50");
	  frmvalidator.addValidation("em2","req","Debe Ingresar Un E-mail-Pasajero 2.");
	  frmvalidator.addValidation("em2","email","Debe Ingresar Un E-mail Válido-Pasajero 2."); 
	  frmvalidator.addValidation("fndia2","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 2.");
	  frmvalidator.addValidation("fnmes2","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 2.");
	  frmvalidator.addValidation("fnanio2","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 2.");
	//PASAJERO3
	  frmvalidator.addValidation("n3","req","Debe Ingresar El Nombre-Pasajero 3.");
	  frmvalidator.addValidation("a3","req","Debe Ingresar El Apellido-Pasajero 3."); 
	  frmvalidator.addValidation("d3","req","Debe Ingresar El Documento-Pasajero 3.");
	  frmvalidator.addValidation("em3","maxlen=50");
	  frmvalidator.addValidation("em3","req","Debe Ingresar Un E-mail-Pasajero 3.");
	  frmvalidator.addValidation("em3","email","Debe Ingresar Un E-mail Válido-Pasajero 3."); 
	  frmvalidator.addValidation("fndia3","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 3.");
	  frmvalidator.addValidation("fnmes3","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 3.");
	  frmvalidator.addValidation("fnanio3","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 3.");
	//PASAJERO4
	  frmvalidator.addValidation("n4","req","Debe Ingresar El Nombre-Pasajero 4.");
	  frmvalidator.addValidation("a4","req","Debe Ingresar El Apellido-Pasajero 4."); 
	  frmvalidator.addValidation("d4","req","Debe Ingresar El Documento-Pasajero 4.");
	  frmvalidator.addValidation("em4","maxlen=50");
	  frmvalidator.addValidation("em4","req","Debe Ingresar Un E-mail-Pasajero 4.");
	  frmvalidator.addValidation("em4","email","Debe Ingresar Un E-mail Válido-Pasajero 4."); 
	  frmvalidator.addValidation("fndia4","dontselect=0","Debe Ingresar El Día De Nacimiento-Pasajero 4.");
	  frmvalidator.addValidation("fnmes4","dontselect=0","Debe Ingresar El Mes De Nacimiento-Pasajero 4.");
	  frmvalidator.addValidation("fnanio4","dontselect=0","Debe Ingresar El Año De Nacimiento-Pasajero 4.");
  }

 
  	
  
 
//]]></script></div>




<!--TRAVEL DETAILS ENDS---></div>
<!--ENDS HERE ALL SUBMIT FORMS---> <!--START BANNER BOTTOM AREA--->
<div id="banBotArea">
<div id="bannerLeft"><img src="tpl/img/Banners/Sales20off.png" /></div>
<div id="bannerRight"><!-- BANNER RIGHT CONTENTS--->
<div id="s3slider"><!--HERE START THE SLIDE-->
<ul id="s3sliderContent">
	<!--1ST BANNER SLIDE OFFER-->
	<li class="s3sliderImage"><img
		src="tpl/img/Banners/s3OffersRight/demA.png" /> <span class="left">
	<h5>Londres</h5>
	<p>The Dot Studio está enfocado en el desarrollo de estrategias
	comerciales innovadoras para publicitar, posicionar e incrementar el
	reconocimiento de marcas, productos, servicios. <br />
	</p>
	<a href="#">Ver mas...</a> </span></li>
	<!--1ST BANNER SLIDE OFFER-->
	<li class="s3sliderImage"><img
		src="tpl/img/Banners/s3OffersRight/demA.png" /> <span class="left">
	<h5>Londres</h5>
	<p>The Dot Studio está enfocado en el desarrollo de estrategias
	comerciales innovadoras para publicitar, posicionar e incrementar el
	reconocimiento de marcas, productos, servicios. <br />
	</p>
	<a href="#">Ver mas...</a> </span></li>
	<div class="clear s3sliderImage"><!--CLEAR THE BANNERS--></div>
</ul>
</div>
<!--HERE ENDS THE SLIDE--></div>
</div>
<!--ENDS BANNER BOTTOM AREA---></div>
<!--ENDS THE FULL BODY CONTAINER-->
<!---INIT THE FOOTER CONTENT HERE-->
<footer>

<div id="footerWrap">
<div id="footCont">
<ul>
	<li><a href="#">Conocenos</a></li>
	<li><a href="#">Condiciones generales</a></li>
	<li><a href="#">Servicios</a></li>
	<li><a href="#">Compañias</a></li>
	<li><a href="#">Planes</a></li>
	<li><a href="#">Contacto</a></li>
	<li><a href="#">Preguntas frecuentes</a></li>
</ul>
<ul>
	<li><a href="#">Venta de Seguros</a></li>
	<li><a href="#">Corporativo</a></li>
	<li><a href="#">Servicios</a></li>
	<li><a href="#">Compañias</a></li>
	<li><a href="#">Planes</a></li>
	<li><a href="#">Contacto</a></li>
	<li><a href="#">Preguntas frecuentes</a></li>
</ul>
<ul>
	<li><img src="tpl/img/creditCards.png" width="123" height="99" /></li>
</ul>
<ul>
	<p><strong>Líneas de atención.</strong><br />
	Bogotá: (1) 744 14 40<br />
	Barranquilla: (5) 360 55 75<br />
	Bucaramanga: (7) 697 81 00<br />
	Cali: (2) 487 00 80<br />
	Medellín: (4) 311 95 51<br />
	Pasto: (2) 737 06 80<br />
	Línea Nacional Gratuita: 01-8000-123-009<br />
	Atención de Domingo a Domingo: 315-6920830<br />
	</p>
</ul>
<div class="secureEle"><img src="tpl/img/secureLogo.png" /></div>

<div class="theDot">
<div class="theDotDesign"><a href="http://www.thedot-studio.com/"
	target="_blank"><img src="tpl/img/logoDot-DesignBy.png" /></a></div>
<div class="theDotByThe"><a href="http://www.thedot-studio.com/"
	target="_blank"><img src="tpl/img/logoDot-TheDotStudio.png" /></a></div>
</div>
<!--LOGO DOT--> <span class="devp">development by: Crecer Soluciones</span>
</div>
</div>
<div id="footerCopy">
<p>Copyright © 2011 Seguros Medicos Internacionales All Rights
Reserved..</p>
</div>

</footer>
<!--ENDS ALL FOOTER CONTAINS-->
</div>
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
