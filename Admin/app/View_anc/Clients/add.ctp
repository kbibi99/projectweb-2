<div class="row">
    <div class="col-md-12">
        <a class="btn btn-danger" href="<?php echo $this->webroot;?>Clients/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Client'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <!--<button id="confirmBootBox" class="btn ls-light-green-btn">Confirm</button>-->
        <?php echo $this->Form->create('Client',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('Code',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Raison_Social',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Code_Postal',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		echo $this->Form->input('Matricule_Fiscal',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
	 ?></div><div class="col-md-6"><?php
		echo $this->Form->input('Tel',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		echo $this->Form->input('Fax',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		echo $this->Form->input('Mail',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
	 	echo $this->Form->input('Resigtre_Commerce',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		echo $this->Form->input('timbre_id',array('div'=>'form-group','empty'=>'veuillez choisir','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ,'label'=>'TVA') );
	?>
  </div>        
      
                                    <br>                              
                                    
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
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
		echo $this->Form->input('name',array('name'=>'','id'=>'','champ'=>'name','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'Nom') );
		echo $this->Form->input('tel',array('name'=>''  ,'id'=>'' ,'champ'=>'tel','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		echo $this->Form->input('fax',array('name'=>''  ,'id'=>'' ,'champ'=>'fax','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
               //debug($ville);die;
		?></div><div class="col-md-6" ><?php
		echo $this->Form->input('adresse',array('name'=>'','id'=>'' ,'champ'=>'adresse','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
             ?>
                     
                    <?php   echo $this->Form->input('pay_id',array('name'=>'','empty'=>'veuillez choisir','id'=>'' ,'champ'=>'pay_id','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniforme-select' ) );
	                    echo $this->Form->input('ville_id',array('name'=>'','empty'=>'veuillez choisir','id'=>'' ,'champ'=>'ville_id','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniforme-select' ) );
		?>
  </div>  
                                                </td>
                                                <td  width="2%"><i index="" class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></i></td>
                                        </tr>  
                                        <tr>
                                            <td  width="98%" style="padding-top: 15px;">
                                        

            <div class="col-md-6">                  
              	<?php
                echo $this->Form->input('sup',array('name'=>'data[Ligneclient][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'Ligneclient','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
		echo $this->Form->input('name',array('name'=>'data[Ligneclient][0][name]','id'=>'name0','champ'=>'name','table'=>'Ligneclient','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'Nom') );
		echo $this->Form->input('tel',array('name'=>'data[Ligneclient][0][tel]'  ,'id'=>'tel0' ,'champ'=>'tel','table'=>'Ligneclient','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		echo $this->Form->input('fax',array('name'=>'data[Ligneclient][0][fax]'  ,'id'=>'fax0' ,'champ'=>'fax','table'=>'Ligneclient','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
               //debug($ville);die;
		?></div><div class="col-md-6" ><?php
		echo $this->Form->input('adresse',array('name'=>'data[Ligneclient][0][adresse]','id'=>'adresse0' ,'champ'=>'adresse','table'=>'Ligneclient','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
             ?>
                     
                    <?php   echo $this->Form->input('pay_id',array('name'=>'data[Ligneclient][0][pay_id]','empty'=>'veuillez choisir','id'=>'pay_id0' ,'champ'=>'pay_id','table'=>'Ligneclient','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
	echo $this->Form->input('ville_id',array('name'=>'data[Ligneclient][0][ville_id]','empty'=>'veuillez choisir','id'=>'ville_id0' ,'champ'=>'ville_id','table'=>'Ligneclient','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) );
		?>
  </div>  
                                                </td>
                                                <td  width="2%"><i index="0"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></i></td>
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

