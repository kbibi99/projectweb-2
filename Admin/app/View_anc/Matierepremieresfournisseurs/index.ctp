<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Matierepremieresfournisseurs/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Matierepremieresfournisseurs'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fournisseur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Matierepremiere_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Code'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix_achat'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($matierepremieresfournisseurs as $matierepremieresfournisseur): ?>
	<tr>
		<td><?php echo h($matierepremieresfournisseur['Matierepremieresfournisseur']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($matierepremieresfournisseur['Fournisseur']['id'], array('controller' => 'fournisseurs', 'action' => 'view', $matierepremieresfournisseur['Fournisseur']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($matierepremieresfournisseur['Matierepremiere']['id'], array('controller' => 'matierepremieres', 'action' => 'view', $matierepremieresfournisseur['Matierepremiere']['id'])); ?>
		</td>
		<td><?php echo h($matierepremieresfournisseur['Matierepremieresfournisseur']['code']); ?>&nbsp;</td>
		<td><?php echo h($matierepremieresfournisseur['Matierepremieresfournisseur']['prix_achat']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $matierepremieresfournisseur['Matierepremieresfournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $matierepremieresfournisseur['Matierepremieresfournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $matierepremieresfournisseur['Matierepremieresfournisseur']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $matierepremieresfournisseur['Matierepremieresfournisseur']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


