<?php
$articleS_add=  CakeSession::read('articleS_add'); 
if($articleS_add==1){
?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Tailles/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<?php } ?>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Tailles'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
            <th style="display: none "><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Code'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($tailles as $taille): ?>
	<tr>
            <td style="display: none"><?php echo h($taille['Taille']['id']); ?>&nbsp;</td>
		<td><?php echo h($taille['Taille']['name']); ?>&nbsp;</td>
		<td><?php echo h($taille['Taille']['code']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $taille['Taille']['id']),array('escape' => false)); ?>
			<?php $articleS_edit=  CakeSession::read('articleS_edit'); 
                                if($articleS_edit==1){
                        echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $taille['Taille']['id']),array('escape' => false)); 
                         } $articleS_delete=  CakeSession::read('articleS_delete'); 
                                if($articleS_delete==1){
                        echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $taille['Taille']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $taille['Taille']['id'])); 
                                }?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


