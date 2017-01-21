<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
    <div class="col-md-12" >
                            <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Mpreglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
                    echo $this->Form->input('Date_debut',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                    echo $this->Form->input('Numero',array('div'=>'form-group','label'=>'N° BL','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
       		
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Afficher</button> 
                                                <a href="<?php echo $this->webroot;?>Mpreglements/etatfact" class="btn btn-primary">Afficher Tout</a>
             <a  onClick="flvFPW1(wr+'Mpreglements/imprimeretatfact?Numero=<?php echo @$Numero;?>&Date_debut=<?php echo @$Date_debut;?>&Date_fin=<?php echo @$Date_fin;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
<?php 
// debug($mar);

?>

                                            </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
    
    
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Etat des BLs / FACT (sans ligne)'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="">
                      <thead>
	<tr>
	         
		<td style='display:none'><?php echo ('Id'); ?></td>
		<td align="center"><?php echo ('Date'); ?></td>
		<td align="center"><?php echo ('N° FACT'); ?></td>
		<td align="center"><?php echo ('Montant'); ?></td>
		<td align="center"><?php echo ('ESPECE'); ?></td> 
		<td align="center"><?php echo ('CHEQUE'); ?></td>
		<td align="center"><?php echo ('TRAITE'); ?></td>	
        </tr></thead><tbody>
	<?php 
        foreach ($mpreglements as $mpreglement): 
            //debug($mpreglement['Mpreglement']['Mppiecereglement'][0]['num_piece']);die;
                         //debug($tt);die;
                  $espece=0;$cheque=array();$traite=array();       
             foreach($mpreglement['Mpreglement']['Mppiecereglement'] as $j=>$pp){
                 if($pp['paiement_id']==1){
                    $espece=$espece+$pp['montant']; 
                 }
                 if($pp['paiement_id']==2){
                    $cheque[$j]['echeance']=$pp['echance']; 
                    $cheque[$j]['num']=$pp['num_piece'];
                    $cheque[$j]['montant']=$pp['montant'];
                 }
                 if($pp['paiement_id']==3){
                    $traite[$j]['echeance']=$pp['echance']; 
                    $traite[$j]['num']=$pp['num_piece'];
                    $traite[$j]['montant']=$pp['montant'];
                 }
             }
                //debug($pp);die;
                         ?>
	<tr>
		<td style='display:none'><?php echo h($mpreglement['Mpreglement']['id']); ?></td>
		<td align="center"><?php echo h(date("d/m/Y", strtotime(str_replace('-', '/',$mpreglement['Facturefournisseur']['Date'])))); ?></td>
		<td align="center"><?php echo h($mpreglement['Facturefournisseur']['Numero']) ?></td> <!-- h($mpreglement['Mplignereglement'][0]['Facturefournisseur']['Numero']);-->
		<td align="center"><?php echo h($mpreglement['Facturefournisseur']['Total_TTC']); ?></td> <!--h($mpreglement['Mplignereglement'][0]['Facturefournisseur']['Total_TTC']);-->
                <td align="center"><?php echo sprintf("%.3f",$espece); ?></td>
                <td align="center">
                    <?php if(!empty($cheque)){?> 
                    <table style="width: 100%;" class="table table-bordered table-striped table-bottomless"><thead><tr>
                                    <td align="center">ECHEANCE</td>
                                    <td align="center">NUM</td>
                                    <td align="center">MONTANT</td>
                        </tr></thead>
                    <?php foreach($cheque as $ch){?>
                        <tr>
                                    <td align="center"><?php echo $ch['echeance']; ?></td>
                                    <td align="center"><?php echo $ch['num']; ?></td>
                                    <td align="center"><?php echo $ch['montant']; ?></td>
                        </tr>
                   <?php } ?>
                    </table><?php }?></td> 
                    
		<td align="center">
                    <?php if(!empty($traite)){?>
                    <table style="width: 100%;border: 2px;" class="table table-bordered table-striped table-bottomless" ><thead><tr>
                                    <td align="center">ECHEANCE</td>
                                    <td align="center">NUM</td>
                                    <td align="center">MONTANT</td>
                        </tr></thead>
                    <?php 
                    foreach($traite as $ch){?>
                        <tr>
                                    <td align="center"><?php echo $ch['echeance']; ?></td>
                                    <td align="center"><?php echo $ch['num']; ?></td>
                                    <td align="center"><?php echo $ch['montant']; ?></td>
                        </tr>
                   <?php } ?>
                    </table>
                <?php }?>
                </td>
                    
		
	</tr>
             <?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


