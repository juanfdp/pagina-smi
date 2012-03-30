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
	<title>Plans | Seguros Medicos Internacionales </title>
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
                    <li><a href="companies.php">Compañias</a></li>
                    <li><a href="plans.php" class="active">Planes</a></li>
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
             
             <h4 style="margin-left:20px;">Planes</h4>
               
               <div id="midBox">
               
               		<p>TEXTO INTRODUCTORIO PLANES .....The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios y eventos por medio de herramientas digitales, involucrando diversas aéreas en el campo creativo con el fin de desarrollar conceptos  contundentes para ser plasmados en todas las piezas creativas que se gestan en el Estudio.</p>
               </div>
            <!--START HERE PLAN BOX 1-->   

          <div id="fullPlan">
                    
              <div class="planBox">
              	<!--TOP BOX-->
                    <div id="planTop">
                        <span>1</span><h2>Turismo</h2>
                    </div>
                <!--START CONTENT PLAN -->
                    <div id="planCont">
                        <!--PLACE IMG FEATURE HERE-->
                        <img src="tpl/img/Corporatives/Plans/imgPlan1.jpg" alt="Plan 1 - Turismo" />
                            <!--CONTENT PLAN GOES HERE-->
                            <p>The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios y eventos por medio de herramientas digitales, involucrando diversas aéreas en el campo creativo con el fin de desarrollar conceptos  contundentes para ser plasmados en todas las piezas creativas que se gestan en el Estudio.</p>
                    </div>
              </div>

            <!--START HERE PLAN BOX 2-->   
              <div class="planBox">
              	<!--TOP BOX-->
                    <div id="planTop">
                        <span>2</span><h2>Estudio</h2>
                    </div>
                <!--START CONTENT PLAN -->
                    <div id="planCont">
                        <!--PLACE IMG FEATURE HERE-->
                        <img src="tpl/img/Corporatives/Plans/imgPlan2.jpg" alt="Plan 2 - Estudio" />
                            <!--CONTENT PLAN GOES HERE-->
                            <p>The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios y eventos por medio de herramientas digitales, involucrando diversas aéreas en el campo creativo con el fin de desarrollar conceptos  contundentes para ser plasmados en todas las piezas creativas que se gestan en el Estudio.</p>
                    </div>
              </div>
              
             <!--START HERE PLAN BOX 3-->   
              <div class="planBox">
              	<!--TOP BOX-->
                    <div id="planTop">
                        <span>3</span><h2>Negocios</h2>
                    </div>
                <!--START CONTENT PLAN -->
                    <div id="planCont">
                        <!--PLACE IMG FEATURE HERE-->
                        <img src="tpl/img/Corporatives/Plans/imgPlan3.jpg" alt="Plan 3 - Turismo" />
                            <!--CONTENT PLAN GOES HERE-->
                            <p>The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios y eventos por medio de herramientas digitales, involucrando diversas aéreas en el campo creativo con el fin de desarrollar conceptos  contundentes para ser plasmados en todas las piezas creativas que se gestan en el Estudio.</p>
                    </div>
              </div>              
           
           
            <!--START HERE PLAN BOX 4-->   
              <div class="planBox">
              	<!--TOP BOX-->
                    <div id="planTop">
                        <span>4</span><h2>Schengen</h2>
                    </div>
                <!--START CONTENT PLAN -->
                    <div id="planCont">
                        <!--PLACE IMG FEATURE HERE-->
                        <img src="tpl/img/Corporatives/Plans/imgPlan4.jpg" alt="Plan 4 - Schengen" />
                            <!--CONTENT PLAN GOES HERE-->
                            <p>The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios y eventos por medio de herramientas digitales, involucrando diversas aéreas en el campo creativo con el fin de desarrollar conceptos  contundentes para ser plasmados en todas las piezas creativas que se gestan en el Estudio.</p>
                    </div>
              </div>   
           
             
            <!--START HERE PLAN BOX 5-->   
              <div class="planBox">
              	<!--TOP BOX-->
                    <div id="planTop">
                        <span>5</span><h2>Canitas</h2>
                    </div>
                <!--START CONTENT PLAN -->
                    <div id="planCont">
                        <!--PLACE IMG FEATURE HERE-->
                        <img src="tpl/img/Corporatives/Plans/imgPlan5.jpg" alt="Plan 5 - Schengen" />
                            <!--CONTENT PLAN GOES HERE-->
                            <p>The Dot Studio está enfocado en el desarrollo de estrategias comerciales innovadoras para publicitar, posicionar e incrementar el reconocimiento de marcas, productos, servicios y eventos por medio de herramientas digitales, involucrando diversas aéreas en el campo creativo con el fin de desarrollar conceptos  contundentes para ser plasmados en todas las piezas creativas que se gestan en el Estudio.</p>
                    </div>
              </div>   
        
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
   	