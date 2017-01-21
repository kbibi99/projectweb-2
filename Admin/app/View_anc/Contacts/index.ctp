<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Contacts/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Contacts'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tel'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fax'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Adresse'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Pay_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Ville_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fournisseur_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['nom']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['tel']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['fax']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['adresse']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($contact['Pay']['designation'], array('controller' => 'pays', 'action' => 'view', $contact['Pay']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($contact['Ville']['name'], array('controller' => 'villes', 'action' => 'view', $contact['Ville']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($contact['Fournisseur']['id'], array('controller' => 'fournisseurs', 'action' => 'view', $contact['Fournisseur']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $contact['Contact']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $contact['Contact']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $contact['Contact']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $contact['Contact']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


