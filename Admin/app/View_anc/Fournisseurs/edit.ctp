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
                <h3 class="panel-title"><?php echo __('Modidication Fournisseur'); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Fournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
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
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Contact','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','label'=>'Nom') );
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
 <?php
//                                         debug($this->request->data);
                       foreach ($this->request->data['Contact'] as $key=>$Lclient){ 
                           
                        $id=$Lclient['id'];
                        $adresse=$Lclient['adresse'];
                        $name=$Lclient['nom'];
                        $ville_id=$Lclient['ville_id'];
                        $pay_id=$Lclient['pay_id'];
                        $tel=$Lclient['tel'];
                        $fax=$Lclient['fax'];
                        $client_id=$Lclient['fournisseur_id'];
                            
                        
            ?>

                                    <tr><td  width="98%" style="padding-top: 15px;">


                                            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('name'=>'data[Contact]['.$key.'][id]','id'=>'id'.$key,'champ'=>'id','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'id','value'=>$id,'type'=>'hidden') );
                echo $this->Form->input('sup',array('name'=>'data[Contact]['.$key.'][sup]','id'=>'sup'.$key,'champ'=>'sup','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'id','value'=>'','type'=>'hidden') );
		echo $this->Form->input('nom',array('name'=>'data[Contact]['.$key.'][nom]','id'=>'name'.$key,'champ'=>'name','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'Nom','value'=>$name) );
		echo $this->Form->input('tel',array('name'=>'data[Contact]['.$key.'][tel]'  ,'id'=>'tel'.$key ,'champ'=>'tel','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$tel ) );
		echo $this->Form->input('fax',array('name'=>'data[Contact]['.$key.'][fax]'  ,'id'=>'fax'.$key ,'champ'=>'fax','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$fax ) );
               //debug($ville);die;
		?></div><div class="col-md-6" ><?php
		echo $this->Form->input('adresse',array('name'=>'data[Contact]['.$key.'][adresse]','id'=>'adresse'.$key ,'champ'=>'adresse','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$adresse ) );
             ?>

                    <?php   echo $this->Form->input('pay_id',array('name'=>'data[Contact]['.$key.'][pay_id]','empty'=>'veuillez choisir','id'=>'pay_id'.$key ,'champ'=>'pay_id','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$pay_id ) );
	echo $this->Form->input('ville_id',array('name'=>'data[Contact]['.$key.'][ville_id]','empty'=>'veuillez choisir','id'=>'ville_id'.$key ,'champ'=>'ville_id','table'=>'Contact','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$ville_id ) );
		?>
                                            </div>  
                                        </td>
                                        <td  width="2%"><i index="<?php echo $key; ?>" class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></i></td>
                                    </tr>
                                    <input type="hidden" id="index" value="<?php echo $key; ?>">
                                      <?php } ?>   
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


