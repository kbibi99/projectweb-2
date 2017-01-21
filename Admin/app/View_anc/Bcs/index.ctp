<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bcs/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Bons de commande'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
	         
            <th style="display: none;"><?php echo $this->Paginator->sort('Fournisseur_id'); ?></th>
                
		<th><?php echo $this->Paginator->sort('Fournisseur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Numero'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Bon de livraison'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($bcs as $bc): ?>
	<tr>
            <td style="display: none;"><?php echo h($bc['Bc']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($bc['Fournisseur']['raison_social'], array('controller' => 'fournisseurs', 'action' => 'view', $bc['Fournisseur']['id'])); ?>
		</td>
		<td><?php echo h($bc['Bc']['date']); ?>&nbsp;</td>
		<td><?php echo h($bc['Bc']['numero']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($bc['Bl']['numero'], array('controller' => 'bls', 'action' => 'view', $bc['Bl']['id'])); ?>
		</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $bc['Bc']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $bc['Bc']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $bc['Bc']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $bc['Bc']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


