
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Logistic Office');
$pdf->SetTitle('Etat Solde');

// set default header data
//$date1 = explode('-', $date);
//$new_date = $date1[2] . '/' . $date1[1] . '/' . $date1[0];
$ent='entete.jpg'; 
//$debut=$deb;$fin=$fn;
//
//if($debut!="" && $fin!=""){
//$deb=date('d/m/Y', strtotime(str_replace('-', '/',$deb)));
//$fn=date('d/m/Y', strtotime(str_replace('-', '/',$fn)));
//$m=' du  '.$deb.' au  '.$fn;
//}
$pdf->SetHeaderData('BLUE.png', '60', '    Etat Solde Personnel         '.$mm.'        '.$aa);
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
$tbl .= '
    
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
<thead>      
   <tr bgcolor="#FFFFFF" align="center">
        <th width="20%" align="center" $zz ><strong>Code<br></strong></th>
        <th width="40%" align="center" $zz ><strong>Personnel<br></strong></th>
        <th width="40%" align="center" $zz ><strong>Montant a Payer</strong><br></th>
     </tr>
    </thead>';
        
            $tot=0;
            foreach ($paies as $paie){
                $nom=$paie['Personnel']['name'];
                $code=$paie['Personnel']['Code'];
                
                if(!empty($paie['Paie']['Donne'])){
                    $rr=$paie['Paie']['Donne'];
                }
                if(empty($paie['Paie']['Donne'])){
                    $rr="";
                }
                $reste=$paie['Paie']['Donne'];
                $tot=$tot+$reste;
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">  
        <td width="20%" nobr="nobr" align="center"  $zz>'.$code.'<br></td>
        <td width="40%" nobr="nobr" align="center"  $zz>'.$nom.'<br></td>
        <td width="40%" nobr="nobr" align="center"  $zz>'.$rr.'<br></td>
  </tr>' ;   

    
}
$tbl .= '
        <tr>
            <td colspan="2"><strong height="40px">Total</strong></td>
            <td height="35px" ><strong>'.sprintf("%.3f",$tot).'</strong></td>
       </tr>
</table>';
$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('EtatStockFamille.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>