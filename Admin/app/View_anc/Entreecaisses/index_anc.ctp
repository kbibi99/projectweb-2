<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Entreecaisses/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Entreecaisses'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
            <th style="display: none;"><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date_encaissement'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date_reception'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Montant'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Piecereglement_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($entreecaisses as $entreecaiss): ?>
	<tr>
		<td style="display: none;"><?php echo h($entreecaiss['Entreecaiss']['id']); ?>&nbsp;</td>
		<td><?php echo h($entreecaiss['Entreecaiss']['date_encaissement']); ?>&nbsp;</td>
		<td><?php echo h($entreecaiss['Entreecaiss']['date_reception']); ?>&nbsp;</td>
		<td><?php echo h($entreecaiss['Entreecaiss']['montant']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($entreecaiss['Piecereglement']['id'], array('controller' => 'piecereglements', 'action' => 'view', $entreecaiss['Piecereglement']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $entreecaiss['Entreecaiss']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $entreecaiss['Entreecaiss']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $entreecaiss['Entreecaiss']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $entreecaiss['Entreecaiss']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


