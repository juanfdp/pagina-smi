<?php
include 'logic/compra.php';
include   'logic/functions.php';
$compra=new compra();
$guarda;//GUARDA PARA VERIFICAR SI SE PUEDO O NO CONTINUAR CON EL PAGO
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
<!-- the "no-js" class is for Modernizr. --><head id="www-segurosmedicosinternacionales-com"
	data-template-set="html5-reset">
<meta charset="utf-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Travel Details | Seguros Medicos Internacionales</title>
<meta name="title" content="">
<meta name="description" content="">
<meta name="author" content="Seguros Medicos Internacionales">
<meta name="Copyright"	content="Copyright © 2011 Seguros Medicos Internacionales All Rights Reserved">
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
<link href="tpl/css/jquery.selectbox.css" type="text/css"
	rel="stylesheet" />
<script src="tpl/js/gen_validatorv4.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript"
	src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    
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
<script language="JavaScript">

	var nav4 = window.Event ? true : false;	
	function acceptNum(evt){	
	// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57
	var key = nav4 ? evt.which : evt.keyCode;
	return (key <= 13 || (key >= 48 && key <= 57));
}
//-->
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
function generarPedidoWeb(CantidadPasajeros){	
	

	var mygetrequest=new ajaxRequest()
	mygetrequest.onreadystatechange=function(){
	if (mygetrequest.readyState==4){
	if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
	//document.getElementById("temp").innerHTML=mygetrequest.responseText
	}
	else{
	alert("An error has occured making the request")
	}
	}
	}
	//alert(CantidadPasajeros);	

	
	
	var NombreEmergencia=encodeURIComponent(document.getElementById("NombreEmergencia").value)
	var ApellidoEmergencia=encodeURIComponent(document.getElementById("ApellidoEmergencia").value)
	var TelefonoEmergencia=encodeURIComponent(document.getElementById("TelefonoEmergencia").value)	
	var EmailEmergencia=encodeURIComponent(document.getElementById("EmailEmergencia").value)
	
	var TelefonoContacto=encodeURIComponent(document.getElementById("TelefonoContacto").value)
	var CelularContacto=encodeURIComponent(document.getElementById("CelularContacto").value)	
	var DireccionContacto=encodeURIComponent(document.getElementById("DireccionContacto").value)	
	
	var NombreFactu=encodeURIComponent(document.getElementById("NombreFactu").value)
	var DocumentoFactu=encodeURIComponent(document.getElementById("DocumentoFactu").value)
	var DireccionFactu=encodeURIComponent(document.getElementById("DireccionFactu").value)
	var TelefonoFactu=encodeURIComponent(document.getElementById("TelefonoFactu").value)
	var emailComprador=encodeURIComponent(document.getElementById("emailComprador").value)
	
	
	
	
	if(CantidadPasajeros==1){

		

		
	}
	
	else if (CantidadPasajeros==2){



		
	}
	
	else if (CantidadPasajeros==3){



		
	}
	
	else if (CantidadPasajeros==4){

		
		
	}				
	 document.formulario.submit(numeroPoliza);
	//mygetrequest.open("GET", "logic/generarPedido.php?tipo=1&categoria="+categoria+"&estado="+estado, true)
	mygetrequest.send(null)
	}	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
</script>
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
<script type="text/javascript">

$(document).ready(function() {
    /* This is basic - uses default settings */
	$("#lightbox").fancybox({
		'width'				: '80%',
		'height'			: '95%',
		'autoScale'			: false,
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'type'				: 'iframe'		
	});
	
	$("#lightbox3").fancybox({
		'width'				: '75%',
		'height'			: '33%',
		'autoScale'			: false,
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'type'				: 'iframe'
		
	});
	$("#lightbox2").fancybox({
		'width'				: '75%',
		'height'			: '60%',
		'autoScale'			: false,
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'type'				: 'iframe'
		
	});
});		
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
	<li><a href="index.php" >Inicio</a></li>
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


<form name="compra" id="compra" method="post" action="https://gateway2.pagosonline.net/apps/gateway/index.html"><!--START DETAILS BOX--->
<?php
//CAMPOS DE LOS PASAJEROS
//HABILITAMOS LOS CAMPOS DEPENDIENDO DE LA CANTIDAD DE PASAJEROS Y VALIDAMOS QUE SEAN MAYOR  QUE CERO Y MENOR QUE CUATRO

if($_POST['PasajerosCotizados']!=0)
{
	$compra->HabilitarPasajeros($_POST['PasajerosCotizados']);
	$guarda=true;
		
}
else// SI NO SE HAN INGRESADO LOS PASAJEROS NO SE PUEDE PROCEDER.
{
$guarda=false;
}

///DATOS PARA EL ENVIO DE LA INFORMACION A PAGOS ONLINE

$precio="PrecioCotizado-".$_POST['codigo'];//CONSTRUMOS LAS VARIABLES POST PARA OBTENER REALMENTE EL VALOR
$id="IdPoliza-".$_POST['codigo'];//CONSTRUMOS LAS VARIABLES POST PARA OBTENER EL ID DE LA POLIZA
$idPoliza=$_POST[$id];
$llave_encripcion = "131bef7b598";
$usuarioId = "73585";
$refVenta = time();
$cantidadPasajeros=$_POST['PasajerosCotizados'];
$iva=16;
$baseDevolucionIva=0;
$valor=($_POST[$precio]!=""?$_POST[$precio]:0)* $fun->getTrmIata($_POST[$id]);//OBTENEMOS EL VALOR DE LA POLIZA
$moneda ="COP";//ESPECIFICAMOS LA MONEDA PARA LA OPERACION.
$prueba = "1";// ESPECIFICAMOS SI ES O NO AMBIENTE DE PRUEBAS
$descripcion = "Pago de póliza: ".$_POST['NombreFactu'] ;
$emailComprador="info@mail.com";

$firma_cadena = $llave_encripcion."~".$usuarioId."~".$refVenta."~".$valor."~".$moneda;
$firma = md5($firma_cadena);
//ESTA PAGINA ES IMPORTANTE POR QUE ALLI ES DONDE EL SISTEMA DE PAGOS ONLINE NOS RETORNA LA RESPUESTA DESPUES DE HABER
//VERIFICADO LA TRANSACCION.
$paginaConfirmacion="http://201.245.67.191:85/WebSiteHTML5/logic/confirmacionPago.php";

//AGREGAMOS LOS DATOS DEL PAGO AL FORMULARIO ACTUAL
echo"			
			<input name=\"url_confirmacion\" type=\"hidden\" value=".$paginaConfirmacion.">
			<input	name=\"usuarioId\" type=\"hidden\" value=". $usuarioId ."> 			 
			<input	name=\"refVenta\" type=\"hidden\" value=". $refVenta ."> 
			<input  name=\"moneda\" type=\"hidden\" value=".$moneda."> 
			<input  name=\"valor\" type=\"hidden\" value=". $valor ."> 
			<input  name=\"iva\"	type=\"hidden\" value=".  $iva ."> 
			<input	name=\"baseDevolucionIva\" type=\"hidden\"	value=".$baseDevolucionIva.">
			<input name=\"url_confirmacion\" type=\"hidden\" value=".$paginaConfirmacion.">
			<input  name=\"firma\"	type=\"hidden\" value=".$firma."> 		
			<input	name=\"prueba\" type=\"hidden\" value=".$prueba.">";
?> <!--ENDS DETAILS BOX-->


<div id="dataPerInfo">
<div id="dataPerCol">
<h4>Datos de contacto - viajeros:</h4>
<div class="list"><label class="detail">Teléfono fijo:</label><br />
<input type="text" name="TelefonoContacto"  id="TelefonoContacto"value="" size="12"
	onkeypress="return acceptNum(event)" /></div>
<div class="list"><label class="detail">Teléfono Movil:</label><br />
<input type="text" name="CelularContacto" id="CelularContacto" size="12"
	onkeypress="return acceptNum(event)" /></div>
<div class="list"><label class="detail">Dirección:</label><br />
<input type="text" name="DireccionContacto" id="DireccionContacto" size="18" /></div>
</div>

<div id="dataPerEmer">
<h4>Datos de contacto emergencias:</h4>
<div class="list"><label class="detail">Nombre:</label><br />
<input type="text" name="NombreEmergencia" id="NombreEmergencia" size="14" /></div>
<div class="list"><label class="detail">Apellido:</label><br />
<input type="text" name="ApellidoEmergencia" id="ApellidoEmergencia" size="14" /></div>
<div class="list"><label class="detail">Teléfono:</label><br />
<input type="text" name="TelefonoEmergencia" id="TelefonoEmergencia" size="14"
	onkeypress="return acceptNum(event)" /></div>

<div class="list"><label class="detail">Email:</label> <br />
<input type="text" name="EmailEmergencia" id="EmailEmergencia"size="16" /></div>
</div>

</div>


<div id="dataPerAddr">

<h4>Datos de facturación:</h4>
<div class="list"><label class="detail">Nombre / Entidad::</label><br />
<input type="text" name="descripcion" id="NombreFactu" size="14" /></div>
<div class="list"><label class="detail">Documento / Nit:</label><br />
<input type="text" name="DocumentoFactu" id="DocumentoFactu" size="14" /></div>
<div class="list"><label class="detail">Dirección:</label><br />
<input type="text" name="DireccionFactu" id="DireccionFactu" size="14" /></div>

<div class="list"><label class="detail">Teléfono fijo:</label><br />
<input type="text" name="TelefonoFactu" id="TelefonoFactu" size="14"
	onkeypress="return acceptNum(event)" /></div>
<div class="list"><label class="detail">Email:</label><br />
<input type="text" name="emailComprador" id="emailComprador" size="20" /></div>

<table width="421" border="0">
  <tr>
    <th scope="col"><?php
if($guarda)//VALIDAMOS LA CANTIDAD DE PASAJEROS COTIZADOS
echo"	<div id=\"paymentIcon\">
<input type=\"button\" src=\"tpl/img/clear.png\" class=\"submitPayment\" value=\"Comprar\" onclick=\"generarPedidoWeb(".$cantidadPasajeros.")\"/></div>";
?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td>He leido y acepto los
      <input type="checkbox" name="Condiciones" id="" /></td>
    <td>
      <a class="contactenos" id="lightbox" href="logic/condiciones.php"> TERMINOS Y CONDICIONES.</a>
      </td>
    <td>&nbsp;</td>
  </tr>
</table>




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
  frmvalidator.addValidation("descripcion","req","Debe Ingresar El Nombre/Entidad-Facturación.");
  frmvalidator.addValidation("DocumentoFactu","req","Debe Ingresar El Documento/Nit-Facturación."); 
  frmvalidator.addValidation("DireccionFactu","req","Debe Ingresar La Dirección-Facturación.");
  frmvalidator.addValidation("TelefonoFactu","req","Debe Ingresar El Teléfono-Facturación.");
  frmvalidator.addValidation("emailComprador","maxlen=50");
  frmvalidator.addValidation("emailComprador","req","Debe Ingresar Un E-mail-Contacto Emergencia.");
  frmvalidator.addValidation("emailComprador","email","Debe Ingresar Un E-mail Válido-Contacto Emergencia."); 
  //TERMINOS Y CONDICIONES
  //frmvalidator.addValidation("Condiciones","req","Debe Aceptar los terminos y condiciones.");
  
  frmvalidator.addValidation("Condiciones","shouldselchk=y","Debe Aceptar los terminos y condiciones.");
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

<!--ENDS BANNER BOTTOM AREA---></div>
<!--ENDS THE FULL BODY CONTAINER-->
<!---INIT THE FOOTER CONTENT HERE-->

<?php
//EL FOOTER LO TENEMOS ALMACENADO Y SECILLMANTE LO REPLICAMOS EN LAS PAGINAS QUE NECESITMAOS
echo $fun->getFooter(); 
?>
       
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
