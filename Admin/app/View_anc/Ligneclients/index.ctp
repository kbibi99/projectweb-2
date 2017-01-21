<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Ligneclients/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ligneclients'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Adresse'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Name'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Ville_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Pay_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tel'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fax'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Client_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($ligneclients as $ligneclient): ?>
	<tr>
		<td><?php echo h($ligneclient['Ligneclient']['id']); ?>&nbsp;</td>
		<td><?php echo h($ligneclient['Ligneclient']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($ligneclient['Ligneclient']['name']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($ligneclient['Ville']['name'], array('controller' => 'villes', 'action' => 'view', $ligneclient['Ville']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($ligneclient['Pay']['id'], array('controller' => 'pays', 'action' => 'view', $ligneclient['Pay']['id'])); ?>
		</td>
		<td><?php echo h($ligneclient['Ligneclient']['tel']); ?>&nbsp;</td>
		<td><?php echo h($ligneclient['Ligneclient']['fax']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($ligneclient['Client']['id'], array('controller' => 'clients', 'action' => 'view', $ligneclient['Client']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $ligneclient['Ligneclient']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $ligneclient['Ligneclient']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $ligneclient['Ligneclient']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $ligneclient['Ligneclient']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


