<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Sortiecaisses/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Sortie caisses'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Sortiecaiss',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">
                <table style="width: 100%">
                    <tr class="base"><td style="">
              	<?php
		echo $this->Form->input('typedecaissement_id',array('div'=>'form-group','name'=>'data[Sortiecaiss][base]','id'=>'base','between'=>'<div class="col-sm-10">','empty'=>'Veuillez choisir','after'=>'</div>','class'=>'select') );
                ?>
                        </td><td align="center"><img class="add" style="position: relative;top: -13px;" src="<?php echo $this->webroot;?>img/plus.png" alt="" width="15px"/></td></tr>
                     <tr class="new" style="display: none;"><td style="">
              	<?php
		echo $this->Form->input('typedecaissement_id',array('div'=>'form-group','name'=>'data[Sortiecaiss][new]','id'=>'new','between'=>'<div class="col-sm-10">','empty'=>'Veuillez choisir','type'=>'text','after'=>'</div>','class'=>'form-control') );
                ?>
                    </td><td align="center"><img class="suppp" style="position: relative;top: -13px;" src="<?php echo $this->webroot;?>img/cross.png" alt="" width="15px"/></td></tr>
                </table>
                    <?php
                echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('montant',array('type' => 'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('observation',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>               
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

