<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Familles/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
       </div> 
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Familles'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
            <th style="display: none"><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Nom'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Code'); ?></th>
		<th><?php echo $this->Paginator->sort('Prix'); ?></th>
		<th><?php echo $this->Paginator->sort('Quantité'); ?></th>
		<th><?php echo $this->Paginator->sort('Quantité alerte'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($familles as $famille):
             $somme=0;
            foreach(@$stockdepot as $stock){
              //  debug($famille['Famille']['id']); die;
            if($stock[0]['famille_id']==$famille['Famille']['id']){
             $somme=$stock[0]['somme'];
            }}
            ?>
	<tr>
            <td style="display: none"><?php echo h($famille['Famille']['id']); ?>&nbsp;</td>
		<td><?php echo h($famille['Famille']['name']); ?>&nbsp;</td>
		<td><?php echo h($famille['Famille']['code']); ?>&nbsp;</td>
		<td><?php echo h($famille['Famille']['Prix']); ?>&nbsp;</td>
		<td 
                    <?php  
                if($somme<=$famille['Famille']['id']) {
                        echo 'style="background: red;"';
                    }  ?> 
                    > 
                        
                        <?php  
                if($somme)
                echo h($somme);
                else
                echo '0';
                ?></td>
		<td
                   
                    
                    ><?php echo h($famille['Famille']['Stock_alerte']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $famille['Famille']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $famille['Famille']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $famille['Famille']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $famille['Famille']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


