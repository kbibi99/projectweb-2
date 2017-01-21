<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Piecereglements/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Piecereglements'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Paiement_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Reglement_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Piece_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Montant'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Envoye'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Valide'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($piecereglements as $piecereglement): ?>
	<tr>
		<td><?php echo h($piecereglement['Piecereglement']['id']); ?></td>
		<td >
			<?php echo $this->Html->link($piecereglement['Paiement']['name'], array('controller' => 'paiements', 'action' => 'view', $piecereglement['Paiement']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($piecereglement['Reglement']['id'], array('controller' => 'reglements', 'action' => 'view', $piecereglement['Reglement']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($piecereglement['Piece']['id'], array('controller' => 'pieces', 'action' => 'view', $piecereglement['Piece']['id'])); ?>
		</td>
		<td><?php echo h($piecereglement['Piecereglement']['Montant']); ?></td>
		<td><?php echo h($piecereglement['Piecereglement']['envoye']); ?></td>
		<td><?php echo h($piecereglement['Piecereglement']['valide']); ?></td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $piecereglement['Piecereglement']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $piecereglement['Piecereglement']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $piecereglement['Piecereglement']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $piecereglement['Piecereglement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


