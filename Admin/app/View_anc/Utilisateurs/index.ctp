<?php
$utilisateur_add=  CakeSession::read('utilisateur_add'); 
if($utilisateur_add==1){
?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Utilisateurs/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<?php }?> 
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Utilisateurs'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Name'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fonction_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Login'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Pass'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($utilisateurs as $utilisateur): ?>
	<tr>
		<td><?php echo h($utilisateur['Utilisateur']['id']); ?>&nbsp;</td>
		<td><?php echo h($utilisateur['Utilisateur']['name']); ?>&nbsp;</td>
		<td><?php echo h($utilisateur['Utilisateur']['fonction_id']); ?>&nbsp;</td>
		<td><?php echo h($utilisateur['Utilisateur']['Login']); ?>&nbsp;</td>
		<td><?php echo h($utilisateur['Utilisateur']['Pass']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $utilisateur['Utilisateur']['id']),array('escape' => false)); ?>
			<?php $utilisateur_edit=  CakeSession::read('utilisateur_edit'); 
                            if($utilisateur_edit==1){
                        echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $utilisateur['Utilisateur']['id']),array('escape' => false)); 
                            }?>
			<?php $utilisateur_delete=  CakeSession::read('utilisateur_delete'); 
                                if($utilisateur_delete==1){
                        echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $utilisateur['Utilisateur']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $utilisateur['Utilisateur']['id'])); 
                                }?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


