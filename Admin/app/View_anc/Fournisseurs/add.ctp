<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Fournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Fournisseur'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Fournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('code',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('raison_social',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('code_postal',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('matricule_fiscal',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('famillefournisseur_id',array('div'=>'form-group','label'=>'Famille Fournisseur','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('tel',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fax',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('mail',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('tva',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>  
                                    
                                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading"> 
                                    <h3 class="panel-title"><?php echo __('Contact(s)'); ?></h3>  
                                    <a class="btn btn-danger" id="contact" style="
                                    float: right; 
                                    position: relative;
                                    top: -25px;
                                "> <i class="fa fa-plus-circle"></i>Ajouter ligne</a>
                            </div> 
                               
                                <div class="panel-body">
                                    <table border="1" style="border-color: #ddd !important;"  id="tabcontact" width="100%">
                                        <tr class="tr" style="display:none;"><td  width="98%" style="padding-top: 15px;">
                                        

            <div class="col-md-6">                  
              	<?php
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
		echo $this->Form->input('nom',array('name'=>'','id'=>'','champ'=>'nom','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'Nom') );
		echo $this->Form->input('tel',array('name'=>''  ,'id'=>'' ,'champ'=>'tel','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		echo $this->Form->input('fax',array('name'=>''  ,'id'=>'' ,'champ'=>'fax','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
               //debug($ville);die;
		?></div><div class="col-md-6" ><?php
		echo $this->Form->input('adresse',array('name'=>'','id'=>'' ,'champ'=>'adresse','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
             ?>
                     
                    <?php   echo $this->Form->input('pay_id',array('name'=>'','empty'=>'veuillez choisir','id'=>'' ,'champ'=>'pay_id','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniforme-select' ) );
	                    echo $this->Form->input('ville_id',array('name'=>'','empty'=>'veuillez choisir','id'=>'' ,'champ'=>'ville_id','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniforme-select' ) );
		?>
  </div>  
                                                </td>
                                                <td  width="2%"><i index="" class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></i></td>
                                        </tr>  
                                        
                                    </table>
                                    <input type="hidden" id="index" value="0">
</div>
                            </div>
                        </div>
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

