<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Stockdepots/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Stock dépots'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<!--<th><?php echo $this->Paginator->sort('Id'); ?></th>-->
	         
		<th><?php echo $this->Paginator->sort('Qte_packet'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte_pièce'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Dépot'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Article_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($stockdepots as $stockdepot): ?>
	<tr>
		<!--<td><?php echo h($stockdepot['Stockdepot']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($stockdepot['Stockdepot']['qte_packet']); ?>&nbsp;</td>
		<td><?php echo h($stockdepot['Stockdepot']['qte_piece']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($stockdepot['Depot']['name'], array('controller' => 'depots', 'action' => 'view', $stockdepot['Depot']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($stockdepot['Article']['name'], array('controller' => 'articles', 'action' => 'view', $stockdepot['Article']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $stockdepot['Stockdepot']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $stockdepot['Stockdepot']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $stockdepot['Stockdepot']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $stockdepot['Stockdepot']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


