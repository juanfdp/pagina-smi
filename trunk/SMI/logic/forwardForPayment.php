<html>
<head></head>

<script type="text/javascript">
function submitform()
{
   document.forms["pform"].submit();
  
}
</script>

<body onload="submitform()" >
<?php
$llave_encripcion = "131bef7b598";
$usuarioId = "73585";
$refVenta = time();
//echo $refVenta;
$iva=0;
$baseDevolucionIva=0;
//	$valor=$_POST['PrecioCotizado']!=null?$_POST['PrecioCotizado']:0;
$valor=100;
$moneda ="USD";
$prueba = "1";
$descripcion = "Pago de póliza: ".$_POST['NombreFactu'] ;
$emailComprador="info@mail.com";
$firma_cadena = $llave_encripcion."~".$usuarioId."~".$refVenta."~".$valor."~".$moneda;
$firma = md5($firma_cadena);
$paginaConfirmacion="http://www.crecersoluciones.com/";

// GUARDAMOS EN LAS TABLAS TEMPORALES LOS DATOS DE LA POSIBLE COMPRA.
//$cantidadPasajeros=(int)$_POST("cantidadPasajeros");
//ARREGLO DE PASAJEROS

//ARREGLO DE FACTURACION



//ARREGLO CONTACTO DE EMERGENCIA









echo"
			<form   id=\"pform\" method=\"post\" action=\"https://gateway2.pagosonline.net/apps/gateway/index.html\">
			<input name=\"url_confirmacion\" type=\"hidden\" value=".$paginaConfirmacion.">
			<input	name=\"usuarioId\" type=\"hidden\" value=". $usuarioId ."> 
			<input	name=\"descripcion\" type=\"hidden\" value=". $descripcion ."> 
			<input	name=\"refVenta\" type=\"hidden\" value=". $refVenta ."> 
			<input  name=\"moneda\" type=\"hidden\" value=".$moneda."> 
			<input  name=\"valor\" type=\"hidden\" value=". $valor ."> 
			<input  name=\"iva\"	type=\"hidden\" value=".  $iva ."> 
			<input	name=\"baseDevolucionIva\" type=\"hidden\"	value=".$baseDevolucionIva.">
			<input  name=\"firma\"	type=\"hidden\" value=".$firma."> 
			<input  name=\"emailComprador\"	type=\"hidden\" value=". $emailComprador.">
			<input	name=\"prueba\" type=\"hidden\" value=".$prueba.">
			</form>
			";
?>
</body>
</html>
