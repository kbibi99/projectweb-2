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
$pdf->SetHeaderData("petit-logo.png",50,'        Etat de stock du Pièces de rechange le '.date("d/m/Y"));

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

$pdf->AddPage();

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', 'A', 10);
$tbl = <<<EOF

<br/><br/>

EOF;
//if($le_depot==""){
//    $le_dep="tous";
//}else
//{
//    $le_dep=$le_depot;
//}
//
//if($le_mat==""){
//    $le_mat="tous";
//}else {
//    $le_mat=$stock['0']['Matierepremiere']['nom2'];
//}
//debug($boncommande['Boncommande']);die;
//foreach ($boncommande as $k=>$bc) {  
//    
//              $cli=$boncommande['Client']['Raison_Social'];  
//              $dat=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date']))); 
//              $datliv=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date_Livraison'])));
//              $adr=$boncommande['Ligneclient']['adresse'];  
//              $tel=$boncommande['Client']['Tel'];   
//              $fax=$boncommande['Client']['Fax'];
//}

$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 100%" >
    <tr>
        <td align="center" colspan="2" style="width: 55%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Pièces de rechange</td>
        <td align="center" style="width: 12%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Emplacement</td>
        <td align="center" style="width: 12%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Prix Achat</td>
        <td align="center" style="width: 9%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Qte</td>
        <td align="center" style="width: 12%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Total</td>
   </tr>
    
EOF;
$long="390";
 $ttcolis=0;
    $ttqte=0; 
    $ttprix=0;
    $hh=0;
             //debug($stock);die;                             
          foreach ($stock as $k=>$lignestock){
              $hh++;
               if($hh==38){
                   $tbl .='</table>';
                   $pdf->writeHTML($tbl, true, false, false, false, '');
                   $pdf->AddPage('P');
                   $hh=0;
                   $tbl ='
                   <table cellpadding="2" cellspacing="0" style="width: 100%" >
                        <tr>
                            <td align="center" colspan="2" style="width: 55%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Pièces de rechange</td>
                            <td align="center" style="width: 12%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Emplacement</td>
                            <td align="center" style="width: 12%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Prix Achat</td>
                            <td align="center" style="width: 9%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Qte</td>
                            <td align="center" style="width: 12%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Total</td>
                       </tr>';
               }
              
              
             
              
              
              
              $cod=$lignestock['Matierepremiere']['code']; 
              $desi=$lignestock['Matierepremiere']['designation'];
              $prixachat=$lignestock['Matierepremiere']['prixachat'];
              $colis=@$emplacements[$lignestock['Matierepremiere']['emplacement_id']];
               $qte=$lignestock[0]['sumqte'];
               $total=$prixachat*$qte;
               $ttprix+=$total;
             if($lignestock[0]['sumqte']!=0){  
       $ttqte+=$qte;
              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr  > 
        <td style="width: 20%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$cod</td>
        <td style="width: 35%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$desi</td>
        <td align="right" style="width: 12%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$colis</td>  
        <td align="right" style="width: 12%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$prixachat</td>
        <td align="right" style="width: 9%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$qte</td>
        <td align="right" style="width: 12%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$total</td>  
    </tr> 
  
EOF;
          }
          
          } 
$tbl = $tbl . <<<EOF
  
        <tfoot>
    <tr> 
        <td colspan="4" style="width: 79%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>TOTAL</strong></td> 
        <td align="right" style="width: 9%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$ttqte</strong></td> 
        <td align="right" style="width: 12%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$ttprix</strong></td>  
    </tr> 
        </tfoot>     
 </table>
EOF;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('etat_stock_pr.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>