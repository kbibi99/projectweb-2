
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Logistic Office');
$pdf->SetTitle('Etat Paie Salaire');

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
$pdf->SetHeaderData('BLUE.png', '60', '                 Etat Paie Salaire         Mois: '.$mm.'         Annee: '.$aa);
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
        <th width="6%" align="center" $zz ><strong> Code </strong></th>
        <th width="12%" align="center" $zz ><strong> Personnel </strong></th>
        <th width="11%" align="center" $zz ><strong> Salaire B </strong></th>
        <th width="8%" align="center" $zz ><strong> Nbr J/H </strong></th>
        <th width="11%" align="center" $zz ><strong> Montant J/H</strong></th>
        <th width="8%" align="center" $zz ><strong> Nbr J/H Dim</strong></th>
        <th width="11%" align="center" $zz ><strong> Montant J/H Dim</strong></th>
        <th width="11%" align="center" $zz ><strong> Acompte</strong></th>
        <th width="11%" align="center" $zz ><strong> Salaire</strong></th>
        <th width="11%" align="center" $zz ><strong> Montant a Payer</strong></th>
     </tr>';
        $i=0;
        $tot_sal=0;$tot_ac=0;$tot_mp=0;$tot_dim=0;$tot_mnt=0;$tot_b=0;
            if(!empty($paies)){
                
        foreach ($paies as $paie){
            $i++;
            if($i==12){
                $tbl .='</table>';
                $pdf->writeHTML($tbl, true, false, false, false, '');
                  $pdf->AddPage('L');   //  P  ou L 
                 $i=0;
                // $pdf->AddPage();
                 
                $tbl =  '
                    <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                      <tr bgcolor="#FFFFFF" align="center">
                         <th width="6%" align="center" $zz ><strong> Code </strong></th>
                         <th width="12%" align="center" $zz ><strong> Personnel </strong></th>
                         <th width="11%" align="center" $zz ><strong> Salaire B </strong></th>
                         <th width="8%" align="center" $zz ><strong> Nbr J/H </strong></th>
                         <th width="11%" align="center" $zz ><strong> Montant J/H</strong></th>
                         <th width="8%" align="center" $zz ><strong> Nbr J/H Dim</strong></th>
                         <th width="11%" align="center" $zz ><strong> Montant J/H Dim</strong></th>
                         <th width="11%" align="center" $zz ><strong> Acompte</strong></th>
                         <th width="11%" align="center" $zz ><strong> Salaire</strong></th>
                         <th width="11%" align="center" $zz ><strong> Montant a Payer</strong></th>
                      </tr>';
            }
            
           
            $nbrjh=0;$Mjh=0;$nbrjhD=0;$MD=0;$style="";
            if($paie['Personnel']['Type']=="cadre"){
               $nbrjh=$paie['Paie']['Nbjour'];
               $Mjh=$paie['Paie']['Montantjour'];
               $nbrjhD=$paie['Paie']['Nbjourdimanche'];
               $MD=$paie['Paie']['Montantjdtaux'];
               $paie['Paie']['Totalpaie']=round($paie['Paie']['Totalpaie']);
               $style='style="background-color:#CDD0D2;"';
            }
            if($paie['Personnel']['Type']=="ouvrier"){
               $nbrjh=$paie['Paie']['Nbheur'];
               $Mjh=$paie['Paie']['Montantheur'];
               $nbrjhD=$paie['Paie']['Nbheurdimanche'];
               $MD=$paie['Paie']['Montanthdtaux'];
               //$style='style="background-color:#E7F0EF;"';
               $style='';
            }
            $mont_payer=$paie['Paie']['Donne'];
            if(!empty($mont_payer)){
                $mnt=sprintf("%01.3f",round($paie['Paie']['Donne']));
            }
            if(empty($mont_payer)){
                $mnt="";
            }
            $sal_b=sprintf("%01.3f",round($paie['Paie']['Salairebase']));
            $Mjh=sprintf("%01.3f",round($Mjh));
            $MD=sprintf("%01.3f",round($MD));
            $acompte=sprintf("%01.3f",round($paie['Paie']['acompte']));
            $totpai=sprintf("%01.3f",round($paie['Paie']['Totalpaie']));
            $mntf=sprintf("%01.3f",round($paie['Paie']['Donne']));
            
            
            
            
            $tot_b=$tot_b+$sal_b;
            $tot_mnt=$tot_mnt+$Mjh;
            $tot_dim=$tot_dim+$MD;
            $tot_ac=$tot_ac+$acompte;
            $tot_sal=$tot_sal+$totpai;
            $tot_mp=$tot_mp+$mntf;
            
            
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="6%" nobr="nobr" align="center"  height="40px"  '.$style.'>'.$paie['Personnel']['Code'].'</td>
        <td width="12%" nobr="nobr" align="center"  height="40px"  '.$style.'>'.$paie['Personnel']['name'].'</td>
        <td width="11%" nobr="nobr" align="center"  '.$style.'>'.$sal_b.'</td>
        <td width="8%" nobr="nobr" align="center"  '.$style.'>'.$nbrjh.'</td>
        <td width="11%" nobr="nobr" align="center"  '.$style.'>'.$Mjh.'</td>
        <td width="8%" nobr="nobr" align="center"  '.$style.'>'.$nbrjhD.'</td>
        <td width="11%" nobr="nobr" align="center"  '.$style.'>'.$MD.'</td>
        <td width="11%" nobr="nobr" align="center"  '.$style.'>'.$acompte.'</td>
        <td width="11%" nobr="nobr" align="center"  '.$style.'>'.$totpai.'</td>
        <td width="11%" nobr="nobr" align="center"  '.$style.'>'.$mnt.'  </td>
  </tr>' ;   
    }
   $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">
        <td colspan="2" align="center" height="30px"><strong> Total</strong></td>
        <td width="11%" nobr="nobr" align="center"  ><strong>'.sprintf("%.3f",$tot_b).'</strong></td>
        <td width="8%" nobr="nobr" align="center"  ><strong></strong></td>
        <td width="11%" nobr="nobr" align="center"  ><strong>'.sprintf("%.3f",$tot_mnt).'</strong></td>
        <td width="8%" nobr="nobr" align="center"  ><strong></strong></td>
        <td width="11%" nobr="nobr" align="center"  ><strong>'.sprintf("%.3f",$tot_dim).'</strong></td>
        <td width="11%" nobr="nobr" align="center"  ><strong>'.sprintf("%.3f",$tot_ac).'</strong></td>
        <td width="11%" nobr="nobr" align="center"  ><strong>'.sprintf("%.3f",$tot_sal).'</strong></td>
        <td width="11%" nobr="nobr" align="center"  ><strong>'.sprintf("%.3f",$tot_mp).'</strong></td>
     </tr>';
            } 
$tbl .= '</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('EtatPaieSalaire.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>