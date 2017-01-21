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
$pdf->SetHeaderData("petit-logo.png",60,'        Bon Commande Fournisseur ');

$html = "<p>Hello world</p>";
$pdf->writeHTML($html);

//$pdf->SetHeaderData('entete.jpg', 60);

foreach ($reqfournisseur as $k=>$var_ligne) {
    $Ref=$reqfournisseur['Commfournisseur']['Ref'];
}
$aaa = $Ref;
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
$pdf->SetFont('times', 'B', 60);

// add a page
$pdf->AddPage();

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', 'A', 12);
$tbl = <<<EOF



EOF;
//debug($reqfournisseur);die;
foreach ($reqfournisseur as $k=>$var_ligne) {  
  //  debug($var_ligne);die;
              $four=$reqfournisseur['Fournisseur']['raison_social'];  
              if($reqfournisseur['Commfournisseur']['Date']=='1970-01-01')
              { $date="";}
              else {
              $date=date("d/m/Y",strtotime(str_replace('-','/',$reqfournisseur['Commfournisseur']['Date'])));
              }
              $num=$reqfournisseur['Commfournisseur']['Numero']; 
              
              $fax=$reqfournisseur['Fournisseur']['fax'];
              $tel=$reqfournisseur['Fournisseur']['tel'];
              $mail=$reqfournisseur['Fournisseur']['mail'];
              $adr=$reqfournisseur['Commfournisseur']['Adr_liv'];
              $type=$reqfournisseur['Commfournisseur']['Type'];
              $date_liv=date("d/m/Y",strtotime(str_replace('-','/',$reqfournisseur['Commfournisseur']['Date_liv'])));
} 
$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 96%" >
    <thead>
     <tr>
        <td width="60%" align="left" height="30px" ><strong>Nom du Fournisseur  :  $four</strong></td> 
        <td width="40%" align="left"  ><strong>Numéro  :  $num</strong></td> 
    </tr> 
     <tr>
        <td width="60%" align="left" height="30px" ><strong>Fax : $fax </strong></td> 
        <td width="40%" align="left" height="30px" ><strong>Date Commande :  $date</strong></td>
    </tr> 
    
   <tr>
        <td width="60%" align="left" height="30px" ><strong>Telephone : $tel</strong></td> 
        <td width="40%" align="left" height="30px" ><strong>A Livrer avant :  $date_liv</strong></td>
   </tr> 
   <tr>
        <td width="60%" align="left" height="30px" ><strong>E-mail : $mail</strong></td> 
   </tr>
   <tr>
        <td width="60%" align="left" height="30px" ><strong>Livraison Partielle/Totale: $type</strong></td> 
   </tr>
     
    <tr>
        <td align="center" style="width: 55%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Matières premières</strong></td>
        <td align="center" style="width: 15%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Quantite</strong></td> 
        <td align="center" style="width: 15%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Prix UHT</strong></td>
        <td align="center" style="width: 15%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Total HT</strong></td> 
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
              $h=450;
          foreach ($lignes as $k=>$lignestock){
              $h=$h-25;
              //debug($lignestock['Lignecommfournisseur']);die;
              $code=$lignestock['Mpfournisseur']['Matierepremiere']['nom2'];   
              $qte=$lignestock['Lignecommfournisseur']['Qte'];
              //$qte2=number_format($qte,3); 
              
              $prix=$lignestock['Lignecommfournisseur']['Prix'];
              $ht=$lignestock['Lignecommfournisseur']['Total_HT'];
               
               
              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr> 
        <td align="center" height="25px" style="width: 55%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$code</td>
        <td align="center" height="25px" style="width: 15%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$qte</td>
        <td align="center" height="25px" style="width: 15%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$prix</td>
        <td align="center" height="25px" style="width: 15%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$ht</td>   
    </tr> 
  
EOF;

 
          }
     //debug($h);die;
     $tbl.='
         
     <tr>
        <td align="center" height="'.$h.'px" style="width: 55%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"></td>
        <td align="center" height="'.$h.'px" style="width: 15%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"></td>
        <td align="center" height="'.$h.'px" style="width: 15%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"></td>
        <td align="center" height="'.$h.'px" style="width: 15%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"></td>   
        
     </tr>




      <tr> 
        <td align="center" height="100px" style="width: 55%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Adresse Livraison : </strong><br>'.$adr.'</td>
        <td align="center" height="100px" style="width: 45%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Signature du Demandeur</strong></td>
      </tr> 
      <tr>
        <td></td>
        <td align="center" height="100px" style="width: 45%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Signature du Responsable</strong></td>
      </tr>';
          
//      $tttc=$ttht+$tttva+$timbre;
$tbl = $tbl . <<<EOF
  
            
 </table>
EOF;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('Commande_interne.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>