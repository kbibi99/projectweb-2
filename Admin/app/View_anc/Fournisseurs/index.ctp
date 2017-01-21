<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Fournisseurs/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Fournisseurs'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
	         
            <th style="display: none;"><?php echo $this->Paginator->sort('Code'); ?></th>
                
		<th><?php echo $this->Paginator->sort('Code'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Raison_social'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Code_postal'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Matricule_fiscal'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tel'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fax'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Mail'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tva'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($fournisseurs as $fournisseur): ?>
	<tr>
            <td style="display: none;"><?php echo h($fournisseur['Fournisseur']['id']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['code']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['raison_social']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['code_postal']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['matricule_fiscal']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['tel']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['fax']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['mail']); ?></td>
		<td><?php echo h($fournisseur['Fournisseur']['tva']); ?></td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $fournisseur['Fournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $fournisseur['Fournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $fournisseur['Fournisseur']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $fournisseur['Fournisseur']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


