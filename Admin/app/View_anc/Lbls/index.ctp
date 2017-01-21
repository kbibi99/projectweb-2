<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lbls/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Lbls'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Bl_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte_pqt'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Qte_piece'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix_unit'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Remise'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tva'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix_ht'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Lc_id'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($lbls as $lbl): ?>
	<tr>
		<td><?php echo h($lbl['Lbl']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lbl['Bl']['id'], array('controller' => 'bls', 'action' => 'view', $lbl['Bl']['id'])); ?>
		</td>
		<td><?php echo h($lbl['Lbl']['qte_pqt']); ?>&nbsp;</td>
		<td><?php echo h($lbl['Lbl']['qte_piece']); ?>&nbsp;</td>
		<td><?php echo h($lbl['Lbl']['prix_unit']); ?>&nbsp;</td>
		<td><?php echo h($lbl['Lbl']['remise']); ?>&nbsp;</td>
		<td><?php echo h($lbl['Lbl']['tva']); ?>&nbsp;</td>
		<td><?php echo h($lbl['Lbl']['prix_ht']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($lbl['Lc']['id'], array('controller' => 'lcs', 'action' => 'view', $lbl['Lc']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $lbl['Lbl']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $lbl['Lbl']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $lbl['Lbl']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $lbl['Lbl']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


