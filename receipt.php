<?php
$con=mysqli_connect("localhost","root","","vsms");
if (isset($_POST['bill_submit']))
 {
    $aadharid=$_POST['aadharid']; 
 	$payamount=$_POST['payamount'];

	$tax=($payamount/100)*10;
	$paytotal=$payamount+$tax;
	$invoiceno=$_POST['invoiceno'];
$date=$_POST['date'];
$query="select * from customer natural join(vehicle natural join (service natural join payment)) where aadharid='$aadharid'";
$query1="update payment set payamount='$paytotal' where aadharid='$aadharid'";
	$result=mysqli_query($con,$query);
	$result1=mysqli_query($con,$query1);
				while($row=mysqli_fetch_array($result)){
			$fname=$row['fname'];
		$lname=$row['lname'];
		$aadharid=$row['aadharid'];
		$email=$row['email'];
		$contact=$row['contact'];
		$address=$row['address'];
		$vehicletype=$row['vehicletype'];
		$vehicleno=$row['vehicleno'];
		$servicetype=$row['servicetype'];
		$arrivaldate=$row['arrivaldate'];
	
require('fpdf.php');
$pdf=new FPDF();

$pdf->AddPage();

//set font to arial, bold, 14pt


//Cell(width , height , text , border , end line , [align] )


//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',20);
$pdf->Cell(0,10,'Invoice',0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(110,5,'',0,1);
$pdf->Cell(110,5,'',0,1);
$pdf->Cell(110,5,'',0,1);
$pdf->Cell(110,5,'',0,1);
$pdf->Cell(110,5,'',0,1);

$pdf->Cell(40 ,5,'Pune',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'412105',0,0);
$pdf->Cell(25 ,5,'Date:',0,0);
$pdf->Cell(34 ,5,$date,0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+12345678]',0,0);
$pdf->Cell(25 ,5,'Invoice No :',0,0);
$pdf->Cell(34 ,5,$invoiceno,0,1);//end of line

$pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,$aadharid,0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(12 ,5,$fname,0,0);
$pdf->Cell(90 ,5,$lname,0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(10 ,5,'',0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,5,'Email:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(90 ,5,$email,0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,5,'Adress:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(90 ,5,$address,0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,5,'Contact:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,5,$contact,0,1);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->Cell(110,5,'',0,1);
$pdf->Cell(110,5,'',0,1);

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(150 ,5,'Services',1,0);

$pdf->Cell(37 ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(150 ,5,$servicetype,1,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(30 ,5,$payamount,1,1,'R');//end of line
$pdf->Cell(140,5,'',0,0);
$pdf->Cell(10,5,'Tax',0,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(30 ,5,$tax,1,1,'R');



//summary
$pdf->Cell(132,5,'',0,0);
$pdf->Cell(18,5,'Subtotal',0,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(30 ,5,$paytotal,1,1,'R');//end of line

$pdf->Cell(132,5,'',0,1);
$pdf->Cell(132,5,'',0,1);
$pdf->Cell(132,5,'',0,1);
$pdf->Cell(132,5,'',0,1);
$pdf->Cell(132,5,'',0,1);
$pdf->Cell(170,5,'Signature',0,1,'R');
$pdf->Output();

}


}

?>