<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Deposits/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Dépôts'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
	         
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Responsable'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Adresse'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tel'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fax'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($deposits as $deposit): ?>
	<tr>
		<td><?php echo h($deposit['Deposit']['nom']); ?>&nbsp;</td>
		<td><?php echo h($deposit['Deposit']['responsable']); ?>&nbsp;</td>
		<td><?php echo h($deposit['Deposit']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($deposit['Deposit']['tel']); ?>&nbsp;</td>
		<td><?php echo h($deposit['Deposit']['fax']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $deposit['Deposit']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $deposit['Deposit']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $deposit['Deposit']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $deposit['Deposit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


