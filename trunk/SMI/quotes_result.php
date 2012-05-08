<?php
include 'logic/parametros.php';
include 'logic/cotizador.php';
include 'logic/functions.php';
include 'logic/WebServices.php';
//INSTANCIA DE LA CLASE ENCARGADA DE LOS PARAMETROS
//////////ATRIBUTOS
$func=new functions();
$cotizador=new cotizador();
$productosEnLista = array ();
$productosTemp= array ();
$pasajerosCotizacion= array ();//GUARDAMOS REFERENCIA A LOS PASAJEROS QUE SE ESTAN COTIZANDO
$param=new parametros();
$ws=new WebServices();
////////// FIN ATRIBUTOS
////////// PAGINADOR
//LIMITAMOS EL TAMAÑO DE LA PAGINA
$TAMANO_PAGINA = 10;
//examino la p�gina a mostrar y el inicio del registro a mostrar
$pagina = $_GET["st"];
$estado = $_GET["estado"];
if (!$pagina ) {
	$inicio = 0;
	$pagina=1;
}
else {
	$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
//////////  FIN PAGINADOR
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
<title>Quotes Result | Seguros Medicos Internacionales</title>
<meta name="title" content="">
<meta name="description" content="">
<meta name="author" content="Seguros Medicos Internacionales">
<meta name="Copyright"
	content="Copyright � 2011 Seguros Medicos Internacionales All Rights Reserved">
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
<script language="JavaScript">
//METODO PARA LA VALIDACION DE SOLO CAMPOS NUMERICOS.
	var nav4 = window.Event ? true : false;	
	function acceptNum(evt){	
	// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57
	var key = nav4 ? evt.which : evt.keyCode;
	return (key <= 13 || (key >= 48 && key <= 57));
	
}
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
function agregarParaComparar(cb){	

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
	var categoria= cb.value;	
	var estado="";	
	if(cb.checked)
	  estado="agregar";	
	else
	   estado="eliminar";
	mygetrequest.open("GET", "logic/compare.php?tipo=1&categoria="+categoria+"&estado="+estado, true)
	mygetrequest.send(null)
	}	
//////////////////////////////////////////////////////////////////////////////////////////////////////////

function goToTravelDetails(numeroPoliza)
 {
	 document.formulario.innerHTML = document.formulario.innerHTML + "<input type=hidden name=codigo value='" + numeroPoliza +"'>";
	 document.formulario.submit(numeroPoliza);
 }



</script>


<body onload="loadImages()">
	<div class="wrapper">
		<!--- START HEADER --->
		<header>
			<div id="headerTop">
				<!--- START THE TOP HEADER --->
				<div id="headerCont">
					<a href=""><img class="logoSMI"
						src="tpl/img/SegurosMedicosInternacionales.png" /> </a>
					<!-- LOGO SMI POSITION -->
					<!-- HELP AREA RIGHT SMI -->
					<div class="contactHelp">
						<img src="tpl/img/skypeIcon.png" />
					</div>

					<div class="contactInfo">
						<p>
							Línea Nacional Gratuita: <span>01-8000-123-009</span>
						</p>

					</div>
					<!-- ENDS AREA RIGHT SMI -->
				</div>
			</div>
			<!---ENDS THE TOP HEADER--->
			<!--NAVIGATION BAR-->
			<div id="barNav">
				<div id="navContain">
					<nav>
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
					</nav>
				</div>
			</div>
			<!---ENDS NAVIGATION BAR--->
		</header>
		<!--- ENDS HEADER --->
		<!--START THE FULL BODY CONTAINER-->
		<div id="mainBody" class="highLights">
			<br />
			<!--START THE MAGIC QUOTE CONTENT-->
			<div id="magicArea">
				<!--MAGIC NAV-->
				<div id="magicNav">
					<div id="magicStep" class="off">
						<p>
							<span class="NumOff">1</span>Cotizar
						</p>
					</div>
					<div id="magicStep" class="on">
						<p>
							<span class="NumOn">2</span>Comparar
						</p>
					</div>
					<div id="magicStep" class="off">
						<p>
							<span class="NumOff">3</span>Solicitar
						</p>
					</div>
					<div id="magicStep" class="off">
						<p>
							<span class="NumOff">4</span>Comprar
						</p>
					</div>
				</div>
				<div id="magicStepEnd">
					<!--ENDS HERE THE STEPS-->
					<div id="magicStepCards">
						<img src="tpl/img/MasterMagicCards.png" alt="" /> <img
							src="tpl/img/PSECard.jpg" alt="" /> <img
							src="tpl/img/AmexMagicCards.png" alt="" /> <img
							src="tpl/img/VisaMagicCards.png" alt="" /> <img
							src="tpl/img/DinersClubCard.jpg" alt="" />

					</div>
					<!--ENDS HERE THE STEPS-->
				</div>





				<!--ENDS MAGIC NAV-->
				<!--MAGIC BOX FORM -->
				<div id="magicBox">


				<?php

				if( $estado==0)//viene del cotizador o se esta recotizando desde los resultados
				{
					//VARIABLES DE ENTRADA PARA  EJECUTAR LA BUSQUEDA
					$origen=(int)$_POST['country_idOpen'];
					$destino=(int)$_POST['country_idExit'];
					$salida=$_POST['dateOpen'];
					$regreso= $_POST['dateExit'];
					$tipoviaje=(int)$_POST['travelType_id'];
					$email=$_POST['email'];
					$edad1=$_POST['f_oldsNums1'];
					$edad2=$_POST['f_oldsNums2'];
					$edad3=$_POST['f_oldsNums3'];
					$edad4=$_POST['f_oldsNums4'];
					session_start();
					//LIMPIAR EL ARREGLO CADA VEZ QUE SE RECOTIZA
					$arreglo=$_SESSION['categoriasSeleccionandas'];
					$arreglo=$func->limpiarColeccion($arreglo);
					$_SESSION['categoriasSeleccionandas']=$arreglo;
					/////////////////////CONSTRUIMOS EL ARREGLO DE PASAJEROS PARA COTIZAR//////////////////////
					$pasajerosCotizacion=$func->limpiarColeccion($pasajerosCotizacion);

					$pasajerosCotizacion[]=$_POST['f_oldsNums1']!= null ?$_POST['f_oldsNums1']:"";
					$pasajerosCotizacion[]=$_POST['f_oldsNums2']!= null ?$_POST['f_oldsNums2']:"";
					$pasajerosCotizacion[]=$_POST['f_oldsNums3']!= null ?$_POST['f_oldsNums3']:"";
					$pasajerosCotizacion[]=$_POST['f_oldsNums4']!= null ?$_POST['f_oldsNums4']:"";
					
					// OBTENEMOS LA CANTIDAD DE PASAJEROS
					$totalPasajeros=$cotizador->CantidadPasajeros($edad1, $edad2, $edad3, $edad4);
				}
				else if ($estado==1 )// SE UTILIZA CUANDO SE ESTA NAVEGANDO EN LOS RESULTADOS.
				{
					$origen=(int)$_GET['origen'];
					$destino=(int)$_GET['destino'];
					$salida=$_GET['salida'];
					$regreso= $_GET['regreso'];
					$tipoviaje=(int)$_GET['tipoviaje'];
					$email=$_GET['email'];
					$edad1=$_GET['edad1'];
					$edad2=$_GET['edad2'];
					$edad3=$_GET['edad3'];
					$edad4=$_GET['edad4'];
					/////////////////////CONSTRUIMOS EL ARREGLO DE PASAJEROS PARA COTIZAR//////////////////////
					$pasajerosCotizacion=$func->limpiarColeccion($pasajerosCotizacion);
					$pasajerosCotizacion[]=$_GET['edad1']!= null ?$_GET['edad1']:"";;
					$pasajerosCotizacion[]=$_GET['edad2']!= null ?$_GET['edad2']:"";;
					$pasajerosCotizacion[]=$_GET['edad3']!= null ?$_GET['edad3']:"";;
					$pasajerosCotizacion[]=$_GET['edad4']!= null ?$_GET['edad4']:"";;
					
					
					// OBTENEMOS LA CANTIDAD DE PASAJEROS
					$totalPasajeros=$cotizador->CantidadPasajeros($edad1, $edad2, $edad3, $edad4);

				}
				?>


					<form name="cotizador" id="cotizador" method="post"
						action="quotes_result.php?st=1">
						<div class="leftMagicBox"></div>
						<div class="midMagicBox">
							<!--START RTHE FORM-->

							<div id="chooseTarget" class="oneStep">
								<label>Origen:</label>
								<!-- CHOOSE A COUNTRY -->
								<?php
								//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA
								$r=$param->FillOrigenes();
								echo "<select name=\"country_idOpen\" id=\"f_country_idOpen\">
	";
								while (!$r->EOF) {
									if($r->fields[0]!=$origen)
									echo "<option value=".$r->fields[0] .">".$func->fixEncoding($r->fields[2]) ."</option>";
									else
									echo" <option value=".$r->fields[0]." SELECTED>".$func->fixEncoding($r->fields[2])."</option>";
									$r->MoveNext();

								}

								echo "</select> "; ?>
								<!-- CHOOSE A COUNTRY -->
								<label>Destino:</label>
								<?php
								//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA
								$r=$param->FillDestinos();
								echo "<select name=\"country_idExit\" id=\"f_country_idExit\">
		
	";
								while (!$r->EOF) {

									if($r->fields[0]!=$destino)
									echo "<option value=".$r->fields[0] .">".$func->fixEncoding($r->fields[1]) ."</option>";
									else
									echo" <option value=".$r->fields[0]." SELECTED>".$func->fixEncoding($r->fields[1])."</option>";
									$r->MoveNext();
								}

								echo "</select> "; ?>
								<!-- CHOOSE COUNTRY'S END -->
							</div>
							<div id="chooseTarget" class="twoStep">
								<!-- CHOOSE DATES -->
								<label>Salida:</label><br /> <input type="text" name="dateOpen"
									id="f_dateOpen" class="dateImg" value="<?php echo $salida; ?>" />
								<hr />
								<label>Regreso:</label><br /> <input type="text" name="dateExit"
									id="f_dateExit" class="dateImg" value="<?php echo $regreso; ?>" />
								<!-- ENDS CHOOSE COUNTRIES -->
							</div>

							<div id="chooseTarget" class="threeStep">
								<!--TRAVEL INFO-->
								<label>Tipo de Viaje:</label>
								<?php
								//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA
								$r=$param->FillTipoProducto();
								echo "<select name=\"travelType_id\" id=\"f_travelType_id\">
	
	";
								while (!$r->EOF) {
									if($r->fields[0]!=$tipoviaje)
									echo "<option value=".$r->fields[0] .">".$func->fixEncoding($r->fields[1]) ."</option>";
									else
									echo" <option value=".$r->fields[0]." SELECTED>".$func->fixEncoding($r->fields[1])."</option>";
									$r->MoveNext();
								}

								echo "</select> "; ?>
								<label>Edades:</label><br /> <input type="text"
									name="f_oldsNums1" id="f_oldsNums1" size="1"
									style="width: 20px;" maxlength="2"
									value="<?php echo $edad1; ?>"
									onkeypress="return acceptNum(event)" /> <input type="text"
									name="f_oldsNums2" id="f_oldsNums2" size="1"
									style="width: 20px;" maxlength="2"
									value="<?php echo $edad2; ?>"
									onkeypress="return acceptNum(event)" /> <input type="text"
									name="f_oldsNums3" id="f_oldsNums3" size="1"
									style="width: 20px;" maxlength="2"
									value="<?php echo $edad3; ?>"
									onkeypress="return acceptNum(event)" /> <input type="text"
									name="f_oldsNums4" id="f_oldsNums4" size="1"
									style="width: 20px;" maxlength="2" value="<?php echo $edad4;?>"
									onkeypress="return acceptNum(event)" />
								<!--ENDS TRAVEL INFO-->
							</div>
							<div id="chooseTarget" class="fourStep">
								<!--EMAIL FORM HERE INFO-->
								<label>Email:</label><br /> <input type="text" name="email"
									id="f_email" size="18" value="<?php echo $email; ?>" /> <br />
								<br /> <a class="contactenos" id="lightbox"
									href="logic/compare.php?tipo=2">COMPARAR</a>
							</div>

							<!--ENDS FORMS-->
						</div>

						<div class="rightMagicBox">
							<!--HERE THE SUBMIT TYPE & OTHERS VARS-->
							<input type="hidden" name="" value="" /> <input type="submit"
								src="tpl/img/clear.png" class="submitQuote" id="Cotizar"
								value="Cotizar" />
						</div>
						<div class="endMagicBox"></div>
					</form>
					<script language="JavaScript" type="text/javascript"
						xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("cotizador");  
  frmvalidator.addValidation("country_idExit","dontselect=0","Debe Ingresar El Destino.");
  frmvalidator.addValidation("travelType_id","dontselect=0","Debe Ingresar El Tipo De Viaje.");
  frmvalidator.addValidation("f_dateOpen","req","Debe Ingresar La Fecha De Salida.");
  frmvalidator.addValidation("f_dateExit","req","Debe Ingresar La Fecha De Regreso.");  
  frmvalidator.addValidation("email","maxlen=50");
  frmvalidator.addValidation("email","req","Debe Ingresar Un E-mail.");
  frmvalidator.addValidation("email","email","Debe Ingresar Un E-mail V�lido ."); 
//]]></script>
				</div>
				<!--ENDS MAGIC BOX FORM -->
			</div>
			<!--END THE MAGIC QUOTE CONTENT-->
			<div id="temp"></div>
			<div id="magicResult">
				<!--- START HERE THE QUOTE RESULT --->
				<!--START HERE A FOR-WHILE --->


				
					<?php
					//EJECUTAMOS LA CONSULTA DEPENDIENDO DE LOS PARAMETEROS RECIBIDOS POR METODO GET o POST
					$totalResultados=$cotizador->CountListadoConEdad($func->calcularDias($salida, $regreso), $tipoviaje, $destino, (int)$edad1,(int)$edad2,(int)$edad3,(int)$edad4);
					$total_paginas = ceil($totalResultados / $TAMANO_PAGINA); //CALCULAMOS EL TOTAL DE LAS PAGINAS
					$rs=$cotizador->FillByListadoConEdad($func->calcularDias($salida, $regreso), $tipoviaje, $destino, (int)$edad1,(int)$edad2,(int)$edad3,(int)$edad4,$inicio,$inicio+$TAMANO_PAGINA);
					//CALCULAMOS DONDE SE DEBE COMENZAR.
					if($pagina==1) $inicioPagina= $pagina;
					else $inicioPagina= ($TAMANO_PAGINA)*($pagina-1);
					//CALCULAMOS EL FIN DE PAGINA.
					$finPagina=$inicioPagina+$TAMANO_PAGINA;
					//RECORREMOS LOS RESULTADOS VALIDANDO QUE YA NO SE HAYA IMPRESO EL ITEM
					$contador=0;

					foreach($rs as $k => $row) {
						if($contador>=$inicioPagina &&  $contador< $finPagina){
							//SI SE ENCUENTRA PARAMETRIZADAS LA COBERTURAS  LAS IMPRIMIMOS.
							$rscoberturas=$cotizador->FillCoberturasByIdPoliza($row[5]);
							//ESTA GUARDA NOS SIRVE PARA CONTROL, QUE NO SE LISTEN PRODUCTOS QUE NO TIENEN UN PRECIO DESDE EL WEBSERVICE.
							$guardaCotizacion=$ws->ObtenerPrecio($row[1], $row[9], $salida, $regreso,$func->calcularDias($salida, $regreso), $pasajerosCotizacion , $row[8]);
							if($guardaCotizacion!=-1){//VALIDAMOS QUE REALMENTE SE ENCUENTRE UN PRECIO EN EL SISTEMA , PARA MOSTRAR LA POLIZA
								$precio=$guardaCotizacion;
								
								$resultadoayd=$func->getAumentoDescuento($row[0], $pasajerosCotizacion);//OBTENEMOS LOS AUMENTOS Y DESCUENTOS CORRESPONDIENTES TANTO POR ID DE LA POLIZA Y CANTIDAD PASAJEROS.
								$resultadoayd=explode("-", trim($resultadoayd));
								
								$aumento=$resultadoayd[1]/100;
								$descuentoInterno=$resultadoayd[0]/100;//OBTENEMOS EL DESCUENTO PARA OPERAR
								$precio= ($precio+ ($aumento*$precio));//APLICAMOS EL AUMENTO 
								$precio= ($precio- ($descuentoInterno*$precio));//APLICAMOS EL AUMENTO 	
								$precio= $precio *$totalPasajeros;					
								$descuento=$resultadoayd[0];
								//echo "<br>";
								//echo "AUMENTO".$aumento;					
								//echo "PRECIO". $guardaCotizacion;
								echo"
	
<form name=\"formulario\" id=\"formulario\" action=\"travel_details.php\" method=\"post\" >
<div id=\"magicResultBox\">
<div id=\"magicCount\">
<span>".$contador ."</span>
<h1>".$precio."</h1>";
if($descuento!=0)
echo"<h2>USD %".$descuento."off</h2>";
else 
echo"<h2>USD  </h2>";

echo"
</div>
<div id=\"magicDesc\">
<ul>";		
								//RECORREMOS E IMPRIMIMOS LAS COBERTURAS , SI LAS TIENE
								while (!$rscoberturas->EOF) {
									echo "<li> ".$rscoberturas->fields[3]." </li>";
									$rscoberturas->MoveNext();}
									echo "</ul>
<span>Ver detalle<br />
<a href=logic/pdfviewer.php?categoria=".$row[5]."><img src=\"tpl/img/pdfIcon.png\" /></a>
</span>
</div>
<div id=\"magicPurchase\">
<div class=\"chooseComp\">
<fieldset>
<div><legend></legend>	
<label for=\"\">Comparar Productos </label>
<input type=\"checkbox\"  id=\"categorias\" name=\"categorias\" value=". $row[5] ." onclick=\"agregarParaComparar(this)\">
<input type=\"hidden\" name=\"PrecioCotizado-".$contador."\"  value=". $precio." />
<input type=\"hidden\" name=\"IdPoliza-".$contador."\"  value=". $row[0] ." />
</div>
<label for=\"\">";
									echo $cotizador->Getclausulado($row[9]);// SE ENVIA POR PARAMETRO EL ID DE LA ASEGURADORA PARA QUE RETORNE EL CLAUSULADO  CORRESPONDIENTE
									echo "
</label
></fieldset>
</div>
<div class=\"choosePlan\">
<div class=\"chooseImg\">";
									echo $cotizador->Getimg($row[9]);// SE ENVIA POR PARAMETRO EL ID DE LA ASEGURADORA PARA QUE RETORNE LA IMAGEN CORRESPONDIENTE
									echo "
</div>

<div class=\"chooseBtn\">
<input type=\"hidden\" name=\"PasajerosCotizados\"  value=". $totalPasajeros  ." /> 
<input type=\"button\" src=\"tpl/img/clear.png\" class=\"submitPurchase\"  value=\"Comprar\"   onclick=\"goToTravelDetails(".$contador.")\" />
<form>
</div>
</div>
</div>
</div>
 ";	
							}
					}
					$contador++;
				}

				// MUESTRA EL PAGINADOR
	if ($total_paginas > 1){ 
     for ($i=1;$i<=$total_paginas;$i++){ 
        if ($pagina == $i) 
           //si muestro el �ndice de la p�gina actual, no coloco enlace 
           echo $pagina . " "; 
        else 
           //si el �ndice no corresponde con la p�gina mostrada actualmente, coloco el enlace para ir a esa p�gina 
           	echo "<a href='quotes_result.php?estado=1&st=" . $i . "&origen=" . $origen . "&destino=" . $destino . "&salida=" . $salida . "&regreso=" . $regreso . "&tipoviaje=" . $tipoviaje."&email=" . $email."&edad1=" . $edad1."&edad2=" . $edad2."&edad3=" . $edad3."&edad4=" . $edad4. "'>" . $i . "</a> "; 
     } 
 }


?>
				<!--ENDS FOR-WHILE BUCLE--->
			</div>
			<!--- ENDS THE QUOTE RESULT --->
		</div>
		<!--ENDS THE FULL BODY CONTAINER-->
		<!---INIT THE FOOTER CONTENT HERE-->
		<?php
//EL FOOTER LO TENEMOS ALMACENADO Y SECILLMANTE LO REPLICAMOS EN LAS PAGINAS QUE NECESITMAOS
echo $func->getFooter(); 
?>
		<!--ENDS ALL FOOTER CONTAINS-->

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

