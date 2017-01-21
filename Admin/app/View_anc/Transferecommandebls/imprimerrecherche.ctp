
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('kinda');
$pdf->SetTitle('Tableau de bord');


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


$pdf->SetHeaderData('BLUE.png', '60', '               Tableau de bord '.$d.'       Client: '.$cc.'        Marque: '.$mm);
        

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
        <th width="20%" align="center" height="30px" ><strong>Nom Famille</strong></th>
        <th width="16%" align="center"  ><strong>Qte Dem</strong></th>
        <th width="16%" align="center"  ><strong>Qte Liv</strong></th>
        <th width="16%" align="center"  ><strong>Ecart</strong></th>
        <th width="16%" align="center"  ><strong>Valeur Liv</strong></th>
        <th width="16%" align="center"  ><strong>Pourcentage Liv</strong></th>
  </tr>';
        
    $hh=0;
         $tot_Qte_Dem=0;$tot_Qte_Liv=0;$tot_ecart=0;
	 foreach ($famille as $famille){
             $hh++;
             if($hh==15){
             $tbl.='</table>';
             $pdf->writeHTML($tbl, true, false, false, false, '');
             $pdf->AddPage('L');
             $hh=0;
             $tbl = '
                <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                <tr bgcolor="#FFFFFF" align="center">
                        <th width="20%" align="center" height="30px" ><strong>Nom Famille</strong></th>
                        <th width="16%" align="center"  ><strong>Qte Dem</strong></th>
                        <th width="16%" align="center"  ><strong>Qte Liv</strong></th>
                        <th width="16%" align="center"  ><strong>Ecart</strong></th>
                        <th width="16%" align="center"  ><strong>Valeur Liv</strong></th>
                        <th width="16%" align="center"  ><strong>Pourcentage Liv</strong></th>
                  </tr>';
             }
             
           // debug($famille);die;
             $Qte_Dem=0;$Qte_Liv=0;$Total_HT=0;$ecart=0;$prcliv=0;$prcQte=0;
         foreach($lignecommande as $c=>$comm){
            if($famille['Famille']['id']==$comm[0]['famille']){
                $Qte_Dem=$comm[0]['Qte_Dem'];  
                $tot_Qte_Dem=$tot_Qte_Dem+$Qte_Dem;
            }
         }
         foreach ($lignebonlivraison as $l=>$bl){
             if($famille['Famille']['id']==$bl[0]['famille']){
                 $Qte_Liv=$bl[0]['Qte_Liv'];
                 $tot_Qte_Liv=$tot_Qte_Liv+$Qte_Liv;
                 $prcQte=($Qte_Liv/$total_Qte)*100;
                 $prcQte=  sprintf('%.2f',$prcQte);
                 
                 $Total_HT=$bl[0]['Total_HT'];
                 $prcliv=($Total_HT/$total_liv)*100;
                 $prcliv=  sprintf('%.2f',$prcliv);
             }
         }
           $ecart=$Qte_Dem-$Qte_Liv;
           $tot_ecart=$tot_ecart+$ecart;
        $nom=$famille['Famille']['name'];
        
        $tbl .= 
    '<tr bgcolor="'.$color.'" align="center">    
        <td width="20%" nobr="nobr" align="center" height="30px">'.$nom.'</td>
        <td width="16%" nobr="nobr" align="center">'.$Qte_Dem.'</td>
        <td width="16%" nobr="nobr" align="center">'.$Qte_Liv.'</td>
        <td width="16%" nobr="nobr" align="center">'.$ecart.'</td>    
        <td width="16%" nobr="nobr" align="center">'.$Total_HT.'</td>
        <td width="16%" nobr="nobr" align="center">'.$prcQte.'%</td>            
    </tr>';    

    
        }
      $tbl .=  
       ' 
           <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="1" align="right" width="20%"  height="30px" ></td>
                <td  align="center" width="16%"><strong>'.$tot_Qte_Dem.'</strong></td>
                <td  align="center" width="16%"><strong>'.$tot_Qte_Liv.'</strong></td>
                <td  align="center" width="16%"><strong>'.$tot_ecart.'</strong></td>
                <td  align="center" width="16%"><strong>'.$total_liv.'</strong></td>
               
          </tr>';
        
$tbl .= 
        '
           
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('releve_vente.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>