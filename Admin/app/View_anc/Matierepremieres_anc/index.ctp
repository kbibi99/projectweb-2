<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Matierepremieres/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Matiéres premiéres'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
	         
		<th style="display: none;"><?php echo $this->Paginator->sort('Id'); ?></th>
		<th><?php echo $this->Paginator->sort('Référence'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Designation'); ?></th>
	         
	         
		<th><?php echo $this->Paginator->sort('Stock alerte'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Type stock'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($matierepremieres as $matierepremiere): ?>
	<tr>
		<td style="display: none;"><?php echo h($matierepremiere['Matierepremiere']['Id']); ?>&nbsp;</td>
		<td><?php echo h($matierepremiere['Matierepremiere']['code']); ?>&nbsp;</td>
		<td><?php echo h($matierepremiere['Matierepremiere']['designation']); ?>&nbsp;</td>
		<td><?php echo h($matierepremiere['Matierepremiere']['stockalert']); ?>&nbsp;</td>

		<td >
			<?php echo $this->Html->link($matierepremiere['Typestock']['lib'], array('controller' => 'typestocks', 'action' => 'view', $matierepremiere['Typestock']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $matierepremiere['Matierepremiere']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $matierepremiere['Matierepremiere']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $matierepremiere['Matierepremiere']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $matierepremiere['Matierepremiere']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


