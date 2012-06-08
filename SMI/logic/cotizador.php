<?php



/**
 * CLASE COTIZADOR
 *
 * Clase encargada de toda la logica del proceso de cotizacion.
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class cotizador
{
	public $conexion;
	/**
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 */
	function __construct()
	{
		$this->conexion=new Conect();
	}
	/**
	 * METODO QUE RETORNA LA LISTA DE PRODUCTOS , QUE SE ACOMODEN A LOS PARAMETROS DE FILTRACION.
	 */
	public function FillByListadoConEdad($dias,$tipoViaje,$Destino,$edad,$edad2,$edad3,$edad4,$inicio,$fin)
	{

		try
		{
				
			$recordSett = &$this->conexion->conectarse()->Execute('
			SELECT  DISTINCT
                         Productos.Id, Productos.NumeroParte, Productos.Nombre, Productos.Descripcion, Productos.IdMarca, Productos.Idcategoria, 
                         TipoProductoProveedores.IdTipo AS IdtipoProducto, Productos.Caracteristicas, Productos.PrecioUnitario, Productos.IdProveedor, Productos.Modelo, 
                         Productos.Voltaje, Productos.Hertz, Productos.FechaIngreso, Productos.Largo, Productos.Ancho, Productos.Altura, Productos.UMDimencion, Productos.Peso, 
                         Productos.UMPeso, Productos.TipoRecogida, Productos.Comision, Empresas.RazonSocial, Empresas.TipoNacionalidad, 
                         UnidadDimension.Descripcion AS UnidadDimension, UnidadPeso.Descripcion AS UnidadPesos, UnidadPeso.Abreviatura AS ABVPeso, 
                         UnidadDimension.Abreviatura AS ABVDimension, Marcas.Descripcion AS Marca, Productos.Iva, Empresas.IdTipoMonedaImportacion, 
                         Monedas.Descripcion AS NomMoneda, Productos.Arancel, Productos.TipoMoneda, Productos.Link, Categorias.Descripcion AS Categoria, Productos.IdTipoRango, 
                         Productos.DiasIniciales, Productos.DiasFinales, Productos.IdTipoPlan, Productos.CantidadDias, Categorias.EdadFinal, Categorias.EdadInicial, 
                         Categorias.CantidadEdad, Categorias.IdTipoRango AS TipoRangoPoliza, Proveedores.IdManejoMoneda AS TasaCambio, 
                         Empresas.RazonSocial AS Aseguradora
FROM            Empresas RIGHT OUTER JOIN
                         Proveedores ON Empresas.Id = Proveedores.Idempresa INNER JOIN
                         Productos INNER JOIN
                         UsuariosGrupos ON Productos.GrupoAsignado = UsuariosGrupos.IdGrupo INNER JOIN
                         Categorias ON Productos.Idcategoria = Categorias.Id INNER JOIN
                         TipoProductoProveedores ON Productos.IdTipoProducto = TipoProductoProveedores.Id INNER JOIN
                         RegionesProducto ON Productos.Id = RegionesProducto.IdProducto ON Empresas.Id = Productos.IdProveedor INNER JOIN
                         Monedas ON Productos.TipoMoneda = Monedas.Id LEFT OUTER JOIN
                         UnidadesDeMedida AS UnidadPeso ON Productos.UMPeso = UnidadPeso.Id LEFT OUTER JOIN
                         UnidadesDeMedida AS UnidadDimension ON Productos.UMDimencion = UnidadDimension.Id LEFT OUTER JOIN
                         Marcas ON Productos.IdMarca = Marcas.Id
                                                
WHERE        			((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad.') AND ('. $tipoViaje.' IS NULL OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.')) 
                         OR 
                         ((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad2.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad2.') AND ('. $tipoViaje.' IS NULL  OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.'))
                         OR 
                         ((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad3.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad3.') AND ('. $tipoViaje.' IS NULL  OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.'))                         
                          OR 
                         ((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad4.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad4.') AND ('. $tipoViaje.' IS NULL  OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.'))
                                                  ORDER BY PrecioUnitario');

			
			
			
			
			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}




	/**
	 * METODO QUE RETORNA EL TOTAL DE PRODUCTOS QUE SE ACOMODEN A LOS PARAMETROS DE FILTRACION.
	 */
	public function CountListadoConEdad($dias,$tipoViaje,$Destino,$edad,$edad2,$edad3,$edad4)
	{

		try
		{
			$count=0;
			$recordSett = &$this->conexion->conectarse()->Execute('
			SELECT  DISTINCT
                         Productos.Id, Productos.NumeroParte, Productos.Nombre, Productos.Descripcion, Productos.IdMarca, Productos.Idcategoria, 
                         TipoProductoProveedores.IdTipo AS IdtipoProducto, Productos.Caracteristicas, Productos.PrecioUnitario, Productos.IdProveedor, Productos.Modelo, 
                         Productos.Voltaje, Productos.Hertz, Productos.FechaIngreso, Productos.Largo, Productos.Ancho, Productos.Altura, Productos.UMDimencion, Productos.Peso, 
                         Productos.UMPeso, Productos.TipoRecogida, Productos.Comision, Empresas.RazonSocial, Empresas.TipoNacionalidad, 
                         UnidadDimension.Descripcion AS UnidadDimension, UnidadPeso.Descripcion AS UnidadPesos, UnidadPeso.Abreviatura AS ABVPeso, 
                         UnidadDimension.Abreviatura AS ABVDimension, Marcas.Descripcion AS Marca, Productos.Iva, Empresas.IdTipoMonedaImportacion, 
                         Monedas.Descripcion AS NomMoneda, Productos.Arancel, Productos.TipoMoneda, Productos.Link, Categorias.Descripcion AS Categoria, Productos.IdTipoRango, 
                         Productos.DiasIniciales, Productos.DiasFinales, Productos.IdTipoPlan, Productos.CantidadDias, Categorias.EdadFinal, Categorias.EdadInicial, 
                         Categorias.CantidadEdad, Categorias.IdTipoRango AS TipoRangoPoliza, Proveedores.IdManejoMoneda AS TasaCambio, 
                         Empresas.RazonSocial AS Aseguradora
FROM            Empresas RIGHT OUTER JOIN
                         Proveedores ON Empresas.Id = Proveedores.Idempresa INNER JOIN
                         Productos INNER JOIN
                         UsuariosGrupos ON Productos.GrupoAsignado = UsuariosGrupos.IdGrupo INNER JOIN
                         Categorias ON Productos.Idcategoria = Categorias.Id INNER JOIN
                         TipoProductoProveedores ON Productos.IdTipoProducto = TipoProductoProveedores.Id INNER JOIN
                         RegionesProducto ON Productos.Id = RegionesProducto.IdProducto ON Empresas.Id = Productos.IdProveedor INNER JOIN
                         Monedas ON Productos.TipoMoneda = Monedas.Id LEFT OUTER JOIN
                         UnidadesDeMedida AS UnidadPeso ON Productos.UMPeso = UnidadPeso.Id LEFT OUTER JOIN
                         UnidadesDeMedida AS UnidadDimension ON Productos.UMDimencion = UnidadDimension.Id LEFT OUTER JOIN
                         Marcas ON Productos.IdMarca = Marcas.Id
                                                
WHERE        			((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad.') AND ('. $tipoViaje.' IS NULL OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.')) 
                         OR 
                         ((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad2.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad2.') AND ('. $tipoViaje.' IS NULL  OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.'))
                         OR 
                         ((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad3.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad3.') AND ('. $tipoViaje.' IS NULL  OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.'))                         
                          OR 
                         ((Productos.IdTipoRango = 2 AND  '. $dias .' BETWEEN Productos.DiasIniciales AND Productos.DiasFinales OR
                         Productos.IdTipoRango = 1 AND Productos.CantidadDias = '. $dias .') AND                          
                         (Categorias.IdTipoRango = 2  AND '. $edad4.' BETWEEN Categorias.EdadInicial AND 
                         Categorias.EdadFinal OR
                         Categorias.IdTipoRango = 1 AND Categorias.CantidadEdad >= '. $edad4.') AND ('. $tipoViaje.' IS NULL  OR
                         TipoProductoProveedores.IdTipo = '. $tipoViaje .') AND (Productos.Activo = 1) AND ('.$Destino.' = -1  OR
                         RegionesProducto.IdRegion ='.$Destino.'))
                                                  ORDER BY PrecioUnitario');

		while (!$recordSett->EOF) {
				$count++;
				$recordSett->MoveNext();
			}
			
			return $count;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	public function paginacion($total,$pp,$st,$url) {

		if($total>$pp) {//VALIDAMOS QUE EL RESULTADO SEA SUPERIOR AL TAMAÑO DE  LA PAGINA
			$resto=$total%$pp;

			if($resto==0) {
				$pages=$total/$pp;//OBTENEMOS EL TOTAL DE PAGINAS
			} else {
				$pages=(($total-$resto)/$pp)+1;
			}

			if($pages>10) {
				$current_page=($st/$pp)+1;
				if($st==0) {
					$first_page=0;
					$last_page=10;
				} else if($current_page>=5 && $current_page <=($pages-5)) {
					$first_page=$current_page-5;
					$last_page=$current_page+5;

				} else if ($current_page<5) {
					$first_page=0;
					$last_page=$current_page+5+(5-$current_page);
				} else {
					$first_page=$current_page-5-(($current_page+5)-$pages);
					$last_page=$pages;
				}
			} else {
				$first_page=0;
				$last_page=$pages;
			}

			for($i=$first_page;$i< $last_page;$i++) {
				$pge=$i+1;
				$nextst=$i*$pp;
				if($st==$nextst) {
					$page_nav .= '<b> ['.$pge.']';
				} else {
					$page_nav .= '<a href="'.$url.$nextst.'">'.$pge.'</a>';
				}
			}

			if($st==0) { $current_page = 1; } else { $current_page = ($st/$pp)+1; }

			if($current_page< $pages) {
				$page_last = '<b>[<a href="'.$url.($pages-1)*$pp.'">>>></a>]';
				$page_next = '[<a href="'.$url.$current_page*$pp.'">></a>]';
			}

			if($st>0) {
				$page_first = '<b>[<a href="'.$url.'0">< <<</a>]</a></b>';
				$page_previous = '[<a href="'.$url.''.($current_page-2)*$pp.'">< </a>]';
			}
		}

		return "$page_first $page_previous $page_nav $page_next $page_last";
	}




	/**
	 * METODO QUE RETORNA LA IMAGEN DE ENCABEZADO
	 */
	public function FillCoberturasByIdPoliza($idCategoria)
	{
		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute("SELECT  TOP 5  Coberturas.Id, Coberturas.Descripcion, Coberturas.Estado, CategoriaCoberturas.Descripcion AS ValorCobertura
			FROM  CategoriaCoberturas INNER JOIN  Coberturas ON CategoriaCoberturas.IdCobertura = Coberturas.Id
			WHERE IdCategoria =". $idCategoria." ORDER BY Coberturas.Codigo");	
			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	
	

	/**
	 * METODO QUE RETORNA LA IMAGEN DEPENDIENDO DE LA ASEGURADORA
	 */
	public function Getimg($idAseguradora)
	{
		try
		{
			//ECHO strtolower($idAseguradora);
			switch (strtolower($idAseguradora) ) {
				case "169159ad-d55a-467b-9efd-2b7139ecc730": //ANDI ASISTENCIA SA
					return "<img src=\"tpl/img/Partners/Mafre.png\"/>";
					break;
				case "ae7c4aa0-bcba-4804-b2aa-3496c4edc5f7": // CORIS SA
					return "<img src=\"tpl/img/Partners/Coris.png\"/>";
					break;
				case "715697a2-f643-4d5b-ac49-83b11e8546b0": // UNIVERSAL
					return "<img src=\"tpl/img/Partners/UniversalAssistance.png\"/>";
					break;
				case "b2ff47cf-50d3-4803-992d-9ee57d9fe736": // EDUCAMOS VIAJANDO LTDA(SAFEST)
					return "<img src=\"tpl/img/Partners/Safest.png\"/>";
					break;
				case "4e04d2c4-5c91-46e4-99dd-e992638da6f8": // ASSIST CARD
					return "<img src=\"tpl/img/Partners/AssistCard.png\"/>";
					break;
				case "8528cc83-53f7-4330-aaed-ef0a5ad2b08f": // CHARTIS COLOMBIA SEGUROS GENERALES SA(TRAVELGUARD)
					return "<img src=\"tpl/img/Partners/TravelGuard.png\"/>";
					break;
				case "db7a54c0-bf90-4508-9528-f7c6af83357b": // QUALITAS ASSISTANCE SAS
					return "<img src=\"tpl/img/Partners/Qualitas.png\"/>";
					break;
			}
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}



	/**
	 * METODO QUE RETORNA EL CLAUSULADO  DEPENDIENDO DE LA ASEGURADORA
	 */
	public function Getclausulado($idAseguradora)
	{
		try
		{

			switch (strtolower($idAseguradora) ) {
				case "169159ad-d55a-467b-9efd-2b7139ecc730": //ANDI ASISTENCIA SA
					return "<a href=\"clausulados/SEGURVIAJE_MAPFRE ASISTENCIA.pdf\" class=\"chooseClausu\"  target=\"_blank\" >Ver Clausulado</a>";

					break;
				case "ae7c4aa0-bcba-4804-b2aa-3496c4edc5f7": // CORIS SA
					return "<a href=\"clausulados/CORIS.pdf\" class=\"chooseClausu\" target=\"_blank\">Ver Clausulado</a>";

					break;
				case "715697a2-f643-4d5b-ac49-83b11e8546b0": // UNIVERSAL

					return "<a href=\"clausulados/UNIVERSAL_ASSISTANCE.pdf\" class=\"chooseClausu\" target=\"_blank\">Ver Clausulado</a>";

					break;
				case "b2ff47cf-50d3-4803-992d-9ee57d9fe736": // EDUCAMOS VIAJANDO LTDA()SAFEST

					return "<a href=\"clausulados/SAFEST.pdf\" class=\"chooseClausu\" target=\"_blank\">Ver Clausulado</a>";

					break;
				case "4e04d2c4-5c91-46e4-99dd-e992638da6f8": // ASSIST CARD

					return "<a href=\"clausulados/ASSIST_CARD.pdf\" class=\"chooseClausu\" target=\"_blank\" >Ver Clausulado</a>";

					break;
				case "8528cc83-53f7-4330-aaed-ef0a5ad2b08f": // CHARTIS COLOMBIA SEGUROS GENERALES SA


					return "<a href=\"clausulados/CHARTIS.pdf\" class=\"chooseClausu\" target=\"_blank\" >Ver Clausulado</a>";

					break;
				case "db7a54c0-bf90-4508-9528-f7c6af83357b": // QUALITAS ASSISTANCE SAS

					return "<a href=\"clausulados/QUALITAS_ASSISTANCE.pdf\" class=\"chooseClausu\" target=\"_blank\" >Ver Clausulado</a>";

					break;
			}
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}





	/**
	 * METODO QUE VALIDA SI LA POLIZA SE ENCUENTRA YA EN LOS RESULTADOS ARROJADOS AL USUARIO FINAL
	 */
	public function existePoliza($productosEnLista,$idNuevoProducto)
	{
		try
		{

			foreach ($productosEnLista as &$registro) {
				if($registro==$idNuevoProducto)return true;

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
	 * METODO QUE VALIDA SI LA POLIZA SE ENCUENTRA YA EN LOS RESULTADOS ARROJADOS AL USUARIO FINAL
	 */
	public function CantidadPasajeros($edad1,$edad2,$edad3,$edad4)
	{
		try
		{
			$cantPasajeros=0;
			if( $edad1 !="" )$cantPasajeros++;
			if( $edad2 !="")$cantPasajeros++;
			if( $edad3 !="")$cantPasajeros++;
			if( $edad4 !="")$cantPasajeros++;


			return $cantPasajeros;

		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}




}





?>