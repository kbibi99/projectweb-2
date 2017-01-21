<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bills/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Bills'); ?></h3>
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
			<th class="actions" align="center"></th>
                        <th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($bills as $bill): ?>
	<tr>
		<td >
			<?php echo $this->Html->link($bill['Fournisseur']['id'], array('controller' => 'fournisseurs', 'action' => 'view', $bill['Fournisseur']['id'])); ?>
		</td>
		<td><?php echo h($bill['Bill']['date']); ?>&nbsp;</td>
		<td><?php echo h($bill['Bill']['numero']); ?>&nbsp;</td>
		<td><?php echo h($bill['Bill']['prix_ht']); ?>&nbsp;</td>
		<td><?php echo h($bill['Bill']['prix_ttc']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $bill['Bill']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $bill['Bill']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $bill['Bill']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $bill['Bill']['id'])); ?>
		</td>
                 <?php if($bill['Bill']['type'] == '0'){?><td>
                    <input type="checkbox" name="demande" id="facture" value="<?php echo $bill['Bill']['id']; ?>">
                </td>
                 <?php }else{
                     ?>
                <td></td>
                <?php
                 } ?>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
                                        
                                        <div class="creationbill" style="display: none">
           <div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger btnbill" href="<?php echo $this->webroot;?>Lots/addLotFromBill"  link=',' nb='0'/> <i class="fa fa-plus-circle"></i> créer un lot </a>
    </div> 

           </div></div>
	
                                </div></div></div></div></div>	


