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
$pdf->SetHeaderData('petit-logo.png', 60,'                Consultation  Reglement');

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
        <td height="35px" align="left" width="20%"><strong>Client : </strong></td>
        <td align="left">'.$reglement['Client']['Raison_Social'].'</td>
     </tr>
    <tr>
        <td height="35px" align="left"  width="20%"><strong>Date Reglement : </strong></td> 
        <td align="left">'.date("d/m/Y",strtotime(str_replace('-','/',($reglement['Reglement']['Date'])))).'</td>
    </tr> 
    <tr>
        <td height="35px" align="left"  width="20%" ><strong>Marque  : </strong></td> 
        <td align="left">'.$reglement['Marque']['name'].'</td>
    </tr> 
    <tr>
        <td height="35px"></td>
    </tr>
    <tr>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="16%"  height="35px"><strong>Numero</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%"><strong>Date</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="16%"><strong>Total TTC</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="16%"><strong>Montant Reglé</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="16%"><strong>Reste</strong></td>
        <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="16%"><strong>Remise</strong></td>
    </tr>
    </thead>';

$long="670";
          
                                            foreach ($reglement['Lignereglement'] as $l){
                                                $remise=$l['Bonlivraison']['Total_TTC']-$l['remise']-$l['Montant'];

              $long=$long-10;
$tbl .='
    
     <tr> 
        <td align="center" style="border-left:solid #000 2px;border-right:solid #000 2px;" width="16%" >&nbsp;<br>'.$l['Bonlivraison']['Numero'].'</td>
        <td align="center" style="border-right:solid #000 2px;" width="20%">&nbsp;<br>'.date("d/m/Y",strtotime(str_replace('-','/',$l['Bonlivraison']['Date']))).'</td>  
        <td align="center" style="border-right:solid #000 2px;" width="16%">&nbsp;<br>'.$l['Bonlivraison']['Total_TTC'].'</td>
        <td align="center" style="border-right:solid #000 2px;" width="16%">&nbsp;<br>'.$l['Montant'].'</td>
        <td align="center" style="border-right:solid #000 2px;" width="16%">&nbsp;<br>'.$remise.'</td>
        <td align="center" style="border-right:solid #000 2px;" width="16%">&nbsp;<br>'.$l['remise'].'</td>
    </tr> ';
                            
}
        $tot=$reglement['Reglement']['Montant']+$reglement['Reglement']['Remise'];

    $tbl .='
        <tr>
            <td align="center" colspan="4" style="border-left:solid #000 2px;border-right:solid #000 2px;border-top:solid #000 2px;" width="68%" >&nbsp;<br>Total<br></td>
            <td align="center" colspan="2" style="border-right:solid #000 2px;border-top:solid #000 2px;" width="32%">&nbsp;<br><strong>'.$tot.'</strong></td>
        </tr>
        <tr>
            <td align="center" colspan="4" style="border-left:solid #000 2px;border-right:solid #000 2px;border-top:solid #000 2px;" width="68%" >&nbsp;<br>Remise<br></td>
            <td align="center" colspan="2" style="border-right:solid #000 2px;border-top:solid #000 2px;" width="32%">&nbsp;<br><strong>'.$reglement['Reglement']['Remise'].'</strong></td>
        </tr>
        <tr>
            <td align="center" colspan="4" style="border-left:solid #000 2px;border-right:solid #000 2px;border-top:solid #000 2px;" width="68%" >&nbsp;<br>Net a Payer<br></td>
            <td align="center" colspan="2" style="border-right:solid #000 2px;border-top:solid #000 2px;" width="32%">&nbsp;<br><strong>'.$reglement['Reglement']['Montant'].'</strong></td>
        </tr>
        <tr>
            <td height="35px" colspan="6" style="border-top:solid #000 2px;"></td>
        </tr>
</table>
        ';
    
    
            $tbl .='
                <table cellpadding="2" cellspacing="0" border="1">
                <tr>
                    <td width="20%" align="center" height="35px"><strong>Mode reglement</strong></td>
                    <td width="16%" align="center" ><strong>Montant</strong></td>
                    <td width="16%" align="center" ><strong>N° Reçu</strong></td>
                    <td width="16%" align="center" ><strong>Echeance  </strong></td>
                    <td width="16%" align="center" ><strong>Numero Piece</strong></td>
                    <td width="16%" align="center" ><strong>Banque </strong></td>
                </tr>';
            
            foreach($pieceregement as $i=>$lp ){
                
                if($lp['Paiement']['id']==1){
                 $tbl .='
                    <tr> 
                        <td  align="center"  width="20%" height="35px">'.$lp['Paiement']['name'].'</td>
                        <td  align="center"  width="16%" height="35px">'.$lp['Piece']['montant'].'</td>
                        <td  align="center"  width="16%" height="35px">'.$lp['Piece']['num_recu'].'</td>
                    </tr>';
                }
            if($lp['Paiement']['id']!=1){
            $tbl .='
                <tr> 
                    <td  align="center"  width="20%" height="35px">'.$lp['Paiement']['name'].'</td>
                    <td  align="center"  width="16%" height="35px">'.$lp['Piece']['montant'].'</td>
                    <td  align="center"  width="16%" height="35px">'.$lp['Piece']['num_recu'].'</td>
                 
                    <td  align="center"  width="16%" height="35px">'.date("d/m/Y",strtotime(str_replace('-','/',$lp['Piece']['echance']))).'</td>
                    <td  align="center"  width="16%" height="35px">'.$lp['Piece']['num'].'</td>
                    <td  align="center"  width="16%" height="35px">'.$lp['Piece']['banque'].'</td>
                </tr>';
            }
            }
$tbl .='</table>';

$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('imprimer_view_reglement', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>