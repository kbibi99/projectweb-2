<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Mplignereglements/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Mplignereglements'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Mpreglement_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Montant'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Facturefournisseur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Remise'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($mplignereglements as $mplignereglement): ?>
	<tr>
		<td><?php echo h($mplignereglement['Mplignereglement']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($mplignereglement['Mpreglement']['id'], array('controller' => 'mpreglements', 'action' => 'view', $mplignereglement['Mpreglement']['id'])); ?>
		</td>
		<td><?php echo h($mplignereglement['Mplignereglement']['Montant']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($mplignereglement['Facturefournisseur']['id'], array('controller' => 'facturefournisseurs', 'action' => 'view', $mplignereglement['Facturefournisseur']['id'])); ?>
		</td>
		<td><?php echo h($mplignereglement['Mplignereglement']['remise']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $mplignereglement['Mplignereglement']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $mplignereglement['Mplignereglement']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $mplignereglement['Mplignereglement']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $mplignereglement['Mplignereglement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


