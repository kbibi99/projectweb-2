<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lots/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lots'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
            <th style="display: none;"><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Numero'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Deposit_id'); ?></th>
	         
<!--		<th><?php // echo $this->Paginator->sort('Bill_id'); ?></th>
	         
		<th><?php // echo $this->Paginator->sort('Bl_id'); ?></th>-->
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lots as $lot): ?>
	<tr>
            <td style="display: none;"><?php echo h($lot['Lot']['id']); ?>&nbsp;</td>
		<td><?php echo h($lot['Lot']['date']); ?>&nbsp;</td>
		<td><?php echo h($lot['Lot']['numero']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lot['Deposit']['id'], array('controller' => 'deposits', 'action' => 'view', $lot['Deposit']['id'])); ?>
		</td>
<!--		<td >
			<?php // echo $this->Html->link($lot['Bill']['id'], array('controller' => 'bills', 'action' => 'view', $lot['Bill']['id'])); ?>
		</td>
		<td >
			<?php // echo $this->Html->link($lot['Bl']['id'], array('controller' => 'bls', 'action' => 'view', $lot['Bl']['id'])); ?>
		</td>-->
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lot['Lot']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lot['Lot']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lot['Lot']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lot['Lot']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


