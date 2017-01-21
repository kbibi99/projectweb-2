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
$pdf->SetHeaderData("petit-logo.png",50,'           Bon Livraison fournisseur ');

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
//debug($reqfournisseur);die;
foreach ($reqfournisseur as $k=>$var_ligne) {  
    
              $four=$reqfournisseur['Fournisseur']['raison_social'];  
              if($reqfournisseur['Livfournisseur']['Date']=='1970-01-01')
                  $date="";
              else 
              $date=date("d/m/Y",strtotime(str_replace('-','/',$reqfournisseur['Livfournisseur']['Date'])));
               
              $num=$reqfournisseur['Livfournisseur']['Numero'];   
} 
$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 96%" >
    <thead>
     <tr>
        <td align="left" colspan="2"><strong>Fournisseur  :  $four</strong></td>
        <td></td>
        <td align="left" colspan="2"><strong>Numéro  :  $num</strong></td>
        <td></td>
    </tr> 
     <tr>
        <td align="left" colspan="2"><strong>Date  :  $date</strong></td>
        <td></td>
        <td align="left" colspan="2"></td>
        <td></td>
    </tr> 
    <tr> 
        <td colspan="6" height="30"></td> 
    </tr> 
    <tr>
    <td colspan="2" align="center" style="width: 16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Matières premières</td>
    <td   align="center" style="width: 16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Qte</td>
    <td   align="center" style="width: 16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Prix</td>
    <td   align="center" style="width: 16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">remise</td>
    <td   align="center" style="width: 16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">TVA </td>
    <td   align="center" style="width: 16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">THT </td>
   </tr>  
    </thead>
EOF;
$long="370";
 $ttprix=0;  
              $qte=0;
              $prix=0;
              $rem=0;
              $tva=0; 
              $ht=0;
              
//            $prixu=0;
//            $tht=0;
//            $ttva=0;
//            $ttht=0;
//            $tttva=0 ; 
//            $ttremise=0; 
//            $tttc=0;
//            $timbre=0;
 
              $gtva=$reqfournisseur['Livfournisseur']['Tva']; 
              $grem=$reqfournisseur['Livfournisseur']['Remise']; 
              $ght=$reqfournisseur['Livfournisseur']['Total_HT']; 
              $gtim=$reqfournisseur['Livfournisseur']['timbre']; 
              $gttc=$reqfournisseur['Livfournisseur']['Total_TTC']; 
              
          foreach ($lignes as $k=>$lignestock){ 
              $code=$lignestock['Mpfournisseur']['Matierepremiere']['nom2'];   
              $qte=$lignestock['Lignelivfournisseur']['Qte'];
              $qte2=number_format($qte,3);
              $prix=$lignestock['Lignelivfournisseur']['Prix'];
              $prix2=number_format($prix,3);
              $rem=$lignestock['Lignelivfournisseur']['Remise'];
              $rem2=number_format($rem,3);
              $tva=$lignestock['Lignelivfournisseur']['Tva']; 
              $ht=$lignestock['Lignelivfournisseur']['Total_HT'];
              $ht2=number_format($ht,3);
              
              
              
              
              
//              $prixu=$prix-$rem ;
//              
//              $tht=$prixu*$qte  ;
//              $tht2=number_format($tht,3);
//              
//              $ttva=$tht*$tva/100;
//              $ttva2=number_format($ttva,3);
//              
//              $ttht=$ttht+$tht  ;
//              $ttht2=number_format($ttht,3);
//              
//              $tttva=$tttva+$ttva ; 
//              $tttva2=number_format($tttva,3);
//              
//              $ttremise=$ttremise+$remise*$qte ;  
//              $ttremise2=number_format($ttremise,3);
              
               
              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr  > 
        <td style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$code</td>
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$qte2</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$prix2</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$rem2</td>
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$tva</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$ht2</td>
    </tr> 
  
EOF;

 
          }
//      $tttc=$ttht+$tttva+$timbre;
$tbl = $tbl . <<<EOF
  
        <tfoot>
    <tr> 
        <td colspan="3" style="width: 48%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>  
        <td colspan="2" style="width: 32%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">Total TVA</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$gtva</td>  
    </tr> 
    <tr> 
        <td colspan="3" style="width: 48%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>  
        <td colspan="2" style="width: 32%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">Total remise</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$grem</td>  
    </tr> 
    <tr> 
        <td colspan="3" style="width: 48%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>  
        <td colspan="2" style="width: 32%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">Total HT</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$ght</td>  
    </tr> 
    <tr> 
        <td colspan="3" style="width: 48%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>  
        <td colspan="2" style="width: 32%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">Timbre</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$gtim</td>  
    </tr> 
    <tr> 
        <td colspan="3" style="width: 48%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td> 
        <td colspan="2" style="width: 32%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">Total TTC</td>  
        <td align="right" style="width: 16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$gttc</td>  
    </tr> 
        </tfoot>     
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