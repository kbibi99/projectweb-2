
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('kinda');
$pdf->SetTitle('Rapport Journalier de Production Finition');


// set default header data
//$date1 = explode('-', $date);
//$new_date = $date1[2] . '/' . $date1[1] . '/' . $date1[0];
$ent='entete.jpg'; 

//$debut=$Date_debut;$fin=$Date_fin;
//
//if($debut!="" && $fin!=""){
$date=date('d/m/Y', strtotime(str_replace('-', '/',$date)));
//$Date_fin=date('d/m/Y', strtotime(str_replace('-', '/',$Date_fin)));
//$d=' du  '.$Date_debut.' au  '.$Date_fin;
//}
 //debug($Date_debut);die;


$pdf->SetHeaderData('BLUE.png', '50', "           Rapport Journalier de  Production Finition ");
        

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
 // debug($ligneproduction); die;
// add a page
$pdf->SetFont('dejavusans', '', 12);
   // debug($famille);die;
 foreach ($familles as $fam){
    $name=$fam['Famille']['name'];
    $id=$fam['Famille']['id'];

    
   //  P  ou L 
    if($lignecount[$id]!=0)
    {
$pdf->AddPage('P');

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
   
        
// --------------------------------------------------------------------------
//$dd='';


$tbl ='
<br>

    <table>
        <tr>
            <td><strong>Famille : </strong>'.$name.'</td>
            <td><strong>Date : </strong>'.$date.'</td>
        </tr>
    </table>
<br>

 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
<thead>  
    <tr bgcolor="#FFFFFF" align="center">
        <th width="30%" align="center"  >Réference</th>
        <th width="19%" align="center"  >Couleur</th>
        <th width="12%" align="center"  >Quantité</th>
        <th width="13%" align="center"  >Qte Livré</th>
        <th width="13%" align="center"  >Qte Resté</th>
        <th width="13%" align="center"  >Qte Recu</th>
    </tr>
</thead>';
        $totQte=0;$totL=0;$totRest=0;$totRecu=0;
  // debug($ligneproduction[$id]); die;
foreach ($ligneproduction[$id] as $k=>$ligneprod){
    //debug($ligneprod['Article']['famille_id']);
            
                   
                $fam=$ligneprod['Article']['Famille']['name']; 
          //debug($ligneprod);die;
               
            
               //debug($ligneprod);die;
              $ref=$ligneprod['Article']['reference'];
              $col=$ligneprod['Article']['Couleur']['name'];
              
              $qte=$ligneprod['Ligneproduction']['qte'];
              $qte_liv=$ligneprod['Ligneproduction']['qte_liv'];
              $qte_rest=$ligneprod['Ligneproduction']['qte_rest'];
              $qte_recu=$ligneprod['Ligneproduction']['qte_recu']; 
              $marq=$ligneprod['Production']['Marque']['name'];
              
              $totQte=$totQte+$qte;
              $totL=$totL+$qte_liv;
              $totRest=$totRest+$qte_rest;
              $totRecu=$totRecu+$qte_recu;
         
        $tbl .= 
    '<tr bgcolor="'.$color.'" align="center">    
        <td width="30%" nobr="nobr" align="center"  >'.$ref.'</td>
        <td width="19%" nobr="nobr" align="center"   >'.$col.'</td>
        <td width="12%" nobr="nobr" align="right"   >'.$qte.'</td>
        <td width="13%" nobr="nobr" align="right"   >'.$qte_liv.'</td>    
        <td width="13%" nobr="nobr" align="right"   >'.$qte_rest.'</td>
        <td width="13%" nobr="nobr" align="right"   >'.$qte_recu.'</td>
                
    </tr>';    
    }
    $tbl .= 
            '<tr>
                <td colspan="2" width="49%"></td>
                <td width="12%" align="right"><strong>'.$totQte.'</strong></td>
                <td width="13%" align="right"><strong>'.$totL.'</strong></td>
                <td width="13%" align="right"><strong>'.$totRest.'</strong></td>
                <td width="13%" align="right"><strong>'.$totRecu.'</strong></td>


            </tr>';
    
      $tbl .= 
        ' </table>';
      $pdf->writeHTML($tbl, true, false, false, false, '');

    }
}

//Close and output PDF document
ob_end_clean();
$pdf->Output('Rapport_Journaliser_Production_Finition.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>