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
$pdf->SetHeaderData("petit-logo.png", 50,'        Tableau des Traites ');

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
$pdf->SetFont('times', 'B', 14);
$pdf->SetFont('times', 'A',  12);

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$tbl = <<<EOF

<br/><br/>

EOF;
//debug($matselects); die;
if($fournisseur_id==""){
    $fournisseur_id="tous";
}else {
    $fournisseur_id=$fournisseurs[$fournisseur_id];
}
if($situation_id==""){
    $situation_id="tous";
}else {
    $situation_id=$situations[$situation_id];
}
//debug($le_mat); die;
//debug($boncommande['Boncommande']);die;
//foreach ($boncommande as $k=>$bc) {  
//    

if($date1) $date1=date("d/m/Y",strtotime(str_replace('-','/',$date1))); 
if($date2) $date2=date("d/m/Y",strtotime(str_replace('-','/',$date2)));
if($datea) $datea=date("d/m/Y",strtotime(str_replace('-','/',$datea))); 
if($dateb) $dateb=date("d/m/Y",strtotime(str_replace('-','/',$dateb)));

$nb=0;
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="En attente"){
          $nb++;  
        }
    }
if((($situation_id=="En attente")||($situation_id=="tous"))&&($nb)){
// add a page
$pdf->AddPage(); 


$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 96%" >
    <thead>
     <tr>
        <td align="left" colspan="3"><strong>Date Remise : $date1</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $date2</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Echeance de : $datea</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $dateb</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Fournisseur : $fournisseur_id</strong></td>
        <td align="left" colspan="3"><strong>Situation : $situation_id</strong></td>
    </tr> 
    <tr> 
        <td colspan="6" height="30"></td> 
    </tr> 
    <tr> 
        <td colspan="6" height="20" align="center"><h2><strong>En Attente</strong></h2></td> 
    </tr> 
    <tr> 
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Fournisseur</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Num pièce</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Date Remise</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Echéance</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Montant</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Banque</td> 
   </tr>  
    </thead>
EOF;
      $mnt=0;                       
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="En attente"){
    $four=$mppiecereglement['Fournisseur']['raison_social'];
    $pi=$mppiecereglement['Mppiecereglement']['num_piece'];
    $date=$mppiecereglement['Mppiecereglement']['date'];
    $date=date("d/m/Y",strtotime(str_replace('-','/',$date))); 
    $echance=$mppiecereglement['Mppiecereglement']['echance'];
    $echance=date("d/m/Y",strtotime(str_replace('-','/',$echance))); 
    $montant=$mppiecereglement['Mppiecereglement']['montant'];
    $montant2=number_format($montant,3);
    $banque=$mppiecereglement['Banque']['Designation'];
    $sit=$mppiecereglement['Mppiecereglement']['situation'];  
    $mnt=$mnt+$montant;
                                           
              $long=$long- 16;
$tbl = $tbl . <<<EOF


    <tr  >  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$four</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$pi</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$date</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$echance</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$montant2</td>  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$banque</td>   
    </tr> 
  
EOF;
    }}
            
    $mnt2=number_format($mnt,3);
$tbl = $tbl . <<<EOF
  
        <tfoot>
    <tr> 
<td colspan="2" style="width: 64%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">TOTAL</td>
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$mnt2</td>  
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>   
    </tr> 
        </tfoot>     
 </table>
EOF;


$pdf->writeHTML($tbl, true, false, false, false, '');
}

$nb=0;
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="Paye"){
          $nb++;  
        }
    }
if((($situation_id=="Paye")||($situation_id=="tous"))&&($nb)){ 
$pdf->AddPage();


$tbl2 = $tbl2 . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 96%" >
    <thead>
     <tr>
        <td align="left" colspan="3"><strong>Date Remise : $date1</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $date2</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Echeance de : $datea</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $dateb</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Fournisseur : $fournisseur_id</strong></td>
        <td align="left" colspan="3"><strong>Situation : $situation_id</strong></td>
    </tr> 
    <tr> 
        <td colspan="7" height="30"></td> 
    </tr> 
    <tr> 
        <td colspan="6" height="20" align="center"><h2><strong>Payé</strong></h2></td> 
    </tr> 
    <tr> 
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Fournisseur</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Num pièce</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Date Remise</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Echéance</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Montant</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Banque</td> 
   </tr>  
    </thead>
EOF;
      $mnt=0;                       
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="Paye"){
    $four=$mppiecereglement['Fournisseur']['raison_social'];
    $pi=$mppiecereglement['Mppiecereglement']['num_piece'];
    $date=$mppiecereglement['Mppiecereglement']['date'];
    $date=date("d/m/Y",strtotime(str_replace('-','/',$date))); 
    $echance=$mppiecereglement['Mppiecereglement']['echance'];
    $echance=date("d/m/Y",strtotime(str_replace('-','/',$echance))); 
    $montant=$mppiecereglement['Mppiecereglement']['montant'];
    $montant2=number_format($montant,3);
    $banque=$mppiecereglement['Banque']['Designation'];
    $sit=$mppiecereglement['Mppiecereglement']['situation'];  
    $mnt=$mnt+$montant;
                                           
              $long=$long- 16;
$tbl2 = $tbl2 . <<<EOF


    <tr  >  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$four</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$pi</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$date</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$echance</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$montant2</td>  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$banque</td>   
    </tr> 
  
EOF;
    }}
            
    $mnt2=number_format($mnt,3);
$tbl2 = $tbl2 . <<<EOF
  
        <tfoot>
    <tr> 
<td colspan="2" style="width: 64%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">TOTAL</td>
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$mnt2</td>  
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>   
    </tr> 
        </tfoot>     
 </table>
EOF;

$pdf->writeHTML($tbl2, true, false, false, false, '');
}


$nb=0;
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="Preavis"){
          $nb++;  
        }
    }
if((($situation_id=="Preavis")||($situation_id=="tous"))&&($nb)){ 
$pdf->AddPage(); 

$tbl3 = $tbl3 . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 96%" >
    <thead>
     <tr>
        <td align="left" colspan="3"><strong>Date Remise : $date1</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $date2</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Echeance de : $datea</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $dateb</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Fournisseur : $fournisseur_id</strong></td>
        <td align="left" colspan="3"><strong>Situation : $situation_id</strong></td>
    </tr> 
    <tr> 
        <td colspan="7" height="30"></td> 
    </tr> 
    <tr> 
        <td colspan="6" height="20" align="center"><h2><strong>Préavis</strong></h2></td> 
    </tr> 
    <tr> 
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Fournisseur</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Num pièce</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Date Remise</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Echéance</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Montant</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Banque</td> 
   </tr>  
    </thead>
EOF;
      $mnt=0;                       
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="Preavis"){
    $four=$mppiecereglement['Fournisseur']['raison_social'];
    $pi=$mppiecereglement['Mppiecereglement']['num_piece'];
    $date=$mppiecereglement['Mppiecereglement']['date'];
    $date=date("d/m/Y",strtotime(str_replace('-','/',$date))); 
    $echance=$mppiecereglement['Mppiecereglement']['echance'];
    $echance=date("d/m/Y",strtotime(str_replace('-','/',$echance))); 
    $montant=$mppiecereglement['Mppiecereglement']['montant'];
    $montant2=number_format($montant,3);
    $banque=$mppiecereglement['Banque']['Designation'];
    $sit=$mppiecereglement['Mppiecereglement']['situation'];  
    $mnt=$mnt+$montant;
                                           
              $long=$long- 16;
$tbl3 = $tbl3 . <<<EOF


    <tr  >  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$four</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$pi</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$date</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$echance</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$montant2</td>  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$banque</td>   
    </tr> 
  
EOF;
    }}
            
    $mnt2=number_format($mnt,3);
$tbl3 = $tbl3 . <<<EOF
  
        <tfoot>
    <tr> 
<td colspan="2" style="width: 64%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">TOTAL</td>
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$mnt2</td>  
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>   
    </tr> 
        </tfoot>     
 </table>
EOF;

$pdf->writeHTML($tbl3, true, false, false, false, '');
}

$nb=0;
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="Impaye"){
          $nb++;  
        }
    }
if((($situation_id=="Impaye")||($situation_id=="tous"))&&($nb)){ 
$pdf->AddPage(); 
 

$tbl4 = $tbl4 . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 96%" >
    <thead>
     <tr>
        <td align="left" colspan="3"><strong>Date Remise : $date1</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $date2</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Echeance de : $datea</strong></td>
        <td align="left" colspan="3"><strong>Jusqu'à : $dateb</strong></td>
    </tr> 
     <tr>
        <td align="left" colspan="3"><strong>Fournisseur : $fournisseur_id</strong></td>
        <td align="left" colspan="3"><strong>Situation : $situation_id</strong></td>
    </tr> 
    <tr> 
        <td colspan="7" height="30"></td> 
    </tr> 
    <tr> 
        <td colspan="6" height="20" align="center"><h2><strong>Impayé</strong></h2></td> 
    </tr> 
    <tr> 
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Fournisseur</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Num pièce</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Date Remise</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Echéance</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Montant</td>
    <td align="center" style="width:  16%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">Banque</td> 
   </tr>  
    </thead>
EOF;
      $mnt=0;                       
    foreach ($mppiecereglements as $mppiecereglement ) {
        if($mppiecereglement['Mppiecereglement']['situation']=="Impaye"){
    $four=$mppiecereglement['Fournisseur']['raison_social'];
    $pi=$mppiecereglement['Mppiecereglement']['num_piece'];
    $date=$mppiecereglement['Mppiecereglement']['date'];
    $date=date("d/m/Y",strtotime(str_replace('-','/',$date))); 
    $echance=$mppiecereglement['Mppiecereglement']['echance'];
    $echance=date("d/m/Y",strtotime(str_replace('-','/',$echance))); 
    $montant=$mppiecereglement['Mppiecereglement']['montant'];
    $montant2=number_format($montant,3);
    $banque=$mppiecereglement['Banque']['Designation'];
    $sit=$mppiecereglement['Mppiecereglement']['situation'];  
    $mnt=$mnt+$montant;
                                           
              $long=$long- 16;
$tbl4 = $tbl4 . <<<EOF


    <tr  >  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$four</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$pi</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$date</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$echance</td>  
        <td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$montant2</td>  
        <td align="left" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$banque</td>   
    </tr> 
  
EOF;
    }}
            
    $mnt2=number_format($mnt,3);
$tbl4 = $tbl4 . <<<EOF
  
        <tfoot>
    <tr> 
<td colspan="2" style="width: 64%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">TOTAL</td>
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;">$mnt2</td>  
<td align="right" style="width:  16%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>   
    </tr> 
        </tfoot>     
 </table>
EOF;

$pdf->writeHTML($tbl4, true, false, false, false, '');
}
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>