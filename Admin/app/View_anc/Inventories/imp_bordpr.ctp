<?php
//App::import('Vendor','tcpdf/tcpdf'); 
App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();

/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kinda');
$pdf->SetTitle('Etat');

// set default header data
 $entete= $this->webroot."petit-logo.png";
 //debug($entete);die;
$pdf->SetHeaderData("petit-logo.png",70,'                      Tableau de bord du Pièces de rechange ');

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
// set font

$pdf->AddPage('L');

$pdf->SetFont('times', 'A', 10);
$tbl = <<<EOF

<br/><br/>

EOF;

$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" style="width: 100%" >
    
    <tr>
        <td  align="center" style="width: 14%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Code</strong></td>
        <td  align="center" style="width: 30%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Designation</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Prix</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Qte Entré</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Entré %</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Valeur entré</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Qte Sorti</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Sorti %</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Valeur sorti</strong></td>
        <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Ecart</strong></td>
    </tr> 
    
EOF;


                                               $tot_qte=0;
                                               $tot_val_entr=0;
                                               $tot_qte_srt=0;
                                               $tot_val_srt=0;
                                               $tot_ecart=0;
                                       
                                       $qtetten=0;
                                       $qtettso=0;
                                       $valtt=0;
                                       $mat_id="";
                                       $art=array();
                                       
                                        foreach ($prentrees as $entre ) {
                                            $qtetten+=$entre[0]['sumqte'];
                                            $valtt+=$entre[0]['sumttc'];
                                        } 
                                       
                                        foreach ($prsortiee as $sorti ) {
                                            $qtettso+=$sorti[0]['sumqte'];
                                        } 
                                        
                                        $hh=0;
                                       foreach ($matierepremieres as $key =>$value ) {
                                          $hh++;
                                          if($hh==22){
                                              $tbl .='</table>';
                                              
                                              $pdf->writeHTML($tbl, true, false, false, false, '');
                                              $pdf->AddPage('L');
                                              $hh=0;
                                              $tbl ='<table cellpadding="2" cellspacing="0" style="width: 100%" >
    
                                            <tr>
                                                <td  align="center" style="width: 14%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Code</strong></td>
                                                <td  align="center" style="width: 30%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Designation</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Prix</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Qte Entré</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Entré %</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Valeur entré</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Qte Sorti</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Sorti %</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Valeur sorti</strong></td>
                                                <td  align="center" style="width: 7%;border-bottom:solid 2px black;border-top:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;"><strong>Ecart</strong></td>
                                            </tr>'; 
                                          }
                                           
                                             $sumqte_en=0;
                                             $sumttc=0;
                                             $pc_entre=0;
                                             $sumqte_so=0;
                                             $pc_sorti=0;   
                                             $ecart=0; 
                                             $pendr_en=0;
                                             $pendr_so=0;
                                           
                                           $mat_id=$value['Matierepremiere']['id'];
                                           $code=$value['Matierepremiere']['code'];
                                           $nom=$value['Matierepremiere']['designation'];
                                           $moyp=$value['Matierepremiere']['prixachat'];
                                           $art[$mat_id]=$moyp;
                                      //     debug($mat_id);
                                           foreach ($prentree as $entre ) {
                                               if($entre[0]['avgmat']==$mat_id){  
                                               $sumqte_en=$entre[0]['sumqte'];
                                               $sumttc=$entre[0]['sumttc'];
                                               $pendr_en=$sumttc;
                                               $pc_entre=$sumqte_en*100/$qtetten;
                                               $moyp=$sumttc/$sumqte_en;
                                               $art[$mat_id]=$moyp;
                                               } 
                                           } 
                                           //debug($qtettso);
                                           foreach ($prsorti as $sorti) {
                                               if($sorti[0]['avgmat']==$mat_id){ 
                                               $sumqte_so=$sorti[0]['sumqte']; 
                                               //debug($sumqte_so);
                                               $pc_sorti=$sumqte_so*100/$qtettso;
                                               $pendr_so=$sumqte_so*@$art[$mat_id];
                                               } 
                                           }
                                           $ecart=$sumqte_en-$sumqte_so;

                                             $val_pc_entre=round($pc_entre) ;  
                                             $val_pendr_en=@$pendr_en;
                                             $val_pc_sorti=round($pc_sorti);
                                             $val_pendr_so=@$pendr_so;
                                             $val_ecart=$ecart;

              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr  > 
        <td style="width: 14%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$code</td>
        <td style="width: 30%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$nom</td>
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$moyp</td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$sumqte_en</td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$val_pc_entre%</td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$val_pendr_en</td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$sumqte_so</td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$val_pc_sorti%</td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$val_pendr_so</td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;">$val_ecart</td>  
   </tr> 
  
EOF;
                                $tot_qte=$tot_qte+$sumqte_en;
                                $tot_val_entr=$tot_val_entr+@$pendr_en;
                                $tot_qte_srt=$tot_qte_srt+$sumqte_so;
                                $tot_val_srt=$tot_val_srt+@$pendr_so;
                                $tot_ecart=$tot_ecart+$ecart;     
}
                                
            
$tbl = $tbl . <<<EOF
  
        <tfoot>
    <tr> 
        <td align="center" height="30px" colspan="3" style="width: 51%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>TOTAL</strong></td>
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$tot_qte</strong></td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$tot_val_entr</strong></td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$tot_qte_srt</strong></td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"></td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$tot_val_srt</strong></td>  
        <td align="right" style="width: 7%;border-bottom:solid 2px black;border-left:solid 2px black;border-right:solid 2px black;border-top:solid 2px black;"><strong>$tot_ecart</strong></td>  
    </tr> 
        </tfoot>     
 </table>
EOF;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('piece_rechange.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>