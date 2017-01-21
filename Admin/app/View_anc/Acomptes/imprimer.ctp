<?php //debug($acompte);die;?>
<div> 
    <table style="width: 100%;">
        <tr>
            <th><?php echo "Fiche d'acompte"?></th>
        </tr>
    </table>
    <br>
    <br>
    <table style="width: 100%;">
        
        <tr>
            <td style="width: 2%;">Mr/Mme: </td>
            <td style="width: 68%;"><?php echo $acompte['Personnel']['name'];?></td>
            <td style="width: 10%;"><?php echo $acompte['Moi']['name'];?></td>
            <td style="width: 10%;"><?php echo $acompte['Annee']['name'];?></td>
        </tr>
          
       
    </table>
    <?php
            $cadre='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;"';
            $cadreR='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;"';
            $cadreB='style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"';

            ?>
    <br>
    <br>
    <table  style="" align="center" cellpadding="2" cellspacing="0"  width="100%" class="table" nobr="true" >
    <thead>
        <tr>
            <th style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;">Date</th>
            <th style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;">Montant</th>
        </tr>
    </thead>
<tbody>
    <tr>
       
        <td  align="center" style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-bottom:2px solid black;"> <?php echo $acompte['Acompte']['Date'] ?></td>
        <td  align="right"  style="font-family:Arial, Helvetica, sans-serif;font-size:13px; border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;"> <?php echo $acompte['Acompte']['Montant'];?></td>
        
    </tr>
   
   
  

    

</tbody>
</table></div>
<!--
impression
<script>print();</script>-->