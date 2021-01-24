<?php
// Crear Reporte de Productos

require('fpdf/fpdf.php');

class PDF extends FPDF{

	// header de página

	function Header(){
		$this->SetFont('Arial','B',12);
		$this->Cell(60);
		$this->Cell(70, 10,'Reporte de Productos',1, 0,'C');
		// salto de linea
		$this->Ln(20);
	
$this->Cell(15, 10, 'ID', 1, 0, 'C', 0);
$this->Cell(35, 10, 'Nombre', 1, 0, 'C', 0);
$this->Cell(20, 10, 'Precio', 1, 0, 'C', 0);
$this->Cell(15, 10, 'Iva', 1, 0, 'C', 0);
$this->Cell(23, 10, 'StockMax', 1, 0, 'C', 0);
$this->Cell(23, 10, 'StockMin', 1, 0, 'C', 0);
$this->Cell(28, 10, 'ID-Categoria', 1, 0, 'C', 0);
$this->Cell(30, 10, 'Marca', 1, 1, 'C', 0);
	}

	// footer de página
	function Footer(){
$this->SetY(-15);
$this->SetFont('Arial','I',10);
$this->Cell(0, 10, utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
	}
}

require('conexpdf.php');

$consulta = "SELECT * FROM producto";

// se trasmite la consulta
$resultado = $mysqli->query($consulta);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);

while($datos = $resultado->fetch_assoc()){

$pdf->Cell(15, 10, $datos['id_Producto'], 1, 0, 'C', 0);
$pdf->Cell(35, 10, $datos['nombreProd'], 1, 0, 'C', 0);
$pdf->Cell(20, 10, $datos['precioProd'], 1, 0, 'C', 0);
$pdf->Cell(15, 10, $datos['iva'], 1, 0, 'C', 0);
$pdf->Cell(23, 10, $datos['stockMax'], 1, 0, 'C', 0);
$pdf->Cell(23, 10, $datos['stockMin'], 1, 0, 'C', 0);
$pdf->Cell(28, 10, $datos['idCategoria'], 1, 0, 'C', 0);
$pdf->Cell(30, 10, $datos['marca'], 1, 1, 'C', 0);
	}

	$pdf->Output();
?>