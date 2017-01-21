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
$pdf->SetHeaderData("petit-logo.png",60,'        Entrée Matières Premières ');

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
//$pdf->SetFont('times', 'B', 16);

// add a page
$pdf->AddPage();

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', 'A', 12);
$tbl = <<<EOF

<br/><br/>

EOF;
//debug($entreemp);die;
foreach ($entreemp as $k=>$var_ligne) {  
    
              $four=$entreemp['Fournisseur']['raison_social'];  
              $date=date("d/m/Y",strtotime(str_replace('-','/',$entreemp['Entreemp']['date'])));  
              $num=$entreemp['Entreemp']['numero'];
              $Num_lot=$entreemp['Entreemp']['Num_lot'];
              $dep=$entreemp['Deposit']['nom'];  
} 
$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 96%" >
    <thead>
     <tr>
        <td align="left" ><strong>Fournisseur  :  $four</strong></td>
        <td align="left" ><strong>Date  :  $date</strong></td>
    </tr> 
     <tr>
        <td align="left" ><strong>Numéro  :  $num</strong></td>
        <td align="left" ><strong>Dépôt  :  $dep</strong></td>
    </tr> 
     
    <tr> 
        <td colspan="6" height="30"></td> 
    </tr> 
    <tr>
        <td colspan="2" align="center" style="width: 50%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Matières premières</strong></td>
        <td rowspan="2" align="center" style="width: 10%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Num° Lot</strong></td>
        <td rowspan="2" align="center" style="width: 10%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Colis</strong></td>
        <td rowspan="2" align="center" style="width: 10%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Qte</strong></td>
        <td rowspan="2" align="center" style="width: 10%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Prix</strong></td>
        <td rowspan="2" align="center" style="width: 10%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Prix Total</strong></td>
       </tr> 
    <tr> 
    <td align="center" style="width: 25%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Référence</strong></td>
    <td align="center" style="width: 25%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Désignation</strong></td> 
   </tr>
    </thead>
EOF;
$long="370";
 $ttprix=0;  
                                          
          foreach ($lignes as $k=>$lignestock){ 
              $code=$lignestock['Matierepremiere']['code']; 
              $nom=$lignestock['Matierepremiere']['designation'];  
              $colis=$lignestock['Lignempe']['colis'];
              $qte=$lignestock['Lignempe']['qte'];
              $Num_lot=$lignestock['Lignempe']['Num_lot'];
              $qte2=number_format($qte,3);
              $prix=$lignestock['Lignempe']['ttc'];
              $prix2=number_format($prix,3);
              $prixtt=$qte*$prix; 
              $prixtt2=number_format($prixtt,3);
             if(($lignestock['Lignempe']['colis']!=0)||($lignestock['Lignempe']['qte']!=0)){ 
              $ttprix+=$prixtt; 
              $ttprix2=number_format($ttprix,3);
              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr  > 
        <td style="width: 25%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$code</td>
        <td style="width: 25%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$nom</td>
        <td align="right" style="width: 10%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$Num_lot</td>  
        <td align="right" style="width: 10%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$colis</td>
        <td align="right" style="width: 10%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$qte2</td>  
        <td align="right" style="width: 10%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$prix2</td>  
        <td align="right" style="width: 10%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$prixtt2</td>
    </tr> 
  
EOF;
          }
          
          }
     
$tbl = $tbl . <<<EOF
  
        <tfoot>
    <tr> 
        <td colspan="4" align="right" style="width: 80%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>TOTAL:</strong></td>
 
        <td align="right" style="width: 20%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$ttprix2</strong></td>  
    </tr> 
        </tfoot>     
 </table>
EOF;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('entree mp '.$num, 'I');

//============================================================+
// END OF FILE
//============================================================+
?>