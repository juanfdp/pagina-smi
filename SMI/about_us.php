<?php  include 'logic/parametros.php';
//INSTANCIA DE LA CLASE ENCARGADA DE LOS PARAMETROS
$param=new parametros();
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
	<title>About Us | Seguros Medicos Internacionales </title>
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
    <link href="tpl/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />   
    
</head>
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
                    <li><a href="about_us.php" class="active">Conocenos</a></li>
                    <li><a href="clauses.php">Clausulados</a></li>
                    <li><a href="services.php">Servicios</a>
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
           <div id="magicArea">
           		<!--MAGIC NAV-->
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
                        <div id="magicStepEnd">
                        	<!--ENDS HERE THE STEPS-->
                                <div id="magicStepCards">
                                	
                                        <img src="tpl/img/MasterMagicCards.png" alt="" />
                                        <img src="tpl/img/PaypalMagicCards.png" alt="" />
                                        <img src="tpl/img/AmexMagicCards.png" alt="" />
                                        <img src="tpl/img/VisaMagicCards.png" alt="" /> 
                                </div> 
                            <!--ENDS HERE THE STEPS-->     
                        </div>
                       
                 <!--ENDS MAGIC NAV-->
                 
               
<!--MAGIC BOX FORM -->
<div id="magicBox">

<form id="cotizador"  name="cotizador"  action="quotes_result.php?st=1 &estado=0 "  method="post">


<div class="leftMagicBox"></div>
<div class="midMagicBox"><!--START RTHE FORM-->

<div id="chooseTarget" class="oneStep"><label>Origen:</label> <!-- CHOOSE A COUNTRY -->
<?php 
//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA 
$r=$param->FillOrigenes();
echo "<select name=\"country_idOpen\" id=\"f_country_idOpen\">
		
	";
while (!$r->EOF) {
	if($r->fields[0]!=48)
	echo "<option value=".$r->fields[0] .">".$r->fields[2] ."</option>";
	else 
	echo "<option value=".$r->fields[0] ." SELECTED>".$r->fields[2] ."</option>";
	$r->MoveNext();
}		
echo "</select> "; ?> 
 <!-- CHOOSE A COUNTRY --> <label>Destino:</label> <?php 
//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA 
$r=$param->FillDestinos();
echo "<select name=\"country_idExit\" id=\"f_country_idExit\">
	<option value=\"0\">Seleccione</option>	
	";
while (!$r->EOF) {
	echo "<option value=".$r->fields[0] .">".$r->fields[1] ."</option>";
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
de Viaje:</label> 
 <?php 
//CARGAMOS LOS DESTINOS UTILIZANDO NUESTRA INSTANCIA 
$r=$param->FillTipoProducto();
echo "<select name=\"travelType_id\" id=\"f_travelType_id\">
	<option value=\"0\">Seleccione</option>	
	";
while (!$r->EOF) {
	echo "<option value=".$r->fields[0] .">".$r->fields[1] ."</option>";
	$r->MoveNext();
}		
echo "</select> "; 


?>
<label>Edades:</label><br />

<input type="text" name="f_oldsNums1" id="f_oldsNums1" size="1"
	style="width: 20px;" maxlength="2" onkeypress="return acceptNum(event)"/> 
	
	<input type="text" name="f_oldsNums2"
	id="f_oldsNums2" size="1" style="width: 20px;" maxlength="2" onkeypress="return acceptNum(event)"/> 
	<input type="text"
	name="f_oldsNums3" id="f_oldsNums3" size="1" style="width: 20px;"  maxlength="2" onkeypress="return acceptNum(event)"/>
	 <input
	type="text" name="f_oldsNums4" id="f_oldsNums4" size="1"
	style="width: 20px;" maxlength="2" onkeypress="return acceptNum(event)"  /> <!--ENDS TRAVEL INFO--></div>
	
<div id="chooseTarget" class="fourStep"><!--EMAIL FORM HERE INFO--> <label>Email:</label><br />
<input type="text" name="email" id="f_email" size="18"  /> <br />
<br />
<span class="intsr"> Mas de de 4 pasajeros Contactanos</span></div>

<!--ENDS FORMS--></div>
<div class="rightMagicBox"><!--HERE THE SUBMIT TYPE & OTHERS VARS--> 


<input type="hidden" name="" value="" />
 <input type="submit" src="tpl/img/clear.png" class="submitQuote" value="Cotizar" />
	</form><script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("cotizador");  
  frmvalidator.addValidation("country_idExit","dontselect=0","Debe Ingresar El Destino.");
  frmvalidator.addValidation("travelType_id","dontselect=0","Debe Ingresar El Tipo De Viaje.");
  frmvalidator.addValidation("f_dateOpen","req","Debe Ingresar La Fecha De Salida.");
  frmvalidator.addValidation("f_dateExit","req","Debe Ingresar La Fecha De Regreso.");  
  frmvalidator.addValidation("email","maxlen=50");
  frmvalidator.addValidation("email","req","Debe Ingresar Un E-mail.");
  frmvalidator.addValidation("email","email","Debe Ingresar Un E-mail VÃ¡lido ."); 
//]]></script>
	
	</div>
<div class="endMagicBox"></div>
                    </div>	
                 <!--ENDS MAGIC BOX FORM -->                    
                          		
           </div>
           <!--END THE MAGIC QUOTE CONTENT-->


		<!--START ALL CORPORATIVE TEXTS--->
			<div id="Corporative">
                <div id="leftContainer">
                    <h4>Historia</h4>
                    <img src="tpl/img/Corporatives/HistoriaSMI.jpg" />
                        <p>Somos una empresa con más de 5 años en el mercado dedicada 100% a la comercialización de seguros de viaje y/o asistencia médica internacional.
						 </p>
						
						 	<p>
							2007. Creación
							</p>
						
						 <p>
							2009. Abrimos sucursal en Barranquilla.
							</p>
						
						 <p>
							2010. Abrimos sucursal en Medellín.
							</p>
						 
						 <p>
							2011. Creamos nuestro Call Center en Bogotá con líneas directas en las principales ciudades del país.
							</p>
						 
						<p>
							2012. Lanzamos en nuestro sitio web VENTAS ONLINE.
                       </p>
    
                    
                </div>
            	<div id="rightContainer">
                	<h4>Misión</h4>
                    <p>Prestar asesoría de la mejor calidad, buscando satisfacer permanentemente las necesidades y expectativas de nuestros clientes.</p>
                    <br />
                    <h4>Visión</h4>
                    <p>Consolidarnos como una empresa altamente reconocida en el marco de los seguros de viaje del país por la calidad de nuestros productos y servicios, permitiéndonos estar a la vanguardia de los mercados nacionales.</p>
                </div>
            </div>

            
            
			<!--START BANNER BOTTOM AREA--->
			<div id="banBotArea">
            	<div id="bannerLeft">
                	<img src="tpl/img/Banners/Sales20off.png" />
                </div>
                <div id="bannerRight">
                <!-- BANNER RIGHT CONTENTS--->
                        <div id="s3slider">
                        <!--HERE START THE SLIDE-->
                           <ul id="s3sliderContent">
                            <!--1ST BANNER SLIDE OFFER-->
                              <li class="s3sliderImage">
                                  <img src="tpl/img/Banners/s3OffersRight/demA.png" />
                                  <span class="left">
                                    <h5>Londres</h5>
                                    <p>The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios.
                                    <br /></p><a href="#">Ver mas...</a>
                                  </span>
                              </li>
                              <!--1ST BANNER SLIDE OFFER-->
                              <li class="s3sliderImage">
                                  <img src="tpl/img/Banners/s3OffersRight/demA.png" />
                                  <span class="left">
                                    <h5>Londres</h5>
                                    <p>The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios.
                                    <br /></p><a href="#">Ver mas...</a>
                                  </span>
                              </li>
                              <div class="clear s3sliderImage"><!--CLEAR THE BANNERS--></div>
                           </ul>
                        </div>
                         <!--HERE ENDS THE SLIDE-->
                </div>
            </div><!--ENDS BANNER BOTTOM AREA--->
            
    
       </div>
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
                    		<div class="secureEle">
                            	<img src="tpl/img/secureLogo.png" />
                            </div>
                            
                            <div class="theDot">
                                <div class="theDotDesign"><a href="http://www.thedot-studio.com/" target="_blank"><img src="tpl/img/logoDot-DesignBy.png" /></a></div>
                                <div class="theDotByThe"><a href="http://www.thedot-studio.com/" target="_blank"><img src="tpl/img/logoDot-TheDotStudio.png" /></a></div>
                            </div><!--LOGO DOT-->
                    		<span class="devp">development by: Crecer Soluciones</span>                      
                </div>
            </div>
            <div id="footerCopy">
            	<p>Copyright © 2011 Seguros Medicos Internacionales All Rights Reserved..</p>
            </div>
            
        </footer>
        <!--ENDS ALL FOOTER CONTAINS-->
</div><!--ENDS WRAPPER-->
<script>window.jQuery || document.write("<script src='tpl/js/jquery-1.6.2.min.js'>\x3C/script>")</script>
<script type="text/javascript" src="tpl/js/jquery.selectbox-0.1.3.js"></script>
<script src="tpl/js/jquery.custom_radio_checkbox.js" type="text/javascript"></script>
<script type="text/javascript" src="tpl/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="tpl/js/functions.js"></script>  
</body>
</html>
   	