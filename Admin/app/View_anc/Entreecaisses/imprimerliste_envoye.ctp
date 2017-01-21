
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Logistic Office');
$pdf->SetTitle('Devis');

// set default header data
//$date1 = explode('-', $date);
//$new_date = $date1[2] . '/' . $date1[1] . '/' . $date1[0];
$ent='entete.jpg'; 
$debut=$Date_debut;$fin=$Date_fin;


if($debut!="" && $fin!=""){
$Date_debut=date('d/m/Y', strtotime(str_replace('-', '/',$Date_debut)));
$Date_fin=date('d/m/Y', strtotime(str_replace('-', '/',$Date_fin)));
$m=' entre  '.$Date_debut.' et  '.$Date_fin;
}
$pdf->SetHeaderData('BLUE.png', '60', '                                          Liste Des Caisses Envoyées  ' );
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
$pdf->SetFont('dejavusans', '', 12);
$pdf->AddPage('L');

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
        

        
        
// --------------------------------------------------------------------------
$az="Espece";
if(!empty($Type)){
    if($Type=="1"){ $az="Espece";}
     if($Type=="2"){ $az="Chéque";}
      if($Type=="3"){ $az="Traite";}
    
}
$zz='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
$ff='style="font-family:Arial, Helvetica, sans-serif;font-size:25px;"';
$tbl = '
   
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
 <tr><td align="center" '.$ff.'><strong>'.$az.'</strong></td></tr>
<tr bgcolor="#FFFFFF" align="center">
        <th width="25%" align="center" $zz height="30px"><strong>Client</strong></th>
        <th width="10%" align="center" $zz ><strong>Num Reçu</strong></th>
        <th width="15%" align="center" $zz ><strong>Date</strong></th>
        <th width="35%" align="center" $zz ><strong>Paiement</strong></th>
        <th width="15%" align="center" $zz ><strong>Montant</strong></th>
    </tr>';

                
                if(!empty($Type)){
                    
                    if($Type=="1"){ $nbl=15;}
                    if($Type=="2"){ $nbl=12;}
                     if($Type=="3"){ $nbl=15;}
                    
                    $hhk=0;
                 foreach ($pieces as $key => $value){ 
                     $hhk++;
                          if($hhk==$nbl){
                              $tbl.='</table>';
                              $pdf->writeHTML($tbl, true, false, false, false, '');
                              $pdf->AddPage('L');
                              $hhk=0;
                    $tbl = '
   
                    <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
                    <tr><td align="center" '.$ff.'><strong>'.$az.'</strong></td></tr>
                   <tr bgcolor="#FFFFFF" align="center">
                           <th width="25%" align="center" $zz height="30px"><strong>Client</strong></th>
                           <th width="10%" align="center" $zz ><strong>Num Reçu</strong></th>
                           <th width="15%" align="center" $zz ><strong>Date</strong></th>
                           <th width="35%" align="center" $zz ><strong>Paiement</strong></th>
                           <th width="15%" align="center" $zz ><strong>Montant</strong></th>
                   </tr>';
                    
                          }
                     
            $value['Piece']['echance']=date("d/m/Y",strtotime(str_replace('-','/',($value['Piece']['echance']))));
            
            $datREG=$value['Reglement']['Date'];
            $datREG=date("d/m/Y",strtotime(str_replace('-','/',$datREG)));
            
            $cli=$value['Piece']['Client']['Raison_Social'];
            $num=$value['Piece']['num_recu'];
            
            $PaiN=$value['Paiement']['name'];
            
            if( ($value['Piecereglement']['paiement_id'] == 2)||($value['Piecereglement']['paiement_id'] == 3)){
                                   $nnn= '(Numéro : '.$value['Piece']['num'].' | Echéance : '.$value['Piece']['echance'].' | Banque : '.$value['Piece']['banque'].')';
                                }
       
            $mont=$value['Piecereglement']['Montant']; 
            $tot=$tot+$mont;
            $tot=  sprintf('%.3f',$tot);
                                
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="25%" nobr="nobr" align="center"  height="30px" $zz>'.$cli.'</td>
        <td width="10%" nobr="nobr" align="center"  $zz>'.$num.'</td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$datREG.'</td>
        <td width="35%" nobr="nobr" align="center"   $zz>'.$PaiN.'   '.$nnn.'</td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$mont.'</td>
    </tr>' ;   

    
                }
$tbl .= '
        
<tr bgcolor="#FFFFFF" align="center">    
       <td colspan="4" width="85%" nobr="nobr" align="center"  height="30px" $zz></td>
        <td width="15%" nobr="nobr" align="center"   $zz><strong>'.$tot.'</strong></td>
    </tr>';
   } 

            if(empty($Type)){
                $tot_esp=0;
              //  if($Type=="Espece")
                    {
                  
                    $hh=0;
                    foreach ($pieces_esp as $key => $value){ 
                        $hh++;
                        if($hh==15){
                             $tbl .=  '</table>';
                 
                            $pdf->writeHTML($tbl, true, false, false, false, '');
                             $pdf->AddPage('L');   //  P  ou L 
                            $hh=0;
                           // $pdf->AddPage();
                 
                $tbl =  '
                    <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
                        
                        <tr><td align="center" '.$ff.'><strong>'.$az.'</strong></td></tr>
                       <tr bgcolor="#FFFFFF" align="center">
                               <th width="25%" align="center" $zz height="30px"><strong>Client</strong></th>
                               <th width="10%" align="center" $zz ><strong>Num Reçu</strong></th>
                               <th width="15%" align="center" $zz ><strong>Date</strong></th>
                               <th width="35%" align="center" $zz ><strong>Paiement</strong></th>
                               <th width="15%" align="center" $zz ><strong>Montant</strong></th>
                           </tr>';
                            
                        }
                      
            $value['Piece']['echance']=date("d/m/Y",strtotime(str_replace('-','/',($value['Piece']['echance']))));
            
            $datREG=$value['Reglement']['Date'];
            $datREG=date("d/m/Y",strtotime(str_replace('-','/',$datREG)));
            
            $cli=$value['Piece']['Client']['Raison_Social'];
            $num=$value['Piece']['num_recu'];
            
            $PaiN=$value['Paiement']['name'];
            
            if( ($value['Piecereglement']['paiement_id'] == 2)||($value['Piecereglement']['paiement_id'] == 3)){
                                   $nnn= '(Numéro : '.$value['Piece']['num'].' | Echéance : '.$value['Piece']['echance'].' | Banque : '.$value['Piece']['banque'].')';
                                }
       
            $mont=$value['Piecereglement']['Montant']; 
            $tot_esp=$tot_esp+$mont;
            $tot_esp=  sprintf('%.3f',$tot_esp);
                                
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="25%" nobr="nobr" align="center" height="30px" $zz>'.$cli.'</td>
        <td width="10%" nobr="nobr" align="center"  $zz>'.$num.'</td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$datREG.'</td>
        <td width="35%" nobr="nobr" align="center"   $zz>'.$PaiN.'   </td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$mont.'</td>
    </tr>' ;   

    
                }
                $tbl .= '
                <tr bgcolor="#FFFFFF" align="center">    
                      <td colspan="4" width="85%" nobr="nobr" align="center" height="30px"  $zz></td>
                       <td width="15%" nobr="nobr" align="center"   $zz><strong>'.$tot_esp.'</strong></td>
                   </tr>';
                }
                
       //--------------- Cheque-----------------------     
               //if($Type=="Cheque")
                    {
                    
                    $tbl .='</table>';
                        
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('L'); 
       $tbl = '
            <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
               
                    <tr><td align="center" '.$ff.'><strong>Chéque</strong></td></tr>              
                    <tr bgcolor="#FFFFFF" align="center">
                       <th width="25%" align="center" $zz height="30px" ><strong>Client</strong></th>
                       <th width="10%" align="center" $zz ><strong>Num Reçu</strong></th>
                       <th width="15%" align="center" $zz ><strong>Date</strong></th>
                       <th width="35%" align="center" $zz ><strong>Paiement</strong></th>
                       <th width="15%" align="center" $zz ><strong>Montant</strong></th>
                   </tr>';
                   $tot_ch=0;$hhc=0;
                  // debug($pieces_chq);die;
                      foreach ($pieces_chq as $key => $value){ 
                          $hhc++;
                          if($hhc==11){
                              $tbl.='</table>';
                              $pdf->writeHTML($tbl, true, false, false, false, '');
                              $pdf->AddPage('L');
                              $hhc=0;
                              
                $tbl=' 
                    <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
               
                    <tr><td align="center" '.$ff.'><strong>Chéque</strong></td></tr>              
                    <tr bgcolor="#FFFFFF" align="center">
                       <th width="25%" align="center" $zz height="30px" ><strong>Client</strong></th>
                       <th width="10%" align="center" $zz ><strong>Num Reçu</strong></th>
                       <th width="15%" align="center" $zz ><strong>Date</strong></th>
                       <th width="35%" align="center" $zz ><strong>Paiement</strong></th>
                       <th width="15%" align="center" $zz ><strong>Montant</strong></th>
                   </tr>';
                          }
                         
            $value['Piece']['echance']=date("d/m/Y",strtotime(str_replace('-','/',($value['Piece']['echance']))));
            
            $datREG=$value['Reglement']['Date'];
            $datREG=date("d/m/Y",strtotime(str_replace('-','/',$datREG)));
            
            $cli=$value['Piece']['Client']['Raison_Social'];
            $num=$value['Piece']['num_recu'];
            
            $PaiN=$value['Paiement']['name'];
            
            if( ($value['Piecereglement']['paiement_id'] == 2)||($value['Piecereglement']['paiement_id'] == 3)){
                                   $nnn= '(Numéro : '.$value['Piece']['num'].' | Echéance : '.$value['Piece']['echance'].' | Banque : '.$value['Piece']['banque'].')';
                                }
       
            $mont=$value['Piecereglement']['Montant']; 
            $tot_ch=$tot_ch+$mont;
            $tot_ch=  sprintf('%.3f',$tot_ch);
                                
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="25%" nobr="nobr" align="center" height="30px" $zz>'.$cli.'</td>
        <td width="10%" nobr="nobr" align="center"  $zz>'.$num.'</td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$datREG.'</td>
        <td width="35%" nobr="nobr" align="center"   $zz>'.$PaiN.'   '.$nnn.'</td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$mont.'</td>
    </tr>' ;   
 }
                
              $tbl .= '
                <tr bgcolor="#FFFFFF" align="center">    
                       <td colspan="4" width="85%" nobr="nobr" align="center" height="30px"  $zz></td>
                        <td width="15%" nobr="nobr" align="center"   $zz><strong>'.$tot_ch.'</strong></td>
                    </tr>';
                }
//------------------------ Traite -------------------------------
                if(!empty($pieces_trt))
                    {
                    
                    
                    
                    $tbl .='</table>';
                        
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('L'); 
      $tbl = '
            <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
                
                <tr><td align="center" '.$ff.'><strong>Traite</strong></td></tr>
               <tr bgcolor="#FFFFFF" align="center">
                       <th width="25%" align="center" $zz height="30px" ><strong>Client</strong></th>
                       <th width="10%" align="center" $zz ><strong>Num Reçu</strong></th>
                       <th width="15%" align="center" $zz ><strong>Date</strong></th>
                       <th width="35%" align="center" $zz ><strong>Paiement</strong></th>
                       <th width="15%" align="center" $zz ><strong>Montant</strong></th>
                   </tr>';
      $tot_tr=0;$hht=0;
                     foreach ($pieces_trt as $key => $value){
                         
                         $hht++;
                          if($hht==15){
                              $tbl.='</table>';
                              $pdf->writeHTML($tbl, true, false, false, false, '');
                              $pdf->AddPage('L');
                              $hht=0;
                  $tbl.='   
                      <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
                
                <tr><td align="center" '.$ff.'><strong>Traite</strong></td></tr>
               <tr bgcolor="#FFFFFF" align="center">
                       <th width="25%" align="center" $zz height="30px" ><strong>Client</strong></th>
                       <th width="10%" align="center" $zz ><strong>Num Reçu</strong></th>
                       <th width="15%" align="center" $zz ><strong>Date</strong></th>
                       <th width="35%" align="center" $zz ><strong>Paiement</strong></th>
                       <th width="15%" align="center" $zz ><strong>Montant</strong></th>
                   </tr>';
                          }
                              
                              
                        //  debug($pieces_trt);die;
            $value['Piece']['echance']=date("d/m/Y",strtotime(str_replace('-','/',($value['Piece']['echance']))));
            
            $datREG=$value['Reglement']['Date'];
            $datREG=date("d/m/Y",strtotime(str_replace('-','/',$datREG)));
            
            $cli=$value['Piece']['Client']['Raison_Social'];
            $num=$value['Piece']['num_recu'];
            
            $PaiN=$value['Paiement']['name'];
            
            if( ($value['Piecereglement']['paiement_id'] == 2)||($value['Piecereglement']['paiement_id'] == 3)){
                                   $nnn= '(Numéro : '.$value['Piece']['num'].' | Echéance : '.$value['Piece']['echance'].')';
                                }
       
            $mont=$value['Piecereglement']['Montant']; 
            $tot_tr=$tot_tr+$mont;
            $tot_tr=  sprintf('%.3f',$tot_tr);
                                
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="25%" nobr="nobr" align="center"  height="30px" $zz>'.$cli.'</td>
        <td width="10%" nobr="nobr" align="center"  $zz>'.$num.'</td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$datREG.'</td>
        <td width="35%" nobr="nobr" align="center"   $zz>'.$PaiN.'   '.$nnn.'</td>
        <td width="15%" nobr="nobr" align="center"   $zz>'.$mont.'</td>
    </tr>' ;   

    
                }
                
               $tbl .= '
                <tr bgcolor="#FFFFFF" align="center">    
                   <td colspan="4" width="85%" nobr="nobr" align="center"  height="30px" $zz></td>
                    <td width="15%" nobr="nobr" align="center"   $zz><strong>'.$tot_tr.'</strong></td>
                </tr>';
                }


}

$tbl .= '

 </table>';
    //---------------------------------
//debug($Type);die;

                        
if(empty($Type)){
    
    $cadre='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"';    
  $cadre2='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-right:2px solid black;"';    
  $cadre3='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';    
      $tots=$tot_esp+$tot_ch+$tot_tr;
      $tots=  sprintf('%.3f',$tots);
    
$tbl .= '
    <br>
    <br>
    <br>
<table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table"  nobr="true" >       
     
        <tr bgcolor="#FFFFFF" align="center"> 
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.'><strong>&nbsp;<br>Total Espéce<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_esp.'<br></strong></td> 
        </tr>
        <tr bgcolor="#FFFFFF" align="center">
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>Total Chéque<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_ch.'<br></strong></td>
       </tr>
       <tr bgcolor="#FFFFFF" align="center">
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>Total Traite<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_tr.'<br></strong></td>
       </tr>
       <tr bgcolor="#FFFFFF" align="center">
                <td width="30%" '.$cadre2.' ></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>Total<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tots.'<br></strong></td>
       </tr>
       
 </table>';
}
    //------------------------------------

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('Liste caisses envoyées.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>