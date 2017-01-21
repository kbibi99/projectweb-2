
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
$pdf->SetHeaderData('BLUE.png', '60', '              Liste des Collections '.$m .'   '.$cc);
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
$pdf->AddPage('P');

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
        

        
        
// --------------------------------------------------------------------------
$zz='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
$tbl = '
   
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
<tr bgcolor="#FFFFFF" align="center">
        <th width="25%" align="center" $zz ><strong> Marque </strong></th>
        <th width="25%" align="center" $zz ><strong>Numero</strong></th>
        <th width="25%" align="center" $zz ><strong>Bon de Commande</strong></th>
        <th width="25%" align="center" $zz ><strong>Date</strong></th>
    </tr>';
        $i=0;
                foreach ($collections as $collection){
                   
                    if($i==26){
                        $tbl .='</table>';
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('P');
                        $i=0;
                        $tbl ='
               <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                          
                       <tr bgcolor="#FFFFFF" align="center">
                            <th width="25%" align="center" $zz > <strong> Marque </strong></th>
                            <th width="25%" align="center" $zz ><strong>Numero</strong></th>
                            <th width="25%" align="center" $zz ><strong>Bon de Commande</strong></th>
                            <th width="25%" align="center" $zz ><strong>Date</strong></th>
                        </tr>';
                    }
                    
                    $mar=$collection['Boncommande']['Marque']['name'];
                    $num=$collection['Collection']['numero'];
                    $bc=$collection['Boncommande']['Numero'];
                      $date=$collection['Collection']['Date'];
                      $date=date('d/m/Y', strtotime(str_replace('-', '/',$date)));

        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="25%" nobr="nobr" align="center"  height="30px" $zz>'.$mar.'</td>
        <td width="25%" nobr="nobr" align="center"  $zz>'.$num.'</td>
        <td width="25%" nobr="nobr" align="center"   $zz>'.$bc.'</td>
        <td width="25%" nobr="nobr" align="center"   $zz>'.$date.'</td>
    </tr>' ;   

     $i++;
}
$tbl .= '       
</table>';
$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('Collection.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>