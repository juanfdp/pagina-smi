<?php
require("phpmailer/class.phpmailer.php");

/**
 * CLASE FUNCTIONS
 *
 * Clase encargada de una serie de metodos que se invocan desde el aplicativo
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class functions {

	/**
	 * ATRIBUTOS PARA EL ENVIO DE CORREOS.
	 */

	private $email;
	public $conexion;

	/**
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 *
	 * Para el envio de correos construimos todo lo necesario para el envio de mensajes
	 *
	 */
	function __construct()
	{

		$this->mail= new PHPMailer(true);
		$this->mail->IsSMTP();
		$this->mail->IsHTML(true);
		$this->mail->SMTPAuth   = true;                  // enable SMTP authentication
		$this->mail->Host       = "mail.segurosmedicosinternacionales.net"; // sets the SMTP server ssl://smtp.gmail.com
		$this->mail->Port       = 25;                    // set the SMTP port for the GMAIL server
		$this->mail->Username   = "informacion@segurosmedicosinternacionales.net"; // SMTP account username
		$this->mail->Password   = "Rewq1234";        // SMTP account password
		$this->mail->AddAddress('areyes@segurosmedicosinternacionales.net', 'ALEXANDRA REYES');//DESTINATARIO
		//CONEXION A LA BASE DE DATOS
		$this->conexion=new Conect();

	}

	/**
	 * METODO QUE RETORNA LA CANTIDAD DE DIAS QUE SE ENCUENTRAN ENTRE DOS FECHAS QUE INGRESAN COMO PARAMETRO
	 *
	 */
	public function calcularDias($fechaInicial,$fechaFinal)
	{
		try
		{
			$inicial=date(" Y-m-d H:i:s",strtotime($fechaInicial));
			$final=date(" Y-m-d H:i:s",strtotime($fechaFinal));
			$final = strtotime($final);
			$inicial = strtotime($inicial);
			return round(abs($final-$inicial)/60/60/24)+1;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	/**
	 * METODO QUE VALIDA SI SE ENCUENTRA UN ITEM O NO EN UN COLECCION DETERMINADA
	 *
	 */
	public function validarExistenciaItem($arreglo,$elemento)
	{
		try
		{
			foreach ($arreglo as &$registro) {
				if($registro==$elemento)return true;
			}
			return false;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	/**
	 * METODO QUE ELIMINA UN ITEM DE UNA POSICION ESPECIFICA.
	 *
	 */
	public function eliminarItem($arreglo,$eliminar)
	{
		try
		{
			unset($arreglo[$eliminar]);
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	/**
	 * METODO QUE ELIMINA UN ITEM DE UNA POSICION ESPECIFICA.
	 *
	 */
	public function eliminarItemByValue($arreglo,$valor)
	{
		try
		{

			$i=0;
			foreach ($arreglo as &$registro) {
				if($registro==$valor){
					echo $i;
					unset($arreglo[$i]);
					break;
				}$i++;
			}

			return $arreglo;

		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	/**
	 * METODO QUE LIMPIA UNA COLLECTION.
	 *
	 */
	public function limpiarColeccion($array)
	{
		try
		{
			foreach ($array as $i => $value) {
				unset($array[$i]);
			}
			return $array;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	/**
	 * METODO QUE SOLUCIONA EL PROBLEMA DEL CODIFICAMIENTO  Y TODO LO PASA A UTF-8
	 *
	 */
	public function fixEncoding($in_str)
	{
		$cur_encoding = mb_detect_encoding($in_str) ;
		if($cur_encoding == "UTF-8" && mb_check_encoding($in_str,"UTF-8"))
		return $in_str;
		else
		return utf8_encode($in_str);
	}
	/**
	 * METODO QUE RETORNA LA TRM O IATA , DEPENDIENDO DE LA POLIZA Y SU ASEGURADORA.
	 *
	 */
	public function getTrmIata($codigoPoliza)
	{
		//$this->conexion

		try
		{
			$valorTrmIata="";
			//OBTENEMOS EL TIPO DE MANEJO QUE SE LLEVA Y DESPUES OBTENEMOS EL VALOR
			$tipoManejoMoneda = &$this->conexion->conectarse()->Execute('
			SELECT    DISTINCT TipoManejoMoneda.Id
			FROM         Proveedores INNER JOIN
                      TipoManejoMoneda ON Proveedores.IdManejoMoneda = TipoManejoMoneda.Id INNER JOIN
                      Productos ON Proveedores.Idempresa = Productos.IdProveedor
			WHERE     (Productos.Id = \''.$codigoPoliza.'\')') ;

			if (!$tipoManejoMoneda->EOF) {
				//REALIZAMOS LA CONSULTA DE LAS TASAS
				$r = &$this->conexion->conectarse()->Execute('
							SELECT     Valor, ValorIATA
							FROM         Monedas
							WHERE Id=4');
				//OBTENEMOS EL VALOR DE LA TASA DEPENDIENDO DE LA CONFIGURACION DE LA ASEGURADORA DE LA POLIZA

				if($tipoManejoMoneda->fields[0]=="1")//TRM
				{
					if (!$r -> EOF) { $valorTrmIata= $r->fields[0] ;}
				}
				else if($tipoManejoMoneda->fields[0]==" 2")//IATA
				{
					if (!$r -> EOF) { $valorTrmIata= $r->fields[1] ; }
				}
			}
			return $valorTrmIata;
		}

		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	/**
	 *
	 * METODO QUE RETORNA EL DESCUENTO Y AUMENTO DE UNA POLIZA, DEPENDIENDO DE LA CONFIGURACION  DE LA ASEGURADOR Y SU CATEGORIA.
	 * @param GUID $codigoPoliza
	 */
	public function getAumentoDescuento($codigoPoliza)
	{
		//$this->conexion
	}

	/**
	 * METODO PARA ENVIAR CORREOS AL ADMINISTRADOR DESDE LA SECCION DE CONTACTENOS
	 *
	 *
	 */
	public function SendMailContact_Us($emailInteresado,$nombre,$apellido,$empresa,$telefonoFijo,$telefonoMovil,$mensaje,$contacto)
	{
		try
		{
			$interesadoEnContacto="NO QUIERE SER CONTACTADO";
			if($contacto)$interesadoEnContacto="QUIERE SER CONTACTADO";
			$this->mail->SetFrom($emailInteresado, $nombre." ".$apellido);
			$this->mail->Subject = 'SOLICITUD DE CONTACTO - CREADA DESDE EL PORTAL';
			$this->mail->Body = '
			<body style="margin: 10px;">
			<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">			
			<p><br>
			  Has recibido una solicitud de contacto, registrada desde el portal web:</p>
			<p>&nbsp;</p>
			<p><strong>EMPRESA</strong>:'.$empresa.'</p>
			<p><strong>NOMBRE Y APELLIDO</strong>:'.$nombre.' '.$apellido.'</p>
			<p><strong>TÉLEFONO FIJO</strong>:'.$telefonoFijo.'</p>
			<p><strong>TÉLEFONO MOVIL</strong>:'.$telefonoMovil.'</p>
			<p><strong>EMAIL</strong>:'.$emailInteresado.'</p>
			<p><strong>MENSAJE (Solicitud)</strong>:'.$mensaje.'</p>
			<p>'.$interesadoEnContacto.'</p>
			<p><br/>
			</p></div></body>';  
			if($this->mail->Send()) {
				return true;
			}


			return false;


		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}


	/**
	 * METODO PARA ENVIAR CORREOS AL ADMINISTRADOR DESDE LA SECCION DE DESEA VENDER SEGUROS MEDICOS DE VIAJES
	 *
	 *
	 */
	public function SendMail_sellTravelInsurance($emailInteresado,$nombre,$apellido,$telefono,$mensaje)
	{
		try
		{

			$this->mail->SetFrom($emailInteresado, $nombre." ".$apellido);
			$this->mail->Subject = 'SOLICITUD DE CONTACTO PARA VENTA DE SEGUROS  - CREADA DESDE EL PORTAL';
			$this->mail->Body = '
			<body style="margin: 10px;">
			<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">			
			<p><br>
			  Has recibido una solicitud de contacto para venta de seguros de viajes, registrada desde el portal web:</p>
			<p>&nbsp;</p>			
			<p><strong>NOMBRE Y APELLIDO</strong>:'.$nombre.' '.$apellido.'</p>
			<p><strong>TÉLEFONO </strong>:'.$telefono.'</p>			
			<p><strong>EMAIL</strong>:'.$emailInteresado.'</p>
			<p><strong>MENSAJE (Cómo se entero de nosotros)</strong>:'.$mensaje.'</p>
		
			<p><br/>
			</p></div></body>';  
			if($this->mail->Send()) {
				return true;
			}


			return false;


		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}


	/**
	 * METODO PARA ENVIAR CORREOS AL ADMINISTRADOR DESDE LA SECCION DE DESEA VENDER SEGUROS MEDICOS DE VIAJES
	 *
	 *
	 */
	public function SendMail_corporativeTravels($emailInteresado,$compania,$nombre,$apellido,$telefono,$mensaje)
	{
		try
		{

			$this->mail->SetFrom($emailInteresado, $nombre." ".$apellido);
			$this->mail->Subject = 'SOLICITUD DE CONTACTO PARA VIAJE CORPORATIVO  - CREADA DESDE EL PORTAL';
			$this->mail->Body = '
			<body style="margin: 10px;">
			<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">			
			<p><br>
			  Has recibido una solicitud de contacto para viaje corporativo, registrada desde el portal web:</p>
			<p>&nbsp;</p>	
			<p><strong>COMPAÑIA</strong>: '.$compania.'</p>		
			<p><strong>NOMBRE Y APELLIDO</strong>: '.$nombre.' '.$apellido.'</p>
			<p><strong>TÉLEFONO </strong>: '.$telefono.'</p>			
			<p><strong>EMAIL</strong>: '.$emailInteresado.'</p>
			<p><strong>MENSAJE (Cómo se entero de nosotros)</strong>:'.$mensaje.'</p>
			
			<p><br/>
			</p></div></body>';  
			if($this->mail->Send()) {
				return true;
			}


			return false;


		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}





	/**
	 * METODO QUE RETORNA EL FOOTER DE LA PAGINA- SE IMPLEMENTO ORIENTADO A OBJETOS PARA UN FACIL AJUSTE
	 *
	 */
	public function getFooter()
	{

		try
		{

			$footer="
<footer>
<div id=\"footerWrap\">
<div id=\"footCont\">
<ul>
	<li><a href=\"about_us.php\">Conocenos</a></li>
	<li><a href=\"clauses.php\">Clausulados</a></li>
	<li><a href=\"services.php\">Servicios</a></li>
	<li><a href=\"companies.php\">Compañias</a></li>
	<li><a href=\"plans.php\">Planes</a></li>
	<li><a href=\"contact_us.php\">Contacto</a></li>
	<li><a href=\"faq.php\">Preguntas frecuentes</a></li>	
</ul>
<ul>
	<li><img src=\"tpl/img/creditCards.png\" width=\"180\" height=\"130\" /></li>
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
	Atención de Domingo a Domingo:  316-4533840<br />
	</p>
</ul>
<div class=\"secureEle\">

<embed src=\"https://seal.verisign.com/getseal?at=1&&sealid=0&dn=GATEWAY.PAGOSONLINE.NET&aff=VeriSignSpain&lang=es\" loop=\"false\" menu=\"false\" quality=\"best\" wmode=\"transparent\" swliveconnect=\"FALSE\" width=\"130\" height=\"88\" name=\"s_l\" align=\"\" type=\"application/x-shockwave-flash\" pluginspage=\"https://www.macromedia.com/go/getflashplayer\"/>


			</div>
			<div class=\"theDot\">
			<div class=\"theDotDesign\"><a href=\"http://www.thedot-studio.com\"
			target=\"_blank\"><img src=\"tpl/img/logoDot-DesignBy.png\" /></a></div>
			<div class=\"theDotByThe\"><a href=\"http://www.thedot-studio.com/\"
			target=\"_blank\"><img src=\"tpl/img/logoDot-TheDotStudio.png\" /></a></div>
			</div>
			<!--LOGO DOT--> <span class=\"devp\">Development by: Crecer Soluciones</span>
			</div>
			</div>
			<div id=\"footerCopy\">
			<p>Copyright © 2012 Seguros Medicos Internacionales All Rights Reserved..</p>
			</div>
			</footer>
			";	
			return  $this->fixEncoding($footer);

		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}






}