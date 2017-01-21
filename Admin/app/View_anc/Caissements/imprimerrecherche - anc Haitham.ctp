
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


$pdf->SetHeaderData('BLUE.png', '30', '                                                          Etat de Caissement '.$d);
        

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
<br>
 <table border="0" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
    <thead>      
        <tr bgcolor="#FFFFFF" align="center">
            <th width="48%" align="center"  >Encaissement</th>
            <th width="4%" align="center"  ></th>
            <th width="48%" align="center"  >Décaissement</th>
        </tr>
    </thead>';
         
    $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">    
        <td width="48%" nobr="nobr" align="center"  >';
//------------- Debut TD1-------------------
$tbl .= '    
         
<table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
<thead>    
    <tr bgcolor="#FFFFFF" align="center">
        <th width="56%" align="center"  >Type</th>
        <th width="22%" align="center"  >Date</th>
        <th width="22%" align="center"  >Montant</th>
    </tr>
</thead>';     
     $solde=0; $solde=0; $totREG=0; $totALM=0;$totEnC=0;
        if(!empty($caissements)){       
        foreach (@$caissements as $caissement){
                if(@$caissement['Caissement']['Type']=='REG'){
                $totREG=$totREG+$caissement['Caissement']['Montant'];
                $cadreB='';
            }
            if(@$caissement['Caissement']['Type']=='Alimentation'){
                $totALM=$totALM+$caissement['Caissement']['Montant'];
                $cadreB='style="background-color:#A6C8C4;"';
            }
            $totEnC=$totREG+$totALM;
            
            $Ctype=$caissement['Caissement']['Type'];
            $Cclient=$caissement['Caissement']['Client']; 
	    $Cdate=$caissement['Caissement']['Date'];
            $Cdate=date('d/m/Y', strtotime(str_replace('-', '/',$Cdate)));
            $Cmontant=$caissement['Caissement']['Montant'];
        
        $totREG=sprintf('%.3f',$totREG);
        $totALM=sprintf('%.3f',$totALM);
        $totEnC=sprintf('%.3f',$totEnC);
        $totDec=sprintf('%.3f',$totDec);
        
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">      
        <td width="56%" nobr="nobr" align="left"  >'.$Ctype.'  ('.$Cclient.')</td>
        <td width="22%" nobr="nobr" align="center"  >'.$Cdate.'</td>
        <td width="22%" nobr="nobr" align="right"   >'.$Cmontant.'</td>              
    </tr>';    
        }} 
      $tbl .=  
       '<tr bgcolor="#FFFFFF" align="center">  
            <td colspan="2" align="right" width="78%"   >Total Réglement</td>
            <td  align="right" width="22%">'.$totREG.'</td>    
        </tr>
      
        <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="2" align="right" width="78%"   >Total Alimentation</td>
                <td  align="right" width="22%">'.$totALM.'</td>    
           </tr>
        <tr bgcolor="#FFFFFF" align="center">  
                <td colspan="2" align="right" width="78%"   >Total Encaissement</td>
                <td  align="right" width="22%">'.$totEnC.'</td>    
        </tr>';
        
$tbl .= 
                  
'</table>';


//---------- Fin TD 1--------------
    $tbl .=
        '</td>       
        <td width="4%" nobr="nobr" align="center"  ></td>
        <td width="48%" nobr="nobr" align="right"  >';
//   ----------Début TD 2 --------------------
     $tbl .= '    
         
<table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
<thead>    
    <tr bgcolor="#FFFFFF" align="center">
        <th width="56%" align="center"  >Type</th>
        <th width="22%" align="center"  >Date</th>
        <th width="22%" align="center"  >Montant</th>
    </tr>
</thead>';     
     $totDec=0;
        if(!empty($decaissements)){       
        foreach (@$decaissements as $decaissement){
                if(@$decaissement['Decaissement']['Type']=='SRT'){
                $totDec=$totDec+$decaissement['Decaissement']['Montant'];
                $cadreB='';
            }   
            $Dtype=$decaissement['Decaissement']['Type'];
            $Dclient=$decaissement['Decaissement']['Client']; 
	    $Ddate=$decaissement['Decaissement']['Date'];
            $Ddate=date('d/m/Y', strtotime(str_replace('-', '/',$Ddate)));
            $Dmontant=$decaissement['Decaissement']['Montant'];
        
        $totDec=sprintf('%.3f',$totDec);
        $tbl .= 
    '<tr bgcolor="#FFFFFF" align="center">      
        <td width="56%" nobr="nobr" align="left"  >'.$Dtype.$Dclient.'</td>
        <td width="22%" nobr="nobr" align="center"  >'.$Ddate.'</td>
        <td width="22%" nobr="nobr" align="right"   >'.$Dmontant.'</td>              
    </tr>';    
        }} 
      $tbl .=  
       '<tr bgcolor="#FFFFFF" align="center">  
                <td colspan="2" align="right" width="78%"   >Total Décaissement</td>
                <td  align="right" width="22%">'.$totDec.'</td>    
           </tr>';
        
$tbl .= 
                  
'</table>';
         $tot=$totEnC-$totDec;
   
         
  // ------------------ Fin TD 2       
         $tbl .=
         '</td>
                
    </tr><br>';    
//-----------------------TR 2
         if($tot>=0){
             $cadreC='style="float: right !important;display: none;"';
         }
         if($tot<0){
             $cadreD='style= "float: right !important;display: none;"';
         }
         $tot=sprintf('%.3f',$tot);
   $tbl.=
      '<tr>
          <td  width="48%" '.$cadreD.'>
          <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table"  nobr="true" >       
                <thead>    
                    <tr bgcolor="#FFFFFF" align="center">
                         <th width="60%" align="center"  >Solde Créditeur</th>
                         <th width="40%" align="center"  >'.$tot.'</th>
                    </tr>
                </thead>   
        </table>
        </td>
      <td width="52%"> </td>

<td width="48%" '.$cadreC.'>
          <table border="1" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true">       
                <thead>    
                    <tr bgcolor="#FFFFFF" align="center">
                         <th width="60%" align="center"  >Solde Debiteur</th>';
                            $totD=-($totEnC-$totDec);
                                        $totD=sprintf('%.3f',$totD);
   
   $tbl.='
                        <th width="40%" align="center"  >'.$totD.'</th>
                    </tr>
                </thead>   
        </table>
        </td>

</tr>';
           
           
           
           
           
           
           
           
        
$tbl .= 
        '
           
</table>';
    

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('EtatDeCaissement.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>