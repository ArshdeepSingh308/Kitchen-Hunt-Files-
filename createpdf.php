<?php
	if(isset($_POST['name']))
	{
		$data1=$_POST['name'];
		$data2=$_POST['phonenumber'];
		$data3=$_POST['email'];
		$data4=$_POST['seats'];
		$data5=$_POST['date'];
		$data6=$_POST['arr'];
		
		$xml=simplexml_load_file("booking.xml");
		$details=$xml->addChild("bookinginsert");
		$details->addChild("name",$data1);
		$details->addChild("phonenumber",$data2);
		$details->addChild("email",$data3);
		$details->addChild("seats",$data4);
		$details->addChild("date",$data4);
		$details->addChild("arr",$data6);
				
		$xml->asXML("booking.xml");
		
	
		require("fpdf/fpdf.php");
		$pdf=new FPDF();
		$pdf->AddPage();
		
		$pdf->Image("kh.jpg",160,80,50,50);
		
		$pdf->SetFont("Arial","B","20");
		$pdf->Cell(0,10,"Booking Confirmation",1,1,"C");
		
		$pdf->SetFont("Arial","I","15");
		$pdf->Cell(0,10,"**Carry this copy with you on the day of reservation.**",1,1,"C");

		$pdf->SetFont("Arial","B","10");
		
		$pdf->Cell(95,10,"Name:",1,0);
		$pdf->Cell(95,10,$data1,1,1);

		$pdf->Cell(95,10,"Phone Number:",1,0);
		$pdf->Cell(95,10,$data2,1,1);

		$pdf->Cell(95,10,"Email:",1,0);
		$pdf->Cell(95,10,$data3,1,1);

		$pdf->Cell(95,10,"Number of Seats:",1,0);
		$pdf->Cell(95,10,$data4,1,1);

		$pdf->Cell(95,10,"Date:",1,0);
		$pdf->Cell(95,10,$data5,1,1);
		
		$pdf->Cell(95,10,"Place:",1,0);
		$pdf->Cell(95,10,$data6,1,1);
		
		$pdf->write(5,"This is a computer generated confirmation. Authorized Signatory : ");
		
		$pdf->Output();
	}
	else
	{
		header("location: login.php");
	}
?>