
<?php

App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();
/////////////////////////
// set document information
//debug($lignes);die;
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('kinda');
$pdf->SetTitle('Etat de Caissement');


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


$pdf->SetHeaderData('BLUE.png', '60', '                                           Etat de Caissement '.$d);
        

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

//$lg = Array();
//$lg['a_meta_charset'] = 'UTF-8';
//$lg['a_meta_dir'] = 'rtl';
//$lg['a_meta_language'] = 'fa';
//$lg['w_page'] = 'page';


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
        <th width="50%" align="center" height="30px" ><strong>ENTREE</strong></th>
        <th width="50%" align="center" height="30px" ><strong>SORTIE</strong></th>
    </tr>
    <tr bgcolor="#FFFFFF" align="center">
        <th width="12%" align="center" height="30px" ><strong>Date</strong></th>
        <th width="26%" align="center" height="30px" ><strong>Designation</strong></th>
        <th width="12%" align="center" height="30px" ><strong>Montant</strong></th>
        
        <th width="12%" align="center" height="30px" ><strong>Date</strong></th>
        <th width="26%" align="center"  height="30px" ><strong>Designation</strong></th>
        <th width="12%" align="center" height="30px"  ><strong>Montant</strong></th>  
    </tr>
';   
$k=0; $j=0;$c=0;

     $solde=0; $solde=0; $totREG=0; $totALM=0;$totEnC=0;$AlmOB="";
     $totDec=0;
        if(!empty($caissements)){  
            foreach (@$caissements as $caissement){
                $k=$k+1;
            }
           // debug($k);
       }
       if(!empty($decaissements)){ 
            foreach (@$decaissements as $decaissement){
                $j=$j+1;
            }
           // debug($j);
        }
        if($k-$j >=0){
            $c=$k;
        }else{
            $c=$j;
        }
         //debug($c);die;
//        debug($caissements);
//        debug($decaissements);die;
        $l=0;
         for ($i = 0; $i < $c; $i++) {
              $l++;
             if($l==9){
                  $tbl .=  '</table>';
                 
                 $pdf->writeHTML($tbl, true, false, false, false, '');
                  $pdf->AddPage('L');   //  P  ou L 
                 $l=0;
             $tbl = '    
         
            <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                <tr bgcolor="#FFFFFF" align="center">
                     <th width="50%" align="center" height="30px" ><strong>ENTREE</strong></th>
                     <th width="50%" align="center" height="30px" ><strong>SORTIE</strong></th>
                </tr>
                <tr bgcolor="#FFFFFF" align="center">
                    <th width="12%" align="center" height="30px" ><strong>Date</strong></th>
                    <th width="26%" align="center" height="30px" ><strong>Designation</strong></th>
                    <th width="12%" align="center" height="30px" ><strong>Montant</strong></th>
                    <th width="12%" align="center" height="30px" ><strong>Date</strong></th>
                    <th width="26%" align="center" height="30px" ><strong>Designation</strong></th>
                    <th width="12%" align="center" height="30px" ><strong>Montant</strong></th>  
                </tr>
            ';  
             
             }     
             
     
             $caissements[$i];
             $decaissements[$i];
           //debug($decaissements[$i]);die;
             $Ddate="";
             $Cdate="";
             $AlmOB="";
             
//             -------------------- Caissements----------------
             if(@$caissements[$i]['Caissement']['Type']=='REG'){
                $totREG=$totREG+$caissements[$i]['Caissement']['Montant'];
                 $cadreB='';
           }
            if(@$caissements[$i]['Caissement']['Type']=='Alimentation'){
                $totALM=$totALM+$caissements[$i]['Caissement']['Montant'];
                $AlmOB=$caissements[$i]['Caissement']['observation'];
                $cadreB='style="background-color:#C8D0D2;"';
                
            }
            $totEnC=$totREG+$totALM;
            
            $Ctype=$caissements[$i]['Caissement']['Type'];
            $Cclient=$caissements[$i]['Caissement']['Client']; 
            if(!empty($caissements[$i]['Caissement']['Date'])){
	    $Cdate=$caissements[$i]['Caissement']['Date'];
            $Cdate=date('d/m/Y', strtotime(str_replace('-', '/',$Cdate)));
            }
            $Cmontant=$caissements[$i]['Caissement']['Montant'];
        
        $totREG=sprintf('%.3f',$totREG);
        $totALM=sprintf('%.3f',$totALM);
        $totEnC=sprintf('%.3f',$totEnC);
        $totDec=sprintf('%.3f',$totDec);
             
             
             
//             ------------- Decaissements -------------
             if(@$decaissements[$i]['Decaissement']['Type']=='SRT'){
                $totDec=$totDec+$decaissements[$i]['Decaissement']['Montant'];
                
            } 
            $Dtype=$decaissements[$i]['Decaissement']['Type'];
            $Dobsr=$decaissements[$i]['Decaissement']['observation'];
            $Dclient=$decaissements[$i]['Decaissement']['Client']; 
            if(!empty($decaissements[$i]['Decaissement']['Date'])){
	    $Ddate=$decaissements[$i]['Decaissement']['Date'];
            $Ddate=date('d/m/Y', strtotime(str_replace('-', '/',$Ddate)));
            }
            $Dmontant=$decaissements[$i]['Decaissement']['Montant'];
        
            $totDec=sprintf('%.3f',$totDec);
          //  debug();die; 
            
            $text="";
    $tot=$totEnC-$totDec;
        if($tot>=0){
             $text='Solde Debiteur';
         }
         if($tot<0){
             $text='Solde Créditeur';
         }
         $tot=sprintf('%.3f',$tot);

        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">   
        <td width="12%" nobr="nobr" align="center" '.$cadreB.' height="50px" >'.$Cdate.'</td>
        <td width="26%" nobr="nobr" align="center"  '.$cadreB.' height="50px">'.$Cclient.' '.$AlmOB.'</td>
        <td width="12%" nobr="nobr" align="right"  '.$cadreB.' height="50px" >'.$Cmontant.'</td>   
        
        <td width="12%" nobr="nobr" align="center" height="50px" >'.$Ddate.'</td>
        <td width="26%" nobr="nobr" align="center" height="50px" >'.$Dobsr.'</td>
        <td width="12%" nobr="nobr" align="right"  height="50px" >'.$Dmontant.'</td> 
    </tr>'; 
        
  }   
         
$tbl .= '
          

</table>';


//------------------------
      



  $cadre='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"';    
  $cadre2='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-right:2px solid black;"';    
  $cadre3='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';    
      
    
$tbl .= '
    <br>
    <br>
    <br>
<table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table"  nobr="true" >       
     
        <tr bgcolor="#FFFFFF" align="center"> 
                <td width="25%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.'><strong>&nbsp;<br>TOTAL ENTREE<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$totEnC.'<br></strong></td> 
        </tr>
        <tr bgcolor="#FFFFFF" align="center">
                <td width="25%" '.$cadre2.'></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>TOTAL SORTIE<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$totDec.'<br></strong></td>
       </tr>
       <tr bgcolor="#FFFFFF" align="center">
                <td width="25%" '.$cadre2.' ></td>
                <td colspan="2" align="centre" width="25%" '.$cadre.' ><strong>&nbsp;<br>SOLDE<br></strong></td>
                <td  align="center" width="20%" '.$cadre.' ><strong>&nbsp;<br>'.$tot.'<br></strong></td>
       </tr>
       
 </table>';


$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('EtatDeCaissement.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>