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
        <?php echo $this->Form->create('Mppiecereglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
		echo $this->Form->input('Date_deb',array('label'=>'Echéance','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
        echo $this->Form->input('fournisseur_id',array('empty'=>'veuillez choisir','div'=>'form-group','label'=>'Fournisseur','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control'));			
                ?>
               
	</div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fn',array('label'=>'Et','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Afficher</button> 
                                                 <a href="<?php echo $this->webroot;?>Mppiecereglements/etatchequetraite" class="btn btn-primary">Afficher Tout</a>
         <a onClick="flvFPW1(wr+'Mppiecereglements/imprimeretatchequetraite?Date_deb=<?php echo @$Date_deb;?>&Date_fn=<?php echo @$Date_fn;?>&fournisseur_id=<?php echo @$fournisseur_id;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>


                                         </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Etat des Chéques / Traites'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th style="display: none;"><?php echo ('Id'); ?></th>
                
                <th><strong><?php echo ('Echéance'); ?></strong></th>
                <th><strong><?php echo ('Fournisseur'); ?></strong></th>
                <th><strong><?php echo ('Montant'); ?></strong></th>
                <th><strong><?php echo ('N° Cheq/Traite'); ?></strong></th>
                <th><strong><?php echo ('N ° Facture'); ?></strong></th>
                <th><strong><?php echo ('Date Facture'); ?></strong></th>
                <th><strong><?php echo ('Date Reglement'); ?></strong></th>
		
                
			<!--<th class="actions" align="center"></th>-->
        </tr></thead><tbody>
	<?php //debug($piecereglements);die;
         foreach ($piecereglements as $piecereglement): 
            $date_fact="";$num_fact="";
             foreach ($mplignereglements as $mplignereglement){
                     
                    if($piecereglement['Mppiecereglement']['mpreglement_id']==$mplignereglement['Mplignereglement']['mpreglement_id']){
                        $date_fact=$mplignereglement['Facturefournisseur']['Date'];
                        $num_fact=$mplignereglement['Facturefournisseur']['Numero'];
                    }
             }
             
             ?>
	<tr>
		<td style="display: none;"><?php echo h($piecereglement['Mppiecereglement']['id']); ?></td>
		<td><?php echo h(date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Mppiecereglement']['echance']))))); ?></td>
                <td><?php echo h($piecereglement['Fournisseur']['raison_social']); ?></td>
                <td><?php echo h($piecereglement['Mppiecereglement']['montant']); ?></td>
                <td><?php echo h($piecereglement['Paiement']['name']); echo"  N° "; echo h($piecereglement['Mppiecereglement']['num_piece']); ?></td>
                
                <td><?php echo h($num_fact); ?></td>
                <td><?php echo h(date("d/m/Y",strtotime(str_replace('-','/',($date_fact))))); ?></td>
                <td><?php echo h(date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Mppiecereglement']['date']))))); ?></td>
                
               
                 
                
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


