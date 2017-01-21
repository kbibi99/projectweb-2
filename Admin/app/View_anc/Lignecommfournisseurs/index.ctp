<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignefacturefournisseurs/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lignefacturefournisseurs'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Facturefournisseur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Mpfournisseur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Gramage'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Designation'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Remise'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fodec'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tva'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Total_HT'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lignefacturefournisseurs as $lignefacturefournisseur): ?>
	<tr>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignefacturefournisseur['Facturefournisseur']['id'], array('controller' => 'facturefournisseurs', 'action' => 'view', $lignefacturefournisseur['Facturefournisseur']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($lignefacturefournisseur['Mpfournisseur']['id'], array('controller' => 'mpfournisseurs', 'action' => 'view', $lignefacturefournisseur['Mpfournisseur']['id'])); ?>
		</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['gramage']); ?>&nbsp;</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['designation']); ?>&nbsp;</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['Qte']); ?>&nbsp;</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['Prix']); ?>&nbsp;</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['Remise']); ?>&nbsp;</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['Fodec']); ?>&nbsp;</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['Tva']); ?>&nbsp;</td>
		<td><?php echo h($lignefacturefournisseur['Lignefacturefournisseur']['Total_HT']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lignefacturefournisseur['Lignefacturefournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lignefacturefournisseur['Lignefacturefournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lignefacturefournisseur['Lignefacturefournisseur']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lignefacturefournisseur['Lignefacturefournisseur']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


