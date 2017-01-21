<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Devis/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Devis'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Numero'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Client_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Total_HT'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Remise'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tva'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Total_TTC'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Timbre_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Utilisateur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Ligneclient_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($devis as $devi): ?>
	<tr>
		<td><?php echo h($devi['Devi']['id']); ?>&nbsp;</td>
		<td><?php echo h($devi['Devi']['Numero']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($devi['Client']['id'], array('controller' => 'clients', 'action' => 'view', $devi['Client']['id'])); ?>
		</td>
		<td><?php echo h($devi['Devi']['Date']); ?>&nbsp;</td>
		<td><?php echo h($devi['Devi']['Total_HT']); ?>&nbsp;</td>
		<td><?php echo h($devi['Devi']['Remise']); ?>&nbsp;</td>
		<td><?php echo h($devi['Devi']['Tva']); ?>&nbsp;</td>
		<td><?php echo h($devi['Devi']['Total_TTC']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($devi['Timbre']['name'], array('controller' => 'timbres', 'action' => 'view', $devi['Timbre']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($devi['Utilisateur']['id'], array('controller' => 'utilisateurs', 'action' => 'view', $devi['Utilisateur']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($devi['Ligneclient']['name'], array('controller' => 'ligneclients', 'action' => 'view', $devi['Ligneclient']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $devi['Devi']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $devi['Devi']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $devi['Devi']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $devi['Devi']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


