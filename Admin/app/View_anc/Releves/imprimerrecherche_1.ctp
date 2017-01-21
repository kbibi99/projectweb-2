
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


$pdf->SetHeaderData('BLUE.png', '30', '                    Releve de vente Client '.$d);
        

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
<br>

 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
<thead>  
      <tr bgcolor="#FFFFFF" align="center">
        <th width="52%" colspan="3"  >Client : '.$cc.'</th>
        <th width="48%" colspan="3"  >Marque : '.$mm.'</th>
      </tr>
    <tr bgcolor="#FFFFFF" align="center">
        <th width="13%" align="center"  >Type</th>
        <th width="13%" align="center"  >Date</th>
        <th width="20%" align="center"  >Contact</th>
        <th width="14%" align="center"  >Montant</th>
        <th width="13%" align="center"  >Acompte</th>
        <th width="13%" align="center"  >Remise</th>
        <th width="14%" align="center"  >Solde</th>
    </tr>
</thead>';
        


	 
    $solde=0; $totremise=0; $totBL=0; $totREG=0;
        if(!empty($releves)){
        foreach (@$releves as $relefe){ 
            $Montant="";$acompte="";
            if(@$relefe['Relefe']['Type']=='BL'){
                $solde=$solde+$relefe['Relefe']['Montant'];
                $totBL=$totBL+$relefe['Relefe']['Montant'];
                $cadreB='style="font-family:Arial, Helvetica, sans-serif;font-size:14px;"';
                $Montant=$relefe['Relefe']['Montant'];
$color="#FFFFFF";
                }
            if(@$relefe['Relefe']['Type']=='REG'){ 
                $solde=$solde-$relefe['Relefe']['Montant'];
                $totREG=$totREG+$relefe['Relefe']['Montant'];
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
 
 
        $totremise=sprintf('%.3f',$totremise);
        $solde=sprintf('%.3f',$solde);
        $totBL=sprintf('%.3f',$totBL);
        $totREG=sprintf('%.3f',$totREG);
        
        
        $tbl .= 
    '<tr bgcolor="'.$color.'" align="center">    
        <td width="13%" nobr="nobr" align="center"  ><strong>'.$Type.$Num.'</strong></td>
        <td width="13%" nobr="nobr" align="center"   >'.$Date.'</td>
        <td width="20%" nobr="nobr" align="center"   >'.$Contact.'</td>
        <td width="14%" nobr="nobr" align="right"   >'.$Montant.'</td>
        <td width="13%" nobr="nobr" align="right"   >'.$acompte.'</td>
        <td width="13%" nobr="nobr" align="right"   >'.$Remise.'</td>
        <td width="14%" nobr="nobr" align="right"  >'.$solde.'</td>            
    </tr>';    

    
        }}
      $tbl .=  
       ' 
           <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="6" align="right" width="86%"   >Total Bon Livraison</td>
                <td  align="right" width="14%">'.$totBL.'</td>    
           </tr>
           <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="6" align="right" width="86%"   >Total Remise</td>
                <td  align="right" width="14%">'.$totremise.'</td>    
           </tr>
           
          
           <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="6" align="right" width="86%"   >Total Reglement</td>
                <td  align="right" width="14%">'.$totREG.'</td>    
           </tr>
           <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="6" align="right" width="86%"   >Total Solde</td>
                <td  align="right" width="14%">'.$solde.'</td>    
           </tr>';
        
$tbl .= 
        '
           
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>