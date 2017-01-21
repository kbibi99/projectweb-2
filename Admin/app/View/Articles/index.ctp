<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Articles/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Articles'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Name'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Categorie_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Image'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($articles as $article): ?>
	<tr>
		<td style="display:none"><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td ><?php echo h($article['Article']['name']); ?>&nbsp;</td>
		<td ><?php echo h($article['Article']['prix']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($article['Categorie']['name'], array('controller' => 'categories', 'action' => 'view', $article['Categorie']['id'])); ?>
		</td>
		<td ><?php echo h($article['Article']['image']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $article['Article']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $article['Article']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $article['Article']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $article['Article']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


