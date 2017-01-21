<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Productionfamilles/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Productionfamilles'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
            <th style="display: none"><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Numero'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Marque_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Date'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($productionfamilles as $productionfamille): ?>
	<tr>
            <td style="display: none"><?php echo h($productionfamille['Productionfamille']['id']); ?></td>
		<td><?php echo h($productionfamille['Productionfamille']['numero']); ?></td>
		<td >
			<?php echo $this->Html->link($productionfamille['Marque']['name'], array('controller' => 'marques', 'action' => 'view', $productionfamille['Marque']['id'])); ?>
		</td>
                <td><?php echo h(date('d/m/Y',strtotime(str_replace('-','/',$productionfamille['Productionfamille']['date'])))); ?></td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $productionfamille['Productionfamille']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $productionfamille['Productionfamille']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $productionfamille['Productionfamille']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $productionfamille['Productionfamille']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


