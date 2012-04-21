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
	<title>Clauses | Seguros Medicos Internacionales </title>
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
                    <li><a href="clauses.php" class="active">Clausulados</a></li>
                    <li><a href="services.php">Servicios</a>
                    <li><a href="companies.php">Compañias</a></li>
                    <li><a href="plans.php">Planes</a></li>
                    <li><a href="contact_us.php" >Contacto</a></li>
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
             
             <h4 style="margin-left:20px;">Clausulados</h4>
               
               <div id="midBox">
               
               		<p>Los clausulados y/o las condiciones generales son las cláusulas que regulan los contratos. Son cláusulas redactadas por las empresas para utilizarlas en todos los contratos que vaya a perfeccionar con sus clientes, consumidores o usuarios, sin posibilidad de que éstos las negocien o modifiquen, previendo todos los aspectos de la relación entre uno y otros.
						A continuación encontrara Los clausulados y/o las condiciones generales de cada una de las empresas prestadoras del servicio de asistencia médica internacional.
               		</p>
               		<br>
               		<p>
               		A continuación encontrara Los clausulados y/o las condiciones generales de cada una de las empresas prestadoras del servicio de asistencia médica internacional.
               		</p>
               		
               		
               </div>

			
            <div id="fullCompani">
				<!--START 1ST COMPANY-->
                  <hr class="spacerBord" />
                  <div class="companiBox">
                    <a href="clausulados/CHARTIS.pdf" id="pdfExt" target="_blank">
                   		<img src="tpl/img/Partners/TravelGuard.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                    </a>
                  </div>	
                 <!--START 2ND COMPANY--> 
                  <hr class="spacerBord" />
                  <div class="companiBox">
                     <a href="clausulados/QUALITAS_ASSISTANCE.pdf" id="pdfExt" target="_blank"> 
                        <img src="tpl/img/Partners/Qualitas.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a>   
                  </div>
                 <!--START 3RD COMPANY--> 
                 <hr class="spacerBord" />
                  <div class="companiBox">
                     <a href="clausulados/ASSIST_CARD.pdf" id="pdfExt" target="_blank">
                        <img src="tpl/img/Partners/AssistCard.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a>  
                  </div>
                 <!--START 4TH COMPANY--> 
                 <hr class="spacerBord" />
                   <div class="companiBox">
                     <a href="clausulados/SEGURVIAJE_MAPFRE ASISTENCIA.pdf" id="pdfExt" target="_blank">
                        <img src="tpl/img/Partners/SegurViaje.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a> 
                  </div>  
 				  <!--START 5TH COMPANY-->
                  <hr class="spacerBord" />
                  <div class="companiBox">
                     <a href="clausulados/SEGURVIAJE_MAPFRE ASISTENCIA.pdf" id="pdfExt" target="_blank">
                        <img src="tpl/img/Partners/Mafre.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a>  
                  </div> 
                 <hr class="spacerBord" />  
                     
			<!--BEGINS IN THE SECOND GROUP-->  <br class="clear" />    
            
                 <!--START 6TH COMPANY-->                          
                 <hr class="spacerBord" />
                  <div class="companiBox">
                     <a href="clausulados/CORIS.pdf" id="pdfExt" target="_blank">
                        <img src="tpl/img/Partners/Coris.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a>  
                  </div> 
                 <hr class="spacerBord" /> 
            
               <!--START 7TH COMPANY--> 
                 <hr class="spacerBord" />
                  <div class="companiBox">
                     <a href="clausulados/TRAVEL_ACE_ASSISTANCE.pdf" id="pdfExt" target="_blank">
                        <img src="tpl/img/Partners/TravelAce.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a> 
                  </div>  
                 <!--START 8TH COMPANY--> 
                 <hr class="spacerBord" />
                  <div class="companiBox">
                     <a href="clausulados/SAFEST.pdf" id="pdfExt" target="_blank">
                        <img src="tpl/img/Partners/Safest.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a> 
                  </div>  
                 <!--START 9TH COMPANY--> 
                 <hr class="spacerBord" />
                  <div class="companiBox">
                     <a href="clausulados/UNIVERSAL_ASSISTANCE.pdf" id="pdfExt" target="_blank">
                        <img src="tpl/img/Partners/UniversalAssistance.png"/>
                   		 	<br class="clear" />
                    	<img src="tpl/img/minPdfIcon.png" class="pdfIconMin"/>
                     </a> 
                  </div>  
                  <hr class="spacerBord" />                                                           
            </div> 
             
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
   	