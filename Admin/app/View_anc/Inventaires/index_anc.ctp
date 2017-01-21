<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventaires/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Inventaires'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<!--<th><?php echo $this->Paginator->sort('Id'); ?></th>-->
	         
		<th><?php echo $this->Paginator->sort('Numéro '); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Dépôt_id'); ?></th>
                <th><?php echo $this->Paginator->sort('Marque_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<!--<th><?php echo $this->Paginator->sort('Utilisateur_id'); ?></th>-->
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
        <?php $j=0;
        foreach ($inventaires as $c=>$inventaire){
            $j++;
        } ?>                  
	<?php foreach ($inventaires as $k=>$inventaire): ?>
	<tr>
		<!--<td><?php echo h($inventaire['Inventaire']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($inventaire['Inventaire']['num']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($inventaire['Depot']['name'], array('controller' => 'depots', 'action' => 'view', $inventaire['Depot']['id'])); ?>
		</td>
                <td >
			<?php echo $this->Html->link($inventaire['Marque']['name'], array('controller' => 'depots', 'action' => 'view', $inventaire['Marque']['id'])); ?>
		</td>
		<td> <?php  $inventaire['Inventaire']['Date']=date("d/m/Y",strtotime(str_replace('-','/',$inventaire['Inventaire']['Date']))); ?><?php echo h($inventaire['Inventaire']['Date']); ?>&nbsp;</td>
		<!--<td >-->
			<?php echo $this->Html->link($inventaire['Utilisateur']['id'], array('controller' => 'utilisateurs', 'action' => 'view', $inventaire['Utilisateur']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $inventaire['Inventaire']['id']),array('escape' => false)); ?>
			<?php if($k==$c){?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $inventaire['Inventaire']['id']),array('escape' => false)); ?>
                        <?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $inventaire['Inventaire']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $inventaire['Inventaire']['id'])); }?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


