<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Articles/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modidication Article'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Article',array('autocomplete' => 'off','type'=>'file','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh'));
        $this->request->data['Article']['date_Creation']=date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Article']['date_Creation'])));
        ?>

            <div class="col-md-6">                  
              	<?php
                echo $this->Form->input('code',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','readonly'=>'readonly') );
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		//echo $this->Form->input('name',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		
		echo $this->Form->input('reference',array('div'=>'form-group','label'=>'Référence','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );		
                echo $this->Form->input('prix',array('div'=>'form-group','type'=>'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('qtealert',array('div'=>'form-group','label'=>'Quantité alerte','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date_Creation',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Date création') );
              // debug($this->request->data); die;
                ?>
                
                <div class ='imagediv' style='position: relative;left: 50%'><img src="<?php echo $this->webroot; ?>files/reference/<?php echo $this->request->data['Article']['image']?>" class="file-preview-image"  >
                    </div>
                <?php
		echo $this->Form->input('image',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control imagereference','type'=>'file','multiple'=>"true",'id'=>"file-3",'value'=>'files/reference'.$this->request->data['Article']['image']) );
	?>
            </div><div class="col-md-6"><?php
           echo $this->Form->input('famille_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control article select','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('modele_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control article select','required data-bv-notempty-message'=>'Champ Obligatoire' ,'empty'=>'Veuillez choisir') );
		echo $this->Form->input('couleur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control article select','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('taille_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control article select','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('type_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control article select','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                
  ?></div>               
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

