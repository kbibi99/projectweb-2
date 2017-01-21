
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('kinda');
$pdf->SetTitle('Releve de vente Client');


// set default header data
//$date1 = explode('-', $date);
//$new_date = $date1[2] . '/' . $date1[1] . '/' . $date1[0];
$ent='entete.jpg'; 

 //debug($Date_debut);die;


$pdf->SetHeaderData('BLUE.png', '60', '                                  Etat de paie des personnels '.$ans);
        

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

 //set some language-dependent strings (optional)
//if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
//    require_once(dirname(__FILE__) . '/lang/eng.php');
//    $pdf->setLanguageArray($l);
//}
// ye9leb
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

// ---------------------------------------------------------
// set font
//$pdf->SetFont('times', 'B', 16);

// add a page
$pdf->SetFont('dejavusans', '', 10);
$pdf->AddPage('L');   //  P  ou L 

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

//$pdf->SetFont('times', 'A', 11);
   
        
// --------------------------------------------------------------------------
//$dd='';
$tbl = '
<br>

 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
 
      
    <tr >
        <th width="6%" align="center"  >Code</th>
        <th width="10%" align="center"  >الأسماء</th>
        <th width="7%" align="center"  >جانفي</th>
        <th width="7%" align="center"  >فيفري</th>
        <th width="7%" align="center"  >مارس</th>
        <th width="7%" align="center"  >أفريل</th>
        <th width="7%" align="center"  >ماي</th>
        <th width="7%" align="center"  >جوان</th>
        <th width="7%" align="center"  >جويلية</th>
        <th width="7%" align="center"  >أوت</th>
        <th width="7%" align="center"  >سبتمبر</th>
        <th width="7%" align="center"  >أكتوبر</th>
        <th width="7%" align="center"  >نوفمبر</th>
        <th width="7%" align="center"  >ديسمبر</th>   
    </tr>
';
        $i=0;
        $tot_janv=0;
        $tot_fev=0;
        $tot_mars=0;
        $tot_avr=0;
        $tot_mai=0;
        $tot_juin=0;
        $tot_juil=0;
        $tot_aout=0;
        $tot_sept=0;
        $tot_oct=0;
        $tot_nov=0;
        $tot_dec=0;
         foreach ($personnel as $person){
             //debug($personnel);die;
             $i++;
             if($i==13){
                  $tbl .=  '</table>';
                 
                 $pdf->writeHTML($tbl, true, false, false, false, '');
                  $pdf->AddPage('L');   //  P  ou L 
                 $i=0;
                // $pdf->AddPage();
                 
                $tbl =  '
<br>

 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
 <tr >
        <th width="6%" align="center"  >Code</th>
        <th width="10%" align="center"  >الأسماء</th>
        <th width="7%" align="center"  >جانفي</th>
        <th width="7%" align="center"  >فيفري</th>
        <th width="7%" align="center"  >مارس</th>
        <th width="7%" align="center"  >أفريل</th>
        <th width="7%" align="center"  >ماي</th>
        <th width="7%" align="center"  >جوان</th>
        <th width="7%" align="center"  >جويلية</th>
        <th width="7%" align="center"  >أوت</th>
        <th width="7%" align="center"  >سبتمبر</th>
        <th width="7%" align="center"  >أكتوبر</th>
        <th width="7%" align="center"  >نوفمبر</th>
        <th width="7%" align="center"  >ديسمبر</th>   
    </tr>
';  
             }
          $c=$person['Personnel']['Code'];   
        $p=$person['Personnel']['name'];    
        $jan=$abc[$person['Personnel']['id']][1];
        $fev=$abc[$person['Personnel']['id']][2];
        $mar=$abc[$person['Personnel']['id']][3];
        $av=$abc[$person['Personnel']['id']][4];
        $mai=$abc[$person['Personnel']['id']][5];
        $juin=$abc[$person['Personnel']['id']][6];
        $juil=$abc[$person['Personnel']['id']][7];
        $aout=$abc[$person['Personnel']['id']][8];
        $sept=$abc[$person['Personnel']['id']][9];
        $oct=$abc[$person['Personnel']['id']][10];
        $nov=$abc[$person['Personnel']['id']][11];
        $dec=$abc[$person['Personnel']['id']][12];
        
        $tot_janv=$tot_janv+$jan;
        $tot_fev=$tot_fev+$fev;
        $tot_mars=$tot_mars+$mar;
        $tot_avr=$tot_avr+$av;
        $tot_mai=$tot_mai+$mai;
        $tot_juin=$tot_juin+$juin;
        $tot_juil=$tot_juil+$juil;
        $tot_aout=$tot_aout+$aout;
        $tot_sept=$tot_sept+$sept;
        $tot_oct=$tot_oct+$oct;
        $tot_nov=$tot_nov+$nov;
        $tot_dec=$tot_dec+$dec;
        
        
        $tbl .= 
    '<tr>
        <td width="6%" align="center" ><br>'.$c.'<br></td>
        <td width="10%" align="center" ><br>'.$p.'<br></td>
        <td width="7%" align="center"  ><br>'.$jan.'<br></td>
        <td width="7%" align="center"  ><br>'.$fev.'<br></td>
        <td width="7%" align="center"  ><br>'.$mar.'<br></td>
        <td width="7%" align="center"  ><br>'.$av.'<br></td>
        <td width="7%" align="center"  ><br>'.$mai.'<br></td>
        <td width="7%" align="center"  ><br>'.$juin.'<br></td>
        <td width="7%" align="center"  ><br>'.$juil.'<br></td>
        <td width="7%" align="center"  ><br>'.$aout.'<br></td>
        <td width="7%" align="center" ><br>'.$sept.'<br></td>
        <td width="7%" align="center"  ><br>'.$oct.'<br></td>
        <td width="7%" align="center" ><br>'.$nov.'<br></td>
        <td width="7%" align="center" ><br>'.$dec.'<br></td>   
    </tr>';    

        }
      
        
$tbl .= 
        '
 </table>
<br>
<br>
<br>
<br>
<p align="center"><strong> Total Etat de Paie des Personnels</strong></p>
 <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       


<tr >
        <th width="9%" align="center"  >جانفي</th>
        <th width="9%" align="center"  >فيفري</th>
        <th width="9%" align="center"  >مارس</th>
        <th width="9%" align="center"  >أفريل</th>
        <th width="8%" align="center"  >ماي</th>
        <th width="8%" align="center"  >جوان</th>
        <th width="8%" align="center"  >جويلية</th>
        <th width="8%" align="center"  >أوت</th>
        <th width="8%" align="center"  >سبتمبر</th>
        <th width="8%" align="center"  >أكتوبر</th>
        <th width="8%" align="center"  >نوفمبر</th>
        <th width="8%" align="center"  >ديسمبر</th>   
    </tr>
    <tr>
        <td width="9%" align="center"  ><br>'.sprintf("%.3f",$tot_janv).'<br></td>
        <td width="9%" align="center"  ><br>'.sprintf("%.3f",$tot_fev).'<br></td>
        <td width="9%" align="center"  ><br>'.sprintf("%.3f",$tot_mars).'<br></td>
        <td width="9%" align="center"  ><br>'.sprintf("%.3f",$tot_avr).'<br></td>
        <td width="8%" align="center"  ><br>'.sprintf("%.3f",$tot_mai).'<br></td>
        <td width="8%" align="center"  ><br>'.sprintf("%.3f",$tot_juin).'<br></td>
        <td width="8%" align="center"  ><br>'.sprintf("%.3f",$tot_juil).'<br></td>
        <td width="8%" align="center"  ><br>'.sprintf("%.3f",$tot_aout).'<br></td>
        <td width="8%" align="center"  ><br>'.sprintf("%.3f",$tot_sept).'<br></td>
        <td width="8%" align="center"  ><br>'.sprintf("%.3f",$tot_oct).'<br></td>
        <td width="8%" align="center" ><br>'.sprintf("%.3f",$tot_nov).'<br></td>
        <td width="8%" align="center" ><br>'.sprintf("%.3f",$tot_dec).'<br></td>   
    </tr>
           
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('EtatDePaie.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>