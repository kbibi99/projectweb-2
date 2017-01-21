<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Entreecaisses/index"/> <i class="fa fa-plus-circle"></i> Retour </a>
    </div>

</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Les caisses'); ?></h3>
            </div>
            
            <div class="panel-body">
                <?php echo $this->Form->create('Entreecaiss',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                <div class="ls-editable-table table-responsive ls-table">
                    <table class="table table-bordered table-striped table-bottomless" >
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Num reçu</th>
                                <th>Paiement</th>
                                <th>Montant</th>
                                <th>Validé</th>


                            </tr></thead><tbody>
                            
                            <?php  $n =0 ;?>
	<?php foreach ($pieces as $key => $value): ?>
                            <tr>
                                <?php $value['Piece']['echance']=date("d/m/Y",strtotime(str_replace('-','/',($value['Piece']['echance']))));
                                echo $this->Form->input('piecereglement_id',array('type' => 'hidden','value' => $value['Piecereglement']['id'], 'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire', 'name' => 'Entreecaiss['.$n.'][piecereglement_id]') );?>
                                <td><?php echo h($value['Piece']['Client']['Raison_Social']);?></td>
                                <td><?php echo h($value['Piece']['num_recu']);?></td>
                                <td><?php echo h($value['Paiement']['name']); ?> <?php if( ($value['Piecereglement']['paiement_id'] == 2)||($value['Piecereglement']['paiement_id'] == 3)){
                                   echo '(Numéro : '.$value['Piece']['num'].' | Echéance : '.$value['Piece']['echance'].')';
                                }
                                ?>&nbsp;</td>


                                <td><?php echo h($value['Piecereglement']['Montant']); ?>&nbsp;</td>


                                <td>
                                    <input type="checkbox" name="Entreecaiss[<?php echo $n; ?>][valide]"  id="valide" >
                                </td>

                            </tr>
                            <?php $n++; ?>
<?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </div>
<?php echo $this->Form->end();?>
        </div></div></div>	


