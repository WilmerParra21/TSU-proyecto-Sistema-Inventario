<?php
// Crear Reporte de Categoria

require('fpdf/fpdf.php');

class PDF extends FPDF{

	// header de página

	function Header(){
		$this->SetFont('Arial','B',12);
		$this->Cell(60);
		$this->Cell(70, 10,'Reporte de Categoria',1, 0,'C');
		// salto de linea
		$this->Ln(20);
	
$this->Cell(32, 10, 'ID', 1, 0, 'C', 0);
$this->Cell(120, 10, 'Descripcion del Producto', 1, 0, 'C', 0);
$this->Cell(32, 10, utf8_decode('Año'), 1, 1, 'C', 0);

	}

	// footer de página
	function Footer(){
$this->SetY(-15);
$this->SetFont('Arial','I',10);
$this->Cell(0, 10, utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
	}
}

require('conexpdf.php');

$consulta = "SELECT * FROM categoria";

// se trasmite la consulta
$resultado = $mysqli->query($consulta);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);

while($datos = $resultado->fetch_assoc()){

$pdf->Cell(32, 10, $datos['idCategoria'], 1, 0, 'C', 0);
$pdf->Cell(120, 10, $datos['nombreProd'], 1, 0, 'C', 0);
$pdf->Cell(32, 10, $datos[utf8_decode('año')], 1, 1, 'C', 0);


	}

	$pdf->Output();
?>