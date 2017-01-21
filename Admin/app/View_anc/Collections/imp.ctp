<?php
//App::import('Vendor','tcpdf/tcpdf'); 
App::import('Vendor', 'xtcpdf');
$pdf = new XTCPDF();

/////////////////////////
// set document information
//debug($lignes);die;
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kinda');
$pdf->SetTitle('commande');

// set default header data
//debug($boncommande['Client']['Raison_Social']);die;
$pdf->SetHeaderData('petit-logo.png', 50,'Bon commande Numéro :'.$boncommande['Boncommande']['Numero']);

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
$pdf->SetFont('times', 'B', 16);

// add a page
$pdf->AddPage();

//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', 'A', 10);
$tbl = <<<EOF

<br/><br/>

EOF;
//debug($boncommande);die;
//foreach ($boncommande as $k=>$bc)
    {  
   // debug($bc);die;
$cli=$boncommande['Boncommande']['Client']['Raison_Social'];  
              //$dat=$bc['Date']; 
              $dat=$boncommande['Collection']['Date']; 
              $dat=date("d/m/Y",strtotime(str_replace('-','/',$dat)));
              $adr=$boncommande['Boncommande']['Ligneclient']['adresse'];  
              $tel=$boncommande['Boncommande']['Client']['Tel'];   
              $fax=$boncommande['Boncommande']['Client']['Fax'];
}

$tbl = $tbl . <<<EOF
<table cellpadding="2" cellspacing="0" >
    <thead>
     <tr>
        <td align="left"><strong>Client : $cli</strong></td>
        <td align="left"><strong>Date commande : $dat</strong></td>
        <td height="30"></td>
        <td height="30"></td>  
    </tr>
    <tr>
        <td align="left"><strong>Adresse : $adr</strong></td>
        <td align="left"></td> 
        <td height="30"></td>
        <td height="30"></td>  
    </tr> 
    <tr>
        <td align="left"><strong>Tel : $tel</strong></td>
        <td align="left"><strong>Fax : $fax</strong></td> 
        <td height="30"></td>
        <td height="30"></td>  
    </tr> 
    <tr  > 
        <td height="30"></td>
        <td height="30"></td> 
        <td height="30"></td>
        <td height="30"></td>  
    </tr> 
    <tr>
    <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%">Famille</td>
    <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="40%">Article</td>
     <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%">Depot</td>
    <td align="center" style="border-bottom:solid #000 2px;border-top:solid #000 2px;border-left:solid #000 2px;border-right:solid #000 2px;" width="20%">Qte</td>
    </tr>
    </thead>
EOF;
$long="670";
          foreach ($lignecollection as $k=>$lignecommande1){
               $fam=$lignecommande1['Famille']['name']; 
          //debug($lignecommande1['Famille']);die;
             foreach ($lignecommande1['Lignelignecollection'] as $k=>$lignecommande)
              {  //debug($lignecommande);die;
              $art=$lignecommande['Article']['name'];
              $dep=$lignecommande['Depot']['name'];
              $qte=$lignecommande['Qte'];
              $long=$long-10;
$tbl = $tbl . <<<EOF


    <tr  > 
        <td style="border-left:solid #000 2px;border-right:solid #000 2px;" width="20%" >$fam</td>
        <td style=" border-right:solid #000 2px;" width="40%">$art</td>  
        <td style=" border-right:solid #000 2px;" width="20%">$dep</td>
        <td align="right" style="border-right:solid #000 2px;" width="20%">$qte</td>  
    </tr> 
  
EOF;
}
          }     
$tbl = $tbl . <<<EOF
     <tr> 
        <td height="$long" style="border-left:solid #000 2px;border-right:solid #000 2px; border-bottom:solid #000 2px;" width="20%"></td>
        <td height="$long" align="right" style="border-right:solid #000 2px; border-bottom:solid #000 2px;" width="40%"></td> 
        <td height="$long" style="border-right:solid #000 2px; border-bottom:solid #000 2px;" width="20%"></td> 
        <td height="$long" style="border-right:solid #000 2px; border-bottom:solid #000 2px;" width="20%"></td> 
    </tr>     
 </table>
EOF;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
//Close and output PDF document
ob_end_clean();
$pdf->Output('collection', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>