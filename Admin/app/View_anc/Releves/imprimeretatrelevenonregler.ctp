
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


$pdf->SetHeaderData('BLUE.png', '50', '               Releve de vente Client Non Regler '.$d.'    '.$cc.'    '.$mm);
        

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
$pdf->SetFont('times', 'B', 12);

// add a page
//$pdf->SetFont('dejavusans', '', 12);
$pdf->AddPage('P');   //  P  ou L 

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
   
        
// --------------------------------------------------------------------------
//$dd='';
$tbl = '
<table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
 <tr bgcolor="#FFFFFF" align="center">
        <th width="50%" align="center" height="35px" ><strong>Contact </strong></th>
        <th width="50%" align="center"  ><strong>Montant</strong></th>
        
    </tr>';
        
    $solde=0; $totremise=0; $totBL=0; $totREG=0;
        if(!empty($releves)){
            $hh=0;
        foreach (@$releves as $relefe){
            //debug($relefe['Relefe']['Client']);die;
            $hh++;
                    if($hh==22){
                        $tbl.='</table>';
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('P');
                        $hh=0;
                        $tbl='
                            <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                        <tr bgcolor="#FFFFFF" align="center">
                               <th width="50%" align="center" height="35px" ><strong>Contact </strong></th>
                               <th width="50%" align="center"  ><strong>Montant</strong></th>
                           </tr>';
                    }
            
           // debug($relefe['Relefe']['Client']);die;
       
        $tbl .= 
    '<tr bgcolor="'.$color.'" align="center">    
        
        <td width="50%" nobr="nobr" align="center"  height="35px"  >'.$relefe['Relefe']['Client'].'</td>
        <td width="50%" nobr="nobr" align="center"  >'.$relefe[0]['Montant'].'</td>            
    </tr>';    
 }}
        
        
$tbl .= 
        ' 
</table>
         
';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('releve_vente_non_regler.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>