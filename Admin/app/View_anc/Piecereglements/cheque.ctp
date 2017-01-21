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
        <?php echo $this->Form->create('Piecereglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('label'=>'Encaissement','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                echo $this->Form->input('Date_deb',array('label'=>'Echéance','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
		echo $this->Form->input('num_recu',array('div'=>'form-group','N°recu','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		
             
                ?>
                
                
                
                            <div class="form-group">
                            <label>Situation</label>
                               <div class="col-sm-10">
                                <select class="form-control select selectized" placeholder="Veuillez choisir" name="data[Piecereglement][situation]" id="stut" >
                                    <option value="">Veuillez choisir</option>
                                    <option value="En attente">En attente</option>
                                    <option value="Verse"      >Versé</option>
                                    <option value="Preavis"    >Préavis</option>
                                    <option value="Paye"       >Payé</option>
                                    <option value="Impaye"     >Impayé</option>
                                </select>
                             </div></div>
                    
                
                
	</div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('label'=>'Et','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
        echo $this->Form->input('Date_fn',array('label'=>'Et','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
	echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','id'=>'BoncommandeClientId') );
         //echo $this->Form->input('ligneclient_id',array('div'=>'form-group','label'=>'Adresse','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );       
			
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Afficher</button> 
                                                 <a href="<?php echo $this->webroot;?>Piecereglements/cheque" class="btn btn-primary">Afficher Tout</a>
<a onClick="flvFPW1(wr+'Piecereglements/imprimercheque?Date_debut=<?php echo @$Date_debut;?>&Date_deb=<?php echo @$Date_deb;?>&num_recu=<?php echo @$num_recu;?>&situation=<?php echo @$situation;?>&Date_fin=<?php echo @$Date_fin;?>&Date_fn=<?php echo @$Date_fn;?>&client_id=<?php echo @$client_id;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
                                         </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Caisse chéques'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th style="display: none;"><?php echo $this->Paginator->sort('Id'); ?></th>
		<th><?php echo $this->Paginator->sort('Client'); ?></th>
                <th><?php echo $this->Paginator->sort('Num'); ?></th>
                <th><?php echo $this->Paginator->sort('Num reçu'); ?></th>
		<th><?php echo $this->Paginator->sort('Encaissement'); ?></th>
		<th><?php echo $this->Paginator->sort('Echéance'); ?></th>
		<th><?php echo $this->Paginator->sort('Montant'); ?></th>
                <!--<th><?php echo $this->Paginator->sort('Situation'); ?></th>-->
                <th><?php echo $this->Paginator->sort('Banque'); ?></th>
                <th><?php echo $this->Paginator->sort('Situation'); ?></th>
<!--			<th class="actions" align="center"></th>-->
        </tr></thead><tbody>
	<?php //debug($piecereglements);die;
         foreach ($piecereglements as $k=>$piecereglement): ?>
	<tr>
		<td style="display: none;"><?php echo h($piecereglement['Piecereglement']['id']); ?></td>
		<td><?php echo h($piecereglement['Reglement']['Client']['Raison_Social']); ?></td>
                <td><?php echo h($piecereglement['Piece']['num']); ?></td>
                <td><?php echo h($piecereglement['Piece']['num_recu']); ?></td>
                <td><?php echo h(date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Reglement']['Date']))))); ?></td>
                <td><?php echo h(date("d/m/Y",strtotime(str_replace('-','/',($piecereglement['Piece']['echance']))))); ?></td>
                <td><?php echo h($piecereglement['Piecereglement']['Montant']); ?></td>
                <!--<td><?php echo h($piecereglement['Piece']['situation']); ?></td>-->
                <td>
                    <select class="select selectbanq" id="banque_id<?php echo $piecereglement['Piece']['id'];?>" val="<?php echo $piecereglement['Piece']['id'];?>" >
                    <option value="">Veuillez choisir</option>
                    <?php foreach($banque as $banq){?>
                    <option value="<?php echo $banq['Banque']['id'] ?>" <?php if($banq['Banque']['id']==$piecereglement['Piece']['banque_id']){?>selected="selected" <?php } ?>><?php echo $banq['Banque']['Designation'].' '.$banq['Banque']['Numero_compte']; ?></option>
                   <?php  }
?></select>
                    <?php //echo $this->Form->input('banque_id',array('label'=>'','after'=>'</div>','empty'=>'Veuillez choisir','id'=>'banque_id'.$piecereglement['Piece']['id'],'val'=>$piecereglement['Piece']['id']) ); ?>
                </td>
                 <td>
                    <select class="select selectstut" id="stut<?php echo $piecereglement['Piece']['id'];?>" val="<?php echo $piecereglement['Piece']['id'];?>" >
                    <option value="En attente" <?php if($piecereglement['Piece']['situation']=='En attente'){?>selected="selected" <?php } ?>>En attente</option>
                    <option value="Verse"      <?php if($piecereglement['Piece']['situation']=='Verse'){?>selected="selected" <?php } ?>>Versé</option>
                    <option value="Preavis"    <?php if($piecereglement['Piece']['situation']=='Preavis'){?>selected="selected" <?php } ?>>Préavis</option>
                    <option value="Paye"       <?php if($piecereglement['Piece']['situation']=='Paye'){?>selected="selected" <?php } ?>>Payé</option>
                    <option value="Impaye"     <?php if($piecereglement['Piece']['situation']=='Impaye'){?>selected="selected" <?php } ?>>Impayé</option>
                    </select>
                    <?php //echo $this->Form->input('banque_id',array('label'=>'','after'=>'</div>','empty'=>'Veuillez choisir','id'=>'banque_id'.$piecereglement['Piece']['id'],'val'=>$piecereglement['Piece']['id']) ); ?>
                </td>
<!--		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $piecereglement['Piecereglement']['id']),array('escape' => false)); ?>
			<?php //echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $piecereglement['Piecereglement']['id']),array('escape' => false)); ?>
			<?php //echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $piecereglement['Piecereglement']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $piecereglement['Piecereglement']['id'])); ?>
		</td>-->
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


