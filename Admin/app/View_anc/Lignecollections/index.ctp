<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignecollections/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lignecollections'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Collection_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Famille_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Designation'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Lignecommande_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lignecollections as $lignecollection): ?>
	<tr>
		<td><?php echo h($lignecollection['Lignecollection']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignecollection['Collection']['id'], array('controller' => 'collections', 'action' => 'view', $lignecollection['Collection']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($lignecollection['Famille']['name'], array('controller' => 'familles', 'action' => 'view', $lignecollection['Famille']['id'])); ?>
		</td>
		<td><?php echo h($lignecollection['Lignecollection']['designation']); ?>&nbsp;</td>
		<td><?php echo h($lignecollection['Lignecollection']['Qte']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignecollection['Lignecommande']['id'], array('controller' => 'lignecommandes', 'action' => 'view', $lignecollection['Lignecommande']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lignecollection['Lignecollection']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lignecollection['Lignecollection']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lignecollection['Lignecollection']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lignecollection['Lignecollection']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


