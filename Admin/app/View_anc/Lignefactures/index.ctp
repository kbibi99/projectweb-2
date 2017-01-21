<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignefactures/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lignefactures'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Facture_id'); ?></th>
	         
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
	<?php foreach ($lignefactures as $lignefacture): ?>
	<tr>
		<td><?php echo h($lignefacture['Lignefacture']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignefacture['Facture']['id'], array('controller' => 'factures', 'action' => 'view', $lignefacture['Facture']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($lignefacture['Article']['name'], array('controller' => 'articles', 'action' => 'view', $lignefacture['Article']['id'])); ?>
		</td>
		<td><?php echo h($lignefacture['Lignefacture']['designation']); ?>&nbsp;</td>
		<td><?php echo h($lignefacture['Lignefacture']['Qte']); ?>&nbsp;</td>
		<td><?php echo h($lignefacture['Lignefacture']['Prix']); ?>&nbsp;</td>
		<td><?php echo h($lignefacture['Lignefacture']['Remise']); ?>&nbsp;</td>
		<td><?php echo h($lignefacture['Lignefacture']['Fodec']); ?>&nbsp;</td>
		<td><?php echo h($lignefacture['Lignefacture']['Tva']); ?>&nbsp;</td>
		<td><?php echo h($lignefacture['Lignefacture']['Total_HT']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lignefacture['Lignefacture']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lignefacture['Lignefacture']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lignefacture['Lignefacture']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lignefacture['Lignefacture']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


