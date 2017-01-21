<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignedevis/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lignedevis'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Devi_id'); ?></th>
	         
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
	<?php foreach ($lignedevis as $lignedevi): ?>
	<tr>
		<td><?php echo h($lignedevi['Lignedevi']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignedevi['Devi']['id'], array('controller' => 'devis', 'action' => 'view', $lignedevi['Devi']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($lignedevi['Article']['name'], array('controller' => 'articles', 'action' => 'view', $lignedevi['Article']['id'])); ?>
		</td>
		<td><?php echo h($lignedevi['Lignedevi']['designation']); ?>&nbsp;</td>
		<td><?php echo h($lignedevi['Lignedevi']['Qte']); ?>&nbsp;</td>
		<td><?php echo h($lignedevi['Lignedevi']['Prix']); ?>&nbsp;</td>
		<td><?php echo h($lignedevi['Lignedevi']['Remise']); ?>&nbsp;</td>
		<td><?php echo h($lignedevi['Lignedevi']['Fodec']); ?>&nbsp;</td>
		<td><?php echo h($lignedevi['Lignedevi']['Tva']); ?>&nbsp;</td>
		<td><?php echo h($lignedevi['Lignedevi']['Total_HT']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lignedevi['Lignedevi']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lignedevi['Lignedevi']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lignedevi['Lignedevi']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lignedevi['Lignedevi']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


