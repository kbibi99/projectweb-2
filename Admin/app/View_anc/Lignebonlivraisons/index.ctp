<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignebonlivraisons/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lignebonlivraisons'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Bonlivraison_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Article_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Designation'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Remise'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fodec'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tva'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Total_HT'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lignebonlivraisons as $lignebonlivraison): ?>
	<tr>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignebonlivraison['Bonlivraison']['id'], array('controller' => 'bonlivraisons', 'action' => 'view', $lignebonlivraison['Bonlivraison']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($lignebonlivraison['Article']['name'], array('controller' => 'articles', 'action' => 'view', $lignebonlivraison['Article']['id'])); ?>
		</td>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['designation']); ?>&nbsp;</td>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['Qte']); ?>&nbsp;</td>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['Prix']); ?>&nbsp;</td>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['Remise']); ?>&nbsp;</td>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['Fodec']); ?>&nbsp;</td>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['Tva']); ?>&nbsp;</td>
		<td><?php echo h($lignebonlivraison['Lignebonlivraison']['Total_HT']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lignebonlivraison['Lignebonlivraison']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lignebonlivraison['Lignebonlivraison']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lignebonlivraison['Lignebonlivraison']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lignebonlivraison['Lignebonlivraison']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


