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
	<title>Services | Seguros Medicos Internacionales </title>
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
                    <li><a href="services.php" class="active">Servicios</a>
                    <li><a href="companies.php">Compañias</a></li>
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
             
             <h4 style="margin-left:20px;">Servicios</h4>
               
               <div id="servicesBox">
               <img src="tpl/img/Corporatives/imageServices.png" align="right" />
               		<p class="blue">Los servicios de asistencia descritos bajo este artículo son a manera de información general, los beneficios y servicios definitivos dependen del plan elegido y la compañía contratada (véase clausulados).</p>
                    
               </div>
               
               <!-- SERVICES TABBED CONTENT --->
                     	<div id="feature_services">
    
                                <ul id="tabs">
                                    <li><a href="javascript:;">
                                    	<span>1.ASISTENCIA MEDICA POR ACCIDENTE O ENFERMEDAD</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	<span>2.ASISTENCIA MÉDICA POR AGUDIZACIONES </span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>3.EVACUACIÓN MÉDICA DE EMERGENCIA</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>4.MEDICAMENTOS</span></a>
                                    </li>      
                                    <li><a href="javascript:;">
                                    	</span>5.ODONTOLOGIA DE URGENCIA</span></a>
                                    </li>                                          
                                    <li><a href="javascript:;">
                                    	<span>6.GASTOS DE HOTEL POR CONVALECENCIA</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	<span>7.REPATRIACIÓN SANITARIA</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>8.TRASLADO SANITARIO </span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>9.REPATRIACION FUNERARIA</span></a>
                                    </li>      
                                    <li><a href="javascript:;">
                                    	</span>10.LOCALIZACIÓN Y TRASPORTE DE EQUIPAJE </span></a>
                                    </li>  
                                    <li><a href="javascript:;">
                                    	<span>11.TRASLADO Y GASTOS DE HOTEL DE UN FAMILIAR</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	<span>12.COMPENSACIÓN POR PÉRDIDA DEFINITIVA DE EQUIPAJE</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>13.COMPENSACIÓN POR DEMORA EN LA LOCALIZACIÓN DE EQUIPAJE</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>14.REEMBOLSO DE GASTOS POR VUELO DEMORADO O CANCELADO</span></a>
                                    </li>      
                                    <li><a href="javascript:;">
                                    	</span>15.ACOMPAÑAMIENTO DE MENORES</span></a>
                                    </li>  
                                    <li><a href="javascript:;">
                                    	<span>16.CANCELACION ANTICIPADA DEL VIAJE</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	<span>17.INTERRUPCION DEL VIAJE</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>18.ANTICIPO DE FONDOS PARA FIANZAS LEGALES</span></a>
                                    </li>
                                    <li><a href="javascript:;">
                                    	</span>19.HONORARIOS LEGALES</span></a>
                                    </li>      
                                    <li><a href="javascript:;">
                                    	</span>20.TIQUETE  PARA EL TRASLADO- HOSPITALIZACIÓN DEL TITULAR </span></a>
                                    </li>  
                                    <li><a href="javascript:;">
                                    	<span>21.GASTOS DE TRASLADO DE UN EJECUTIVO EN REEMPLAZO</span></a>
                                    </li>
                                  
                                    <li><a href="javascript:;">
                                  	 	<span>22.TRASMISION DE MENSAJES URGENTES</span></a>
                                    </li>
                                   
                                    <li><a href="javascript:;">
                                    	</span>23.SOLICITUD DE MODIFICACION DE VIGENCIAS</span></a>
                                    </li>
                                   
                                    <li><a href="javascript:;">
                                    	</span>24.MUERTE ACCIDENTAL 24 HORAS </span></a>
                                    </li> 
                                    
                                     <li><a href="javascript:;">
                                    	</span>25.MUERTE ACCIDENTAL EN AVIACION  O TRANSPORTE  </span></a>
                                    </li> 
                                    
                                    </li>   
                                    <li><a href="javascript:;">
                                    	</span>26.MUERTE POR HOMICIDIO O INTENTO DE HOMICIDIO</span></a>
                                    </li>                                                                                                                                                                                                                   
                                </ul>
                    
                                <ul id="output">
                                    
                                  <!-- 1 SERVICE -->  
                                    <li>
                                      <div class="Int">
                                       	<span class="ServNum">1</span>
                                        <h3><br />ASISTENCIA MÉDICA POR ACCIDENTE  O ENFERMEDAD</h3>
                                      </div>
                                       <p>
                                       Se limitan a tratamientos de urgencia de cuadros agudos y están orientados a la asistencia en viaje de eventos súbitos e imprevisibles a causa de un accidente o donde se haya diagnosticado una enfermedad clara, comprobable y aguda que impida la normal continuación de un viaje, por lo que no están diseñados ni se contratan ni se prestan para procedimientos electivos o para adelantar tratamientos o procedimientos de larga duración sino para garantizar la recuperación inicial y las condiciones físicas que permitan la continuación del viaje. 
                                       </p>
                                    </li>
                                  <!-- 2 SERVICE--> 
                                    <li>
                                        <div class="Int">
                                       	<span class="ServNum">2</span>
                                        <h3><br />ASISTENCIA MÉDICA POR AGUDIZACIONES</h3>
                                      </div>
                                        <p>Aplica hasta el límite especificado para cada plan, la primera atención médica por la agudización de una enfermedad preexistente o crónica que haya desarrollado un episodio súbito y de crisis durante el viaje. Serán excluidos seguimientos y controles de tratamientos o chequeos. </p>
                                     </li>
                                  <!-- 3 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">3</span>
                                        <h3><br />EVACUACIÓN MÉDICA DE EMERGENCIA</h3>
                                      </div>
                                        <p>
                                        Sí durante el transcurso del viaje el Titular sufre un accidente o una enfermedad que le ocasioné una condición médica crítica y el tratamiento prestado en el lugar de hospitalización no fuere suficientemente idóneo según el criterio del médico tratante, se trasladara el Titular hasta el centro hospitalario más cercano y apropiado según la naturaleza de las heridas o de la enfermedad y exclusivamente dentro de los límites territoriales del país donde se encuentre el Titular, utilizando el medio de locomoción disponible (ambulancia, Avión, Automóvil u otro). 
										</p>
                                    </li>
 									<!-- 4 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">4</span>
                                        <h3>MEDICAMENTOS</h3>
                                        <p>
                                        Siempre que los mismos correspondan al tratamiento de la dolencia que diera lugar a la asistencia solicitada por el Titular y según el plan contratado.
                                        
                                        </p>
                                      </div>
                                    </li>                                    
 									<!-- 5 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">5</span>
                                        <h3><br />ODONTOLOGIA DE URGENCIA</h3>
                                        <p>
                                        El PROVEEDOR se hará cargo solamente de los gastos por atención odontológica de urgencia, limitada al tratamiento del dolor y/o extracción de la pieza dentaria. De acuerdo al plan contratado.
                                        
                                        </p>
                                      </div>
                                    </li> 
 									<!-- 6 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">6</span>
                                        <h3><br />GASTOS DE HOTEL POR CONVALECENCIA</h3>
                                         <p>
                                     Si durante el viaje y por prescripción médica de incapacidad que impida la continuación del viaje, el Titular tuviera que prolongar su estadía, el Operador de Asistencia se hará cargo de los gastos de alojamiento y alimentación en un hotel hasta por el valor establecido para este servicio según el plan adquirido.
                                     
                                     </p>
                                      </div>
                                    </li> 
 									<!-- 7 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">7</span>
                                        <h3><br />REPATRIACIÓN SANITARIA</h3>
                                          <p>
                                        Si durante el viaje el Titular sufre un accidente o una enfermedad súbita e imprevista, y una vez atendido y tratado médicamente por los profesionales de la entidad sanitaria respectiva, éstos determinan que es conveniente suspender el viaje y realizar una repatriación médica, el Operador de Asistencia se encargará de organizar, en coordinación con su equipo médico, el traslado del Titular hasta la ciudad de residencia. Dicho traslado se hará en el medio más idóneo, sujeto a las condiciones de tiempo, lugar y estado clínico del Titular. 
                                          </p>
                                      </div>
                                    </li>                                                                         
 									<!-- 8 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">8</span>
                                        <h3><br />TRASLADO SANITARIO</h3>
                                         <p>
                                        En caso de emergencia y si el Operador de Asistencia lo juzga necesario, se organizará el Traslado Sanitario del TITULAR al Centro de Sanidad más cercano, por el medio de transporte que el Departamento Médico considere más apropiado y según corresponda a la naturaleza de la lesión o enfermedad.
                                        
                                        
                                        </p>
                                        
                                      </div>
                                    </li>  
 									<!-- 9 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">9</span>
                                        <h3><br />REPATRIACION FUNERARIA</h3>
                                        <p>
                                        En caso de fallecimiento del Titular durante el viaje, el Operador de Asistencia efectuará los trámites para el transporte y repatriación de los restos mortales o cenizas y asumirá los gastos de traslado de los mismos desde el sitio de defunción hasta el aeropuerto del país de residencia. Quedan expresamente excluidos de esta prestación los servicios religiosos, funerales y ataúdes especiales.
                                        
                                        
                                         </p>
                                        
                                        
                                      </div>
                                    </li>                                      
 									<!-- 10 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">10</span>
                                        <h3><br />LOCALIZACIÓN Y TRASPORTE DE EQUIPAJE </h3>
                                         <p>
                                        El Operador de Asistencia asesorará al Titular para la denuncia del hurto o extravío de su equipaje y efectos personales en vuelo regular de aerolínea comercial. En caso de su recuperación se encargará de su traslado hasta el lugar de destino o hasta el domicilio del Titular, según las circunstancias de tiempo y de lugar.
                                        
                                         </p>
                                        
                                      </div>
                                    </li>  
 									<!-- 11 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">11</span>
                                        <h3><br />TRASLADO Y GASTOS DE HOTEL DE UN FAMILIAR</h3>
                                        
                                        
                                        <p>
                                        En caso que la hospitalización de un TITULAR, El PROVEEDOR se hará cargo de un billete aéreo, en clase turista
                                        </p>
                                        
                                      </div>
                                    </li>  
 									<!-- 12 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">12</span>
                                        <h3><br />COMPENSACIÓN POR PÉRDIDA DEFINITIVA DE EQUIPAJE </h3>
                                        
                                        <p>
                                        Si el Titular sufriera la pérdida definitiva de su equipaje durante su transporte en vuelo regular de aerolínea comercial, el Operador de Asistencia le reconocerá como compensación, según el peso del equipaje aforado y bulto completo, hasta el valor establecido para este servicio según el plan contratado, y siempre y cuando la aerolínea manifieste en forma escrita la pérdida definitiva del equipaje. No se tomara en cuenta el valor real del equipaje extraviado sino el peso del mismo.
										Los daños al equipaje y/o faltantes parciales o totales de contenido no darán lugar a compensación ni reembolso alguno
                                        </p>
                                        
                                        
                                        
                                      </div>
                                    </li>  
 									<!-- 13 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">13</span>
                                        <h3><br />COMPENSACIÓN POR DEMORA EN LA LOCALIZACIÓN DE EQUIPAJE</h3>
                                        <p>
                                        El Operador de Asistencia compensará al Titular, hasta el monto indicado para cada plan, por los gastos derivados de la compra de artículos de primera necesidad hecha en el lapso de la demora en la localización de su equipaje y únicamente si éste no es localizado dentro de las 36 (treinta y seis) horas contadas a partir del momento de recibir, la Central de Asistencia, la notificación de la falta de dicho equipaje. El plazo de 36 horas se refiere exclusivamente al tiempo transcurrido hasta la localización del equipaje. El lapso posterior hasta la entrega física del mismo por parte de la aerolínea está fuera de la responsabilidad del Operador de Asistencia y por tanto no será tenido
en cuenta en el cómputo de las 36 horas. El reintegro de los gastos de primera necesidad derivados de la demora de su equipaje deberá ser tramitado por el Titular en la Central de Asistencia del país de origen.
                                        
                                        </p>
                                      </div>
                                    </li>                                  
 									<!-- 14 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">14</span>
                                        <h3><br />REEMBOLSO DE GASTOS POR VUELO DEMORADO O CANCELADO</h3>
                                        <p>
                                        
                                        Se reembolsará al Titular hasta los montos establecidos de acuerdo con el plan contratado o su equivalente en moneda local contra presentación de comprobantes fehacientes de gastos de primera necesidad como comidas, refrigerios, hotel, y comunicaciones realizadas en el lapso de la demora, si su vuelo de línea aérea comercial regular es demorado por más de (según plan contratado) horas y siempre y cuando no tenga otra alternativa de transporte. 
Este beneficio queda excluido si el Titular viaja con pasaje aéreo con disponibilidad de espacio o si la demora, cancelación o negociación de embarques se produce por quiebra y/o cesación de servicios de la línea aérea o problemas climáticos, catástrofes, sismos, inundaciones, tempestades, guerra internacional o guerra civil declaradas o no, rebeliones, conmoción interior, actos de guerrilla o antiguerrilla, hostilidades, represalias, conflictos, embargos, apremios, huelgas, movimientos populares, lock-out, actos de sabotaje o terrorismo, etc.; así como problemas y/o demoras que resulten por la terminación, interrupción o suspensión de los servicios de comunicación.
                                        
                                        
                                        
                                        </p>
                                        
                                      </div>
                                    </li>                                  
 									<!-- 15 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">15</span>
                                        <h3><br />ACOMPAÑAMIENTO DE MENORES</h3>
                                        
                                        <p>
                                        Si el TITULAR viajara como único acompañante de menores de quince años también TITULAR de un CERTIFICADO o VOUCHER y por causa de enfermedad o accidente, constatado por el Departamento Médico del PROVEEDOR, se viera imposibilitado para ocuparse de ellos, el PROVEEDOR organizará a su cargo el desplazamiento de dichos menores hasta el domicilio habitual en su país de origen por el medio que considere más adecuado.
                                        
                                        </p>
                                      </div>
                                    </li>  
 									<!-- 16 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">16</span>
                                        <h3>CANCELACION ANTICIPADA DEL VIAJE</h3>
                                        <p>
                                        Cuando el Titular haya pagado con anticipación los costos de transporte y/o alojamiento correspondientes al viaje y no habiendo iniciado dicho viaje tenga que cancelarlo con al menos cuarenta y ocho horas (48) horas hábiles de antelación al mismo, por causa de fallecimiento u hospitalización del Titular, un familiar en primer grado de consanguinidad (padre, madre, hijos o cónyuge viajando o no con el Titular) o su acompañante de viaje, el Operador de Asistencia reembolsará al Titular hasta un 100% de los depósitos pagados con el máximo global establecido en plan contratado o su equivalente en moneda local, siempre y cuando tales depósitos no pudieran ser recuperados. Se hace constar expresamente que el reembolso no procederá cuando la cancelación se produzca como consecuencia de una condición médica preexistente y/o congénita conocida o no por el causante de la cancelación (padre, madre, hijos, cónyuge o acompañante). El Operador de Asistencia se reserva el derecho de usar su propio equipo médico para la verificación de cualquier enfermedad o accidente que dé lugar a esta prestación.
                                        </p>
                                      </div>
                                    </li>                                      
 									<!-- 17 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">17</span>
                                        <h3><br />INTERRUPCION DEL VIAJE</h3>
                                        
                                        <p>
                                        En caso de fallecimiento o enfermedad grave o de un familiar en primer grado de consanguinidad (padre, madre, hijos o cónyuge) del Titular de la Tarjeta o por siniestro ocurrido en la vivienda en que habita permanentemente, como consecuencia de uno cualquiera de los siguientes eventos: Incendio y/o rayo, Explosión, Inundación o Anegación, Daños por Agua, Caída de Aeronaves o partes que se desprendan o caigan de ellas, impacto de vehículos terrestres que no sean de propiedad del Titular o de sus familiares o hurto calificado, siempre que el Titular se encuentre de viaje y ninguna otra persona pueda sustituirle para hacerse cargo de la situación, el Operador de Asistencia asumirá el valor del tiquete aéreo en clase económica o el valor de la penalidad por el cambio de fecha en vuelo regular de aerolínea comercial para realizar su desplazamiento de regreso. En tales casos el Titular deberá presentar formalmente las pruebas que demuestren la ocurrencia de tales eventos. Para el caso de interrupción de viaje por enfermedad de un familiar, se debe certificar la gravedad del mismo. Para autorizarse esta cobertura el familiar debe estar en la unidad de cuidado crítico.
                                        
                                        
                                        
                                        
                                        </p>
                                      </div>
                                    </li>  
  									<!-- 18 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">18</span>
                                        <h3><br />ANTICIPO DE FONDOS PARA FIANZAS LEGALES</h3>
                                        <p>
                                        El Operador de Asistencia garantizará en calidad de préstamo al Titular hasta el límite cubierto de acuerdo al plan elegido, el pago de una fianza legal exigida por las autoridades para su libertad condicional, cuando el Titular fuera detenido imputándosele una responsabilidad en un accidente, siempre que el mismo no se trate de cargos por tráfico y/o posesión de drogas, armas, estupefacientes, enervantes o cualquier otra acción criminal. 
                                        
                                        
                                        </p>
                                        
                                      </div>
                                    </li>                                     
 									<!-- 19 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">19</span>
                                        <h3><br />HONORARIOS LEGALES</h3>                                        
                                        <p>
                                        En caso que durante el viaje el Titular tenga un problema de tipo legal con motivo de imputársele responsabilidad por un accidente que no tenga relación con actividades comerciales, ni esté relacionado con cargos de tráfico y/o posesión de drogas, armas, estupefacientes, enervantes o cualquier otra acción criminal. Esta cobertura ampara tales honorarios hasta por el valor establecido en el plan contratado. De igual manera sí el Titular requiriera asistencia legal para realizar reclamos o hacer demandas a terceros por daños u otra compensación a raíz de Accidentes, el Operador de Asistencia pondrá a su disposición un abogado que lo asesorará en la emergencia planteada, siendo por cuenta exclusiva del Titular la contratación de sus servicios profesionales así como el pago de todos los honorarios y gastos que el caso genere.
                                        
                                        </p>
                                      </div>
                                    </li>                                      
 									<!-- 20 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">20</span>
                                        <h3><br />TIQUETE DE IDA Y VUELTA PARA EL TRASLADO DE UN FAMILIAR EN CASO DE HOSPITALIZACIÓN DEL TITULAR </h3>
                                        
                                        <p>
                                        En caso de accidente o enfermedad crítica del Titular que haga necesaria su hospitalización por un mínimo de (según plan contratado) días, y siempre que se hubiese hecho uso de los servicios prestados por el Operador de Asistencia, se cubrirán los gastos de desplazamiento en clase económica en vuelo regular de aerolínea comercial de un familiar del Titular, más los gastos de hotel y de alimentación en el mismo por un máximo de (según plan contratado) días ó hasta el monto por estancia del plan adquirido, siempre y cuando el Titular se encuentre solo en la ciudad de hospitalización. El valor cubierto para los gastos de hotel y manutención corresponden al límite indicado de acuerdo al plan contratado.
                                        </p>
                                        
                                      </div>
                                    </li>                                      
 									<!-- 21 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">21</span>
                                        <h3><br />GASTOS DE TRASLADO DE UN EJECUTIVO EN REEMPLAZO</h3>
                                        <p>
                                        Si durante el viaje al exterior el Titular sufre un accidente o una enfermedad que obligue a su hospitalización y le impida proseguir con su comisión laboral objeto de su viaje, su compañía podrá designar otro funcionario que lo reemplace para continuar su misión. El Operador de Asistencia pagará el traslado del ejecutivo designado, por el mismo medio inicialmente utilizado por el Titular, previa verificación por el equipo médico del Operador de Asistencia de la hospitalización que imposibilita la continuación del viaje. 
                                        </p>
                                      </div>
                                    </li> 
 									<!-- 22 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">22</span>
                                        <h3><br />TRASMISION DE MENSAJES URGENTES </h3>
                                        <p>
                                        El operador de asistencia transmitirá los mensajes urgentes y justificados, relativos a cualquiera de los eventos que son objeto de las prestaciones contempladas en el plan contratado
                                        </p>
                                      </div>
                                    </li>                                                                                                                                              
 									<!-- 23 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">23</span>
                                        <h3><br />SOLICITUD DE MODIFICACION DE VIGENCIAS</h3>
                                        
                                        <p>
                                        Las solicitudes de modificación de vigencias deberán efectuarse por escrito únicamente por el Titular con una anticipación no menor a 72 horas al inicio de la fecha de validez del contrato.
Las fechas de validez podrán ser modificadas hasta un máximo de tres (3) veces sin costo adicional. Después de la cuarta solicitud, cada modificación tendrá un costo de USD 15.oo. (o su equivalente en moneda local) por concepto de gastos administrativos.
IMPORTANTE: En ningún caso se aceptarán revocaciones o modificaciones solicitadas una vez iniciada la vigencia de la tarjeta en cuestión, de acuerdo con los términos expresados en el contrato
                                        
                                        
                                        </p>
                                      </div>
                                    </li>                                 
 									<!-- 24 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">24</span>
                                        <h3><br />MUERTE ACCIDENTAL 24 HORAS </h3>
                                        <p>
                                        Cuando así se indique en voucher, se obliga a pagar a los beneficiarios el valor asegurado señalado en el certificado de la póliza. 
Este amparo cubre al asegurado las veinticuatro (24) horas del día en cualquier lugar del mundo, incluyendo sus viajes terrestres, fluviales, marítimos y aéreos.
                                        
                                        
                                        </p>
                                        
                                      </div>
                                    </li>                                 
 									<!-- 25 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">25</span>
                                        <h3><br />MUERTE ACCIDENTAL EN AVIACION COMERCIAL O TRANSPORTE PÚBLICO  </h3>
                                        
                                        <p>
                                        Cuando así se indique en voucher, se obliga a pagar a los beneficiarios el valor asegurado señalado en el certificado de la póliza.
Este amparo cubre al asegurado únicamente cuando el accidente se produzca mientras el asegurado viaje como pasajero en un avión comercial o en un vehículo de transporte público.
                                        
                                        
                                        </p>
                                        
                                      </div>
                                    </li>  
 									<!-- 26 SERVICE-->
                                    <li>
                                       <div class="Int">
                                       	<span class="ServNum">26</span>
                                        <h3><br />MUERTE POR HOMICIDIO O INTENTO DE HOMICIDIO</h3>
                                        <p>
                                        Cuando así se indique en voucher, se obliga a pagar a los beneficiarios el valor asegurado señalado en el certificado de la póliza. 
Este amparo cubre al asegurado cuando la muerte que sufra el asegurado sea consecuencia de algún homicidio o intento de homicidio, según la definición de este hecho.
                                        
                                        </p>
                                      </div>
                                    </li>  
                                
                             </ul>
    
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
        
        <!--ENDS ALL FOOTER CONTAINS-->
</div><!--ENDS WRAPPER-->
<script>window.jQuery || document.write("<script src='tpl/js/jquery-1.6.2.min.js'>\x3C/script>")</script>
<script type="text/javascript" src="tpl/js/jquery.selectbox-0.1.3.js"></script>
<script src="tpl/js/jquery.custom_radio_checkbox.js" type="text/javascript"></script>
<script type="text/javascript" src="tpl/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="tpl/js/functions.js"></script>  
</body>
</html>
   	