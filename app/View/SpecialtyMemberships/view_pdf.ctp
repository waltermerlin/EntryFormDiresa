<?php 
App::import('Vendor','xtcpdf');  

$tcpdf = new XTCPDF(); 
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 

$tcpdf->SetAuthor("KBS Homes & Properties at http://kbs-properties.com"); 
$tcpdf->SetAutoPageBreak( false ); 
$tcpdf->setHeaderFont(array($textfont,'',20)); 
$tcpdf->xheadercolor = array(150,0,0); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = 'Copyright © %d Segunda Especialización.'; 

// add a page (required with recent versions of tcpdf) 
$tcpdf->AddPage(); 

// Now you position and print your page content 
// example:  
$tcpdf->SetTextColor(0, 0, 0); 
$tcpdf->SetFont($textfont,'B',12); 

$tcpdf->Cell(0,10, "Lista de Estudinates Inscritos", 0,1,'C',false, '', 0 ); 
$tcpdf->SetFont($textfont,'',12); 
$tcpdf->Cell(0,14, $specialty[0]['Modality']['name'] . " : " .  $specialty[0]['Specialty']['name'] ,0,1,'L'); 

$tcpdf->SetFillColor(190, 190, 190);
$tcpdf->SetFont($textfont,'B',10); 

$tcpdf->Cell(20,7, "Num" ,'LT',0,'C', 1); 
$tcpdf->Cell(120,7, "Nombres y Apellidos" ,'LT',0,'C', 1); 
$tcpdf->Cell(0,7, "DNI" ,'LTR',0,'C', 1); 

$tcpdf->Ln();

$tcpdf->SetFont($textfont,'',10); 

$i = 0;
foreach ($students as $student){	
	$tcpdf->Cell(20,7, $i= $i+1 ,'LRT',0,'C'); 
	$tcpdf->Cell(120,7, $student[0]['names'] ,'LRT',0,'L'); 
	$tcpdf->Cell(0,7, $student['Student']['document'] ,'LRT',0,'C'); 
	$tcpdf->Ln();
}

$tcpdf->Cell(array_sum($w), 0, '', 'T');


echo $tcpdf->Output('filename.pdf', 'I'); 

?>