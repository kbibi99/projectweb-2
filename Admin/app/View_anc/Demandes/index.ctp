<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Demandes/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>

</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Demandes'); ?></h3>
            </div>
            <div class="panel-body">
                <div class="ls-editable-table table-responsive ls-table">
                    <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                        <thead>
                            <tr>

                                <th style="display: none"><?php echo $this->Paginator->sort('Id'); ?></th>

                                <th><?php echo $this->Paginator->sort('Date'); ?></th>

                                <th><?php echo $this->Paginator->sort('Numero'); ?></th>

                                <th><?php echo $this->Paginator->sort('Utilisateur_id'); ?></th>
                                <th class="actions" align="center"></th>
                                <th class="actions" align="center"></th>
                            </tr></thead><tbody>

                    
	<?php foreach ($demandes as $i => $demande): ?>
                            <tr>
                                <td style="display: none"><?php echo h($demande['Demande']['id']); ?>&nbsp;</td>
                                <td><?php echo h($demande['Demande']['date']); ?>&nbsp;</td>
                                <td><?php echo h($demande['Demande']['numero']); ?>&nbsp;</td>
                                <td >
			<?php echo $this->Html->link($demande['Utilisateur']['id'], array('controller' => 'utilisateurs', 'action' => 'view', $demande['Utilisateur']['id'])); ?>
                                </td>
                                <td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $demande['Demande']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $demande['Demande']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $demande['Demande']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $demande['Demande']['id'])); ?>
                                </td>
                                <td>
                                    <input type="checkbox" name="demande" id="demande" value="<?php echo $demande['Demande']['id']; ?>" index="<?php echo $i; ?>" >
                                </td>
                            </tr>
<?php endforeach; ?>
                        </tbody>
                    </table>




                   
<div class="creationbs" style="display: none">
           <div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger btnbs" href="<?php echo $this->webroot;?>Bonsorties/add"  link=',' nb='0'/> <i class="fa fa-plus-circle"></i> créer un bon de sortie </a>
    </div> 

           </div></div>









                    </div>

                </div>

            </div>

        </div>


    </div>	


