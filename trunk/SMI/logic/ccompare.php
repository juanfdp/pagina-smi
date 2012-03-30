<?php
include 'conect.php';
/**
 * CLASE CCOMPARE
 *
 * Clase encargada de realizar las comparaciones y arrojar la matriz final de comparaciones.
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class ccompare
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
	 * METODO QUE RETORNA LOS BENEFICIOS DE LAS COBERTURAS
	 */
	public function FillCoberturas()
	{

		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('
			SELECT        Id, Descripcion, Estado, Codigo
			FROM            Coberturas
			ORDER BY Codigo');

			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}


	/**
	 * METODO QUE RETORNA LOS BENEFICIOS DE LAS COBERTURAS
	 */
	public function FillCoberturasBeneficioByCategoria($categoria)
	{

		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('
			SELECT        Coberturas.Descripcion, CategoriaCoberturas.Descripcion AS Beneficio
			FROM            Coberturas INNER JOIN
                         CategoriaCoberturas ON Coberturas.Id = CategoriaCoberturas.IdCobertura
			WHERE        (CategoriaCoberturas.IdCategoria = '.$categoria.')
			ORDER BY Codigo');

			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	
	
	
	/**
	 * METODO QUE RETORNA EL ENCABEZADO DE LAS ASEGURADORAS QUE SE VANA A COMPARAR
	 */
	public function GetImagenEncabezado($idcategoria)
	{
		try
		{
			$encabezado="";
			$recordSett = &$this->conexion->conectarse()->Execute("
			SELECT      DISTINCT   Productos.IdProveedor, Empresas.RazonSocial
			FROM            Categorias INNER JOIN
                         Productos ON Categorias.Id = Productos.Idcategoria INNER JOIN
                         Empresas ON Productos.IdProveedor = Empresas.Id
			WHERE  Categorias.Id= ".$idcategoria ) ;
				
			while (!$recordSett->EOF) {
				$idAseguradora=$recordSett->fields[0];
				$encabezado="
				 <th scope=\"col\" width=\"139\" >		  
		  		 <div align=\"center\">". $this->Getimg($idAseguradora);				
				echo "</div></th>";
				break;

			}
			return $encabezado;
				
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	/**
	 * METODO QUE RETORNA EL ENCABEZADO DE LAS ASEGURADORAS QUE SE VANA A COMPARAR
	 */
	public function GetDescripEncabezado($idcategoria)
	{

		try
		{
			$encabezado="";
			$recordSett = &$this->conexion->conectarse()->Execute("
			SELECT      DISTINCT   Productos.IdProveedor, Empresas.RazonSocial, Categorias.Descripcion
			FROM            Categorias INNER JOIN
                         Productos ON Categorias.Id = Productos.Idcategoria INNER JOIN
                         Empresas ON Productos.IdProveedor = Empresas.Id
			WHERE  Categorias.Id= ".$idcategoria ) ;
				
			while (!$recordSett->EOF) {
				$encabezado="
			<td>
			<div align=\"center\">
			<h4>".$recordSett->fields[1]."</h4>
			<br><h3>".$recordSett->fields[2]."</h3>
			</div></td>";
				break;
			}
			return $encabezado;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	
	
	

	/**
	 * METODO QUE RETORNA EL ENCABEZADO DE LAS ASEGURADORAS PARA EL PDF
	 */
	public function GetImagenEncabezadoPDF($idcategoria)
	{
		try
		{
			$encabezado="";
			$recordSett = &$this->conexion->conectarse()->Execute("
			SELECT      DISTINCT   Productos.IdProveedor, Empresas.RazonSocial
			FROM            Categorias INNER JOIN
                         Productos ON Categorias.Id = Productos.Idcategoria INNER JOIN
                         Empresas ON Productos.IdProveedor = Empresas.Id
			WHERE  Categorias.Id= ".$idcategoria ) ;
				
			while (!$recordSett->EOF) {
				$idAseguradora=$recordSett->fields[0];
				$encabezado= $this->GetimgPDF($idAseguradora);				
				break;

			}
			return $encabezado;
				
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	/**
	 * METODO QUE RETORNA EL ENCABEZADO DE LAS ASEGURADORAS PARA EL PDF
	 */
	public function GetDescripEncabezadoPDF($idcategoria)
	{

		try
		{
			$encabezado="";
			$recordSett = &$this->conexion->conectarse()->Execute("
			SELECT      DISTINCT   Productos.IdProveedor, Empresas.RazonSocial, Categorias.Descripcion
			FROM            Categorias INNER JOIN
                         Productos ON Categorias.Id = Productos.Idcategoria INNER JOIN
                         Empresas ON Productos.IdProveedor = Empresas.Id
			WHERE  Categorias.Id= ".$idcategoria ) ;
				
			while (!$recordSett->EOF) {
				$encabezado=" ".$recordSett->fields[1]." - ".$recordSett->fields[2];
				break;
			}
			return $encabezado;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	
		/**
	 * METODO QUE RETORNA LA IMAGEN DEPENDIENDO DE LA ASEGURADORA PARA EL PDF
	 */
	public function GetimgPDF($idAseguradora)
	{
		try
		{
			//ECHO strtolower($idAseguradora);
			switch (strtolower($idAseguradora) ) {
				case "169159ad-d55a-467b-9efd-2b7139ecc730": //ANDI ASISTENCIA SA
					return "../tpl/img/Partners/Asistencia.png";
					break;
				case "ae7c4aa0-bcba-4804-b2aa-3496c4edc5f7": // CORIS SA
					return "/tpl/img/Partners/Coris.png";
					break;
				case "715697a2-f643-4d5b-ac49-83b11e8546b0": // UNIVERSAL
					return "../tpl/img/Partners/UniversalAssistance.png";
					break;
				case "b2ff47cf-50d3-4803-992d-9ee57d9fe736": // EDUCAMOS VIAJANDO LTDA
					return "../tpl/img/Partners/TravelGuard.png";
					break;
				case "4e04d2c4-5c91-46e4-99dd-e992638da6f8": // ASSIST CARD
					return "../tpl/img/Partners/AssistCard.png";
					break;
				case "8528cc83-53f7-4330-aaed-ef0a5ad2b08f": // CHARTIS COLOMBIA SEGUROS GENERALES SA
					return "../tpl/img/Partners/Coris.png";
					break;
				case "db7a54c0-bf90-4508-9528-f7c6af83357b": // QUALITAS ASSISTANCE SAS
					return "../tpl/img/Partners/Qualitas.png";
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
	 * METODO QUE RETORNA LA IMAGEN DEPENDIENDO DE LA ASEGURADORA
	 */
	public function Getimg($idAseguradora)
	{
		try
		{
			//ECHO strtolower($idAseguradora);
			switch (strtolower($idAseguradora) ) {
				case "169159ad-d55a-467b-9efd-2b7139ecc730": //ANDI ASISTENCIA SA
					return "<img src=\"../tpl/img/Partners/Asistencia.png\"/>";
					break;
				case "ae7c4aa0-bcba-4804-b2aa-3496c4edc5f7": // CORIS SA
					return "<img src=\"../tpl/img/Partners/Coris.png\"/>";
					break;
				case "715697a2-f643-4d5b-ac49-83b11e8546b0": // UNIVERSAL
					return "<img src=\"../tpl/img/Partners/UniversalAssistance.png\"/>";
					break;
				case "b2ff47cf-50d3-4803-992d-9ee57d9fe736": // EDUCAMOS VIAJANDO LTDA
					return "<img src=\"../tpl/img/Partners/TravelGuard.png\"/>";
					break;
				case "4e04d2c4-5c91-46e4-99dd-e992638da6f8": // ASSIST CARD
					return "<img src=\"../tpl/img/Partners/AssistCard.png\"/>";
					break;
				case "8528cc83-53f7-4330-aaed-ef0a5ad2b08f": // CHARTIS COLOMBIA SEGUROS GENERALES SA
					return "<img src=\"../tpl/img/Partners/Coris.png\"/>";
					break;
				case "db7a54c0-bf90-4508-9528-f7c6af83357b": // QUALITAS ASSISTANCE SAS
					return "<img src=\"../tpl/img/Partners/Qualitas.png\"/>";
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
	 * METODO QUE RETORNA LAS COBERTURAS.
	 */

	public function GetCoberturasPorCategoria($idcategoria)
	{
		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('				
			SELECT        CategoriaCoberturas.Descripcion
			FROM            Coberturas INNER JOIN
                         CategoriaCoberturas ON Coberturas.Id = CategoriaCoberturas.IdCobertura
			WHERE        (CategoriaCoberturas.IdCategoria ='.$idcategoria.')
						ORDER BY Codigo');
			
			
			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}




}//FIN CLASE



?>