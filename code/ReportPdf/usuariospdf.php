<?php
// Crear Reporte de Productos

require('fpdf/fpdf.php');

class PDF extends FPDF{

	// header de página

	function Header(){
		$this->SetFont('Arial','B',12);
		$this->Cell(60);
		$this->Cell(70, 10,'Reporte de Usuarios',1, 0,'C');
		// salto de linea
		$this->Ln(20);
	
$this->Cell(15, 10, 'ID', 1, 0, 'C', 0);

$this->Cell(60, 10, 'Nombre', 1, 0, 'C', 0);
$this->Cell(35, 10, 'Usuario', 1, 0, 'C', 0);
$this->Cell(50, 10, 'Correo', 1, 0, 'C', 0);
$this->Cell(30, 10, 'Acceso', 1, 1, 'C', 0);
	}

	// footer de página
	function Footer(){
$this->SetY(-15);
$this->SetFont('Arial','I',10);
$this->Cell(0, 10, utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
	}
}

require('conexpdf.php');

$consulta = "SELECT * FROM login";

// se trasmite la consulta
$resultado = $mysqli->query($consulta);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);

while($datos = $resultado->fetch_assoc()){

$pdf->Cell(15, 10, $datos['id'], 1, 0, 'C', 0);
$pdf->Cell(60, 10, $datos['nombre_ape'], 1, 0, 'C', 0);
$pdf->Cell(35, 10, $datos['nombre_usuario'], 1, 0, 'C', 0);
$pdf->Cell(50, 10, $datos['correo'], 1, 0, 'C', 0);
$pdf->Cell(30, 10, $datos['acceso'], 1, 1, 'C', 0);
	}

	$pdf->Output();
?>