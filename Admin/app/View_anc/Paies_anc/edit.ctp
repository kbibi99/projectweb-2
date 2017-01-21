<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Paies/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Paie'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php //debug($this->request->data);die;
        echo $this->Form->create('Paie',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
                echo $this->Form->input('id',array('empty'=>'Veuillez Choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		echo $this->Form->input('personnel_id',array('empty'=>'Veuillez Choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		echo $this->Form->input('moi_id',array('empty'=>'Veuillez Choisir','label'=>'Mois','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		echo $this->Form->input('annee_id',array('empty'=>'Veuillez Choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		?>
                <div <?php if($this->request->data['Personnel']['Type']=='cadre') {?>style="display: none" <?php } ?> id="houvrier">
                 <?php   
                echo $this->Form->input('Nbheur',array('type'=>'text','label'=>'Nb Heure','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Prixheur',array('type'=>'text','label'=>'Prix Heure','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                echo $this->Form->input('Montantheur',array('type'=>'text','label'=>'Montant Heure','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                
		echo $this->Form->input('Nbheurdimanche',array('type'=>'text','label'=>'Nb Heure Dimanche','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                echo $this->Form->input('Montanthdtaux',array('type'=>'text','label'=>'Montant Heure Dimanche','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                ?></div>
                <div <?php if($this->request->data['Personnel']['Type']=='ouvrier') {?>style="display: none" <?php } ?> id="jcadre">
                 <?php
                echo $this->Form->input('Nbjour',array('type'=>'text','label'=>'Nb Jour','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Prixjour',array('type'=>'text','label'=>'Prix Jour','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                echo $this->Form->input('Montantjour',array('type'=>'text','label'=>'Montant Jour','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                
                echo $this->Form->input('Nbjourdimanche',array('type'=>'text','label'=>'Nb Jour Dimanche','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
		echo $this->Form->input('Montantjdtaux',array('type'=>'text','label'=>'Montant jour Dimanche','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                ?></div> 
                <div style="display: none"><?php
                echo $this->Form->input('Taux',array('type'=>'text','label'=>'Taux','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                   ?></div>
                
                </div>
                 
                <div class="col-md-6">
                <?php
                echo $this->Form->input('Salairebase',array('label'=>'Salaire de Base','readonly'=>'readonly','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
                echo $this->Form->input('Salaire',array('type'=>'text','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
		echo $this->Form->input('acompte',array('id'=>'PaieAcompteId','type'=>'text','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		echo $this->Form->input('Totalpaie',array('type'=>'text','readonly'=>'readonly','label'=>'Total Paie','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );
		echo $this->Form->input('Donne',array('label'=>'Montant Payer','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie' ) );
		echo $this->Form->input('Reste',array('type'=>'text','readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie') );

                echo $this->Form->input('Date',array('type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly') );
	?>
  </div>               
                                    <div class="form-group" id="aa" style="">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

