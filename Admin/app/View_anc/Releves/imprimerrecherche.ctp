
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('kinda');
$pdf->SetTitle('Releve de vente Client');


// set default header data
//$date1 = explode('-', $date);
//$new_date = $date1[2] . '/' . $date1[1] . '/' . $date1[0];
$ent='entete.jpg'; 
$debut=$Date_debut;$fin=$Date_fin;

if($debut!="" && $fin!=""){
$Date_debut=date('d/m/Y', strtotime(str_replace('-', '/',$Date_debut)));
$Date_fin=date('d/m/Y', strtotime(str_replace('-', '/',$Date_fin)));
$d=' du  '.$Date_debut.' au  '.$Date_fin;
}

 //debug($Date_debut);die;


$pdf->SetHeaderData('BLUE.png', '50', '               Releve de vente Client '.$d.'    '.$cc.'    '.$mm);
        

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
$pdf->AddPage('L');   //  P  ou L 

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
   
        
// --------------------------------------------------------------------------
//$dd='';
$tbl = '
<table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
 <tr bgcolor="#FFFFFF" align="center">
        <th width="11%" align="center"  ><strong>Type</strong></th>
        <th width="11%" align="center"  ><strong>Date</strong></th>
        <th width="18%" align="center"  ><strong>Contact</strong></th>
        <th width="15%" align="center"  ><strong>Mode</strong></th>
        <th width="12%" align="center"  ><strong>Montant</strong></th>
        <th width="11%" align="center"  ><strong>Acompte</strong></th>
        <th width="11%" align="center"  ><strong>Remise</strong></th>
        <th width="11%" align="center"  ><strong>Solde</strong></th>
    </tr>';
        
    $solde=0; $totremise=0; $totBL=0; $totREG=0;
        if(!empty($releves)){
            $hh=0;
        foreach (@$releves as $relefe){
            $hh++;
                    if($hh==22){
                        $tbl.='</table>';
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('L');
                        $hh=0;
                        $tbl='
                            <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                        <tr bgcolor="#FFFFFF" align="center">
                               <th width="11%" align="center"  ><strong>Type</strong></th>
                               <th width="11%" align="center"  ><strong>Date</strong></th>
                               <th width="18%" align="center"  ><strong>Contact</strong></th>
                               <th width="15%" align="center"  ><strong>Mode</strong></th>
                               <th width="12%" align="center"  ><strong>Montant</strong></th>
                               <th width="11%" align="center"  ><strong>Acompte</strong></th>
                               <th width="11%" align="center"  ><strong>Remise</strong></th>
                               <th width="11%" align="center"  ><strong>Solde</strong></th>
                           </tr>';
                    }
            
            $Montant="";$acompte="";$mode="";
            if(@$relefe['Relefe']['Type']=='BL'){
                $solde=$solde+$relefe['Relefe']['Montant']-$relefe['Relefe']['Remisereg'];
                $totBL=$totBL+$relefe['Relefe']['Montant'];
                $cadreB='style="font-family:Arial, Helvetica, sans-serif;font-size:14px;"';
                $Montant=$relefe['Relefe']['Montant'];
$color="#FFFFFF";
                }
            if(@$relefe['Relefe']['Type']=='REG'){ 
                $solde=$solde-$relefe['Relefe']['Montant']-$relefe['Relefe']['Remise'];
                $totREG=$totREG+$relefe['Relefe']['Montant'];
                $mode=$relefe['Relefe']['mode'];
               $cadreB='style="background-color:#B9CDCA;font-family:Arial, Helvetica, sans-serif;font-size:14px;"';
$color="#B9CDCA";
              $acompte=$relefe['Relefe']['Montant'];
            }
            $totremise=$totremise+$relefe['Relefe']['Remise'];
            $Num=$relefe['Relefe']['Numero'];
            $Type=$relefe['Relefe']['Type']; 
	    $Date=$relefe['Relefe']['Date'];
            $Date=date('d/m/Y', strtotime(str_replace('-', '/',$Date)));
            $Contact=$relefe['Relefe']['Contact'];
	    $Remise=$relefe['Relefe']['Remise'];
 
            $remisec=sprintf('%.3f',$remisec);
            $netP=$solde-$remisec;
            $netP=sprintf('%.3f',$netP);
            
        $totremise=sprintf('%.3f',$totremise);
        $solde=sprintf('%.3f',$solde);
        $totBL=sprintf('%.3f',$totBL);
        $totREG=sprintf('%.3f',$totREG);
       
        $tbl .= 
    '<tr bgcolor="'.$color.'" align="center">    
        <td width="11%" nobr="nobr" align="center"  ><strong>'.$Type.$Num.'</strong></td>
        <td width="11%" nobr="nobr" align="center"   >'.$Date.'</td>
        <td width="18%" nobr="nobr" align="center"   >'.$Contact.'</td>
        <td width="15%" nobr="nobr" align="center"   >'.$mode.'</td>    
        <td width="12%" nobr="nobr" align="right"   >'.$Montant.'</td>
        <td width="11%" nobr="nobr" align="right"   >'.$acompte.'</td>
        <td width="11%" nobr="nobr" align="right"   >'.$Remise.'</td>
        <td width="11%" nobr="nobr" align="right"  >'.$solde.'</td>            
    </tr>';    
 }}
        //$remisex=sprintf('%.3f',$remisec);
      $tbl .=  
       ' 
           <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="4" align="right" width="55%"   ><strong>Total</strong></td>
                <td  align="right" width="12%"><strong>'.$totBL.'</strong></td>
                <td  align="right" width="11%"><strong>'.$totREG.'</strong></td>     
                <td  align="right" width="11%"><strong>'.$totremise.'</strong></td>  
                <td  align="right" width="11%"><strong>'.$solde.'</strong></td>    
           </tr>
           ';
        
$tbl .= 
        ' 
</table> <br><br>
<table  align="center" cellpadding="2" cellspacing="0"  width="100%">';
            if($remisec >0){
            $tbl .='
            <tr bgcolor="#FFFFFF" align="center">
                <td align="center" width="40%" style="border-right: 1px solid black;"><strong></strong></td>
                <td align="center" width="30%" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong>Remise en '.$typpp.'</strong></td>
                <td  align="center" width="30%" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong>'.$remisec.'</strong></td>
            </tr>';
            }
            $tbl .='
            <tr bgcolor="#FFFFFF" align="center"> 
                <td align="center" width="40%"  style="border-right: 1px solid black;"><strong></strong></td>
                <td  align="center" width="30%" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;border-top: 1px solid black" ><strong>Net à Payer</strong></td>
                <td  align="center" width="30%" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;border-top: 1px solid black"><strong>'.$netapayer.'</strong></td>
            </tr>';
            
 $tbl .='
</table>            
';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('releve_vente.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>