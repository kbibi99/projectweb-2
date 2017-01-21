<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Clients/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Clients'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<!--<th><?php echo $this->Paginator->sort('Id'); ?></th>-->
	         
		<th><?php echo $this->Paginator->sort('Code'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Raison_Social'); ?></th>
	         
		<!--<th><?php echo $this->Paginator->sort('Code_Postal'); ?></th>-->
	         
		<th><?php echo $this->Paginator->sort('Matricule_Fiscal'); ?></th>
	         
		<!--<th><?php echo $this->Paginator->sort('Solde'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Autorisation'); ?></th>-->
	         
		<th><?php echo $this->Paginator->sort('Tel'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fax'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Mail'); ?></th>
	         
		<!--<th><?php echo $this->Paginator->sort('Tva'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Resigtre_Commerce'); ?></th>-->
	         
		<!--<th><?php echo $this->Paginator->sort('Timbre_id'); ?></th>-->
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
		<!--<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($client['Client']['Code']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Raison_Social']); ?>&nbsp;</td>
		<!--<td><?php echo h($client['Client']['Code_Postal']); ?>&nbsp;</td>-->
		<td><?php echo h($client['Client']['Matricule_Fiscal']); ?>&nbsp;</td>
<!--		<td><?php echo h($client['Client']['Solde']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Autorisation']); ?>&nbsp;</td>-->
		<td><?php echo h($client['Client']['Tel']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Fax']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['Mail']); ?>&nbsp;</td>
		<!--<td><?php echo h($client['Client']['Tva']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($client['Client']['Resigtre_Commerce']); ?>&nbsp;</td>-->
<!--		<td >
			<?php echo $this->Html->link($client['Timbre']['name'], array('controller' => 'timbres', 'action' => 'view', $client['Timbre']['id'])); ?>
		</td>-->
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $client['Client']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $client['Client']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $client['Client']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $client['Client']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


