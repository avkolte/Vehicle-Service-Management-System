<?php

$con=mysqli_connect("localhost","root","","vsms");
if(isset($_POST['bill_submit'])){
    $aadharid=$_POST['aadharid'];
	$payamount=$_POST['payamount'];
	$tax=$_POST['tax'];

	}
require('fpdf.php');
$pdf=new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Invoice',0,1,'C');
$pdf->Cell(40,10,'Name:',0,0,'L');
$pdf->Cell(40,10,$aadharid,0,0,'L');

$pdf->Output();



?>