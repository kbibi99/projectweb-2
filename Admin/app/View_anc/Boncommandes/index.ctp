<script language="JavaScript" type="text/JavaScript">

function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;

}
$(document).ready(function() {
   
        $(".iframe").colorbox({iframe:true, width:"60%", height:"60%", href: function(){
                return  wr+"Bonlivraisons/choix/"+$(this).attr('id');
            }})
    });
</script>
<?php
$boncommande_add=  CakeSession::read('boncommande_add'); 
if($boncommande_add==1){
?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Boncommandes/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<?php }?>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
        <div class="col-md-12" >
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Boncommande',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('label'=>'Date début','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
		 echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );
                
		echo $this->Form->input('famille_id',array('div'=>'form-group','label'=>'type livraison','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );
		
	?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
	echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','id'=>'BoncommandeClientId') );
      //  echo $this->Form->input('ligneclient_id',array('div'=>'form-group','label'=>'Adresse','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );       
			
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Afficher</button>
                                                <a href="<?php echo $this->webroot;?>Boncommandes/index" class="btn btn-primary">Afficher Tout</a>
                                         <a onClick="flvFPW1(wr+'Boncommandes/imprimerrecherche?Date_debut=<?php echo @$Date_debut;?>&marque_id=<?php echo @$marque_id;?>&famille_id=<?php echo @$famille_id;?>&client_id=<?php echo @$client_id;?>&Date_fin=<?php echo @$Date_fin;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>

<?php 
// debug($mar);

if(@$req_journals!=null){ 
?>
<button type="submit" class="btn btn-primary"  onClick="flvFPW1(wr+'bonlivraisons/imprimer?fam=<?php echo $fam ; ?>&mar=<?php echo $mar ; ?>&cli=<?php echo @$cli ; ?>&Date_d=<?php echo @$Date_d ; ?>&Date_f=<?php echo @$Date_f ; ?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;">Imprimer</button>
<?php 
}
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
                                    <h3 class="panel-title"><?php echo __('Boncommandes'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<!--<th style="display:none;"><?php echo ('Id'); ?></th>-->
		<th><?php echo ('Numéro'); ?></th>
                <th><?php echo ('Marque'); ?></th>
		<th><?php echo ('Client'); ?></th>
		<th><?php echo ('Date'); ?></th>
	         
		<th><?php echo ('Date Livraison'); ?></th>
	         
		<!--<th><?php echo $this->Paginator->sort('Total_HT'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Remise'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Tva'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Total_TTC'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Timbre_id'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Utilisateur_id'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Ligneclient_id'); ?></th>-->
			<th class="actions" align="center"></th>
                        <th></th>
                        <th></th>
        </tr></thead><tbody>
	<?php  //debug($boncommandes);die; 
        foreach ($boncommandes as $i=>$boncommande):  ?>
	<tr>
		<!--<td style="display:none;"><?php echo h($boncommande['Boncommande']['id']); ?></td>-->
               <td><?php echo h($boncommande['Boncommande']['Numero']); ?></td>
               <td ><?php echo $this->Html->link($boncommande['Marque']['name'], array('controller' => 'marques', 'action' => 'view', $boncommande['Marque']['id'])); ?></td>
		<td ><?php echo $this->Html->link($boncommande['Client']['Raison_Social'], array('controller' => 'clients', 'action' => 'view', $boncommande['Client']['Raison_Social'])); ?></td> 
		<td><?php  $boncommande['Boncommande']['Date']=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date']))); ?><?php echo h($boncommande['Boncommande']['Date']); ?></td>
		<td><?php  $boncommande['Boncommande']['Date_Livraison']=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date_Livraison']))); ?><?php echo h($boncommande['Boncommande']['Date_Livraison']); ?></td>
<!--		<td><?php echo h($boncommande['Boncommande']['Total_HT']); ?></td>
		<td><?php echo h($boncommande['Boncommande']['Remise']); ?></td>
		<td><?php echo h($boncommande['Boncommande']['Tva']); ?></td>
		<td><?php echo h($boncommande['Boncommande']['Total_TTC']); ?></td>-->
<!--		<td >
			<?php echo $this->Html->link($boncommande['Timbre']['name'], array('controller' => 'timbres', 'action' => 'view', $boncommande['Timbre']['id'])); ?>
		</td>-->
<!--		<td >
			<?php echo $this->Html->link($boncommande['Utilisateur']['id'], array('controller' => 'utilisateurs', 'action' => 'view', $boncommande['Utilisateur']['id'])); ?>
		</td>-->
<!--		<td >
			<?php echo $this->Html->link($boncommande['Ligneclient']['name'], array('controller' => 'ligneclients', 'action' => 'view', $boncommande['Ligneclient']['id'])); ?>
		</td>-->
		<td align="center">
			<?php //echo $this->Html->link("<button class='btn btn-xs ls-blue-btn'><i class='fa fa-print'></i></button>", array('action' => 'imp', $boncommande['Boncommande']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $boncommande['Boncommande']['id']),array('escape' => false)); ?>
			 <?php if(!in_array($boncommande['Boncommande']['id'],$collections)){ ?>
                            <?php 
                                $boncommande_edit=  CakeSession::read('boncommande_edit'); 
                                if($boncommande_edit==1){       
                                echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $boncommande['Boncommande']['id']),array('escape' => false)); 
                                } ?>
			<?php $collection_add=  CakeSession::read('collection_add'); 
                            if($collection_add==1){
                        echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-dropbox'></i></button>", array('controller'=>'Collections','action' => 'add', $boncommande['Boncommande']['id']),array('escape' => false)); 
                            }?>
                            <?php $boncommande_delete=  CakeSession::read('boncommande_delete'); 
                                if($boncommande_delete==1){
                            echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $boncommande['Boncommande']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $boncommande['Boncommande']['id'])); 
                                } ?>
                         <?php } ?>
                </td>
                <td align="center"><a onClick="flvFPW1(wr+'boncommandes/imp/'+<?php echo $boncommande['Boncommande']['id'];?>,'UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class='btn btn-xs ls-blue-btn'><i class='fa fa-print'></i></button></a></td>
                <td>
                    <?php if(!in_array($boncommande['Boncommande']['id'],$transferecommandebls) ){ ?>
                    <input type="checkbox" name="creebl" class="creebl" value="<?php echo $boncommande['Boncommande']['id']; ?>" index="<?php echo $i; ?>" client="<?php echo $boncommande['Client']['Raison_Social']."//".$boncommande['Marque']['name']; ?>" marque="<?php echo $boncommande['Marque']['name']; ?>">
                    <?php } ?>
                </td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
                                        <div class="creationbl" style="display: none">
           <div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger btnbl" href="<?php echo $this->webroot;?>Bonlivraisons/add" client_id='0' link=',' nb='0'/> <i class="fa fa-plus-circle"></i> créer une bon de livraison </a>
    </div>
    
</div>  
                                        </div>
	
                                </div></div></div></div></div>	



