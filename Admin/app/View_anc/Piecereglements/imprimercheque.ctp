
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


if($Date_debut!="" && $Date_fin!=""){
$Date_debut=date('d/m/Y', strtotime(str_replace('-', '/',$Date_debut)));
$Date_fin=date('d/m/Y', strtotime(str_replace('-', '/',$Date_fin)));
$m=' entre  '.$Date_debut.' et  '.$Date_fin;
}
$pdf->SetHeaderData('BLUE.png', '60', '                               Liste des Caisses Chéques Clients '.$m .'   '.$situation);
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
$az="En attente";
if(!empty($situation)){
   $az=$situation; 
}
$zz='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
$ff='style="font-family:Arial, Helvetica, sans-serif;font-size:25px;"';
$tbl .= '
   
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
 <tr><td align="center" '.$ff.'><strong>'.$az.'</strong></td></tr>     
     <tr bgcolor="#FFFFFF" align="center">
        <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
        <th width="14%" align="center" $zz ><strong>Num</strong></th>
        <th width="14%" align="center" $zz ><strong>Banque</strong></th>
        <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
        <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
        <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
         <th width="14%" align="center" $zz><strong>Montant</strong></th>
   </tr>';
    $tot=0;
        if(!empty($situation)){
            $hhk=0;
    foreach ($piecereglements as $k=>$piecereglement){
        $hhk++;
                          if($hhk==10){
                              $tbl.='</table>';
                              $pdf->writeHTML($tbl, true, false, false, false, '');
                              $pdf->AddPage('L');
                              $hhk=0;
                   $tbl = '
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                    <tr><td align="center" '.$ff.'><strong>'.$az.'</strong></td></tr>     
                        <tr bgcolor="#FFFFFF" align="center">
                           <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                           <th width="14%" align="center" $zz ><strong>Num</strong></th>
                           <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                           <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                           <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                           <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                            <th width="14%" align="center" $zz><strong>Montant</strong></th>
                      </tr>';
                          }
$bn=0;$compt=0;
            if($situation=='En attente'){
                $bbb=$piecereglement['Piece']['banque'];
            }
            else{
                $bn= $piecereglement['Piece']['Banque']['Designation'];
                $compt= $piecereglement['Piece']['Banque']['Numero_compte'];
                $bbb=$bn.'  '.$compt;
            }
            
            $tot=$tot+$piecereglement['Piecereglement']['Montant'];
            $tot=  sprintf('%.3f',$tot);
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="16%" nobr="nobr" align="center" height="30px" $zz>'.$piecereglement['Reglement']['Client']['Raison_Social'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$bbb.'</td>   
        <td width="12%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num_recu'].'</td>
        <td width="16%" nobr="nobr" align="center"   $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Reglement']['Date'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Piece']['echance'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piecereglement']['Montant'].'</td>
        
        
    </tr>' ;      
}
$tbl .= '      
    <tr bgcolor="#FFFFFF" align="center">  
        <td colspan="5"width="86%" nobr="nobr" align="center" height="30px" ></td>
        <td width="14%" nobr="nobr" align="center"  $zz><strong>'.$tot.'</strong></td>
    </tr>';
    }
    
    if(empty($situation)){
//----------------------- En attente------------------------
        if(!empty($piece_att)){
            $tot_att=0;$hh=0;
         foreach ($piece_att as $k=>$piecereglement){
             $hh++;
                        if($hh==15){
                             $tbl .=  '</table>';
                 
                            $pdf->writeHTML($tbl, true, false, false, false, '');
                             $pdf->AddPage('L');   //  P  ou L 
                            $hh=0;
                            $tbl='
                            <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                                <tr><td align="center" '.$ff.'><strong>'.$az.'</strong></td></tr>     
                                     <tr bgcolor="#FFFFFF" align="center">
                                        <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                                        <th width="14%" align="center" $zz ><strong>Num</strong></th>
                                        <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                                        <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                                        <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                                        <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                                         <th width="14%" align="center" $zz><strong>Montant</strong></th>
                                    </tr>';
                        }
             
             
             
$bn=0;$compt=0;
            $bn= $piecereglement['Piece']['Banque']['Designation'];
            $compt= $piecereglement['Piece']['Banque']['Numero_compte'];
            $tot_att=$tot_att+$piecereglement['Piecereglement']['Montant'];
            $tot_att=  sprintf('%.3f',$tot_att);
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="16%" nobr="nobr" align="center" height="30px" $zz>'.$piecereglement['Reglement']['Client']['Raison_Social'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num'].' </td>
        <td width="14%" nobr="nobr" align="center"  $zz> '.$piecereglement['Piece']['banque'].'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num_recu'].'</td>
        <td width="16%" nobr="nobr" align="center"   $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Reglement']['Date'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Piece']['echance'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piecereglement']['Montant'].'</td>
        
       
    </tr>' ;      
                }
                
                $tbl .= '      
                <tr bgcolor="#FFFFFF" align="center">  
                    <td colspan="6"width="86%" nobr="nobr" align="center" height="30px" ></td>
                    <td width="14%" nobr="nobr" align="center"  $zz><strong>'.$tot_att.'</strong></td>
                </tr>';
        }
//---------------------------- Versé ----------------------------------------
            if(!empty($piece_ver)){
                
                $tbl .='</table>';
                  $pdf->writeHTML($tbl, true, false, false, false, '');
                      $pdf->AddPage('L');
                   $tbl = '
                      
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                     <tr><td align="center" '.$ff.'><strong>Versé</strong></td></tr>
                            
                         <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                        </tr>';
                  $tot_ver=0; $hh=0;    
 foreach ($piece_ver as $k=>$piecereglement){
     $hh++;
                        if($hh==15){
                             $tbl .=  '</table>';
                 
                            $pdf->writeHTML($tbl, true, false, false, false, '');
                             $pdf->AddPage('L');   //  P  ou L 
                            $hh=0;
                            $tbl='
                   <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                    <tr><td align="center" '.$ff.'><strong>Versé</strong></td></tr>
                            
                         <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                        </tr>';
                        }
                            
                            
$bn=0;$compt=0;
            $bn= $piecereglement['Piece']['Banque']['Designation'];
            $compt= $piecereglement['Piece']['Banque']['Numero_compte'];
            $tot_ver=$tot_ver+$piecereglement['Piecereglement']['Montant'];
            $tot_ver=  sprintf('%.3f',$tot_ver);
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="16%" nobr="nobr" align="center" height="30px" $zz>'.$piecereglement['Reglement']['Client']['Raison_Social'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$bn.'  '.$compt.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num_recu'].'</td>
        <td width="16%" nobr="nobr" align="center"   $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Reglement']['Date'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Piece']['echance'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piecereglement']['Montant'].'</td>
        
        
    </tr>' ;      
                       }
                       $tbl .= '      
                <tr bgcolor="#FFFFFF" align="center">  
                    <td colspan="6"width="86%" nobr="nobr" align="center" height="30px" ></td>
                    <td width="14%" nobr="nobr" align="center"  $zz><strong>'.$tot_ver.'</strong></td>
                </tr>';
            }
//-----------------------------------Preavis ---------------------
            if(!empty($piece_pre)){
                
                $tbl .='</table>';
                  $pdf->writeHTML($tbl, true, false, false, false, '');
                      $pdf->AddPage('L');
                   $tbl = '
                     
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                    <tr><td align="center" '.$ff.'><strong>Preavis</strong></td></tr>
                         <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                       </tr>';   
                $tot_pre=0;$hh=0;
 foreach ($piece_pre as $k=>$piecereglement){
     $hh++;
                        if($hh==15){
                             $tbl .=  '</table>';
                 
                            $pdf->writeHTML($tbl, true, false, false, false, '');
                             $pdf->AddPage('L');   //  P  ou L 
                            $hh=0;
                            $tbl = '
                     
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                    <tr><td align="center" '.$ff.'><strong>Preavis</strong></td></tr>
                         <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                       </tr>'; 
                        }
                            
$bn=0;$compt=0;
            $bn= $piecereglement['Piece']['Banque']['Designation'];
            $compt= $piecereglement['Piece']['Banque']['Numero_compte'];
            $tot_pre=$tot_pre+$piecereglement['Piecereglement']['Montant'];
            $tot_pre=  sprintf('%.3f',$tot_pre);
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="16%" nobr="nobr" align="center" height="30px" $zz>'.$piecereglement['Reglement']['Client']['Raison_Social'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$bn.'  '.$compt.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num_recu'].'</td>
        <td width="16%" nobr="nobr" align="center"   $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Reglement']['Date'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Piece']['echance'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piecereglement']['Montant'].'</td>
        
       
    </tr>' ; 
 }
 $tbl .= '      
                <tr bgcolor="#FFFFFF" align="center">  
                    <td colspan="6"width="86%" nobr="nobr" align="center" height="30px" ></td>
                    <td width="14%" nobr="nobr" align="center"  $zz><strong>'.$tot_pre.'</strong></td>
                </tr>';
}
//-------------------------------- Paye----------------------------------------
        if(!empty($piece_pay)){
            
            $tbl .='</table>';
                  $pdf->writeHTML($tbl, true, false, false, false, '');
                      $pdf->AddPage('L');
                   $tbl = '
                      
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                   <tr><td align="center" '.$ff.'><strong>Paye</strong></td></tr>
                        <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                    </tr>';  
             $tot_pay=0;$hh=0;
 foreach ($piece_pay as $k=>$piecereglement){
     $hh++;
                        if($hh==15){
                             $tbl .=  '</table>';
                 
                            $pdf->writeHTML($tbl, true, false, false, false, '');
                             $pdf->AddPage('L');   //  P  ou L 
                            $hh=0;
                            $tbl = '
                      
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                   <tr><td align="center" '.$ff.'><strong>Paye</strong></td></tr>
                        <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                    </tr>'; 
                        }
$bn=0;$compt=0;
            $bn= $piecereglement['Piece']['Banque']['Designation'];
            $compt= $piecereglement['Piece']['Banque']['Numero_compte'];
            $tot_pay=$tot_pay+$piecereglement['Piecereglement']['Montant'];
            $tot_pay=  sprintf('%.3f',$tot_pay);
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="16%" nobr="nobr" align="center" height="30px" $zz>'.$piecereglement['Reglement']['Client']['Raison_Social'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$bn.'  '.$compt.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num_recu'].'</td>
        <td width="16%" nobr="nobr" align="center"   $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Reglement']['Date'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Piece']['echance'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piecereglement']['Montant'].'</td>
       
       
    </tr>' ; 
 }
 $tbl .= '      
                <tr bgcolor="#FFFFFF" align="center">  
                    <td colspan="6"width="86%" nobr="nobr" align="center" height="30px" ></td>
                    <td width="14%" nobr="nobr" align="center"  $zz><strong>'.$tot_pay.'</strong></td>
                </tr>';
}
//------------------------------------- Impaye ----------------------
        if(!empty($piece_imp)){
            
            
            $tbl .='</table>';
                  $pdf->writeHTML($tbl, true, false, false, false, '');
                      $pdf->AddPage('L');
                   $tbl = '
                       
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                     <tr><td align="center" '.$ff.'><strong>Impaye</strong></td></tr>
                         <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                    </tr>';  
            $tot_imp=0;$hh=0;
 foreach ($piece_imp as $k=>$piecereglement){
     $hh++;
                        if($hh==15){
                             $tbl .=  '</table>';
                 
                            $pdf->writeHTML($tbl, true, false, false, false, '');
                             $pdf->AddPage('L');   //  P  ou L 
                            $hh=0;
                            $tbl = '
                       
                       <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                     <tr><td align="center" '.$ff.'><strong>Impaye</strong></td></tr>
                         <tr bgcolor="#FFFFFF" align="center">
                            <th width="16%" align="center" $zz height="30px" ><strong>Client</strong></th>
                            <th width="14%" align="center" $zz ><strong>Num</strong></th>
                            <th width="14%" align="center" $zz ><strong>Banque</strong></th>
                            <th width="12%" align="center" $zz ><strong>Num Reçu</strong></th>
                            <th width="16%" align="center" $zz ><strong>Encaissement</strong></th>
                            <th width="14%" align="center" $zz ><strong>Echeance</strong></th>
                             <th width="14%" align="center" $zz><strong>Montant</strong></th>
                    </tr>'; 
                        }
$bn=0;$compt=0;
            $bn= $piecereglement['Piece']['Banque']['Designation'];
            $compt= $piecereglement['Piece']['Banque']['Numero_compte'];
            $tot_imp=$tot_imp+$piecereglement['Piecereglement']['Montant'];
            $tot_imp=  sprintf('%.3f',$tot_imp);
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="16%" nobr="nobr" align="center" height="30px" $zz>'.$piecereglement['Reglement']['Client']['Raison_Social'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num'].'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$bn.'  '.$compt.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piece']['num_recu'].'</td>
        <td width="16%" nobr="nobr" align="center"   $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Reglement']['Date'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Piece']['echance'])))).'</td>
        <td width="14%" nobr="nobr" align="center"  $zz>'.$piecereglement['Piecereglement']['Montant'].'</td>
        
        
    </tr>' ;     
 }
 $tbl .= '      
                <tr bgcolor="#FFFFFF" align="center">  
                    <td colspan="6"width="86%" nobr="nobr" align="center" height="30px" ></td>
                    <td width="14%" nobr="nobr" align="center"  $zz><strong>'.$tot_imp.'</strong></td>
                </tr>';
}



    }
$tbl .= '
</table>';
 
   //---------------------------------

if(empty($situation)){
    

    $cadre='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"';    
  $cadre2='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-right:2px solid black;"';    
  $cadre3='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';    
      $tots=$tot_att+$tot_ver+$tot_pre+$tot_pay + $tot_imp;
      $tots=  sprintf('%.3f',$tots);
    
$tbl .= '
    <br>
    <br>
    <br>
<table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table"  nobr="true" >       
     
        <tr bgcolor="#FFFFFF" align="center"> 
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.'><strong>&nbsp;<br>Total En attente<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_att.'<br></strong></td> 
        </tr>
        <tr bgcolor="#FFFFFF" align="center">
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>Total Versé<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_ver.'<br></strong></td>
       </tr>
       <tr bgcolor="#FFFFFF" align="center">
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>Total Paye<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_pay.'<br></strong></td>
       </tr>
       <tr bgcolor="#FFFFFF" align="center">
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>Total Preavis<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_pre.'<br></strong></td>
       </tr>
       <tr bgcolor="#FFFFFF" align="center">
                <td width="30%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>Total Impaye<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot_imp.'<br></strong></td>
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
$pdf->Output('Piece_Reglement_cheque.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>