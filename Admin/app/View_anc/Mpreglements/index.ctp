<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Mpreglements/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>
<br><input type="hidden" id="page" value="1"/>

<div class="row" >
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Mpreglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

                <div class="col-md-6">                  
              	<?php 
		echo $this->Form->input('date1',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','label'=>'Date de') ); 
                
		echo $this->Form->input('four_id',array('empty'=>'veuillez choisir','div'=>'form-group','label'=>'Fournisseur','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control'));?>
</div>
<div class="col-md-6">
<?php
		echo $this->Form->input('date2',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','label'=>"Jusqu'à") ); 
                echo $this->Form->input('num',array('div'=>'form-group','label'=>'Numero','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control'));?>
                </div>      

                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary" id="aff">Chercher</button>  
                 <a class="btn btn-primary" href="<?php echo $this->webroot;?>Mpreglements/index"/>Afficher Tout </a>
      <a  onClick="flvFPW1(wr+'Mpreglements/imprimerrecherche?four_id=<?php echo @$four_id;?>&date1=<?php echo @$date1;?>&date2=<?php echo @$date2;?>&num=<?php echo @$num;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>

                    </div>
                </div>
            </div>
<?php echo $this->Form->end();?>
        </div>
    </div>
</div>

<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Reglements'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th style='display:none'><?php echo ('Id'); ?></th>
                <th><strong><?php echo ('Numèro'); ?></strong></th>
	         
                <th><strong><?php echo ('Fournisseur'); ?></strong></th>
	         
                <th><strong><?php echo ('Date'); ?></strong></th>
	         
                <th><strong><?php echo ('Montant reglé'); ?></strong></th> 
	         
                <th><strong><?php echo ('Taux de remise'); ?></strong></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($mpreglements as $mpreglement): ?>
	<tr>
		<td style='display:none'><?php echo h($mpreglement['Mpreglement']['id']); ?></td>
		<td><?php echo h($mpreglement['Mpreglement']['num']); ?></td>
		<td >
			<?php echo $this->Html->link($mpreglement['Fournisseur']['raison_social'], array('controller' => 'fournisseurs', 'action' => 'view', $mpreglement['Fournisseur']['id'])); ?>
		</td>
		<td><?php echo h($mpreglement['Mpreglement']['Date'] = date("d/m/Y", strtotime(str_replace('-', '/', $mpreglement['Mpreglement']['Date'])))); ?></td>
		<td><?php echo h($mpreglement['Mpreglement']['Montant']); ?></td> 
		<td><?php echo h($mpreglement['Mpreglement']['remise']); ?></td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $mpreglement['Mpreglement']['id']),array('escape' => false)); ?> 
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $mpreglement['Mpreglement']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $mpreglement['Mpreglement']['id'])); ?>
                    <a onClick="flvFPW1(wr+'Mpreglements/imprimerview/'+<?php echo $mpreglement['Mpreglement']['id'];?>,'UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class='btn btn-xs ls-blue-btn'><i class='fa fa-print'></i></button></a>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


