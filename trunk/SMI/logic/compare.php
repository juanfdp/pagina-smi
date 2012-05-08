<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t�tulo</title>
</head>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,700,600,400'
	rel='stylesheet' type='text/css'><![endif]> <!-- Uncomment to use; use thoughtfully!
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
<link rel="Shortcut Icon" href="../tpl/img/favicon.ico">
<link rel="icon" href="../tpl/img/favicon.ico" type="image/x-icon"><!-- CSS: screen, mobile & print are all in the same file -->
<link rel="stylesheet" href="../tpl/css/style.css">
<link type="text/css"
	href="../tpl/css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<!-- all our JS is at the bottom of the page, except for Modernizr. -->
<script src="../tpl/js/modernizr-1.7.min.js"></script>
<link href="../tpl/css/jquery.selectbox.css" type="text/css"
	rel="stylesheet" />
<script src="../tpl/js/gen_validatorv4.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript"
	src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>





<style type="text/css">
tr.d0 td {
	background-color: #E6E6E6;
	color: black;
}

tr.d1 td {
	background-color: #FFFFFF;
	color: black;
}
</style>


<body>
<?php
include 'functions.php';
include 'ccompare.php';
$com=new ccompare();
$functions=new functions();
session_start();
$categoriasSeleccionandas=$_SESSION['categoriasSeleccionandas'];
$tipo=(int)$_GET['tipo'];//OBTENER EL TIPO DE ACCION A TOMAR  1- AGREGAR A LA COMPARACION, 2 - IMPRIMIR COMPARACION

if($tipo==1){// AGREGAR A LA COMPARACION
	$categoria=(int)$_GET['categoria'];
	$estado=$_GET['estado'];//OBTENEMOS EL ESTADO

	if((!$functions->validarExistenciaItem($_SESSION['categoriasSeleccionandas'], $categoria))&&(count($categoriasSeleccionandas)<4)&&($estado=="agregar"))
	{
		$categoriasSeleccionandas[]=$categoria;
		$_SESSION['categoriasSeleccionandas']=$categoriasSeleccionandas;
	}
	else if ($estado=="eliminar"){//SI YA ESTA CHEKIADO, LO DEBO QUITAR DE LA LISTA		
		$categoriasSeleccionandas=$functions->eliminarItemByValue($categoriasSeleccionandas,$categoria);
		$_SESSION['categoriasSeleccionandas']=$categoriasSeleccionandas;
	}


}
else if($tipo==2){// IMPRIMIR  LA COMPARACION
	//Print_r ($_SESSION);


	if(count($categoriasSeleccionandas)>0 && count($categoriasSeleccionandas)<5 )//VALIDAMSO LA CANTIDAD DE POLIZAS A COMPARAR.
	{

		echo "<table >";
		//IMPRIMIMOS LAS COBERTURAS
		$coberturas=$com->FillCoberturas();
		////////////////////////////////////////////////// ENCABEZADOS ////////////////////////////////////////////
		echo
		"
		<tr>		
		  <th scope=\"col\" width=\"500\" >		  
		  <div align=\"center\"></div>			
		  </th>";
		for($i=0;$i<=count($categoriasSeleccionandas);$i++)echo $functions->fixEncoding( $com->GetImagenEncabezado($categoriasSeleccionandas[$i]));
		echo"
		</tr>
		<tr>
			<td>
			<div align=\"center\">
			<h4>Beneficios</h4>
			</div>
			</td>";
		for($i=0;$i<=count($categoriasSeleccionandas);$i++)echo $functions->fixEncoding( $com->GetDescripEncabezado($categoriasSeleccionandas[$i]));
		echo "</tr>";
		/////////////////////////////////////////////////////BENEFICIOS - COBERTURAS///////////////////////////////////////
		$alternating=0;//VARIABLE PARA ALTERNAR LOS ESTILOS
		$categoriasComparadas=array();//ARREGLO PARA ALMACENAR LAS CATEGORIAS QUE YA HACEN PARTE DE LA COMPARACION Y NO REPETIR
		foreach($coberturas as $k => $row) {

			$clase=$alternating%2;//OBTENEMOS EL MODULO PARA JUGAR CON LOS DOS ESTILOS DE TABLAS DEFINIDOS

			echo"
			<tr class=\"d".$clase."\">
			<td><div align=\"Left\">".$functions->fixEncoding($row[1])."</div></td>";	
			
			
			
			for($i=0;$i<=count($categoriasSeleccionandas);$i++)//RECORREMOS LAS CATEGORIAS A COMPARAR
			{
				
					$beneficiosCoberturas=$com->GetCoberturasPorCategoria($categoriasSeleccionandas[$i]);//obtenemos las coberturas.
					$contador=0;//CONTADOR PARA COMPARAR LA FILA DONDE VA LA COBERTURA Y PODER APLICAR EL BENEFICIO EN EL LUGAR INDICADO
					
					foreach($beneficiosCoberturas as $k => $row2) {							
						if($contador==$alternating){//VALIDAMOS QUE SEA  LA FILA LA INDICADA , PARA PODER  IMPRIMIR.
							echo"<td><div align=\"Center\">".$functions->fixEncoding($row2[0])."</div></td>";
							$categoriasComparadas[]=$categoriasSeleccionandas[$i];//GUARDAMOS LA CATEGORIA PARA QUE NO SE REPITA.
							break;
						}
						$contador++;						
					}
				
			}
			echo"</tr>";
			$alternating++;
		}
		/////////////////////////////////////////////


		//////////////////////////////////////////////////////////////////////////////////////
		echo"</table>";
	}//FINA VALIDACION-CANTIDADES A VALIDAR..
}





?>






</body>

</html>
