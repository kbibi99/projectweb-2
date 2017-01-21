<?php
$articleS_add=  CakeSession::read('articleS_add'); 
if($articleS_add==1){
?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot; ?>Articles/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<?php } ?>
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
	         
            <th style="display: none"><?php echo $this->Paginator->sort('Id'); ?></th>
	         <th><?php echo $this->Paginator->sort('Famille_id'); ?></th>
                 		<th><?php echo $this->Paginator->sort('Référence'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Modele_id'); ?></th>
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix'); ?></th>
                
		<th><?php echo $this->Paginator->sort('Quantité'); ?></th>
		<th><?php echo $this->Paginator->sort('Quantité alerte'); ?></th>
	         
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php 
        foreach ($articles as $article): 
            $somme=0;
            foreach(@$stockdepot as $stock){
            if($stock[0]['aticle_id']==$article['Article']['id']){
             $somme=$stock[0]['somme'];
            }}
            ?>
	<tr>
		<td style="display: none"><?php echo h($article['Article']['id']); 
                
                
                ?></td>
                <td >
			<?php echo $this->Html->link($article['Famille']['name'], array('controller' => 'familles', 'action' => 'view', $article['Famille']['id'])); ?>
		</td>
		<td >
			<?php  echo h($article['Article']['reference']); ?>
		</td>
		<td >
			<?php echo $this->Html->link($article['Modele']['name'], array('controller' => 'modeles', 'action' => 'view', $article['Modele']['id'])); ?>
		</td>
		<td><?php echo h($article['Article']['name']); ?></td>
		<td><?php echo h($article['Article']['prix']); ?></td>

		<td
                    <?php 
                    
                    if($somme<=$article['Article']['qtealert']) {
                        echo 'style="background: red;"';
                    }  ?>
                    
                    ><?php echo h($somme); ?></td>
		<td><?php echo h($article['Article']['qtealert']); ?></td>
		

		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $article['Article']['id']),array('escape' => false)); ?>
			<?php $articleS_edit=  CakeSession::read('articleS_edit'); 
                                if($articleS_edit==1){
                        echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $article['Article']['id']),array('escape' => false)); 
                                } $articleS_delete=  CakeSession::read('articleS_delete'); 
                                if($articleS_delete==1){
                        echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $article['Article']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $article['Article']['id'])); 
                                }?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


