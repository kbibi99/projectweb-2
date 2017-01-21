<?php
//App::import('Vendor','tcpdf/tcpdf'); 
App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();

/////////////////////////
// set document information
//debug($imp_laiv);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kinda');
$pdf->SetTitle('commande');

if(!empty($Date_d)){
$Date_d=date("d/m/Y",strtotime(str_replace('-','/',$Date_d)));
}
if(!empty($Date_f)){
$Date_f=date("d/m/Y",strtotime(str_replace('-','/',$Date_f)));
}
$dat='du '.$Date_d.'  au   '.$Date_f;

// set default header data
//debug($boncommande['Client']['Raison_Social']);die;
$pdf->SetHeaderData('petit-logo.png', 60,'                                     Jounal des Ventes                  '.$dat);

$html = "<p>Hello world</p>";
$pdf->writeHTML($html);
 


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
// set font
//$pdf->SetFont('times', 'B', 16);

// add a page
$pdf->AddPage('L');

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('dejavusans', '', 10);
$tbl = <<<EOF

<br/><br/>

EOF;
//debug($boncommande['Boncommande']);die;

$aa='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;"';
foreach ($boncommande as $k=>$bc) {  
              $cli=$boncommande['Client']['Raison_Social'];  
              $dat=$boncommande['Boncommande']['Date']; 
              $datliv=$boncommande['Boncommande']['Date_Livraison']; 
              $adr=$boncommande['Ligneclient']['adresse'];  
              $tel=$boncommande['Client']['Tel'];   
              $fax=$boncommande['Client']['Fax'];
}
if($fam2==""){
   $fam2="Tout les familles"; 
}
if($cli2==""){
   $cli2="Tout les clients"; 
}
if($mar2==""){
   $mar2="Tout les marques"; 
}

$ff=  'Famille : '.$fam2 ;                    
$cc=' Client :  '.$cli2;
$mm=' Marque :'.$mar2 ;
//debug($tit);die;
        
$tbl = $tbl . <<<EOF
        

<table cellpadding="2" cellspacing="0" border="0" nobr="true">
   <tr>
          <td width="33%" align="center"><strong>$ff</strong></td>
          <td width="33%" align="center"><strong>$cc</strong></td>
          <td width="34%" align="center"><strong>$mm</strong></td>
      </tr>
      <tr>
          <td align="center" width="10%" $aa><strong>Date</strong></td>
          <td align="center" width="20%" $aa><strong>Contact</strong></td>
          <td align="center" width="8%"  $aa><strong>N° BL</strong></td>
          <td align="center" width="30%" $aa><strong>Designation</strong></td>
          <td align="center" width="8%"  $aa><strong>Qte</strong></td>
          <td align="center" width="8%"  $aa><strong>PU</strong></td>
          <td align="center" width="16%" $aa><strong>Montant</strong></td>
     </tr>  
    
EOF;
$cl="";$xx="";$dd="";$sqte=0;$smnt=0;
$long="650";

$i=0;$j=0;
$Tot_Qte=0;
$Tot_Mnt=0;
          foreach ($imp_laiv as $k=>$lig_liv){
         //      ---------- Supp Decalage entre l en Tete et Le Tableau ------------
                    $i++;
                    $j++;
                    $ffff='style= border-top:1px solid black;"';
                    if($i==17){
                        $tbl .='<tr>
                            <td style="valign:middle;font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:1px solid black;"> </td>
                            <td style="valign:middle;font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:1px solid black;"> </td>
                            <td style="valign:middle;font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:1px solid black;"> </td>
                            </tr>
                           </table>';
                        
                        $pdf->writeHTML($tbl, true, false, false, false, '');
                        $pdf->AddPage('L'); 
                        $i=0;
                $tbl ='
                    <table cellpadding="2" cellspacing="0" border="0" nobr="true">
    
      <tr>
          <td align="center" width="10%" '.$aa.'><strong>Date</strong></td>
          <td align="center" width="20%" '.$aa.'><strong>Contact</strong></td>
          <td align="center" width="8%"  '.$aa.'><strong>N° BL</strong></td>
          <td align="center" width="30%" '.$aa.'><strong>Designation</strong></td>
          <td align="center" width="8%"  '.$aa.'><strong>Qte</strong></td>
          <td align="center" width="8%"  '.$aa.'><strong>PU</strong></td>
          <td align="center" width="16%" '.$aa.'><strong>Montant</strong></td>
                    </tr>  ';}
              
              //debug($lig_liv);die;
              $date=$lig_liv['Bonlivraison']['Date'] ;
              $date=date("d/m/Y",strtotime(str_replace('-','/',$date)));
              $num=$lig_liv['Bonlivraison']['Numero'] ;  
              $desi=$lig_liv['Famille']['name'] ; 
              $prix=$lig_liv['Lignebonlivraison']['Prix'] ;  
              $Qte=$lig_liv['Lignebonlivraison']['Qte'] ; 
              $mnt=$lig_liv['Lignebonlivraison']['Total_HT'];
              $contact=$lig_liv['Bonlivraison']['Ligneclient']['name'];
               $Tot_Qte=$Tot_Qte+$Qte;
               $Tot_Mnt=$Tot_Mnt+$mnt; 
                $mnt=sprintf("%01.3f",$mnt);
                 // debug($prix);die;                              
              $long=$long-10;
              
         if($cl!=$lig_liv['Bonlivraison']['Numero'] ){
              $date=$lig_liv['Bonlivraison']['Date'] ;
              $date=date("d/m/Y",strtotime(str_replace('-','/',$date)));
              $num=$lig_liv['Bonlivraison']['Numero'] ;  
              $contact=$lig_liv['Bonlivraison']['Ligneclient']['name'];
              $cl=$lig_liv['Bonlivraison']['Numero'];
             $cc='';
             $bb='style="valign:middle;font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;"';
             $rr='style="valign:middle;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;"';
             $cadre='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;"';
             $tab='';
             
         }else{
//             $sqte=0;
//              $smnt=0;
             
                    
                        
             $date="";
             $num="";
             $contact="";
             $cc="";
             $bb='style="valign:middle;font-family:Arial, Helvetica, sans-serif;font-size:13px; border-left:1px solid black;border-right:1px solid black;"';
             $rr='style="valign:middle; border-left:1px solid black;border-right:1px solid black;"';
            
         }
 
 $sqte+=$lig_liv['Lignebonlivraison']['Qte'] ;
 $smnt+=$mnt;
 if($xx!=$lig_liv['Bonlivraison']['Numero']){   
    $sqte-=$lig_liv['Lignebonlivraison']['Qte'] ;
    $smnt-=$mnt; 
    if($k>0){
        //style="background-color:#B9CDCA;" 
  $tbl .='<tr>
                        <td width="38%"  align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;"><strong>Total '.$xx.'</strong></td>
                        <td width="30%"   style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;"></td> 
                        <td width="16%"  align="left" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;"><strong>'.$sqte.'</strong></td>  
                        <td width="16%" align="right" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;" ><strong>'.sprintf("%.3f",$smnt).'</strong></td>
                     </tr>';  
    }
    
  $xx=$lig_liv['Bonlivraison']['Numero'];
  $sqte=$lig_liv['Lignebonlivraison']['Qte'] ;
  $smnt=$mnt;
 }
 
$tbl = $tbl . <<<EOF
    <tr> 
       <td width="10%" align="center" $bb >$date</td>
        <td width="20%" align="center" $rr>$contact</td>
        <td width="8%" align="center"  $bb>$num</td>
        <td width="30%"                $cadre>$desi</td> 
        <td width="8%"  align="right" $cadre>$Qte</td>  
        <td width="8%"  align="right" $cadre>$prix</td>  
        <td width="16%" align="right" $cadre>$mnt</td>  
    </tr> 
       
EOF;

}

        //style="background-color:#B9CDCA;" 
  $tbl .='<tr>
                        <td width="38%"  align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;"><strong>Total '.$xx.'</strong></td>
                        <td width="30%"   style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;"></td> 
                        <td width="16%"  align="left" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;"><strong>'.$sqte.'</strong></td>  
                        <td width="16%" align="right" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;background-color:#A9F5E1; border-bottom:1px solid black;border-bottom:1px solid black;border-left:1px solid black;border-right:1px solid black;" ><strong>'.sprintf("%.3f",$smnt).'</strong></td>
                     </tr>';  
    
    
$tbl = $tbl . <<<EOF
                                      
 </table>
     
EOF;
//--------------------------------------------------
$cadre='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"';    
  $cadre2='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-right:2px solid black;"';    
  $cadre3='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';    
      //$Tot_Qte=sprintf("%01.3f",$Tot_Qte);
      $Tot_Mnt=sprintf("%01.3f",$Tot_Mnt);
    
$tbl .= '
    <br>
    <br>
    <br>
<table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table"  nobr="true" >       
     
        <tr bgcolor="#FFFFFF" align="center"> 
                <td width="35%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="18%" '.$cadre.'><strong>&nbsp;<br>Total Quantité<br></strong></td>
                <td  align="center" width="12%" '.$cadre.' ><strong>&nbsp;<br>'.$Tot_Qte.'<br></strong></td> 
        </tr>
        
       <tr bgcolor="#FFFFFF" align="center">
                <td width="35%" '.$cadre2.' ></td>
                <td colspan="2" align="centre" width="18%" '.$cadre.' ><strong>&nbsp;<br>Total Montant<br></strong></td>
                <td  align="center" width="12%" '.$cadre.' ><strong>&nbsp;<br>'.$Tot_Mnt.'<br></strong></td>
       </tr>
       
 </table>';


$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('journal_vente.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>