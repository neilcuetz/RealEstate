<?php
include "../connection/connection.php";
header("Content-type: application/PDF");
$id = $_GET['idd'];

	$q  =  $db->query("SELECT * FROM crf where col_ID = ".$id);
	while($r = $q->fetch(PDO::FETCH_ASSOC)){ 
     	$last 				= $r['col_ln'];
     	$first 				= $r['col_fn'];
     	$middle 			= $r['col_mi'];
      	$civilstatus		= $r['col_civilstat'];
      	$sex 			 	= $r['col_gender'];
      	$dob 				= $r['col_bday'];      	      
   	}		
   			require "../fpdf/fpdf.php";
			$pdf = new FPDF();
			$pdf -> addPage();
			$pdf -> Image('img/dmci-homes-logo.png',10,6,30);
			$pdf -> Cell(120,0,'',0,0,'L');
			$pdf -> SetFont('Arial','I',18);
			$pdf -> SetFillColor(35,75,208);
			$pdf -> SetTextColor(255,255,255);
			$pdf -> Cell(80,10,'Client Registration Form',0,0,'R',true);

			$pdf -> SetFont('Times','B',13);
			$pdf -> Ln(20);
			$pdf -> SetTextColor(50,100,200);
			$pdf -> Cell(0,0,'CLIENT / REPRESENTATIVE PERSONAL DATA',0,0,'L');

			$pdf -> SetFont('Times','B',10);
			$pdf -> SetTextColor(0,0,0);
			$pdf -> Ln(3);  
			$pdf -> Cell(20,10,"",0,0,'C');
			$pdf -> Cell(50,10,"Last Name",0,0,'C');
			$pdf -> Cell(50,10,"First Name",0,0,'C');
			$pdf -> Cell(50,10,"Middle Name",0,0,'C');

			$pdf -> Ln(10);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(35,0,"Client's  Name:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(50,0,$last."                                                                     " ,0,0,'L');
			$pdf -> Cell(50,0,$first,0,0,'L');
			$pdf -> Cell(50,0,$middle,0,0,'L');
			$pdf -> Ln(10);

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(27,0,"Civil Status:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(30,0,$civilstatus,0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(10,0,"Sex:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,$sex,0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(27,0,"Citizenship:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"Filipino",0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(20,0,"Birthday:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,$dob,0,0,'L');

			$pdf -> SetFont('Times','B',10);
			$pdf -> SetTextColor(0,0,0);
			$pdf -> Ln(3);  
			$pdf -> Cell(20,10,"",0,0,'C');
			$pdf -> Cell(1,10,"(If Married)",0,0,'C');
			$pdf -> Cell(50,10,"Last Name",0,0,'C');
			$pdf -> Cell(47,10,"First Name",0,0,'C');
			$pdf -> Cell(50,10,"Middle Name",0,0,'C');
			$pdf -> Ln(10);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(35,0,"Spouse's  Name:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12);  
			$pdf -> Cell(50,0,"WALANG                                                                                                  " ,0,0,'L');
			$pdf -> Cell(47	,0,"FOREVER",0,0,'L');
			$pdf -> Cell(50,0,":C",0,0,'L');

			$pdf -> Ln(10);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(20,0,"Birthday:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"TBD",0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(55,0,"Current Home Ownership:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"TBD",0,0,'L');

			$pdf -> Ln(10);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(20,0,"Landline:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"-------",0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(16,0,"Mobile:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"-----------",0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(35,0,"Email(Personal):",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"-----------",0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Ln(10);
			$pdf -> SetTextColor(50,100,200);
			$pdf -> Cell(0,0,'WORK INFORMATION DATA',0,0,'L');


			$pdf -> Ln(10);
			$pdf -> SetTextColor(0,0,0);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(32,0,"Business Name:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(45,0,"-------------------------------",0,0,'L');

			$pdf -> SetTextColor(0,0,0);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(18,0,"Position:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(45,0,"-------------------------------",0,0,'L');


			$pdf -> SetTextColor(0,0,0);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(30,0,"Phone(Office):",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"----------",0,0,'L');

			$pdf -> Ln(5);
			$pdf -> SetFont('Times','B',10);
			$pdf -> Cell(25,10,"",0,0,'C');
			$pdf -> Cell(25,10,"NO.",0,0,'C');
			$pdf -> Cell(47,10,"STREET NAME",0,0,'C');
			$pdf -> Cell(42,10,"CITY / TOWN",0,0,'C');
			$pdf -> Cell(50,10,"COUNTRY",0,0,'C');

			$pdf -> Ln(10);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(32,0,"Office Address:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12);  
			$pdf -> Cell(27,0,"TBD                                                                                                                  " ,0,0,'L');
			$pdf -> Cell(47,0,"TBD",0,0,'L');
			$pdf -> Cell(49,0,"TBD",0,0,'L');
			$pdf -> Cell(50,0,"TBD",0,0,'L');

			$pdf -> Ln(10);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(40,0,"Reason for Buying:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"----------",0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(26,0,"Price Range:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"----------",0,0,'L');

			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(37,0,"Desired Property:",0,0,'L');
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"----------",0,0,'L');

			$pdf -> Ln(10);
			$pdf -> SetFont('Times','B',13);
			$pdf -> SetTextColor(50,100,200);
			$pdf -> Cell(0,0,'SOURCE OF AWARENESS',0,0,'L');

			$pdf -> Ln(5);
			$pdf -> SetTextColor(0,0,0);
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"Agent/Broker |");


			$pdf -> Ln(10);
			$pdf -> SetTextColor(0,0,0);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(30,0,"Sales Division:");
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(20,0,"E-Broker",0,0,'L');

			$pdf -> Ln(10);
			$pdf -> SetTextColor(0,0,0);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(35,0,"Project Inquired:");
			$pdf -> SetFont('Arial','I',12); 
			$pdf -> Cell(50,0,"a.___________________",0,0,'L');
			$pdf -> Cell(50,0,"b.___________________",0,0,'L');
			$pdf -> Cell(50,0,"c.___________________",0,0,'L');

			$pdf -> Ln(6);
			$pdf -> Cell(0,0,"                ",1,1,'R');

			$pdf -> Ln(5);
			$pdf -> SetTextColor(0,0,0);
			$pdf -> SetFont('Times','B',13);
			$pdf -> Cell(160,0,"Date & Time:",0,0,"R");
			$pdf -> SetFont('Arial','IU',12); 
			$pdf -> Cell(0,0,"                       ",0,0,'R');
		
			$pdf -> Output('D',$first.".pdf");
		
?>
