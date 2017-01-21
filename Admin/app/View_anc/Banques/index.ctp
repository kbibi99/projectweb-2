<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Banques/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Banques'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th style="display: none;"><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>
	       <th><?php echo $this->Paginator->sort('Numéro Compte'); ?></th>
               <th><?php echo $this->Paginator->sort('RIB'); ?></th>
		<th><?php echo $this->Paginator->sort('Tel'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fax'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Mail'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($banques as $banque): ?>
	<tr>
		<td style="display: none;"><?php echo h($banque['Banque']['id']); ?></td>
		<td><?php echo h($banque['Banque']['Designation']); ?></td>
                <td><?php echo h($banque['Banque']['Numero_compte']); ?></td>
                <td><?php echo h($banque['Banque']['RIB']); ?></td>
		<td><?php echo h($banque['Banque']['Tel']); ?></td>
		<td><?php echo h($banque['Banque']['Fax']); ?></td>
		<td><?php echo h($banque['Banque']['Mail']); ?></td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $banque['Banque']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $banque['Banque']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $banque['Banque']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $banque['Banque']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


