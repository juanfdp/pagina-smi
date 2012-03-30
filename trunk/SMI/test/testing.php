<?php  include 'logic/parametros.php';
//INSTANCIA DE LA CLASE ENCARGADA DE LOS PARAMETROS
$param=new parametros();
$r=$param->FillTipoProducto();
echo "niсo es con сссссссссс";
echo "<select name=\"travelType_id\" id=\"f_travelType_id\">
	<option value=\"0\">Seleccione</option>	
	";
while (!$r->EOF) {
	//echo ("<option value=".$r->fields[0] .">".$r->fields[1] ."</option>");
	echo "<option value=".$r->fields[0] .">".$r->fields[1] ."</option>";
	$r->MoveNext();
}		
echo "</select> "; ?>
