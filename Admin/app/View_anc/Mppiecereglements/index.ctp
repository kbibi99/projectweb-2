<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Mppiecereglements/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Mppiecereglements'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Paiement_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Mpreglement_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Montant'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('N_recu'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Echeance'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('N_piece'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($mppiecereglements as $mppiecereglement): ?>
	<tr>
		<td><?php echo h($mppiecereglement['Mppiecereglement']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($mppiecereglement['Paiement']['name'], array('controller' => 'paiements', 'action' => 'view', $mppiecereglement['Paiement']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($mppiecereglement['Mpreglement']['id'], array('controller' => 'mpreglements', 'action' => 'view', $mppiecereglement['Mpreglement']['id'])); ?>
		</td>
		<td><?php echo h($mppiecereglement['Mppiecereglement']['Montant']); ?>&nbsp;</td>
		<td><?php echo h($mppiecereglement['Mppiecereglement']['n_recu']); ?>&nbsp;</td>
		<td><?php echo h($mppiecereglement['Mppiecereglement']['echeance']); ?>&nbsp;</td>
		<td><?php echo h($mppiecereglement['Mppiecereglement']['n_piece']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $mppiecereglement['Mppiecereglement']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $mppiecereglement['Mppiecereglement']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $mppiecereglement['Mppiecereglement']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $mppiecereglement['Mppiecereglement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


