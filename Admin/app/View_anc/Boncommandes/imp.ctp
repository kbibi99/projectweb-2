<?php //debug($boncommande);die;
if($boncommande['Boncommande']['marque_id']==1){
    $name='KINDA';
}
if($boncommande['Boncommande']['marque_id']==3){
    $name='GROSS';
}
if($boncommande['Boncommande']['marque_id']==2){
    $name='BLUE BRAND';
}?>
<table style="width: 100%" cellpadding="15" cellspacing="0">
<!--    <tr>
        <td style="width: 100%" align="right"><img src="<?php echo $this->webroot;?>/files/reference/<?php echo $bls['Marque']['entete'] ?>" style="position: relative;left: 45px;" /></td>
    </tr>-->
     <tr>
         <td style="width: 50%" align="right">
        </td>
        <td style="width: 50%;border-left: 6px solid black;vertical-align: top;" align="left">
            <strong style="font-family:Arial, Helvetica, sans-serif;font-size:43px;"><?php echo $name;?></strong>
        
    </tr>
</table><br>
<table style="width: 100%">
    <tr>
        <td style="" align="left" width="50%"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">BON DE COMMANDE N° : <?php echo $boncommande['Boncommande']['Numero']?></strong></td>
        <td style="" align="left" width="50%"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">SOCIETE : <?php echo $boncommande['Client']['Raison_Social']?></strong></td>
         </tr>
    <tr>
        <td style="" align="left" width="50%"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">BON DE LIVRAISON N° :</strong></td>
        <td style="" align="left" width="50%"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">CLIENT : <?php echo $boncommande['Ligneclient']['name']?></strong></td>
    </tr>
    <tr>
        <td style=""  align="left" width="50%"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">Date : <?php $date= $boncommande['Boncommande']['Date'];
                                                                                                                                    $date=date('d/m/Y', strtotime(str_replace('-', '/',$date)));
                                                                                                                                    echo $date;                              ?></strong></td>
        
        <td style="" align="left" width="50%"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">ADRESSE : <?php echo $boncommande['Ligneclient']['adresse']?></strong></td>
    </tr>
    <tr>
        <td></td>
        <td style="" align="left" ><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">TEL : <?php echo $boncommande['Ligneclient']['tel']?></strong></td>
    </tr>
</table><br>
<table style="width: 100%"   cellspacing="0" cellpadding="2" >
<tr height="30px">
<td width="20%" align="center" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">DESIGNATION</strong></td>
<td width="20%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">QTE_DEMANDE</strong></td>
<td width="20%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">QTE_LIVREE</strong></td>
<td width="30%" align="center" style="border-top: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">OBSERVATION</strong></td>
</tr>
<?php 
foreach($boncommande['Lignecommande'] as $k=>$ligne){
   // debug($ligne);die;?>
<tr height="100px">
<td width="20%" align="center" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $ligne['Famille']['name'];?></strong></td>
<td width="20%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo $ligne['Qte'];?></strong></td>
<td width="20%" align="center" style="border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"></strong></td>
<td width="30%" align="left" style="vertical-align: top;border-right: 1px solid black;border-bottom: 1px solid black"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"><?php echo str_replace(';', '<br>', $ligne['observation']) ;?></strong></td>
</tr>
<?php } 
$k=$k+1;
$j=6-$k;
for($i=1;$i<=$j;$i++){?>
   <tr height="100px">
<td width="20%" align="center" style=""><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"></strong></td>
<td width="20%" align="center" style=""><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"></strong></td>
<td width="20%" align="center" style=""><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"></strong></td>
<td width="30%" align="center" style="vertical-align: top;"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px"></strong></td>
</tr> 
<?php }
?>

</table><br>
<table style="width: 100%" cellpadding="1" cellspacing="0">
     <tr>
         <td style="width: 45%;position: relative;left: -54px;" align="center"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">Signature Service Commercial</strong></td>
         <td style="width: 10%"></td>
         <td style="width: 45%;position: relative;left: 78px;" align="center"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:14px">Signature Magasinier</strong></td>
    </tr>
</table><br>
<table style="width: 100%" cellpadding="1" cellspacing="0">
     <tr>
         <td style="width: 42%" align="left"></td>
         <td style="width: 22%;vertical-align: top;border: 1px solid black;" align="center" height="70px">N&deg; Colis</td>
         <td style="width: 38%;" align="right"></td>
    </tr>
</table>
<script>print();</script>