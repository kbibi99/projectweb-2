<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignempes/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lignempes'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Matierepremiere_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Colis'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Ttc'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Entreemp_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lignempes as $lignempe): ?>
	<tr>
		<td><?php echo h($lignempe['Lignempe']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignempe['Matierepremiere']['name'], array('controller' => 'matierepremieres', 'action' => 'view', $lignempe['Matierepremiere']['id'])); ?>
		</td>
		<td><?php echo h($lignempe['Lignempe']['colis']); ?>&nbsp;</td>
		<td><?php echo h($lignempe['Lignempe']['qte']); ?>&nbsp;</td>
		<td><?php echo h($lignempe['Lignempe']['ttc']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lignempe['Entreemp']['id'], array('controller' => 'entreemps', 'action' => 'view', $lignempe['Entreemp']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lignempe['Lignempe']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lignempe['Lignempe']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lignempe['Lignempe']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lignempe['Lignempe']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


