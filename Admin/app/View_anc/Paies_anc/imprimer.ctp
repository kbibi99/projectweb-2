<?php //if($paie['Personnel']['Type']=='cadre'){
$paie['Paie']['Salaire']= sprintf("%01.3f",round($paie['Paie']['Salaire']));
$paie['Paie']['acompte']= sprintf("%01.3f",round($paie['Paie']['acompte']));
$paie['Paie']['Totalpaie']= sprintf("%01.3f",round($paie['Paie']['Totalpaie']));
$paie['Paie']['Reste']= sprintf("%01.3f",round($paie['Paie']['Reste']));
$paie['Paie']['Donne']= sprintf("%01.3f",round($paie['Paie']['Donne']));
$paie['Paie']['Montantjour']= sprintf("%01.3f",round($paie['Paie']['Montantjour']));
$paie['Paie']['Montantjdtaux']= sprintf("%01.3f",round($paie['Paie']['Montantjdtaux']));

$paie['Paie']['Montantheur']= sprintf("%01.3f",round($paie['Paie']['Montantheur']));
$paie['Paie']['Montanthdtaux']= sprintf("%01.3f",round($paie['Paie']['Montanthdtaux']));
//}
?>
<div>
    <br><br><br><br>
    
    <table style="width: 100%;">
        <tr>
            <th><strong style="font-size: 25px;"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:28px"><?php echo'وثيقة خلاص'?></strong></th>
        </tr>
        
    </table>
    <br>
    <br>
    <table style="width: 90%;">
        
        <tr style="height: 40px ;">
            <td  style="height: 90px ;width: 10%;"></td>
            <td style="height: 90px ;width: 20%;"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:22px"><?php echo $paie['Moi']['name'];?></strong></td>
            <td style="height: 90px ;width: 20%;"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:22px"><?php echo $paie['Annee']['name'];?></strong></td>
            <td style="height: 90px ;width: 30%;" align="right"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:22px"><?php echo $paie['Personnel']['name'];?></strong></td>
            <td style="height: 90px ;width: 20%;" align="right"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:22px"><?php echo 'الإسم و اللقب';?></strong></td>
 
        </tr>
        <tr  style="height: 40px ;">
            <td style="width: 10%;"></td>
            <td style="width: 20%;"></td>
            <td style="width: 20%;"></td>
            <td style="width: 30%;" align="right"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:22px"><?php echo $paie['Paie']['Salairebase'];?></strong></td>
            <td style="width: 20%;" align="right"><strong style="font-family:Arial, Helvetica, sans-serif;font-size:22px"><?php echo 'المرتب الشهري';?></strong></td>
        </tr>  
       
    </table>
    <?php
            $cadre='style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;"';
            $cadreR='style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
            $cadreB='style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"';

            ?>
    <br>
    <br>
    <table  style="" align="center" cellpadding="2" cellspacing="0"  width="80%" class="table" nobr="true" >
    <thead>
        <tr  style="height: 40px ;">
            <th style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;">الجملة</th>
            <th style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;">الساعات /الأيام</th>
            <th style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;">التفصيل</th>

        </tr>
    </thead>
<tbody>
    <tr  style="height: 40px ;">
        <td  <?php echo $cadre ?> align="center"><?php if($paie['Personnel']['Type']=='ouvrier') echo $paie['Paie']['Montantheur']; else echo $paie['Paie']['Montantjour'];?></td>
        <td <?php echo $cadre ?> align="center"><?php if($paie['Personnel']['Type']=='ouvrier') echo $paie['Paie']['Nbheur']; else echo $paie['Paie']['Nbjour'];?></td>
        <td <?php echo $cadreR ?> align="center"><?php if($paie['Personnel']['Type']=='ouvrier') echo 'عدد ساعات العمل'; else echo 'عدد أيام العمل' ?></td>
    </tr>
    <tr  style="height: 40px ;">
        <td <?php echo $cadre ?> align="center"><?php if($paie['Personnel']['Type']=='ouvrier') echo $paie['Paie']['Montanthdtaux']; else echo $paie['Paie']['Montantjdtaux'];?></td>   
        <td <?php echo $cadre ?> align="center"><?php if($paie['Personnel']['Type']=='ouvrier') echo $paie['Paie']['Nbheurdimanche']; else echo $paie['Paie']['Nbjourdimanche'];?></td>
        <td <?php echo $cadreR ?> align="center"><?php if($paie['Personnel']['Type']=='ouvrier') echo 'عدد ساعات الأحد الإضافية '; else echo 'عدد أيام الأحد الإضافية' ?></td>
        
    </tr>
    <tr  style="height: 40px ;">
        <td <?php echo $cadre ?> align="center" ><?php  echo $paie['Paie']['Salaire'];?></td>
        <td <?php echo $cadre ?>></td>
         <td <?php echo $cadreR ?> align="center" ><?php echo'الجملة' ?></td>
    </tr>
    <tr  style="height: 40px ;">
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;border-bottom:2px solid black"  align="right" ><?php  echo $paie['Paie']['acompte'];?></td>
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;border-bottom:2px solid black;"  ></td>
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px; border-top:2px solid black;border-left:2px solid black;border-bottom:2px solid black;border-right:2px solid black;" align="right" ><?php echo'المصروف' ?></td>

    </tr>
<!--    <tr>
        <td><?php echo'Total Payer' ?></td>
        <td></td>
        <td align="right"><?php  echo $paie['Paie']['Totalpaie'];?></td>
        
    </tr>
    <tr>
        <td><?php echo'Montant Payer' ?></td>
        <td></td>
        <td align="right"><?php  echo $paie['Paie']['Donne'];?></td>  
    </tr>
    <tr>
        <td><?php echo'Reste' ?></td>
        <td></td>
        <td align="right"><?php  echo $paie['Paie']['Reste'];?></td>  
    </tr>-->
    <tr  style="height: 40px ;">   
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px;border-left:2px solid black;border-bottom:2px solid black;"   align="right"><?php  echo $paie['Paie']['Totalpaie'];?></td>
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px;border-left:2px solid black;border-bottom:2px solid black;" align="center"><b><?php echo'الأجر الصافي' ?></b></td>
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px;border-left:2px solid black;"></td>
    </tr>
     <tr  style="height: 40px ;">   
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px;border-left:2px solid black;border-bottom:2px solid black;background-color:#98E3EB; "   align="right"><?php  echo $paie['Paie']['Donne'];?></td>
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px;border-left:2px solid black;border-bottom:2px solid black;background-color:#98E3EB;" align="center"><b><?php echo 'الأجر المدفوع';?></b></td>
        <td align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:20px;border-left:2px solid black;"></td>
    </tr>

</tbody>
</table></div>

<!--impression-->
<script>print();</script>