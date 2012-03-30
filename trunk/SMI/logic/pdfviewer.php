<?php
require('/fpdf/fpdf.php');
include 'functions.php';
include 'ccompare.php';
$com=new ccompare();
$functions=new functions();

$categoria=(int)$_GET['categoria'];//OBTENER EL TIPO DE ACCION A TOMAR  1- AGREGAR A LA COMPARACION, 2 - IMPRIMIR COMPARACION
$categoriasSeleccionandas=array();
$categoriasSeleccionandas[]=$categoria;

class PDF extends FPDF
{
	// header
	function Header()
	{
		// Page header
		global $title;
		// Logo
		//$this->Image("../tpl/img/Partners/Asistencia.png",10,6,30);
		$this->SetFont('Arial','B',15);
		$w = $this->GetStringWidth($title)+6;
		$this->SetX((210-$w)/2);
		$this->SetDrawColor(250,250,250);
		$this->SetFillColor(250,250,250);
		$this->SetTextColor(0,0,0);
		$this->SetLineWidth(1);
		$this->Cell($w,9,$title,1,1,'C',true);
		$this->Ln(10);
		// Save ordinate
		$this->y0 = $this->GetY();
	}
	
	function BuildTable($header,$data) {

		//Colors, line width and bold font

		$this->SetFillColor(130,0,0);
		$this->SetTextColor(255);
		$this->SetDrawColor(200,0,0);
		$this->SetLineWidth(.3);
		$this->SetFont('','B');
		//HEADER DE LA TABLA
		//AJUSTAMOS EL TAMAÑO POR COLUMNA
		$w=array(100,90);
		// send the headers to the PDF document
		for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',1);
		$this->Ln();
		//Color and font restoration
		$this->SetFillColor(175);
		$this->SetTextColor(0);
		$this->SetFont('');
		//now spool out the data from the $data array
		$fill=true; // used to alternate row color backgrounds
		foreach($data as $row)
		{
			//COLUMNA 1
			$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
			// set colors to show a URL style link
			//COLUMNA 2			
			$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill, 'http://www.oreilly.com');
			
			
			$this->Ln();
			// flips from true to false and vise versa
			$fill =! $fill;
		}
		$this->Cell(array_sum($w),0,'','T');
	}
	function Footer()
	{
		// Page footer
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->SetTextColor(128);
		$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
	}

	function SetCol($col)
	{
		// Set position at a given column
		$this->col = $col;
		$x = 10+$col*65;
		$this->SetLeftMargin($x);
		$this->SetX($x);
	}

	function AcceptPageBreak()
	{
		// Method accepting or not automatic page break
		if($this->col<2)
		{
			// Go to next column
			$this->SetCol($this->col+1);
			// Set ordinate to top
			$this->SetY($this->y0);
			// Keep on page
			return false;
		}
		else
		{
			// Go back to first column
			$this->SetCol(0);
			// Page break
			return true;
		}
	}
}

$pdf = new PDF();
$title = $com->GetDescripEncabezadoPDF($categoria);
$pdf->SetTitle($title);
$pdf->SetAuthor('Seguros Medicos Internacionales');
$header = array('Beneficio', 'Cobertura');
$data = array();
$beneficiosCoberturas=$com->FillCoberturasBeneficioByCategoria($categoria);//obtenemos las coberturas.

foreach($beneficiosCoberturas as $k => $row) {
	$data[] = array($row[0], $row[1]);
}
$pdf->SetFont('Arial','',5);
$pdf->AddPage();
$pdf->BuildTable($header, $data);
$pdf->Output();




?>