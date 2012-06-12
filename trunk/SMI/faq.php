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
	<title>Frecuently Answers - Questions | Seguros Medicos Internacionales </title>
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
$.src='//cdn.zopim.com/?g9y23H0LeKputTMayHiR1XCwQTEtPNI3';z.t=+new Date;$.
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
                    <li><a href="companies.php">Compañias</a></li>
                    <li><a href="plans.php">Planes</a></li>
                    <li><a href="contact_us.php">Contacto</a></li>
                    <li><a href="faq.php" class="active" >Preguntas Frecuentes </a></li>
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
<span class="intsr" href><a href="contact_us.php">Más de de 4 pasajeros Contactanos</a></span></div>

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
             
             <h4 style="margin-left:20px;">Preguntas Prequentes</h4>
               <!--STAR THE FAQ BOXES-->
             
                  <!--1ST--> 
                   <div class="faqBox">
                        <span>1</span><h3>¿ Que es una tarjeta de asistencia médica internacional ?</h3>
                            <br class="clear" />	
                    <p>
                    Es un servicio integral para los viajeros internacionales, algunos son asistencia médica por enfermedad o accidente, repatriación funeraria, repatriación sanitaria, traslados, medicamentos, urgencia odontológica, etc. Inclusive algunos tienen seguros de vida y de equipaje.
                    </p>
                   </div>
               
                  <!--2ST--> 
                   <div class="faqBox">
                        <span>2</span><h3>¿ Cómo puedo tramitar mi seguro médico internacional ?</h3>
                            <br class="clear" />	
                    <p>
					A través de nuestro sitio web o contactándonos a nuestras líneas telefónicas, skype o chat.
					</p>
                   </div>                   
                   <!--3ST--> 
                   <div class="faqBox">
                        <span>3</span><h3>¿ Si me negaron la visa, pierdo el dinero ?</h3>
                            <br class="clear" />	
                    <p>
					Con seguros médicos internacionales, Usted no pierde su dinero, solo debe radicar los documentos en cualquiera de nuestras oficinas, el tiempo máximo de radicación son  72 antes de iniciar vigencia el seguro y le devolvemos el 100% del valor pagado.
					</p>
                   </div>               

                  <!--4TH--> 
                   <div class="faqBox">
                        <span>4</span><h3>¿ Con cuánto tiempo de anticipación debo tramitar mi seguro médico internacional ?</h3>
                            <br class="clear" />	
                    <p>
					Puede tramitar su seguro médico en cualquier momento antes de salir del país.
					</p>
                   </div>
               
                  <!--5TH--> 
                   <div class="faqBox">
                        <span>5</span><h3>¿Si me encuentro fuera de mi país de origen (residencia), puedo comprar el seguro médico internacional ?</h3>
                            <br class="clear" />	
                    <p>
					En este caso es mejor que nos contáctate para informarle cuales son las empresas que permiten la venta cuando el pasajero ya está fuera de su país de origen.
					</p>
                   </div>
                   
                   <!--6TH--> 
                   <div class="faqBox">
                        <span>6</span><h3>¿ Puedo solicitar cambios de fecha en mi seguro médico internacional ?</h3>
                            <br class="clear" />	
                    <p>
					Si,  enviando un correo solicitando cambio a ventas@segurosmedicosinternacionales.net  72 horas antes de que inicie vigencia el seguro. Máximo tres (3) cambios.
					</p>
                   </div>        

                  <!--7TH--> 
                   <div class="faqBox">
                        <span>7</span><h3>¿ Que datos necesito para tramitar el seguro médico internacional ?</h3>
                            <br class="clear" />	
                    <p>
					Nombres y apellidos, fechan de nacimiento, documento identidad, dirección, teléfono, contacto de emergencia con teléfono, fechas de viaje, destino.
					</p>
                   </div>
                   
                   <!--8TH--> 
                   <div class="faqBox">
                        <span>8</span><h3>¿ Debo tramitar el seguro médico personalmente ?</h3>
                            <br class="clear" />	
                    <p>
					No, puede realizarlo cualquier persona con los datos requeridos. 
					</p>
                   </div> 
                   
                   <!--9TH--> 
                   <div class="faqBox">
                        <span>9</span><h3>¿ Que países exigen el seguro médico internacional ?</h3>
                            <br class="clear" />	
                    <p>                    
					Si viaja por turismo: Países del convenio schengen, Aruba, Bonaire, Curacao, Canada para adultos mayores,  para información más completa visite el link ¿Qué documentos necesitas para viajar? 
					</p>
					
                   </div> 
                   
                   <!--10TH--> 
                   <div class="faqBox">
                        <span>10</span><h3>¿ Si no viajo, puedo ceder el seguro médico internacional a un pariente ?</h3>
                            <br class="clear" />	
                    <p>
					No, el seguro médico internacional es personal e intransferible en el cual solo va a ser usted el beneficiado y para cualquier eventualidad que se presente, deberá mostrar su póliza.					
					</p>
                   </div> 
                   
                   <!--11TH--> 
                   <div class="faqBox">
                        <span>11</span><h3>¿ Dónde puedo consultar las condiciones del seguro médico internacional comprado?</h3>
                            <br class="clear" />	
                    <p>
					En el link condicionados, elige la aseguradora o empresa de asistencia medica internacional que compro y se desplegara el condicionado general. 
					</p>
                   </div> 
                   
                   <!--12TH--> 
                   <div class="faqBox">
                        <span>12</span><h3>¿ Cuál es el límite de edad para expedir el seguro médico internacional ?</h3>
                            <br class="clear" />	
                    <p>
					 No hay límite de edad, este varía dependiendo de la aseguradora quien es la que coloca los límites.
					</p>
                   </div> 
                   
                   <!--13TH--> 
                   <div class="faqBox">
                        <span>13</span><h3>¿ Qué es un seguro de Viaje ?</h3>
                            <br class="clear" />	
                    <p>
					Es un seguro con asistencia medica bajo la cobertura de accidentes personales, que cubre al asegurado en situaciones imprevistas durante su viaje y/o estadía fuera de su lugar de origen, en situaciones como enfermedades no preexistentes, accidentes, pérdida de equipaje, cancelación del viaje, robo en cajero, etc. 
					</p>
                   </div> 
                   
                   <!--14TH--> 
                   <div class="faqBox">
                        <span>14</span><h3>¿ Porque es importante contar con un seguro de asistencia internacional?</h3>
                            <br class="clear" />	
                    <p>                    
					Ante cualquier emergencia, ya sea de tipo médico, legal, con el equipaje, etc. es necesario contar con un servicio que solucione estos contratiempos sin perder tiempo y dinero. Solo con una llamada telefónica a la central de operaciones con cobro revertido o gratuitamente, se atiende al viajero en su propio idioma, los 365 días del año, las 24 horas del día, ayudándole a solucionar su inconveniente siendo así una forma de viajar seguro y dejar tranquilo a su familia.
					</p>
                   </div> 
                   
                   <!--15TH--> 
                   <div class="faqBox">
                        <span>15</span><h3>¿ Cuánto cuesta un Seguro de Viaje ?</h3>
                            <br class="clear" />	
                    <p>
					Precios varían según la duración del viaje, el plan de beneficios y la edad del viajero. Para saber cuánto podría costar su póliza, por favor haga la cotizar online.
					</p>
                   </div> 
                   
                   <!--16TH--> 
                   <div class="faqBox">
                        <span>16</span><h3>¿Que debo hacer en caso  de requerir asistencia ?</h3>
                            <br class="clear" />	
                    <p>
                    En caso de presentarse una  situación imprevista que se encuentre amparada dentro de los beneficios del seguro contratado debe: 
					Llamar a la línea de asistencia la 24 horas  correspondiente a la empresa aseguradora contratada.
					</p>
					    <p>* Indicar nombre completo.</p>
					    <p>* Lugar y teléfono  donde se encuentre.</p>
					    <p>* Indicar el servicio que necesita.</p>
					    <p>Es indispensable llamar siempre a la empresa aseguradora para coordinar el servicio necesario de lo contrario la empresa prestadora no asumirá ningún pago.</p>
					    
					    
					    
					    
                   </div> 
                   
                       <!--17TH--> 
                   <div class="faqBox">
                        <span>17</span><h3>¿ Si estoy en el exterior,  sufro un accidente y no tuve tiempo de llamar a la Central Telefónica de la empresa de Asistencia Médica para recibir indicaciones, como se procede en ese caso ?</h3>
                            <br class="clear" />	
                    <p>
					Usted tendría un lapso de tiempo de 24 horas máximo para comunicarse con la Central de Asistencia y notificar su caso e igualmente este procedimiento puede hacerlo personal de la clínica donde se encuentre internado, un amigo o familiar.  
					</p>
                   </div> 
                   
                       <!--18TH--> 
                   <div class="faqBox">
                        <span>18</span><h3>¿ Que hacer en caso de pérdida de equipaje ?</h3>
                            <br class="clear" />	
                    <p>
					Apenas constate la falta de su equipaje, diríjase al mostrador de la compañía aérea o a la persona responsable de la misma dentro del mismo recinto en que llegan los equipajes.
					Obtenga y complete el formulario P.I.R. (Property Irregularity Report), que deberá ser provisto por la compañía aérea.
					Antes de abandonar el aeropuerto comuníquese telefónicamente con la empresa aseguradora a efectos de notificar el extravío de su equipaje. 
					Informe a un Operador de Asistencia su domicilio local (temporal)y su próximo itinerario.
					</p>
                   
                   </div> 
                   
                       <!--19TH--> 
                   <div class="faqBox">
                        <span>19</span><h3>¿ Los seguros médicos internacionales que ustedes ofrecen manejan deducibles ?</h3>
                            <br class="clear" />	
                    <p>				
					Nuestros planes ofrecidos NO manejan deducible y el cliente no tiene que asumir ningún costo adicional al momento de hacer uso de alguno de nuestros servicios, claro está que es obligación de nuestro cliente comunicarse con la central de asistencias en caso de alguna emergencia. 
					</p>
                   </div> 
                   
                       <!--20TH--> 
                   <div class="faqBox">
                        <span>20</span><h3>¿ Cómo puedo pagar por un Seguro de Viaje?</h3>
                            <br class="clear" />	
                    <p>
				Seguros Médicos Internacionales maneja las siguientes formas de pago: Tarjetas de crédito (Visa, Mastercard , American Express, Diners) , dólares, Pesos, cheque al dia o por medio de una consignacion en Banco de Bogota cuenta corriente No. 291133791 o Bancolombia cuenta corriente No. 58278242599 a nombre de SEGUROS MEDICOS INTERNACIONALES.
					</p>
                   </div> 
                   
 			    <!--21TH--> 
                   <div class="faqBox">
                        <span>21</span><h3>¿ En qué países tiene cobertura los seguros médicos internacionales?</h3>
                            <br class="clear" />	
                    <p>
					Las aseguradoras ofrecidas por Seguros Médicos Internacionales, tienen cobertura en cualquier país del mundo  menos en el  país de residencia.
					</p>
                   </div> 
                   
                   <!--22TH--> 
                   <div class="faqBox">
                        <span>22</span><h3>¿ Cuándo comienza a regir la Cobertura?</h3>
                            <br class="clear" />	
                    <p>
					Todas las coberturas serán efectivas a partir del día de vigencia del seguro. Desde la 00:01 am  hasta las 12:00 pm de la fecha de finalización del seguro. 
					
					</p>
                   </div> 
                   
                    <!--23TH--> 
                   <div class="faqBox">
                        <span>23</span><h3>¿ Por qué contratar un servicio de asistencia al viajero ?</h3>
                            <br class="clear" />	
                    <p>
					Porque cuando estamos de viaje sólo queremos preocuparnos en disfrutar, descansar, conocer y cumplir todos los objetivos para los que hemos viajado. 
					porque cuando estamos lejos de casa es bueno saber que ante cualquier imprevisto siempre tendremos alguien a quien acudir.
					</p>
                   </div> 
                   
                    <!--24TH--> 
                   <div class="faqBox">
                        <span>24</span><h3>¿ Qué es asistencia al viajero?</h3>
                            <br class="clear" />	
                    <p>
					Lo que trata de hacer el servicio de asistencia al viajero es atender los problemas que eventualmente pudiesen presentarse, ayudándole a resolverlos y pagarle los gastos amparados en el momento en que Ud. lo necesite. Y de ese modo Ud. podrá continuar disfrutando de su viaje lo más pronto posible y trabajamos las 24 horas del día los 365 días del año con personal entrenado para manejar situaciones de emergencia y brindar el mejor servicio en el tiempo más corto.
					</p>
                   </div> 
                   
                    <!--25TH--> 
                   <div class="faqBox">
                        <span>25</span><h3>¿ Qué ocurre si no me puedo comunicar con la central de asistencia?</h3>
                            <br class="clear" />	
                    <p>
					Si el Beneficiario o una tercera persona no pudiera comunicarse con la Central de Asistencia, debe recurrir al servicio médico más próximo al lugar donde se encuentre, con la obligación ineludible de notificar la incidencia a la Central de Asistencia dentro de las 24 horas de producido el evento.
					</p>
                   </div> 
                   
                    <!--26TH--> 
                   <div class="faqBox">
                        <span>26</span><h3>¿Cuáles son sus horarios de atención?</h3>
                            <br class="clear" />	                    
                    <p>Oficina de Bogotá: Lunes a Viernes de 7 a.m. a 6 p.m. jornada continua</p>
                    <p>Sábados 10 a.m. a 12:30 pm.</p>
                    <p>Al Celular 316 4533840 de domingo a domingo.</p>
                    <p>Oficina de Barranquilla: Lunes a Viernes de 8 a.m. a 1 p.m. y de 2 p.m. a 6 p.m.</p>
                    <p>Al Celular 317 6654120 de domingo a domingo</p>
                    <p>Oficina de Medellín: lunes a Viernes de 8 a.m. a 1 p.m. y de 2 p.m. a 6 p.m.</p>
                   </div> 
 				
 			
 			
            <!-- PAGINATOR START HERE -->
            
            
            
		</div>
		<!--ENDS CORPORATIVES TEXTS-->
            
            
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
</body>
</html>
   	