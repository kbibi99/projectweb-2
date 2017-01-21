<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Users/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Users'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Username'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Password'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Email'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('FirstName'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('SecondName'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Accounttype_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td style="display:none"><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td ><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td ><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td ><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td ><?php echo h($user['User']['firstName']); ?>&nbsp;</td>
		<td ><?php echo h($user['User']['secondName']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($user['Accounttype']['name'], array('controller' => 'accounttypes', 'action' => 'view', $user['Accounttype']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $user['User']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $user['User']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $user['User']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


