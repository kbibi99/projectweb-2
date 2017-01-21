<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bls/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Bon de livraison'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
	         
		<th><?php echo $this->Paginator->sort('Fournisseur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Numero'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix_ht'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix_ttc'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Bill_id'); ?></th>
			<th class="actions" align="center"></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($bls as $bl): ?>
	<tr>
		<td >
			<?php echo $this->Html->link($bl['Fournisseur']['id'], array('controller' => 'fournisseurs', 'action' => 'view', $bl['Fournisseur']['id'])); ?>
		</td>
		<td><?php echo h($bl['Bl']['date']); ?>&nbsp;</td>
		<td><?php echo h($bl['Bl']['numero']); ?>&nbsp;</td>
		<td><?php echo h($bl['Bl']['prix_ht']); ?>&nbsp;</td>
		<td><?php echo h($bl['Bl']['prix_ttc']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($bl['Bill']['id'], array('controller' => 'bills', 'action' => 'view', $bl['Bill']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $bl['Bl']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $bl['Bl']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $bl['Bl']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $bl['Bl']['id'])); ?>
		</td>
                <td>
                                    <input type="checkbox" name="demande" id="demande" value="<?php echo $bl['Bl']['id']; ?>">
                                </td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	<div class="creationlot" style="display: none">
           <div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger btnlot" href="<?php echo $this->webroot;?>Lots/addLotFromBl"  link=',' nb='0'/> <i class="fa fa-plus-circle"></i> créer un lot </a>
    </div> 

           </div></div>
                                </div></div></div></div></div>	


