<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>

<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Paies/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>



 <div class="row"><?php echo $this->Form->create('Paie',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
?>
                        <div class="col-md-12" >
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recherche</h3>
<!--                                    <ul class="panel-control">
                                        <li><a class="minus" href="javascript:void(0)" ><i class="fa fa-minus"></i></a></li>
                                        <li><a class="refresh" href="javascript:void(0)"><i class="fa fa-refresh"></i></a></li>   
                                    </ul>-->
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">                  
                                        <?php 
                                       // $fn='aa';
		echo $this->Form->input('annee_id',array('empty'=>'Veuillez Choisir','value'=>$annee_id,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
               echo $this->Form->input('moi_id',array('empty'=>'Veuillez Choisir','value'=>$moi_id,'label'=>'Mois','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );      
                ?></div> 
                                    <div class="col-md-6">  
                                           <?php
                echo $this->Form->input('personnel_id',array('empty'=>'Veuillez Choisir','value'=>$personnel_id,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		echo $this->Form->input('reste',array('value'=>$reste,'empty'=>'Veuillez Choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );

                                    ?>           

                                    
                                </div>
                                    <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <input type="submit" value="Afficher" name="data[Paie][afficher]" id="afficher" class="btn btn-primary"/>
                                <a onClick="flvFPW1(wr+'Paies/imprimerrecherche?annee_id=<?php echo $annee_id;?>&moi_id=<?php echo $moi_id;?>&personnel_id=<?php echo $personnel_id;?>&reste=<?php echo $reste;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
                                <a class="btn btn-primary" href="<?php echo $this->webroot;?>Paies/index"/>Afficher Tout </a>
                            </div>
                        </div> 
                                    <?php echo $this->Form->end();?>
                            </div>
                                
                        </div>
                            
                    </div>
 </div>




<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Paies'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>     
            <th style="display: none"><?php echo ('Id'); ?></th>
	         
		<th><?php echo ('Personnel'); ?></th>
	         
		<th><?php echo ('Mois'); ?></th>
	         
		<th><?php echo ('Annee'); ?></th>
	         
		<th><?php echo ('Salaire'); ?></th>
	         
		<th><?php echo ('Acompte'); ?></th>
	         
		<th><?php echo ('Totalpaie'); ?></th>
	         
		<th><?php echo ('Date'); ?></th>
                
                <th><?php echo ('Montant Payer'); ?></th>
                
                <th><?php echo ('Majoration'); ?></th>
			
                <th class="actions" align="center"><?php echo ('Action'); ?></th>
                
                <th></th>
                
        </tr></thead><tbody>
	<?php //debug($paies);die;
        foreach ($paies as $paie): 
           // debug($paie);
            
            if($paie['Personnel']['Type']=='cadre'){
                    $paie['Paie']['Salaire']=sprintf("%01.3f",round($paie['Paie']['Salaire']));
                    $paie['Paie']['acompte']=sprintf("%01.3f",round($paie['Paie']['acompte']));
                    $paie['Paie']['Totalpaie']=sprintf("%01.3f",round($paie['Paie']['Totalpaie']));
                    $paie['Paie']['Reste']=sprintf("%01.3f",round($paie['Paie']['Reste']));
                    $paie['Paie']['Donne']=sprintf("%01.3f",round($paie['Paie']['Donne']));
                }
            ?>
	<tr>
            <td style="display: none"><?php echo h($paie['Paie']['id']); ?></td>
		<td >
			<?php echo $this->Html->link($paie['Personnel']['name'], array('controller' => 'personnels', 'action' => 'view', $paie['Personnel']['id'])); ?>
		</td>
		<td >
			<?php //echo $this->Html->link($paie['Moi']['name'], array('controller' => 'mois', 'action' => 'view', $paie['Moi']['id'])); ?>
		</td>
		<td >
			<?php //echo $this->Html->link($paie['Annee']['name'], array('controller' => 'annees', 'action' => 'view', $paie['Annee']['id'])); ?>
		</td>
		 
		
		<td><?php echo h($paie['Paie']['Salaire']); ?></td>
		<td >
			<?php echo ($paie['Paie']['acompte']); ?>
		</td>
		<td><?php echo h($paie['Paie']['Totalpaie']); ?></td>
		<td><?php 
                $Date=$paie['Paie']['Date'];
                $Date=date('d/m/Y', strtotime(str_replace('-', '/',$Date)));
                echo $Date; ?></td>
                <td><?php echo h($paie['Paie']['Donne']); ?></td>
                <td><?php $res=$paie['Paie']['Reste'];
                if($res !=0 ){
                $reste=$res*(-1);}
                if($res ==0){
                    $reste=$res;
                }
                echo $reste;
                ?>
                </td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $paie['Paie']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $paie['Paie']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $paie['Paie']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $paie['Paie']['id'])); ?>
		</td>
                <td>
                    <a onClick="flvFPW1(wr+'Paies/imprimer/<?php echo $paie['Paie']['id'];?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class='btn btn-xs ls-blue-btn'><i class='fa fa-print'></i></button></a>
                </td>            <!-- zone_id=<?php echo $zone_id;?>&vendeur_id=<?php echo $vendeur_id;?> -->
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


