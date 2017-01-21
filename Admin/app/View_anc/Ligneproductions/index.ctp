<!--<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Ligneproductions/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>-->
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Réception des articles'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Article_id'); ?></th>
                <th><?php echo 'Réference'; ?></th>
	         
		
	         
		<th><?php echo $this->Paginator->sort('Qte_liv'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte_recu'); ?></th>
	         
		<th><?php echo 'Depots'; ?></th>
	         
		
	         
		
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($ligneproductions as $i=>$ligneproduction): ?>
	<tr>
		<td >
                    <input type="hidden"  id="id<?php echo $i; ?>" value='<?php echo h($ligneproduction['Ligneproduction']['id']);?>'/>
                    <input type="hidden"  id="article_id<?php echo $i; ?>" value='<?php echo h($ligneproduction['Ligneproduction']['article_id']);?>'/>
			<?php echo $this->Html->link($ligneproduction['Article']['name'], array('controller' => 'articles', 'action' => 'view', $ligneproduction['Article']['id'])); ?>
		</td>
                <td >
                    <input type="hidden" id="qte_liv<?php echo $i;?>" value="<?php echo $ligneproduction['Ligneproduction']['qte_liv'];?>" />
			<?php echo $this->Html->link($ligneproduction['Article']['reference'], array('controller' => 'articles', 'action' => 'view', $ligneproduction['Article']['id'])); ?>
		</td>
		<td><?php echo h($ligneproduction['Ligneproduction']['qte_liv'])-h($ligneproduction['Ligneproduction']['qte_recu']); ?>&nbsp;</td>
                <td><input type="text" name="" id="qte_recu<?php echo $i;?>"  value="<?php echo h($ligneproduction['Ligneproduction']['qte_liv'])-h($ligneproduction['Ligneproduction']['qte_recu']); ?>" class='form-control'/>&nbsp;</td>
		<td>
                    <select name="data[depot_id]" class="form-control select" required data-bv-notempty-message="Champ Obligatoire" id="depot_id<?php echo $i; ?>">
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($depots as $depot){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $depot['Depot']['id'];?>"><?php echo $depot['Depot']['name']; ?></option>
                        <?php }?>
</select>
                    <?php
                
		//echo $this->Form->input('depot_id',array('div'=>'form-group','label'=>'','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','id'=>'depot_id'.$i,'empty'=>'Veuillez choisir') );?></td>
		
		<td align="center">
                     <span class="label label-light-green aceptestcok" index="<?php echo $i;?>">Acepter</span>
			</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


