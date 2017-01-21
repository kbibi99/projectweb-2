<?php
$depotS_add=  CakeSession::read('depotS_add'); 
if($depotS_add==1){
?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Depots/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<?php } ?>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Dépots'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<!--<th><?php echo $this->Paginator->sort('Id'); ?></th>-->
	         
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Responsable'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Adresse'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Tel'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fax'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($depots as $depot): ?>
	<tr>
		<!--<td><?php echo h($depot['Depot']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($depot['Depot']['name']); ?>&nbsp;</td>
		<td><?php echo h($depot['Depot']['reponsable']); ?>&nbsp;</td>
		<td><?php echo h($depot['Depot']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($depot['Depot']['tel']); ?>&nbsp;</td>
		<td><?php echo h($depot['Depot']['fax']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $depot['Depot']['id']),array('escape' => false)); ?>
			<?php
                            $depotS_edit=  CakeSession::read('depotS_edit'); 
                                        if($depotS_edit==1){

                        echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $depot['Depot']['id']),array('escape' => false));
                                        } $depotS_delete=  CakeSession::read('depotS_delete'); 
                                    if($depotS_delete==1){

                        echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $depot['Depot']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $depot['Depot']['id'])); 
                                    } ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


