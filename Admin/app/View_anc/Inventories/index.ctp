<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventories/add/<?php echo $typ ;?>"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
    
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Inventaire'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr> 
		<th style="display: none"></th>
		<th><?php echo 'Numero' ; ?></th>
		<th><?php echo 'Date'; ?></th>
	         
		<th><?php echo 'Dépôt'; ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php
        $last=count($inventories)-1; 
        foreach ($inventories as $k=>$inventory): ?>
	<tr>
            <td style="display: none"><?php echo h($inventory['Inventory']['id']); ?></td>
		<td><?php echo h($inventory['Inventory']['numero']); ?>&nbsp;</td>
		<td><?php echo $inventory['Inventory']['date']=date("d/m/Y",strtotime(str_replace('-','/',$inventory['Inventory']['date']))); ?></td>
		<td >
			<?php echo $this->Html->link($inventory['Deposit']['nom'], array('controller' => 'deposits', 'action' => 'view', $inventory['Deposit']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view/'.$typ, $inventory['Inventory']['id']),array('escape' => false)); ?>
			<?php if($k==$last){ ?>
                        <?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit/'.$typ, $inventory['Inventory']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete/'.$typ, $inventory['Inventory']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $inventory['Inventory']['id'])); ?>
                        <?php } ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


