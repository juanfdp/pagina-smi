<?php
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
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 */
	function __construct()
	{

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




	/**
	 * METODO QUE RETORNA EL CHAT DE LA PAGINA- SE IMPLEMENTO ORIENTADO A OBJETOS PARA UN FACIL AJUSTE
	 *
	 */

	public function getChat()
	{

		try
		{
			$chat="
			
			<script type=\"text/javascript\">
				window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
				d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
				_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
				$.src='//cdn.zopim.com/?YSdpKx0VatFD2OAvEhAOthvLxiFafiVl';z.t=+new Date;$.
				type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
				</script>
			";
			return $chat;
				
		}

		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

}