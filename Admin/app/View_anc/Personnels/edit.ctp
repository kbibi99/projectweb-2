<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Personnels/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Personnel'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Personnel',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
                                    
                                    if(!empty($this->request->data['Personnel']['Date_Rec'])){
                                    $Date_Rec = date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Personnel']['Date_Rec'])));
                                    }
                                    //debug($this->request->data['Personnel']['Date_Sor']);die;
                                    if(!empty($this->request->data['Personnel']['Date_Sor'])){
                                    $Date_Sor = date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Personnel']['Date_Sor'])));
                                    }
                                    if(!empty($this->request->data['Personnel']['Date_Nais'])){
                                    $Date_Nais = date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Personnel']['Date_Nais'])));
                                    }

               ?>
            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Nom',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Prenom',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		?>
                <div style="display: none">
                    <?php  
                echo $this->Form->input('name',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		?></div>
                <?php
                echo $this->Form->input('Cin',array('label'=>'Matricule','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Code',array('type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Sexe',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Date_Rec',array('value'=>@$Date_Rec,'label'=>'Date Recrutement','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire') ); 
                echo $this->Form->input('Date_Sor',array('value'=>@$Date_Sor,'label'=>'Date Sortie','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ') );
                echo $this->Form->input('Date_Nais',array('value'=>@$Date_Nais,'label'=>'Date de Naissance','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div> <div class="col-md-6"><?php
		echo $this->Form->input('Type',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		?>
            <div style="<?php if($this->request->data['Personnel']['Type']=='ouvrier') {?>display: none;<?php } ?>" id="prixj">
                    <?php 
                echo $this->Form->input('Prixjour',array('label'=>'Prix Jour','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                ?>
            </div>
            <div style="<?php if($this->request->data['Personnel']['Type']=='cadre') {?>display: none;<?php } ?>" id="prixh">
                <?php
                echo $this->Form->input('Prixheur',array('label'=>'Prix Heure','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                ?>
            </div>
             
                <?php
                echo $this->Form->input('Salairebase',array('label'=>'Salaire de Base','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculpaie','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Tauxdimanche',array('label'=>'Taux Dimanche','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Cnss',array('label'=>'N° CNSS','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Adr',array('label'=>'Adresse','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Etat',array('label'=>'Etat Civil','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Gsm',array('label'=>'N° GSM','type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
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

