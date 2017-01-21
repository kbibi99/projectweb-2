
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
$pdf->SetHeaderData('BLUE.png', '60', '                           Etat Stock Famille    '.$m.'     Marque: '.$mm.'         Famille: '.$ff);
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
   <tr bgcolor="#FFFFFF" align="center">
        <th width="28%" align="center" $zz ><strong>Nom</strong></th>
        <th width="12%" align="center" $zz ><strong>Prix</strong></th>
        <th width="12%" align="center" $zz ><strong>Production</strong></th>
        <th width="12%" align="center" $zz ><strong>Vente</strong></th>
        <th width="12%" align="center" $zz ><strong>Stock</strong></th>
        <th width="12%" align="center" $zz ><strong>Qte Pair</strong></th>
        <th width="12%" align="center" $zz ><strong>Valeur Stock</strong></th>
    </tr>';

      $i=0;
        $somme=0;$somPRO=0;$somVEN=0;$somSTK=0;$somQTE_Pair=0;
            foreach ($famille as $famille){
                
//                ---------- Supp Decalage entre l en Tete et Le Tableau ------------
                    $i++;
                    if($i==16){
                        $tbl .='</table>';
                        
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('L'); 
                        $i=0;
                $tbl ='
                         <br>  
                                <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                                    <tr bgcolor="#FFFFFF" align="center">
                                       <th width="28%" align="center" $zz ><strong>Nom</strong></th>
                                       <th width="12%" align="center" $zz ><strong>Prix</strong></th>
                                       <th width="12%" align="center" $zz ><strong>Production</strong></th>
                                       <th width="12%" align="center" $zz ><strong>Vente</strong></th>
                                       <th width="12%" align="center" $zz ><strong>Stock</strong></th>
                                       <th width="12%" align="center" $zz ><strong>Quantité Pair</strong></th>
                                       <th width="12%" align="center" $zz ><strong>Valeur Stock</strong></th>
                                   </tr>';
                        
                    }
                
//                 ---------- Supp Decalage entre l en Tete et Le Tableau ------------
                $qte_packet=0;$qteBL=0;$prixstock=0;$qteR=0;$prix=0;$qte_pair=0;$qte_liv=0;
                foreach($stockdepot as $s=>$stock){
                     if($famille['Famille']['id']==$stock[0]['famille']){
                        $qte_packet=$stock[0]['qte_packet'];   
                     }
                 }
                 
                 foreach($ligneproduction as $lp=>$prod){
                     if($famille['Famille']['id']==$prod[0]['famille']){
                       $qte_liv=$prod[0]['qte_liv'];   
                    }
                }
                foreach ($lignebonlivraison as $l=>$ligne){
                      if($famille['Famille']['id']==$ligne[0]['famille']){
                       $qteBL=$ligne[0]['Qte'];   
                        }
                 }
            
            $qteR=$qte_liv-$qteBL;
            //$qteR=$qte_packet-$qteBL;
            $qte_pair=$qteR*12;
            $prix=$qteR*$famille['Famille']['Prix'];
            $somme=$somme+$prix;
            $prix=sprintf('%.3f',$prix);

            $somPRO=$somPRO+$qte_liv;
            $somVEN=$somVEN+$qteBL;
            $somSTK=$somSTK+$qteR;
            $somQTE_Pair=$somQTE_Pair+$qte_pair;
            
            
           $name=$famille['Famille']['name'];
           $prixFam=$famille['Famille']['Prix'];
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="28%" nobr="nobr" align="center" height="30px" $zz>'.$name.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$prixFam.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$qte_liv.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$qteBL.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$qteR.'</td>
        <td width="12%" nobr="nobr" align="center"  $zz>'.$qte_pair.'</td>
        <td width="12%" nobr="nobr" align="right"  $zz>'.$prix.'</td>
    </tr>' ;   

    
}
$somme=sprintf('%.3f',$somme);
$tbl .= '
    <tr bgcolor="#FFFFFF" align="center">  
        <td width="40%" nobr="nobr" align="right" colspan="2"   $zz><strong>Total</strong></td>
        <td width="12%" nobr="nobr" align="center"  $zz><strong>'.$somPRO.'</strong></td>
        <td width="12%" nobr="nobr" align="center"  $zz><strong>'.$somVEN.'</strong></td>
        <td width="12%" nobr="nobr" align="center"  $zz><strong>'.$somSTK.'</strong></td>
        <td width="12%" nobr="nobr" align="center"  $zz><strong>'.$somQTE_Pair.'</strong></td>
        <td width="12%" nobr="nobr" align="right"  $zz><strong>'.$somme.'</strong></td>
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