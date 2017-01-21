<?php 
//debug($bls['Bonlivraison']['marque_id']);die;
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
<table style="width: 100%" cellpadding="15" cellspacing="0">
<!--    <tr>
        <td style="width: 100%" align="right"><img src="<?php echo $this->webroot;?>/files/reference/<?php echo $bls['Marque']['entete'] ?>" style="position: relative;left: 45px;" /></td>
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
        <td colspan="2" style="width: 100%" align="left"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:16px">COLLECTION N&deg;<?php echo $bls['Bonlivraison']['Numero']?></strong></td>
    </tr>
</table>
<br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="20%" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">CLIENT</strong></td>
<td width="40%" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Client']['Raison_Social']?></strong></td>
<td width="20%" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">DATE</strong></td>
<td width="20%" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Bonlivraison']['Date']?></strong></td>
</tr>
<tr height="30px">
<td  style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">CODE TVA</strong></td>
<td colspan="3" style="border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Client']['Matricule_Fiscal']?></strong></td>
</tr>
<tr height="30px">
<td  style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">ADRESSE</strong></td>
<td colspan="3"  style="border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $bls['Ligneclient']['adresse']?></strong></td>
</tr>
</table>
<br /><br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="14%" align="center" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">REFERENCE</strong></td>
<td width="36%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">DESIGNATION</strong></td>
<td width="12%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">QUANTITE</strong></td>
<td width="15%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">PRIX.U</strong></td>
<td width="8%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">REMISE</strong></td>
<td width="15%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">PRIX TOTAL</strong></td>
</tr>
<?php $remise=0;$total=0;$n=0;
foreach($bls['Lignebonlivraison'] as $k=>$ligne){
    if($ligne['Qte']>0){
	$remise=$remise+($ligne['Remise']*$ligne['Qte']);
	$total=$total+$ligne['Total_HT'];
	?>
<tr height="30px">
<td width="14%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><?php echo $ligne['Famille']['code'];?></td>
<td width="36%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right: 1px solid black;border-bottom: 1px solid black"><?php echo 'CHAUSSETTES '.$ligne['Famille']['name'];?></td>
<td width="12%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right: 1px solid black;border-bottom: 1px solid black"><?php echo $ligne['Qte'];?></td>
<td width="15%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right: 1px solid black;border-bottom: 1px solid black"><?php echo $ligne['Prix'];?></td>
<td width="8%" align="center"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right: 1px solid black;border-bottom: 1px solid black"><?php echo $ligne['Remise'];?></td>
<td width="15%" align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;border-right: 1px solid black;border-bottom: 1px solid black"><?php echo $ligne['Total_HT'];?></td>
</tr>
<?php }$n++;}?>
<?php 
$j=(8-$n);
for($i=0;$i<=$j;$i++){ ?>
<tr height="30px">
<td width="14%" align="center" style="border-left: 1px solid black;border-right: 1px solid black;"></td>
<td width="36%" align="center" style="border-right: 1px solid black;"></td>
<td width="12%" align="center" style="border-right: 1px solid black;"></td>
<td width="15%" align="center" style="border-right: 1px solid black;"></td>
<td width="8%" align="center"  style="border-right: 1px solid black;"></td>
<td width="15%" align="center" style="border-right: 1px solid black;"></td>
</tr>
<?php }?>
<tr height="30px">
<td width="14%" align="center" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;"></td>
<td width="36%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black;"></td>
<td width="12%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black;"></td>
<td width="15%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black;"></td>
<td width="8%" align="center"  style="border-right: 1px solid black;border-bottom: 1px solid black;"></td>
<td width="15%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black;"></td>
</tr>
</table>
<br /><br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="20%" align="center" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">MONTANT HT</strong></td>
<td width="20%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">MONTANT TVA</strong></td>
<td width="20%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">FODEC</strong></td>
<td width="20%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">TIMBRE</strong></td>
<td width="18%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">REMISE</strong></td>
</tr>
<tr height="30px">
<td width="20%" align="center" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"></td>
<td width="20%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black"></td>
<td width="20%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black"></td>
<td width="20%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black"></td>
<td width="18%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo sprintf("%01.3f", $remise);?></strong></td>
</tr>
</table>
<br />
<table width="98%" cellpadding="2" cellspacing="0">
<tr height="30px">
<td width="60%" align="center" colspan="3" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">Singnature et cachet</td>
<td width="38%" align="center" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:16px">NET A PAYER</strong></td>
</tr>
<tr height="30px">
<td width="60%" align="center" style="" colspan="3"></td>
<td width="38%" align="center" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:16px"><?php echo sprintf("%01.3f", $total);?></strong></td>
</tr>
</table>
<br /><br />
<!--<table width="98%" cellpadding="2" cellspacing="0">
<tr height="">
<td width="98%" align="center" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:11px solid">SARL AU CAPITAL 200 / MATRICULE FISCAL : 849925 C/A/M/000/ REGISTRE DE COMMERCE : B144042003</strong></td>
 </table>-->
 <script>print();</script>