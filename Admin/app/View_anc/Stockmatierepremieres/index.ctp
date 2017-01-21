<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Stockmatierepremieres/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Stockmatierepremieres'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Matierepremiere_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Deposit_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Colis'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($stockmatierepremieres as $stockmatierepremiere): ?>
	<tr>
		<td><?php echo h($stockmatierepremiere['Stockmatierepremiere']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($stockmatierepremiere['Matierepremiere']['name'], array('controller' => 'matierepremieres', 'action' => 'view', $stockmatierepremiere['Matierepremiere']['id'])); ?>
		</td>
		<td><?php echo h($stockmatierepremiere['Stockmatierepremiere']['deposit_id']); ?>&nbsp;</td>
		<td><?php echo h($stockmatierepremiere['Stockmatierepremiere']['colis']); ?>&nbsp;</td>
		<td><?php echo h($stockmatierepremiere['Stockmatierepremiere']['qte']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $stockmatierepremiere['Stockmatierepremiere']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $stockmatierepremiere['Stockmatierepremiere']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $stockmatierepremiere['Stockmatierepremiere']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $stockmatierepremiere['Stockmatierepremiere']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


