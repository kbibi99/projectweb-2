
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
$pdf->SetHeaderData('BLUE.png', '60', '                                               Liste des Acomptes '.$mm .' '.$aa.' '.$m);
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
$zz='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
$tbl .= '
   
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
<thead>      
   <tr bgcolor="#FFFFFF" align="center">
        <th width="20%" align="center" $zz ><strong>Personnel</strong></th>
        <th width="20%" align="center" $zz ><strong>Mois</strong></th>
        <th width="20%" align="center" $zz ><strong>Annee</strong></th>
        <th width="20%" align="center" $zz ><strong>Montant</strong></th>
        <th width="20%" align="center" $zz ><strong>Date</strong></th>
    </tr>
    </thead>';
        



foreach ($acomptes as $k=>$ligne) {
       // debug($ligne);die;
    
    $pers="";
    $mmss="";
    $ans="";
    
   //debug($personnels);die;
    foreach($personnels as $perss){
        if($perss['Personnel']['id']==$ligne['Acompte']['Personnel']['personnel_id']){
          $pers=$perss['Personnel']['name'];  
        }
    }
    foreach($mois as $moii){
        if($moii['Moi']['id']==$ligne['Acompte']['Moi']['moi_id']){
          $mmss=$moii['Moi']['name'];  
        }
    }      
    foreach($annees as $aann){
        if($aann['Annee']['id']==$ligne['Acompte']['Annee']['annee_id']){
          $ans=$aann['Annee']['name'];  
        }
    } 
        $per  =  $ligne['Personnel']['name'];
        $moiis  = $ligne['Moi']['name']; 
        $an =  $ligne['Annee']['name'];
        $montant =  $ligne['Acompte']['Montant'];
        $date  =  $ligne['Acompte']['Date'];
                $date=date('d/m/Y', strtotime(str_replace('-', '/',$date)));

        //debug($per);die;
       
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="20%" nobr="nobr" align="center"  $zz>'.$per.'</td>
        <td width="20%" nobr="nobr" align="center"  $zz>'.$moiis.'</td>
        <td width="20%" nobr="nobr" align="center"   $zz>'.$an.'</td>
        <td width="20%" nobr="nobr" align="right"   $zz>'.$montant.'</td>
        <td width="20%" nobr="nobr" align="center"   $zz>'.$date.'</td>
    </tr>' ;   

    
}
$tbl .= '
        

        
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>