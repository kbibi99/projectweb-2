 
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('kinda');
$pdf->SetTitle('Liste des paies');


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
 
$pdf->SetHeaderData('BLUE.png', '60', '                                   Etat de paies '.$mm.' '.$aa);
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
//$dd='';
$tbl .= '

 <table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="nobr">       
        <tr bgcolor="#FFFFFF" align="center">
        <th width="5%" border="1" align="center"  ><strong>Code</strong></th>
        <th width="20%" border="1" align="center"  ><strong>Personnel</strong></th>
        <th width="15%" border="1" align="center"  ><strong>Salaire Base</strong></th>
        <th width="15%" border="1" align="center"  ><strong>Acompte</strong></th>
        <th width="15%" border="1" align="center"  ><strong>Total Paie</strong></th>
        <th width="15%" border="1" align="center"  ><strong>Montant Payer</strong></th>
        <th width="15%" border="1" align="center"  ><strong>Majoration</strong></th>
    </tr>';
$kk=0;$tot_ac=0;$tot_sal=0;
        $tot_pay=0;
        $tot_mp=0;
        $tot_r=0;
        $compt=0;
foreach ($paies as $k=>$ligne) {
        //debug($ligne);die;
    $compt++;
    
    $pers="";
    $mmss="";
    $ans="";
    if($kk==13){
        
        $tbl .= '</table>';
            $pdf->writeHTML($tbl, true, false, false, false, '');
                $pdf->AddPage('L');
                $kk=0;
                $tbl = '
           <table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="nobr">       
    <tr bgcolor="#FFFFFF" align="center">
        <th width="5%" border="1" align="center" style="font-family:Arial,font-size:16px" ><strong>Code</strong></th>
        <th width="20%" border="1" align="center" style="font-family:Arial,font-size:16px" ><strong>Personnel</strong></th>
        <th width="15%" border="1" align="center" style="font-family:Arial,font-size:16px" ><strong>Salaire Base</strong></th>
        <th width="15%" border="1" align="center" style="font-family:Arial,font-size:16px" ><strong>Acompte</strong></th>
        <th width="15%" border="1" align="center" style="font-family:Arial,font-size:16px" ><strong>Total Paie</strong></th>
        <th width="15%" border="1" align="center" style="font-family:Arial,font-size:16px" ><strong>Montant Payer</strong></th>
        <th width="15%" border="1" align="center" style="font-family:Arial,font-size:16px" ><strong>Majoration</strong></th>
    </tr> ';
    }
         $code  =  $ligne['Personnel']['Code'];
        $per  =  $ligne['Personnel']['name'];
        $moiis  = $ligne['Moi']['name']; 
        $an =  $ligne['Annee']['name'];
        $salaire  =  $ligne['Paie']['Salairebase'];
        $acompte  =  $ligne['Paie']['acompte'];
        $totp  =  $ligne['Paie']['Totalpaie'];
        $montp  =  $ligne['Paie']['Donne'];
        
        if(!empty($ligne['Paie']['Donne'])){
            $don=sprintf("%01.3f",round($montp));
        }
        if(empty($ligne['Paie']['Donne'])){
            $don="";
        }
        
        
        $res  =  $ligne['Paie']['Reste'];
        if($res != 0){
            $reste=$res*(-1);
        }
        if($res ==0){
            $reste=$res;
        }
        $date  =  $ligne['Paie']['Date'];
        $date=date('d/m/Y', strtotime(str_replace('-', '/',$date)));
        if($ligne['Personnel']['Type']=='cadre'){
        
        $salaire=sprintf("%01.3f",round($salaire));
        $acompte=sprintf("%01.3f",round($acompte));
        $totp=sprintf("%01.3f",round($totp));
        $montp=sprintf("%01.3f",round($montp));
        $reste=sprintf("%01.3f",round($reste));
         }
        $tot_sal=$tot_sal+$salaire;
        $tot_ac=$tot_ac+$acompte;
        $tot_pay=$tot_pay+$totp;
        $tot_mp=$tot_mp+$montp;
        $tot_r=$tot_r+$reste;
       
        //debug($per);die;
        //&nbsp;
       
        $tbl .= 
    '<tr bgcolor="#FFFFFF" nobr="nobr" align="center">    
        <td width="5%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center"  >'.$code.'<br></td>
        <td width="20%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center"  >'.$per.'<br></td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center"   >'.$salaire.'</td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center"   >'.$acompte.'</td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center"   >'.$totp.'</td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center"   >'.$don.'</td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center"   >'.$reste.'</td>
                
    </tr>';    

    
$kk++;}
$tbl .= 
        
      '<tr bgcolor="#FFFFFF" nobr="nobr" align="center">  
        <td colspan="2" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="right"><strong> Total</strong></td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center" ><strong>'.sprintf('%.3f',$tot_sal).'</strong></td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center" ><strong>'.sprintf('%.3f',$tot_ac).'</strong></td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center" ><strong>'.sprintf('%.3f',$tot_pay).'</strong></td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center" ><strong>'.sprintf('%.3f',$tot_mp).'</strong></td>
        <td width="15%" border="1" nobr="nobr" style="font-family:Arial,font-size:16px" align="center" ><strong>'.sprintf('%.3f',$tot_r).'</strong></td>
                
    </tr>
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('Paies.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>