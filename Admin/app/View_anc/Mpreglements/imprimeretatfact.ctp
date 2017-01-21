
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Logistic Office');
$pdf->SetTitle('Etat Facture');

// set default header data
//$date1 = explode('-', $date);
//$new_date = $date1[2] . '/' . $date1[1] . '/' . $date1[0];
$ent='entete.jpg'; 
$debut=$Date_debut;$fin=$Date_fin;

if($debut!="" && $fin!=""){
$Date_debut=date('d/m/Y', strtotime(str_replace('-', '/',$Date_debut)));
$Date_fin=date('d/m/Y', strtotime(str_replace('-', '/',$Date_fin)));
$m=' du  '.$Date_debut.' au  '.$Date_fin;
}
$pdf->SetHeaderData('BLUE.png', '70', '                     Etat BLs / FACT (sans ligne)    '.$m);
//$pdf->SetHeaderData('entete.jpg', 60);
$footer = 'Kinda';
//$footer1 = 'Fax: ' . $soc['Societe']['Fax'] . ' E-mail: ' . $soc['Societe']['Mail'] . ' ' . $soc['Societe']['Site'] . 'R.C: ' . $soc['Societe']['RC'] . '-Code T.V.A: ' . $soc['Societe']['Code_TVA'];

$aaa = "abc";
$pdf->xfootertext = $footer;
$pdf->xfootertext1 = '';
$pdf->xfootertext2 = '';

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
$pdf->SetFont('dejavusans', '', 11);
$pdf->AddPage('L');

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
        

        
        
// --------------------------------------------------------------------------
$zz='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
$tbl .= '
  
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
    <tr bgcolor="#FFFFFF" align="center">
        <th width="9%" align="center" $zz height="35px"><strong>Date</strong></th>
        <th width="9%" align="center" $zz ><strong>N° FACT</strong></th>
        <th width="9%" align="center" $zz ><strong>Montant</strong></th>
        <th width="9%" align="center" $zz ><strong>ESPECE</strong></th>
        <th width="32%" align="center" $zz ><strong>CHEQUE</strong></th>
        <th width="32%" align="center" $zz ><strong>TRAITE</strong></th>
     </tr>';

        $i=0;
        foreach ($mpreglements as $mpreglement){
            $i++;
            
                  $espece=0;$cheque=array();$traite=array();       
             foreach($mpreglement['Mpreglement']['Mppiecereglement'] as $j=>$pp){
                 if($pp['paiement_id']==1){
                    $espece=$espece+$pp['montant']; 
                 }
                 if($pp['paiement_id']==2){
                    $cheque[$j]['echeance']=date("d/m/Y", strtotime(str_replace('-', '/',$pp['echance']))); 
                    $cheque[$j]['num']=$pp['num_piece'];
                    $cheque[$j]['montant']=$pp['montant'];
                 }
                 if($pp['paiement_id']==3){
                    $traite[$j]['echeance']=date("d/m/Y", strtotime(str_replace('-', '/',$pp['echance']))); 
                    $traite[$j]['num']=$pp['num_piece'];
                    $traite[$j]['montant']=$pp['montant'];
                 }
             }
          
        //                ---------- Supp Decalage entre l en Tete et Le Tableau ------------
                    $i++;
                    if($i==5){
                        $tbl .='</table>';
                        
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('L'); 
                        $i=0;
            
            $tbl = '
                 
                  <br>  
                  <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                     <tr bgcolor="#FFFFFF" align="center">
                        <th width="9%" align="center" $zz height="35px" ><strong>Date</strong></th>
                        <th width="9%" align="center" $zz ><strong>N° FACT</strong></th>
                        <th width="9%" align="center" $zz ><strong>Montant</strong></th>
                        <th width="9%" align="center" $zz ><strong>ESPECE</strong></th>
                        <th width="32%" align="center" $zz ><strong>CHEQUE</strong></th>
                        <th width="32%" align="center" $zz ><strong>TRAITE</strong></th>
                     </tr>';
            }
                    
                        
//                 ---------- Supp Decalage entre l en Tete et Le Tableau ------------
         $date=date("d/m/Y", strtotime(str_replace('-', '/',$mpreglement['Facturefournisseur']['Date'])));
            
        $tbl .= 
            '<tr bgcolor="#FFFFFF" align="center">    
                <td width="9%" nobr="nobr" align="center" height="70px" $zz>'.$date.'</td>
                <td width="9%" nobr="nobr" align="center" height="70px" $zz>'.$mpreglement['Facturefournisseur']['Numero'].'</td>
                <td width="9%" nobr="nobr" align="center" height="70px" $zz>'.$mpreglement['Facturefournisseur']['Total_TTC'].'</td>
                <td width="9%" nobr="nobr" align="center"  $zz>'.sprintf("%.3f",$espece).'</td>
                    
                <td width="32%" nobr="nobr" align="center"  $zz>';
                 if(!empty($cheque)){ 
                            $tbl .= 
                            '<br><br>
                                &nbsp;<table border="1" align="center" cellpadding="2" cellspacing="0"  width="95%" class="table" nobr="true">
                                <thead><tr>
                                            <td align="center">ECHEANCE</td>
                                            <td align="center">NUM</td>
                                            <td align="center">MONTANT</td>
                                </tr></thead>';
                             foreach($cheque as $ch){
                             $tbl .=    '<tr>
                                            <td align="center"> '.$ch['echeance'].'</td>
                                            <td align="center"> '.$ch['num'].'</td>
                                            <td align="center"> '.$ch['montant'].'</td>
                                  </tr>';
                            } 
                            $tbl .='</table>'; 
                             }
                  $tbl .='
                </td>
                <td width="32%" nobr="nobr" align="center"  $zz>';
                     if(!empty($traite)){
                         
                     $tbl .='<br><br>
                    <table border="1" align="center" cellpadding="2" cellspacing="0"  width="95%" class="table" nobr="true" >
                        <thead><tr>
                                    <td align="center">ECHEANCE</td>
                                    <td align="center">NUM</td>
                                    <td align="center">MONTANT</td>
                        </tr></thead>';
                     
                    foreach($traite as $ch){
                        $tbl .='<tr>
                                    <td align="center"> '.$ch['echeance'].'</td>
                                    <td align="center"> '.$ch['num'].'</td>
                                    <td align="center"> '.$ch['montant'].'</td>
                        </tr>';
                    } 
                    $tbl .='</table>';
                 }

                $tbl .='
                </td>
                
                </tr>' ;   

    
}
//$totR=sprintf('%.3f',$totR); 

$tbl .= '
   
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('Etat_fact_sans_ligne.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>