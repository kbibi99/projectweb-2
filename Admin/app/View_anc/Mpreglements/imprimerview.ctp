<?php
//App::import('Vendor','tcpdf/tcpdf'); 
App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();

/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kinda');
$pdf->SetTitle('commande');

// set default header data
//debug($boncommande['Client']['Raison_Social']);die;
$pdf->SetHeaderData('petit-logo.png', 60,'                Reglement    Numéro   :   '.$mpreglement['Mpreglement']['num']);

$html = "<p>Hello world</p>";
$pdf->writeHTML($html);

//$pdf->SetHeaderData('entete.jpg', 60);


$aaa = "Kinda";
$pdf->xfootertext =$aaa;
//$pdf->xfootertext1 = $footer1;
//$pdf->xfootertext2 = $footer2;

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

$pdf->AddPage();

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', 'A', 12);


$tbl .=' 
<table cellpadding="2" cellspacing="0" >
    <thead>
     <tr>
        <td height="30px" align="left" width="20%"><strong>Fournisseur : </strong></td>
        <td align="left">'.$mpreglement['Fournisseur']['raison_social'].'</td>
     </tr>
    <tr>
        <td height="30px" align="left"  width="20%"><strong>Date Reglement : </strong></td> 
        <td align="left">'.date("d/m/Y", strtotime(str_replace('-', '/', $mpreglement['Mpreglement']['Date']))).'</td>
    </tr> 
    <tr>
        <td height="30px" align="left"  width="20%" ><strong>Numero  : </strong></td> 
        <td align="left">'.$mpreglement['Mpreglement']['num'].'</td>
    </tr> 
    <tr>
        <td height="30px"></td>
    </tr>
    <tr>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%"><strong>Numero</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%"><strong>Date</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%"><strong>Total TTC</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%"><strong>Montant Reglé</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%"><strong>Reste</strong></td>
    </tr>
    </thead>';

$long="670";
          
                                            $sumtt=0;
                                            $sumrest=0;
                                            foreach($mpreglement['Mplignereglement'] as $i=>$b){
                                                $rest=$b['Facturefournisseur']['Total_TTC']-$b['Facturefournisseur']['Montant_Regler'];

              $long=$long-10;
$tbl .='
    
     <tr> 
        <td align="center" style="border-left:solid #000 2px;border-right:solid #000 2px;" width="20%" >&nbsp;<br>'.$b['Facturefournisseur']['Numero'].'<br></td>
        <td align="center" style=" border-right:solid #000 2px;" width="20%">&nbsp;<br>'.date("d/m/Y", strtotime(str_replace('-', '/',$b['Facturefournisseur']['Date']))).'</td>  
        <td align="center" style=" border-right:solid #000 2px;" width="20%">&nbsp;<br>'.$b['Facturefournisseur']['Total_TTC'].'</td>
        <td align="center" style=" border-right:solid #000 2px;" width="20%">&nbsp;<br>'.$b['Facturefournisseur']['Montant_Regler'].'</td>
        <td align="center" style="border-right:solid #000 2px;" width="20%">&nbsp;<br>'.$rest.'</td>  
    </tr> ';
                            $sumtt=$sumtt+$b['Facturefournisseur']['Total_TTC'];
                            $sumrest=$sumrest+$rest;
}
                                 $val=0;
                                    foreach($mpreglement['Mppiecereglement'] as $i=>$b){
                                        $val+=$b['montant']; 
                                    }           
$tbl .='
     <tr> 
        <td colspan="3" align="center" style="border-left:solid #000 2px;border-top:solid #000 2px;border-right:solid #000 2px; border-bottom:solid #000 2px;" width="60%"><strong><br>Total Facture :<br></strong></td>
        <td colspan="2" align="center" style="border-right:solid #000 2px;border-top:solid #000 2px; border-bottom:solid #000 2px;" width="40%"><strong><br>'.sprintf("%.3f",$sumtt).'<br></strong></td> 
    </tr> 
    <tr> 
        <td colspan="3" align="center" style="border-left:solid #000 2px;border-top:solid #000 2px;border-right:solid #000 2px; border-bottom:solid #000 2px;" width="60%"><strong><br>Total Reste :<br></strong></td>
        <td colspan="2" align="center" style="border-right:solid #000 2px;border-top:solid #000 2px; border-bottom:solid #000 2px;" width="40%"><strong><br>'.sprintf("%.3f",$sumrest).'<br></strong></td> 
    </tr>
    <tr> 
        <td colspan="3" align="center" style="border-left:solid #000 2px;border-top:solid #000 2px;border-right:solid #000 2px; border-bottom:solid #000 2px;" width="60%"><strong><br>Remise :<br></strong></td>
        <td colspan="2" align="center" style="border-right:solid #000 2px;border-top:solid #000 2px; border-bottom:solid #000 2px;" width="40%"><strong><br>'.$mpreglement['Mpreglement']['remise'].'<br></strong></td> 
    </tr>
    <tr> 
        <td colspan="3" align="center" style="border-left:solid #000 2px;border-top:solid #000 2px;border-right:solid #000 2px; border-bottom:solid #000 2px;" width="60%"><strong><br>Montant a Payer <br></strong></td>
        <td colspan="2" align="center" style="border-right:solid #000 2px;border-top:solid #000 2px; border-bottom:solid #000 2px;" width="40%"><strong><br>'.sprintf("%.3f",$val).'<br></strong></td>
    </tr>
 </table>';

$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('imprimer_view_reglement', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>