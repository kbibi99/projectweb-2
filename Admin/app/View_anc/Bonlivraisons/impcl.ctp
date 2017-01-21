<?php 
if($bls['Bonlivraison']['marque_id']==1){
    $name='KINDA';
}
if($bls['Bonlivraison']['marque_id']==3){
    $name='GROSS';
}
if($bls['Bonlivraison']['marque_id']==2){
    $name='BLUE BRAND';
}
$bls['Bonlivraison']['Date'] = date("d/m/Y",strtotime(str_replace('-','/',$bls['Bonlivraison']['Date'])));
?>
<table style="width: 100%">
<!--    <tr>
        <td style="width: 100%" align="center"><img src="<?php echo $this->webroot;?>/files/reference/<?php echo $bls['Marque']['entete'] ?>" style="position: relative;left: 45px;"/></td>
    </tr>-->
    <tr>
        <td style="width: 50%" align="right"></td>
        <td style="width: 50%;border-left: 6px solid black;vertical-align: top;" align="left">
            <table style="width: 100%"><tr><td>
            <strong style="font-family:Arial, Helvetica, sans-serif;font-size:43px;"><?php echo $name;?></strong></td></tr>
            <tr><td><strong style="font-family:Arial, Helvetica, sans-serif;font-size:16px;">AVENUE ENNASR-TEBOULBA 5080 BP160<br>
            TEL : 73 479 111    FAX : 73 496 300 <br>
            SITE WEB : kindachausette.com</strong></td></tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="width: 100%" align="left"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:16px">BON DE LIVRAISON N&deg;<?php echo $bls['Bonlivraison']['Numero']?></strong></td>
    </tr>
</table>
<br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="20%" style="border-top:solid 1px black;border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">CLIENT</strong></td>
<td width="40%" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Client']['Raison_Social']?></strong></td>
<td width="20%" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">DATE</strong></td>
<td width="20%" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Bonlivraison']['Date']?></strong></td>
</tr>
<tr height="30px">
<td  style="border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">CODE TVA</strong></td>
<td colspan="3" style="border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Client']['Matricule_Fiscal']?></strong></td>
</tr>
<tr height="30px">
<td  style="border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">ADRESSE</strong></td>
<td colspan="3"  style="border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Ligneclient']['adresse']?></strong></td>
</tr>
</table>
<br /><br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="10%" align="center" style="border-top:solid 1px black;border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">REFERENCE</strong></td>
<td width="36%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">DESIGNATION</strong></td>
<td width="8%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">QTE_DM</strong></td>
<td width="8%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">QTE_LIV</strong></td>
<td width="15%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">PRIX.U</strong></td>
<td width="8%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">REMISE</strong></td>
<td width="15%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">PRIX TOTAL</strong></td>
</tr>
<?php $remise=0;$total=0;
foreach($bls['Lignebonlivraison'] as $k=>$ligne){
	$remise=$remise+($ligne['Remise']*$ligne['Qte']);
	$total=$total+$ligne['Total_HT'];
        $id_famille=$ligne['Famille']['id'];
        $qte_demander=0;
        foreach($qted as $sqte){
           // debug($sqte);die;
            // $qte_demander=0;
        if($sqte['0']['famille_id']==$id_famille)  {
           $qte_demander= $sqte['0']['qte'];
        } 
            
        }
	?>
<tr height="30px">
<td width="10%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><?php echo $ligne['Famille']['code'];?></td>
<td width="36%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right:solid 1px black;border-bottom:solid 1px black"><?php echo 'CHAUSSETTES '.$ligne['Famille']['name'];?></td>
<td width="8%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right:solid 1px black;border-bottom:solid 1px black"><?php echo $qte_demander;?></td>
<td width="8%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right:solid 1px black;border-bottom:solid 1px black"><?php echo $ligne['Qte'];?></td>
<td width="15%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right:solid 1px black;border-bottom:solid 1px black"><?php echo $ligne['Prix'];?></td>
<td width="8%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right:solid 1px black;border-bottom:solid 1px black"><?php echo $ligne['Remise'];?></td>
<td width="15%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right:solid 1px black;border-bottom:solid 1px black"><?php echo $ligne['Total_HT'];?></td>
</tr>
<?php }?>
<?php 
$j=(9-$k);
for($i=0;$i<=$j;$i++){ ?>
<tr height="30px">
<td width="10%" align="center" style="border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="36%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="8%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="8%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="15%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="8%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="15%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
</tr>
<?php }?>
</table>
<br /><br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="20%" align="center" style="border-top:solid 1px black;border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">MONTANT HT</strong></td>
<td width="20%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">MONTANT TVA</strong></td>
<td width="20%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">FODEC</strong></td>
<td width="20%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">TIMBRE</strong></td>
<td width="18%" align="center" style="border-top:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">REMISE</strong></td>
</tr>
<tr height="30px">
<td width="20%" align="center" style="border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="20%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="20%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="20%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"></td>
<td width="18%" align="center" style="border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo sprintf("%01.3f", $remise);?></strong></td>
</tr>
</table>
<br /><br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="20%" align="center" style=""></td>
<td width="20%" align="center" style=""></td>
<td width="20%" align="center" style=""</td>
<td width="48%" align="center" style="border-top:solid 1px black;border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:16px">NET A PAYER</strong></td>
</tr>
<tr height="30px">
<td width="20%" align="center" style=""></td>
<td width="20%" align="center" style=""></td>
<td width="20%" align="center" style=""</td>
<td width="48%" align="center" style="border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:16px"><?php echo sprintf("%01.3f", $total);?></strong></td>
</tr>
</table>
<br /><br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="">
<td width="98%" align="center" style="border-top:solid 1px black;border-left:solid 1px black;border-right:solid 1px black;border-bottom:solid 1px black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:11px">SARL AU CAPITAL 200 / MATRICULE FISCALE : 849925 C/A/M/000/ REGISTRE DE COMMERCE : B144042003</strong></td>
 </table>
 <script>print();</script>