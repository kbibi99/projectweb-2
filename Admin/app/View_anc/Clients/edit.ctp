<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Clients/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Client'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Client',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

         
            <div class="col-md-6">                  
              	<?php
                echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
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
                echo $this->Form->input('id',array('name'=>'','id'=>'','champ'=>'id','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
		echo $this->Form->input('name',array('name'=>'','id'=>'','champ'=>'name','table'=>'Ligneclient','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
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
                                        
                                         <?php
                                      //   debug($this->request->data);
                       foreach ($this->request->data['Ligneclient'] as $key=>$Lclient){ 
                          // debug($Lclient); die;
                           
                        $id=$Lclient['id'];
                        $adresse=$Lclient['adresse'];
                        $name=$Lclient['name'];
                        $ville_id=$Lclient['ville_id'];
                        $pay_id=$Lclient['pay_id'];
                        $tel=$Lclient['tel'];
                        $fax=$Lclient['fax'];
                        $client_id=$Lclient['client_id'];
                            
                        
            ?>
                                        
                                        <tr><td  width="98%" style="padding-top: 15px;">
                                        

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('name'=>'data[Ligneclient]['.$key.'][id]','id'=>'id'.$key,'champ'=>'id','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'id','value'=>$id,'type'=>'hidden') );
                echo $this->Form->input('sup',array('name'=>'data[Ligneclient]['.$key.'][sup]','id'=>'sup'.$key,'champ'=>'sup','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'id','value'=>'','type'=>'hidden') );
		echo $this->Form->input('name',array('name'=>'data[Ligneclient]['.$key.'][name]','id'=>'name'.$key,'champ'=>'name','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom','value'=>$name) );
		echo $this->Form->input('tel',array('name'=>'data[Ligneclient]['.$key.'][tel]'  ,'id'=>'tel'.$key ,'champ'=>'tel','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$tel ) );
		echo $this->Form->input('fax',array('name'=>'data[Ligneclient]['.$key.'][fax]'  ,'id'=>'fax'.$key ,'champ'=>'fax','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$fax ) );
               //debug($ville);die;
		?></div><div class="col-md-6" ><?php
		echo $this->Form->input('adresse',array('name'=>'data[Ligneclient]['.$key.'][adresse]','id'=>'adresse'.$key ,'champ'=>'adresse','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$adresse ) );
             ?>
                     
                    <?php   echo $this->Form->input('pay_id',array('name'=>'data[Ligneclient]['.$key.'][pay_id]','empty'=>'veuillez choisir','id'=>'pay_id'.$key ,'champ'=>'pay_id','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$pay_id ) );
	echo $this->Form->input('ville_id',array('name'=>'data[Ligneclient]['.$key.'][ville_id]','empty'=>'veuillez choisir','id'=>'ville_id'.$key ,'champ'=>'ville_id','table'=>'Ligneclient','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$ville_id ) );
		?>
  </div>  
                                                </td>
                                                <td  width="2%"><i index="<?php echo $key; ?>" class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></i></td>
                                        </tr>
                                          <?php } ?>
                                    </table>
                                    <input type="hidden" id="index" value="<?php echo $key; ?>">
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

