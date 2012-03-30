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
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --><head id="www-segurosmedicosinternacionales-com" data-template-set="html5-reset">
	<meta name="viewport" content="width=1200">
    <meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Companies | Seguros Medicos Internacionales </title>
	<meta name="title" content="">
	<meta name="description" content="">
	<meta name="author" content="Seguros Medicos Internacionales">
	<meta name="Copyright" content="Copyright © 2011 Seguros Medicos Internacionales All Rights Reserved">
   	<![if !IE]><!--- IE FIXURE FONT REPLACE GOOGLE API - OTHER BROWSER OK!--> 
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,700,600,400' rel='stylesheet' type='text/css'>
    <![endif]>
	<!-- Uncomment to use; use thoughtfully!
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
	<link rel="Shortcut Icon" href="tpl/img/favicon.ico">
	<link rel="icon" href="tpl/img/favicon.ico" type="image/x-icon">
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="tpl/css/style.css" >
    <link type="text/css" href="tpl/css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="tpl/js/modernizr-1.7.min.js"></script>
    <script src="tpl/js/gen_validatorv4.js"></script>
    <link href="tpl/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />   
    
</head>

<!--Start of Zopim Live Chat Script-->

<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?YSdpKx0VatFD2OAvEhAOthvLxiFafiVl';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>


<!--End of Zopim Live Chat Script-->

<body>

<div class="wrapper">
	<!--- START HEADER --->
    <header>
		<div id="headerTop"><!--- START THE TOP HEADER --->
        	<div id="headerCont">
            		<a href=""><img class="logoSMI" src="tpl/img/SegurosMedicosInternacionales.png"/></a><!-- LOGO SMI POSITION -->
                <!-- HELP AREA RIGHT SMI -->
                <div class="contactHelp">
                	<img src="tpl/img/skypeIcon.png" />
                </div>
                
                <div class="contactInfo">
                	<p>Línea Nacional Gratuita: <span>01-8000-123-009</span></p>
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
                  <li><a href="index.php" >Inicio</a></li>
                    <li><a href="about_us.php">Conocenos</a></li>
                    <li><a href="clauses.php">Clausulados</a></li>
                    <li><a href="services.php">Servicios</a>
                    <li><a href="companies.php" class="active" >Compañias</a></li>
                    <li><a href="plans.php">Planes</a></li>
                    <li><a href="contact_us.php">Contacto</a></li>
					<li><a href="faq.php">Preguntas Frecuentes </a></li>
                </ul>
            </nav>
         </div>   
      </div>  <!---ENDS NAVIGATION BAR--->
	</header>
    <!--- ENDS HEADER --->
     <!--START THE FULL BODY CONTAINER-->  
       <div id="mainBody" class="highLights">
           <br />
           
           <!--START THE MAGIC QUOTE CONTENT-->
           <div id="magicArea"><!--MAGIC NAV-->
<div id="magicNav">
<div id="magicStep" class="on">
<p><span class="NumOn">1</span>Cotizar</p>
</div>
<div id="magicStep" class="off">
<p><span class="NumOff">2</span>Comparar</p>
</div>
<div id="magicStep" class="off">
<p><span class="NumOff">3</span>Solicitar</p>
</div>
<div id="magicStep" class="off">
<p><span class="NumOff">4</span>Comprar</p>
</div>
</div>
<div id="magicStepEnd"><!--ENDS HERE THE STEPS--> Cotiza tu asistencia
de viaje aquí.</div>
<!--ENDS MAGIC NAV--> 

<!--MAGIC BOX FORM -->
<div id="magicBox">

<form id="cotizador" name="cotizador"
	action="quotes_result.php?st=1 &estado=0 " method="post">


<div class="leftMagicBox"></div>
<div class="midMagicBox">
<!--START RTHE FORM-->

<div id="chooseTarget" class="oneStep"><label>Origen:</label> <!-- CHOOSE A COUNTRY -->
<?php
//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA
$r=$param->FillOrigenes();
echo "<select name=\"country_idOpen\" id=\"f_country_idOpen\">
		
	";
while (!$r->EOF) {
	if($r->fields[0]!=48)
	echo "<option value=".$r->fields[0] .">".$fun->fixEncoding( $r->fields[2]) ."</option>";
	else
	echo "<option value=".$r->fields[0] ." SELECTED>".$fun->fixEncoding( $r->fields[2] )."</option>";
	$r->MoveNext();
}
echo "</select> "; ?> <!-- CHOOSE A COUNTRY --> <label>Destino:</label>
<?php
//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA
$r=$param->FillDestinos();
echo "<select name=\"country_idExit\" id=\"f_country_idExit\">
	<option value=\"0\">Seleccione</option>	
	";
while (!$r->EOF) {
	echo "<option value=".$r->fields[0] .">".$fun->fixEncoding( $r->fields[1]) ."</option>";
	$r->MoveNext();
}
echo "</select> "; ?> <!-- CHOOSE COUNTRY'S END --></div>
<div id="chooseTarget" class="twoStep"><!-- CHOOSE DATES --> <label>Salida:</label><br />
<input type="text" name="dateOpen" id="f_dateOpen" class="dateImg" />
<hr />
<label>Regreso:</label><br />
<input type="text" name="dateExit" id="f_dateExit" class="dateImg" /> <!-- ENDS CHOOSE COUNTRIES -->
</div>

<div id="chooseTarget" class="threeStep"><!--TRAVEL INFO--> <label>Tipo
de Viaje:</label> <?php 
//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA
$r=$param->FillTipoProducto();
echo "<select name=\"travelType_id\" id=\"f_travelType_id\">
	<option value=\"0\">Seleccione</option>	
	";
while (!$r->EOF) {
	echo "<option value=".$r->fields[0] .">".$fun->fixEncoding( $r->fields[1]) ."</option>";
	$r->MoveNext();
}
echo "</select> "; ?> <label>Edades:</label><br />

<input type="text" name="f_oldsNums1" id="f_oldsNums1" size="1"
	style="width: 20px;" maxlength="2" onkeypress="return acceptNum(event)" />

<input type="text" name="f_oldsNums2" id="f_oldsNums2" size="1"
	style="width: 20px;" maxlength="2" onkeypress="return acceptNum(event)" />
<input type="text" name="f_oldsNums3" id="f_oldsNums3" size="1"
	style="width: 20px;" maxlength="2" onkeypress="return acceptNum(event)" />
<input type="text" name="f_oldsNums4" id="f_oldsNums4" size="1"
	style="width: 20px;" maxlength="2" onkeypress="return acceptNum(event)" />
<!--ENDS TRAVEL INFO--></div>

<div id="chooseTarget" class="fourStep"><!--EMAIL FORM HERE INFO--> <label>Email:</label><br />
<input type="text" name="email" id="f_email" size="18" /> <br />
<br />
<span class="intsr" href><a href="contact_us.php">• Más de de 4 pasajeros Contactanos</a></span></div>

<!--ENDS FORMS--></div>
<div class="rightMagicBox"><!--HERE THE SUBMIT TYPE & OTHERS VARS--> <input
	type="hidden" name="" value="" /> <input type="submit"
	src="tpl/img/clear.png" class="submitQuote" value="Cotizar" />

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
  frmvalidator.addValidation("email","email","Debe Ingresar Un E-mail Válido ."); 
//]]></script></div>
<div class="endMagicBox"></div>

</div>
<!--ENDS MAGIC BOX FORM --></div>

           
<!--END THE MAGIC QUOTE CONTENT-->


		<!--START ALL CORPORATIVE TEXTS--->
			
<div id="Corporative">
  
             <h4 style="margin-left:15px;">Compañias</h4>
                
               <!-- PARTNERS TABBED CONTENT --->
                     	<div id="partnersBoxInfo">
    
                                <ul id="partnersTabs">
                                    <!--START THE SAME LIST  INDEX LOGOS-->
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/TravelGuard.png" width="125" height="70" alt="TravelGuard"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/Qualitas.png" width="135" height="70" alt="Qualitas"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/AssistCard.png" width="155" height="70" alt="Assist Card"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/Coris.png" width="83" height="70" alt="Coris"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/SegurViaje.png" width="89" height="70" alt="SegurViaje"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/Mafre.png" width="176" height="70" alt="Mafre"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/TravelAce.png" width="60" height="70" alt="Travel Ace"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><img src="tpl/img/Partners/UniversalAssistance.png" width="60" height="70" alt="UniversalAssistance"></a>
                                        </li>
                                        <li><a href="javascript:;"><img src="tpl/img/Partners/Safest.png" width="66" height="70" alt="Safest"></a></li>                                   		                                    <!--ENDS LOGOS-->                                                                                                          
                                </ul>
                    
                                <ul id="outInfoPart">  
                                  <!-- 1ST PARTNER INFO -->  
                                    <li>
                                    	<!--START THE BOX INFO PARTNER-->
                                        <div id="infoPartn">
                                        	
                                            <h4>TRAVEL GUARD CHARTIS</h4><!--HERE GOES TIITLE COMPANY-->
                                            <div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelTravelGuardChartis_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT TRAVEL GUARD - CHARTIS --->
                                                            <p>
CHARTIS SEGUROS COLOMBIA S.A. (antes AIG COLOMBIA SEGUROS GENERALES S.A.), representa nuestra historia y cultura, ambas arraigadas en la exploración y búsqueda de la excelencia mediante soluciones de seguros y la innovación. 
<p><strong>Una visión integrada…</strong></p>
<p>Según avanzamos, nuestra visión es clara. Aspiramos a ser el proveedor preferido de soluciones de seguros y servicio al cliente en todas partes del mundo. Al hacerlo, seguimos una serie de principios culturales que dan forma a la manera en que actuamos, tanto individual como conjuntamente. 
Valores…</p>
<p><strong>INNOVACION:</strong> Fomentamos el cambio, procurando siempre oportunidades prometedoras para nuestros clientes, nuestros socios y nosotros mismos. </p> 
<p><strong>INTEGRIDAD:</strong> En todo lo que hacemos hay un compromiso personal con la honestidad, la equidad y el respeto.  </p>
<p><strong>ALIADO ESTRATEGICO:</strong> Creamos el futuro al trabajar juntos y con nuestros clientes en un entorno de confianza mutua.</p>  
<p><strong>DIVERSIDAD MUNDIAL:</strong> Celebramos la diversidad y promovemos una cultura que fomenta el trabajo en equipo, en búsqueda del bienestar común. </p>
</p></div>
                                        </div> <!--ENDS THE BOX INFO PARTNER -->		
                                    </li>
                                  <!-- 2ND PARTNER INFO -->  
                                    <li>
                                        <div id="infoPartn">
                                            <h4>QUALITAS ASSISTANCE</h4>
                                            <div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelQualitas_Big.png" /> 
                                            </div>
                                            <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->
                                                            <p>
                                                         QUALITAS ASSISTANCE LLC, es una empresa Norteamericana domiciliada en el Estado de la Florida (U.S.A.), 
                                                         dedicada a la asistencia al viajero. <p>QUALITAS ASSISTANCE mantiene alianzas mundiales con las mas prestigiosas empresas de servicios,
                                                          empresas de seguros y reaseguros, de forma de poder garantizarle a sus clientes un servicio de altisima calidad y
                                                           con la mayor prontitud. Nuestra moderna plataforma web permite en tiempo real y segura proveer a sus clientes y 
                                                           el canal de distribucion una venta inmediata y la atencion de emergencias al instante. No importa cuan sencilla o 
                                                           compleja sea la emergencia, nosotros estamos dispuestos y capacitados a responder a su necesidad, ya que contamos 
                                                           con la mas amplia red de asistencia a escala mundial, las 24 Horas los 365 días al año con personal multilingüe y 
                                                           altamente competente, todo con una simple llamada telefonica gratuita. Por ello somos SU PROTECTOR EN VIAJES.</p>
                                                            
                                                            </p>
                                                </div>
                                        </div> 		
                                    </li>  
                                  <!-- 3ND PARTNER INFO -->  
                                    <li>
                                    	<!--START THE BOX INFO PARTNER-->
                                        <div id="infoPartn">
                                            <h4>ASSIST-CARD</h4><!--HERE GOES TIITLE COMPANY-->
                                            <div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelAssitCard_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->
                                                            <p>
                                                          ASSIST-CARD está basada en una promesa simple e inquebrantable: “Estaremos a su servicio, siempre” Brindamos asistencia de emergencia a los viajeros, ininterrumpidamente, en cualquier condición, en cualquier lugar y en cualquier momento. 
Somos una organización dedicada 100% a la asistencia integral al viajero, con 38 años de experiencia. Tenemos la red de prestadores más grande del mundo, con la capacidad de resolver desde los problemas más simples a los más complejos. Contamos con 60 centrales operativas, para estar cerca de nuestros clientes y ofrecerles la ayuda más eficiente y rápida. Ésta es nuestra principal ventaja competitiva ASSIST-CARD es, desde 1972, una empresa de asistencia al viajero de amplia trayectoria, con reconocimiento mundial en 105 países. Trabaja en todo el mundo y ayuda a más de 100.000 viajeros por año, que resuelve de forma inmediata cualquier eventualidad, brindando atención y apoyo a todos los pasajeros que están lejos de su casa. 
Esperamos que nunca tenga que llamarnos. Pero si nos necesita, simplemente recuerde nuestra promesa: “Estaremos a su servicio, siempre” 
VIAJE TRANQUILO VIAJE CON ASSIST-CARD 

                                                            </strong></p>
                                                </div>
                                        </div> <!--ENDS THE BOX INFO PARTNER -->				
                                    </li>   
                                  <!-- 4TH PARTNER INFO -->  
                                    <li>
                                        <div id="infoPartn">
                                            <h4>CORIS</h4>
                                            <div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelCoris_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->
                                                            <p>
CORIS tiene experiencia y probada estructura para solucionar rápida y efectivamente cualquier imprevisto en cualquier lugar del mundo. Somos parte de APRIL Group International, un consorcio francés constituido en 1988 que cuenta con 3.750 empleados dedicados a múltiples ramas de la industria de los seguros: médicos, previsión y daños a particulares; empresas y organizaciones.

<p><strong>APRIL Group</strong> asesora, diseña, gestiona y comercializa sus soluciones de seguros mediante una estrategia multicanal que combina una red de 15.000 representaciones físicas y virtuales.</p>

<p><strong>APRIL Group</strong> cotiza en la Bolsa Euronext de París - Compartimiento A, y alcanzó en 2009 un volumen de negocios consolidado de 813 millones de euros con un resultado neto de 72,7 millones.</p>

<p><strong>CORIS </strong> , a través de su red propia conformada por más de 40 centrales operativas distribuidas en todo el mundo, brinda asistencia médica, personal y protección las 24 horas, los 365 días del año, con especialistas en forma directa y en múltiples idiomas. Nuestro compromiso es brindar al cliente el más alto grado de calidad, eficiencia y tecnología en cada uno de nuestros servicios de asistencia alrededor del mundo.</p>



													</p>
                                                </div>
                                        </div> 		
                                    </li>
                                  <!-- 5TH PARTNER INFO -->  
                                    <li>
                                        <div id="infoPartn">
                                            <h4>SEGURVIAJE</h4>
                                            <div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelSegurViaje_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->
                                                            <p>
                                                            MAPFRE ASISTENCIA es una Organización Internacional de Asistencia, cuyo Operador de Asistencia en Colombia es ANDIASISTENCIA, Compañía de Asistencia de Los Andes (en adelante el Operador de Asistencia), cuyo objeto es el de proporcionar, entre otros, servicios de asistencia médica, jurídica y personal en situaciones de emergencia durante el transcurso de un viaje a través de las coberturas y límites monetarios de los planes de SEGURVIAJE.

MAPFRE ASISTENCIA es una multinacional de seguros, reaseguro y servicios fundada en Madrid (España) en 1989 y que hoy día opera en Europa, América, Asia, y África.
Especialista y líder internacional en Seguros de Viaje y Asistencia, Riesgos Especiales, Tercera Edad y Viajes y Turismo, en MAPFRE ASISTENCIA ponemos a tu disposición una amplia gama de productos que son referencia en el ámbito asegurador mundial y por lo que hemos sido reconocidos, entre otros, con el Premio ITIJ, galardón que nos certifica como la mejor compañía internacional de Asistencia.
El compromiso de nuestros más de 6.500 profesionales es tu satisfacción, objetivo que conseguimos a través de tres principios básicos: la excelente calidad en nuestro servicio y actuaciones, la constante innovación y creatividad en productos, y el desarrollo tecnológico propio.
En el ejercicio 2006, hemos superado el millar de clientes corporativos y contamos con más de 67 millones de asegurados y más de 120 millones de beneficiarios. Nuestra solidez financiera ha sido reconocida con los ratings A+ (Superior) y A1, otorgados por las agencias de calificación AM Best (desde 1999) y Moodys (desde 2002), respectivamente.
MAPFRE ASISTENCIA es una entidad del GRUPO MAPFRE, grupo empresarial español independiente que desarrolla actividades aseguradoras principalmente en Europa y América Latina, mercados en los que es una de las corporaciones líder. 
                                                            
                                                            
                                                            
                                                            
                                                             </strong></p>
                                                </div>
                                        </div> 		
                                    </li>
                                  <!-- 6TH PARTNER INFO -->  
                                    <li>
                                        <div id="infoPartn">
                                            <h4>MAPFRE ASISTENCIA</h4>
                                            <div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelMapfreE_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->
                                                            <p>
                                                            
                                                         <p> MAPFRE ASISTENCIA es una Organización Internacional de Asistencia, cuyo Operador de Asistencia en Colombia es ANDIASISTENCIA, Compañía de Asistencia de Los Andes (en adelante el Operador de Asistencia), cuyo objeto es el de proporcionar, entre otros, servicios de asistencia médica, jurídica y personal en situaciones de emergencia durante el transcurso de un viaje a través de las coberturas y límites monetarios de los planes de SEGURVIAJE.  </p>
														  <p>MAPFRE ASISTENCIA es una multinacional de seguros, reaseguro y servicios fundada en Madrid (España) en 1989 y que hoy día opera en Europa, América, Asia, y África.  
														Especialista y líder internacional en Seguros de Viaje y Asistencia, Riesgos Especiales, Tercera Edad y Viajes y Turismo, en MAPFRE ASISTENCIA ponemos a tu disposición una amplia gama de productos que son referencia en el ámbito asegurador mundial y por lo que hemos sido reconocidos, entre otros, con el Premio ITIJ, galardón que nos certifica como la mejor compañía internacional de Asistencia.
														El compromiso de nuestros más de 6.500 profesionales es tu satisfacción, objetivo que conseguimos a través de tres principios básicos: la excelente calidad en nuestro servicio y actuaciones, la constante innovación y creatividad en productos, y el desarrollo tecnológico propio.
														En el ejercicio 2006, hemos superado el millar de clientes corporativos y contamos con más de 67 millones de asegurados y más de 120 millones de beneficiarios. Nuestra solidez financiera ha sido reconocida con los ratings A+ (Superior) y A1, otorgados por las agencias de calificación AM Best (desde 1999) y Moodys (desde 2002), respectivamente.</p>
														  <p>MAPFRE ASISTENCIA es una entidad del GRUPO MAPFRE, grupo empresarial español independiente que desarrolla actividades aseguradoras principalmente en Europa y América Latina, mercados en los que es una de las corporaciones líder.  </p> 
                                                            </p>
                                                </div>                                            
                                        </div> 		
                                    </li>
                                  <!-- 7TH PARTNER INFO -->  
                                    <li>
                                        <div id="infoPartn">
                                            <h4>TRAVEL ACE</h4>
                                           	<div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelTravelAce_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->
                                                     <p>   Nacimos hace más de 30 años ofreciendo servicios dedicados a la asistencia integral al viajero.
Nuestra organización posee centrales de atención en todo el mundo con el fin de fortalecer una red de servicios que posibilite a los clientes solucionar cualquier imprevisto durante sus viajes a través de nuestra credencial de asistencia.
Presentes en 150 países, disponemos de un equipo de profesionales calificados y altamente entrenados para responder de manera eficaz y confiable.
Formamos parte de un Grupo Internacional especializado en la prestación de servicios de asistencia a través de diversas marcas, entre las cuales se encuentra Universal Assistance, 
Los resultados son el aval de sus servicios: 

<p>•	10.000.000 de vidas cubiertas al año por nuestro servicio de asistencia al viajero.</p>
<p>•	Más de 500.000 asistencias médicas anuales distribuidas en los 5 continentes.</p>
<p>•	Más de 1.500.000 llamados atendidos con rápida y eficiente respuesta.</p>
<p>•	Más de 1.000.000 de unidades atendidas por nuestro exclusivo servicio de asistencia al vehículo.</p>
<p>•	Más de 100.000 hogares protegidos por el servicio de asistencia al hogar. </p>
<p>•	Una Red mundial de Prestadores con más de 80.000 profesionales e instituciones de primer nivel.</p>
<p>•	Más de 300 clientes corporativos.</p>
<p>•	Presencia en más de 15.000 agencias de viaje latinoamericanas y empresas del sector turístico.</p>
<p>•	Oficinas comerciales en todo Latinoamérica. Respaldo Internacional.</p>

                
                
                
                </strong></p>
                                                </div>
                                            
                                        </div> 		
                                    </li>                                   
                                    <!-- 8TH PARTNER INFO -->  
                                    <li>
                                        <div id="infoPartn">
                                            <h4>UNIVERSAL ASSISTANCE</h4>
                                           	<div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelTravelUniversal_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->
                                                            
                <p>Nacimos hace más de 30 años ofreciendo servicios dedicados a la asistencia integral al viajero.
Nuestra organización posee centrales de atención en todo el mundo con el fin de fortalecer una red de servicios que posibilite a los clientes solucionar cualquier imprevisto durante sus viajes a través de nuestra credencial de asistencia.
Presentes en 150 países, disponemos de un equipo de profesionales calificados y altamente entrenados para responder de manera eficaz y confiable.
Formamos parte de un Grupo Internacional especializado en la prestación de servicios de asistencia a través de diversas marcas, entre las cuales se encuentra Travel ace assistance, Los resultados son el aval de sus servicios: 

<p>•	10.000.000 de vidas cubiertas al año por nuestro servicio de asistencia al viajero.</p>
<p>•	Más de 500.000 asistencias médicas anuales distribuidas en los 5 continentes.</p>
<p>•	Más de 1.500.000 llamados atendidos con rápida y eficiente respuesta.</p>
<p>•	Más de 1.000.000 de unidades atendidas por nuestro exclusivo servicio de asistencia al vehículo.</p>
<p>•	Más de 100.000 hogares protegidos por el servicio de asistencia al hogar. </p>
<p>•	Una Red mundial de Prestadores con más de 80.000 profesionales e instituciones de primer nivel.</p>
<p>•	Más de 300 clientes corporativos.</p>
<p>•	Presencia en más de 15.000 agencias de viaje latinoamericanas y empresas del sector turístico.</p>
<p>•	Oficinas comerciales en todo Latinoamérica. Respaldo Internacional.</p>
	
</p>
                                                </div>                                            
                                        </div> 		
                                    </li>                                    
                                    <!-- 9TH PARTNER INFO -->  
                                    <li>
                                        <div id="infoPartn">
                                            <h4>SAFEST</h4>
                                           	<div class="tiitlePart"> 
                                            <!--HERE GOES LOGO BIG IMAGE --->
                                            	<img src="tpl/img/TravelType/travelTravelSafety_Big.png" /> 
                                            </div>
                                                <div class="detaPart">
                                                 	<!-- START DETAILS ABOUT COMPANY --->          
                <p>El Seguro Médico Internacional SAFEST, creado por EDUCAMOS VIAJANDO con el apoyo de MAPFRE Colombia.
Pase lo que pase, estés donde estés, siempre estaremos presentes para ayudarte en lo que necesites. SAFEST fue creado con la idea de cubrir las necesidades reales del viajero de hoy.
A través de SAFEST cuentas con las coberturas y garantías específicas y una amplia gama de servicios para solucionar las emergencias que pudiesen surgir durante tu viaje.
En caso de una necesidad médica por enfermedad o accidente, pérdida de equipaje o algún inconveniente que impida continuar con el proceso normal de tu viaje, siempre tendrás un acompañante con filiales a nivel mundial que atenderán tu llamado.
</strong></p>
                                                </div>                                                
                                        </div> 		
                                    </li>                                                                                                                                                                                                                            
                             </ul>
  
    
                      </div><!--ENDS TABBED PARTNESR LIST--->

                                        

 
               
            </div>
            <!--ENDS CORPORATIVES-->

            
            
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
        
        
        
        <!--ENDS ALL FOOTER CONTAINS-->
</div><!--ENDS WRAPPER-->
<script>window.jQuery || document.write("<script src='tpl/js/jquery-1.6.2.min.js'>\x3C/script>")</script>
<script type="text/javascript" src="tpl/js/jquery.selectbox-0.1.3.js"></script>
<script src="tpl/js/jquery.custom_radio_checkbox.js" type="text/javascript"></script>
<script type="text/javascript" src="tpl/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="tpl/js/functions.js"></script>  
                                                   <script type="text/javascript">
												   			$(document).ready(function() { 	
																	$(".f_queryPlan_id, .f_queryAgencia_id").selectbox();
																});	
												   </script>
</body>
</html>
   	