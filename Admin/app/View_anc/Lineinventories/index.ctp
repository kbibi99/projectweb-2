<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lineinventories/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lineinventories'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
	         
		<th><?php echo $this->Paginator->sort('Inventory_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Matierepremiere_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Quantite_paquet'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Quantite_piece'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lineinventories as $lineinventory): ?>
	<tr>
		<td><?php echo h($lineinventory['Lineinventory']['inventory_id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lineinventory['Matierepremiere']['id'], array('controller' => 'matierepremieres', 'action' => 'view', $lineinventory['Matierepremiere']['id'])); ?>
		</td>
		<td><?php echo h($lineinventory['Lineinventory']['quantite_paquet']); ?>&nbsp;</td>
		<td><?php echo h($lineinventory['Lineinventory']['quantite_piece']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lineinventory['Lineinventory']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lineinventory['Lineinventory']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lineinventory['Lineinventory']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lineinventory['Lineinventory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


