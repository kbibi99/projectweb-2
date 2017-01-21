
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Logistic Office');
$pdf->SetTitle('Etat Stock Famille');

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
$pdf->SetHeaderData('BLUE.png', '90'         );
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
$pdf->SetFont('dejavusans', '', 14);
$pdf->AddPage('P');

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
        

        
        
// --------------------------------------------------------------------------
$zz='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';

     // debug($prs['Personnel']);die;
        $tbl .= 
    '<table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
        
            
            <tr>
                <td>
                        <table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">
                        <tr>
                            <td width="20%" height="150px"></td>
                            <td width="60%" height="170px" style="font-size:40px;"><strong><br>KINDA</strong></td>
                            <td width="20%" style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"></td>
                        </tr>
                        <tr>
                            <td width="60%"></td>
                            <td ><strong>Matricule N° </strong>'.$prs['Personnel']['Cin'].'</td>
                        </tr>
                        </table>
                </td>
            </tr>
            

            
            
            <tr>
                <td  width="100%" colspan="3" height="70px" style="font-size:40px;"><strong><br>FICHE INDIVIDUELLE<br></strong></td>
            </tr>





     <tr bgcolor="#FFFFFF"  >
        <td width="15%" height="40px"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> Nom :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.$prs['Personnel']['Nom'].'</td>
     </tr>
     <tr bgcolor="#FFFFFF" > 
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> Prenom :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.$prs['Personnel']['Prenom'].'</td>
     </tr>
     <tr bgcolor="#FFFFFF" >  
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" > <strong> N° CNSS :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.$prs['Personnel']['Cnss'].'</td>
     </tr>
     <tr bgcolor="#FFFFFF" > 
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> Date de Naissance :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.date('d/m/Y', strtotime(str_replace('-', '/',$prs['Personnel']['Date_Nais']))).'</td>
     </tr>
     <tr bgcolor="#FFFFFF" >
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> Adresse Actuelle :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.$prs['Personnel']['Adr'].'</td>
     </tr>
     <tr bgcolor="#FFFFFF" >    
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> Etat Civil :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.$prs['Personnel']['Etat'].'</td>
     </tr>
     <tr bgcolor="#FFFFFF" >   
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> Qualification :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.$prs['Personnel']['Type'].'</td>
     </tr>
     <tr bgcolor="#FFFFFF" >    
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong>Date embauchement:</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.date('d/m/Y', strtotime(str_replace('-', '/',$prs['Personnel']['Date_Rec']))).'</td>
     </tr>
     <tr bgcolor="#FFFFFF" >    
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> N° GSM :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.$prs['Personnel']['Gsm'].'</td>
     </tr>
     <tr bgcolor="#FFFFFF" >
        <td width="15%"></td>
        <td width="35%" nobr="nobr" align="left" height="40px" ><strong> Date de Sortie :</strong></td>
        <td width="50%" nobr="nobr" align="left"  $zz>'.date('d/m/Y', strtotime(str_replace('-', '/',$prs['Personnel']['Date_Sor']))).'</td>
     </tr>' ;  

$tbl .= '
  
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('fiche_individuelle.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>