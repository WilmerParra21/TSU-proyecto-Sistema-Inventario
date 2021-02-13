<?php
// Crear Reporte de Proveedor

require('fpdf/fpdf.php');

class PDF extends FPDF{

	// header de página

	function Header(){
		$this->SetFont('Arial','B',12);
		$this->Cell(60);
		$this->Cell(70, 10,'Reporte de Proveedores',1, 0,'C');
		// salto de linea
		$this->Ln(20);
	
$this->Cell(15, 10, 'ID', 1, 0, 'C', 0);
$this->Cell(30, 10, 'Nombre', 1, 0, 'C', 0);
$this->Cell(30, 10, 'Apellido', 1, 0, 'C', 0);
$this->Cell(36, 10, 'Direccion', 1, 0, 'C', 0);
$this->Cell(30, 10, 'Telefono', 1, 0, 'C', 0);
$this->Cell(25, 10, 'Ciudad', 1, 0, 'C', 0);
$this->Cell(25, 10, 'ID-Producto', 1, 1, 'C', 0);

	}

	// footer de página
	function Footer(){
$this->SetY(-15);
$this->SetFont('Arial','I',10);
$this->Cell(0, 10, utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
	}
}

require('conexpdf.php');

$consulta = "SELECT * FROM proveedor";

// se trasmite la consulta
$resultado = $mysqli->query($consulta);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);

while($datos = $resultado->fetch_assoc()){

$pdf->Cell(15, 10, $datos['id_proveedor'], 1, 0, 'C', 0);
$pdf->Cell(30, 10, $datos['nombre'], 1, 0, 'C', 0);
$pdf->Cell(30, 10, $datos['apellido'], 1, 0, 'C', 0);
$pdf->Cell(36, 10, $datos['direccion'], 1, 0, 'C', 0);
$pdf->Cell(30, 10, $datos['telefono'], 1, 0, 'C', 0);
$pdf->Cell(25, 10, $datos['ciudad_prove'], 1, 0, 'C', 0);
$pdf->Cell(25, 10, $datos['id_Producto'], 1, 1, 'C', 0);
	}

	$pdf->Output();
?>