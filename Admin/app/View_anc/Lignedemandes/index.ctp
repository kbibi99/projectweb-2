<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignedemandes/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lignedemandes'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Demande_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Matierepremiere_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lignedemandes as $lignedemande): ?>
	<tr>
		<td><?php echo h($lignedemande['Lignedemande']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignedemande['Demande']['id'], array('controller' => 'demandes', 'action' => 'view', $lignedemande['Demande']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($lignedemande['Matierepremiere']['name'], array('controller' => 'matierepremieres', 'action' => 'view', $lignedemande['Matierepremiere']['id'])); ?>
		</td>
		<td><?php echo h($lignedemande['Lignedemande']['qte']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lignedemande['Lignedemande']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lignedemande['Lignedemande']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lignedemande['Lignedemande']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lignedemande['Lignedemande']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


