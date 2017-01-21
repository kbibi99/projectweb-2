<?php
//App::import('Vendor','tcpdf/tcpdf'); 
App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();

/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kinda');
$pdf->SetTitle('commande');

// set default header data
$entete=$boncommande['Marque']['entete'];
$pdf->SetHeaderData($entete,60,'Bon commande Numéro :'.$boncommande['Boncommande']['Numero']);

$html = "<p>Hello world</p>";
$pdf->writeHTML($html);

//$pdf->SetHeaderData('entete.jpg', 60);


$aaa = "Kinda";
$pdf->xfootertext =$aaa;
//$pdf->xfootertext1 = $footer1;
//$pdf->xfootertext2 = $footer2;

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
// set font
$pdf->SetFont('times', 'B', 16);

// add a page
$pdf->AddPage();

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', 'A', 10);
$tbl = <<<EOF

<br/><br/>

EOF;
//debug($boncommande['Boncommande']);die;
foreach ($boncommande as $k=>$bc) {  
    
              $cli=$boncommande['Client']['Raison_Social'];  
              $dat=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date']))); 
              $datliv=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date_Livraison'])));
              $adr=$boncommande['Ligneclient']['adresse'];  
              $tel=$boncommande['Client']['Tel'];   
              $fax=$boncommande['Client']['Fax'];
}

$tbl = $tbl . <<<EOF
<table cellpadding="0" cellspacing="0"  style="width: 100%" >
    <thead>
     <tr>
        <td align="left" colspan="2"><strong>Client : $cli</strong></td>
        <td align="left" ><strong>Date commande : $dat</strong></td>
    </tr>
    <tr>
        <td align="left" colspan="2"><strong>Adresse : $adr</strong></td>
        <td align="left"><strong>Date livraison : $datliv</strong></td> 
        
    </tr> 
    <tr>
        <td align="left" colspan="2"><strong>Tel : $tel</strong></td>
        <td align="left"><strong>Fax : $fax</strong></td> 
        
    </tr> 
    <tr  > 
        <td height="30"></td>
        <td height="30"></td>  
    </tr> 
    <tr>
    <td align="center" style="width: 30%;">Famille</td>
    <td align="center" style="width: 15%;">Qte_Dem</td>
    <td align="center" style="width: 15%;">Qte_Liv</td>
    <td align="center" style="width: 40%;">Observation</td>
   </tr>
    </thead>
EOF;
$long="670";
          foreach ($boncommande['Lignecommande'] as $k=>$lignecommande){ 
              $fam=$lignecommande['Famille']['name'];  
              $qte=$lignecommande['Qte'];
               $observation=$lignecommande['observation'];
              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr  > 
        <td height="110px" align="center"  style="width: 30%;">$fam</td>
        <td height="110px" align="center"  style="width: 15%;">$qte</td> 
        <td height="110px" align="right"   style="width: 15%;"></td>  
        <td height="110px" align="left"    style="width: 40%;">$observation</td>  
    </tr> 
  
EOF;
}
       
$tbl = $tbl . <<<EOF
  
 </table>
EOF;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>