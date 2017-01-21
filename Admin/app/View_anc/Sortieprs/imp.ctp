<?php

//App::import('Vendor','tcpdf/tcpdf'); 
App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();

/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kinda');
$pdf->SetTitle('Etat');

// set default header data
 $entete= $this->webroot."petit-logo.png";
$pdf->SetHeaderData("petit-logo.png",50,'        Sortie Pièces de rechange ');

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
//debug($lignes) ; die;
//debug($sortiepr);die;
foreach ($sortiepr as $k=>$var_ligne) {  
     
              $date=date("d/m/Y",strtotime(str_replace('-','/',$sortiepr['Sortiepr']['date'])));  
              $num=$sortiepr['Sortiepr']['numero'];  
              $dep=$sortiepr['Deposit']['nom'];  
} 
$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 99%" >
    <thead>
     <tr>
        <td align="left" ><strong>Numéro  :  $num</strong></td> 
        <td align="left" ><strong>Dépôt  :  $dep</strong></td>
    </tr> 
     <tr>
        <td align="left" ><strong></strong></td> 
        <td align="left"><strong>Date  :  $date</strong></td>
    </tr> 
    <tr> 
        <td colspan="3" height="30"></td> 
    </tr>  
    <tr>
    <td colspan="2" align="center" style="width: 66%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Pièces de rechange</td> 
    <td rowspan="2" align="center" style="width: 33%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Qte</td> 
   </tr> 
    <tr> 
    <td align="center" style="width: 33%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Référence</td>
    <td align="center" style="width: 33%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Désignation</td> 
   </tr>
    </thead>
EOF;
$long="380";
 $ttprix=0;  
                                        
          foreach ($lignes as $k=>$lignestock){ 
              $code=$lignestock['Matierepremiere']['code']; 
              $nom=$lignestock['Matierepremiere']['designation'];
              $qte=$lignestock['Ligneprsorti']['qte']; 
             if($lignestock['Ligneprsorti']['qte']!=0){  
              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr  > 
        <td style="width: 33%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$code</td> 
        <td style="width: 33%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$nom</td> 
        <td align="right" style="width: 33%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$qte</td>   
    </tr> 
  
EOF;
          }
          
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