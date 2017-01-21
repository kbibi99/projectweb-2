<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventairefamilles/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Inventaire Familles'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<td style="display: none;"><?php echo $this->Paginator->sort('Id'); ?></td>
                <td align="center"><?php echo ('Numero'); ?></td>
	        <td align="center"><?php echo ('Date'); ?></td>
		<td class="actions" align="center"></td>
        </tr></thead><tbody>
        <?php $i=0;
        foreach ($inventairefamilles as $j=>$inventairefamille){
            $i++;
        } ?>                  
	<?php foreach ($inventairefamilles as $k=>$inventairefamille): ?>
	<tr>
		<td style="display: none;"><?php echo h($inventairefamille['Inventairefamille']['id']); ?>&nbsp;</td>
		<td align="center"><?php echo h($inventairefamille['Inventairefamille']['numero']); ?>&nbsp;</td>
                <td align="center"><?php echo h($inventairefamille['Inventairefamille']['date']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $inventairefamille['Inventairefamille']['id']),array('escape' => false)); ?>
			<?php if($k==$j){?>
                        <?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $inventairefamille['Inventairefamille']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $inventairefamille['Inventairefamille']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $inventairefamille['Inventairefamille']['id'])); ?>
		        <?php } ?>
                </td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


